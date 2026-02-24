<?php
// This is a simple script to process form data submitted from index.php.
session_start();

// escapeHtml is a helper function to safely output data in HTML context to prevent XSS attacks.
function escapeHtml(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

// Initialize variables for error messages, success message, and file paths.
$errors = [];
$dataDir = __DIR__ . '/data';
$jsonFile = $dataDir . '/feedbacks.json';
$messages = [];

// Redirect to form page if accessed directly without POST data.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// trim() is used to remove extra whitespace from the beginning and end of the input.
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

// Name validation: check if name is not empty.
if ($name === '') {
    $errors[] = 'Name is required';
}

// Email validation: check if email is not empty and is a valid email format.
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'A valid email is required';
}

// Message validation: check if message is not empty.
if ($message === '') {
    $errors[] = 'Message is required';
}

// If there are no validation errors, proceed to save the feedback.
if (empty($errors)) {

    // Check if the data directory exists, if not, create it.
    if (!is_dir($dataDir)) {
        if (mkdir($dataDir, 0755, true)) {
            $messages[] = 'Created data directory' . $dataDir;
        } else {
            $messages[] = 'Could not create data directory';
        }
    }

    // Prepare the feedback entry to be saved in JSON format.
    $entry = [
        'name' => $name,
        'email' => $email,
        'message' => $message,
        'created_at' => date('c'),
    ];

    // Read existing feedbacks from the JSON file if it exists, and decode it into an array.
    $items = [];
    if (is_file($jsonFile)) {
        $existingJson = file_get_contents($jsonFile);
        if ($existingJson !== false && $existingJson !== '') {
            $decoded = json_decode($existingJson, true);
            if (is_array($decoded)) {
                $items = $decoded;
            }
        }
    }

    // Append the new feedback entry to the existing array of feedbacks and save it back to the JSON file.
    $items[] = $entry;
    $jsonResult = file_put_contents(
        $jsonFile,
        json_encode($items, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
    );

    // Check if the JSON file was written successfully.
    if ($jsonResult !== false) {
        $_SESSION['success_message'] = 'Form submitted successfully.';
        header('Location: thank_you.php');
        exit;
    } else {
        $errors[] = 'JSON write: failed.';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
</head>

<body>
    <h1>Secure Form (Validation + XSS-safe Output)</h1>

    <?php if (!empty($errors)): ?>
        <ul style="color: red;">
            <?php foreach ($errors as $error): ?>
                <li><?php echo escapeHtml($error); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <a href="index.php">Back to form</a>
</body>

</html>