<?php
// Example: Modern sanitization of form data
$name = '';
$email = '';
$sanitized = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input (modern way)
    $name = strip_tags($_POST['name'] ?? ''); // Remove HTML tags
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL); // Sanitize email

    $sanitized['name'] = $name;
    $sanitized['email'] = $email;

    echo 'Sanitized data:<br>';
    echo 'Name: ' . htmlspecialchars($sanitized['name']) . '<br>';
    echo 'Email: ' . htmlspecialchars($sanitized['email']) . '<br>';
}
?>

<form method="post">
    Name: <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"><br>
    Email: <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"><br>
    <button type="submit">Submit</button>
</form>