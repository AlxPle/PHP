<?php
session_start();

$successMessage = $_SESSION['success_message'] ?? '';
unset($_SESSION['success_message']); // Clear the success message from the session after retrieving it.

function escapeHtml(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Success Page</title>
</head>

<body>
    <h1>Thank you for your feedback!</h1>
    <?php if ($successMessage !== ''): ?>
        <p style="color: green;"><?php echo escapeHtml($successMessage); ?></p>
    <?php endif; ?>
    <a href="index.php">Send another feedback</a>
    <br>
    <a href="list.php">View all feedbacks</a>

</body>

</html>