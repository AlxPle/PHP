<?php

function escapeHtml(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

// File paths
$feedbackFile = __DIR__ . '/data/feedbacks.json';

// Read data from JSON file
$jsonItems = [];
if (is_file($feedbackFile)) {
    $jsonContent = file_get_contents($feedbackFile);
    if ($jsonContent !== false && $jsonContent !== '') {
        $decoded = json_decode($jsonContent, true);
        if (is_array($decoded)) {
            $jsonItems = $decoded;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback List</title>
</head>

<body>
    <h2>Feedbacks from JSON File</h2>
    <?php if (empty($jsonItems)): ?>
        <p>No JSON entries yet</p>
    <?php else: ?>
        <ul>
            <?php foreach ($jsonItems as $item): ?>
                <li>
                    <?php echo escapeHtml((string)($item['name'] ?? '')); ?>
                    <?php echo escapeHtml((string)($item['email'] ?? '')); ?>
                    <?php echo escapeHtml((string)($item['message'] ?? '')); ?>
                    <?php echo escapeHtml((string)($item['created_at'] ?? '')); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <a href="index.php">Back to form</a>
</body>

</html>