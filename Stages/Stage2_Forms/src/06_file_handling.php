<?php
// Example: Working with files in PHP (TXT + JSON)

function escapeHtml(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

$dataDir = __DIR__ . '/data';
$textFile = $dataDir . '/notes.txt';
$jsonFile = $dataDir . '/feedbacks.json';

$messages = [];

if (!is_dir($dataDir)) {
    if (mkdir($dataDir, 0775, true)) {
        $messages[] = 'Created data directory: ' . $dataDir;
    } else {
        $messages[] = 'Could not create data directory.';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $note = trim($_POST['note'] ?? '');
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($note !== '') {
        // 1) Write data to a text file (overwrite)
        $writeResult = file_put_contents($textFile, $note . PHP_EOL);
        if ($writeResult !== false) {
            $messages[] = 'TXT write: done (overwrite mode).';
        } else {
            $messages[] = 'TXT write: failed.';
        }

        // 2) Append data to a text file
        $appendLine = 'Appended at ' . date('Y-m-d H:i:s') . ' => ' . $note . PHP_EOL;
        $appendResult = file_put_contents($textFile, $appendLine, FILE_APPEND);
        if ($appendResult !== false) {
            $messages[] = 'TXT append: done (FILE_APPEND).';
        } else {
            $messages[] = 'TXT append: failed.';
        }
    }

    if ($name !== '' && $email !== '' && $message !== '') {
        $entry = [
            'name' => $name,
            'email' => $email,
            'message' => $message,
            'created_at' => date('c'),
        ];

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

        $items[] = $entry;
        $jsonResult = file_put_contents(
            $jsonFile,
            json_encode($items, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
        );

        if ($jsonResult !== false) {
            $messages[] = 'JSON write: done.';
        } else {
            $messages[] = 'JSON write: failed.';
        }
    }
}

// 3) Read data from text file
$textContent = '';
if (is_file($textFile)) {
    $content = file_get_contents($textFile);
    if ($content !== false) {
        $textContent = $content;
    }
}

// 4) Read data from JSON file
$jsonItems = [];
if (is_file($jsonFile)) {
    $jsonContent = file_get_contents($jsonFile);
    if ($jsonContent !== false && $jsonContent !== '') {
        $decoded = json_decode($jsonContent, true);
        if (is_array($decoded)) {
            $jsonItems = $decoded;
        }
    }
}
?>

<h2>File Handling (TXT + JSON)</h2>

<form method="post" action="">
    <h3>TXT demo</h3>
    <label for="note">Note:</label>
    <input id="note" type="text" name="note" placeholder="Write a note for TXT file">

    <h3>JSON demo</h3>
    <label for="name">Name:</label>
    <input id="name" type="text" name="name">
    <br><br>

    <label for="email">Email:</label>
    <input id="email" type="email" name="email">
    <br><br>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="3" cols="40"></textarea>
    <br><br>

    <button type="submit">Run file operations</button>
</form>

<?php if (!empty($messages)): ?>
    <h3>Operation results</h3>
    <ul>
        <?php foreach ($messages as $statusMessage): ?>
            <li><?php echo escapeHtml($statusMessage); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<h3>TXT file content (`data/notes.txt`)</h3>
<pre><?php echo escapeHtml($textContent); ?></pre>

<h3>JSON file content (`data/feedbacks.json`)</h3>
<?php if (empty($jsonItems)): ?>
    <p>No JSON entries yet.</p>
<?php else: ?>
    <ul>
        <?php foreach ($jsonItems as $item): ?>
            <li>
                <strong><?php echo escapeHtml((string)($item['name'] ?? '')); ?></strong>
                (<?php echo escapeHtml((string)($item['email'] ?? '')); ?>)
                — <?php echo escapeHtml((string)($item['message'] ?? '')); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>