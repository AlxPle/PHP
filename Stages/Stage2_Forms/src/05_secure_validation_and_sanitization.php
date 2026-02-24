<?php
session_start();

// Basic security headers (useful in learning and production)
header('Content-Type: text/html; charset=UTF-8');
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: DENY");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("Content-Security-Policy: default-src 'self'; script-src 'self'; object-src 'none'; base-uri 'self'; frame-ancestors 'none'; form-action 'self';");

// Escape helper for safe HTML output
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

$formData = [
    'name' => '',
    'email' => '',
    'message' => '',
];

$errors = [];
$successMessage = '';

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $submittedToken = $_POST['csrf_token'] ?? '';

    if (!hash_equals($_SESSION['csrf_token'], $submittedToken)) {
        $errors[] = 'Invalid form token. Please refresh and try again.';
    }

    // Input normalization (not output sanitization)
    $formData['name'] = trim((string)($_POST['name'] ?? ''));
    $formData['email'] = trim((string)($_POST['email'] ?? ''));
    $formData['message'] = trim((string)($_POST['message'] ?? ''));

    // Name validation
    if ($formData['name'] === '') {
        $errors[] = 'Name is required.';
    } elseif (mb_strlen($formData['name']) < 2 || mb_strlen($formData['name']) > 100) {
        $errors[] = 'Name must be between 2 and 100 characters.';
    }

    // Email validation
    if ($formData['email'] === '') {
        $errors[] = 'Email is required.';
    } elseif (!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address.';
    } elseif (strlen($formData['email']) > 254) {
        $errors[] = 'Email is too long.';
    }

    // Message validation
    if ($formData['message'] === '') {
        $errors[] = 'Message is required.';
    } elseif (mb_strlen($formData['message']) < 10 || mb_strlen($formData['message']) > 1000) {
        $errors[] = 'Message must be between 10 and 1000 characters.';
    }

    if (empty($errors)) {
        $successMessage = 'Success! Data is valid.';

        // Optional: clear form after success
        $formData = ['name' => '', 'email' => '', 'message' => ''];

        // Rotate CSRF token after successful submit
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Secure Form Example</title>
</head>

<body>
    <h1>Secure Form (Validation + XSS-safe Output)</h1>

    <?php if (!empty($successMessage)): ?>
        <p style="color: green;"><?php echo e($successMessage); ?></p>
    <?php endif; ?>

    <?php if (!empty($errors)): ?>
        <ul style="color: red;">
            <?php foreach ($errors as $error): ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post" action="">
        <input type="hidden" name="csrf_token" value="<?php echo e($_SESSION['csrf_token']); ?>">

        <label>
            Name:
            <input type="text" name="name" value="<?php echo e($formData['name']); ?>" maxlength="100">
        </label>
        <br><br>

        <label>
            Email:
            <input type="email" name="email" value="<?php echo e($formData['email']); ?>" maxlength="254">
        </label>
        <br><br>

        <label>
            Message:
            <textarea name="message" rows="5" cols="40"><?php echo e($formData['message']); ?></textarea>
        </label>
        <br><br>

        <button type="submit">Send</button>
    </form>
</body>

</html>