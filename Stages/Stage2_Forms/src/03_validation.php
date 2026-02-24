<?php
// Example: Validation only (no sanitization)
// This script checks that the name is not empty and the email is valid.
$name = '';
$email = '';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get raw input (no sanitization)
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';

    // Validate name (required)
    if (empty($name)) {
        $errors[] = 'Name is required.';
    }

    // Validate email (must be valid email format)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Valid email is required.';
    }

    if (empty($errors)) {
        echo 'Success! Data is valid.';
    }
}
?>

<form method="post">
    Name: <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"><br>
    Email: <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"><br>
    <button type="submit">Submit</button>
</form>

<?php
if ($errors) {
    echo '<ul>';
    foreach ($errors as $error) {
        echo '<li>' . htmlspecialchars($error) . '</li>';
    }
    echo '</ul>';
}
?>