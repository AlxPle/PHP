<?php
// Demo: PHP sessions lifecycle in one page.

// Detect whether current request is HTTPS.
// This is used to set the secure cookie flag correctly.
$isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || (($_SERVER['SERVER_PORT'] ?? '') === '443');

// Configure how the session cookie should behave.
// - lifetime 0: cookie lives until browser is closed
// - httponly: blocks JavaScript access to cookie
// - samesite Lax: basic CSRF protection for top-level navigation
// - secure: cookie sent only over HTTPS (when available)
session_set_cookie_params([
    'lifetime' => 0,
    'path' => '/',
    'domain' => '',
    'secure' => $isHttps,
    'httponly' => true,
    'samesite' => 'Lax',
]);

// Start or resume the current session.
// Must be called before any HTML output.
session_start();

// Small helper for safe HTML output (XSS protection).
function escapeHtml(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

// Message shown after each action.
$flashMessage = '';

// Determine which action button was pressed in the form.
$action = $_POST['action'] ?? '';

// Action: Save demo values in session.
if ($action === 'set_demo') {
    // Read username from form and normalize whitespace.
    $username = trim($_POST['username'] ?? '');

    // Fallback value when input is empty.
    if ($username === '') {
        $username = 'Guest';
    }

    // Store several values in session.
    $_SESSION['username'] = $username;
    $_SESSION['login_time'] = date('Y-m-d H:i:s');
    $_SESSION['counter'] = ($_SESSION['counter'] ?? 0) + 1;
    $flashMessage = 'Session data has been saved.';
}

// Action: Increment a simple session-based counter.
if ($action === 'increment') {
    $_SESSION['counter'] = ($_SESSION['counter'] ?? 0) + 1;
    $flashMessage = 'Counter has been incremented.';
}

// Action: Regenerate session ID (important security operation).
// Typically used after login to prevent session fixation attacks.
if ($action === 'regenerate') {
    session_regenerate_id(true);
    $flashMessage = 'Session ID has been regenerated.';
}

// Action: Clear all stored session data, but keep current session alive.
if ($action === 'clear') {
    $_SESSION = [];
    $flashMessage = 'Session data has been cleared, but session is still active.';
}

// Action: Fully destroy session and remove session cookie.
if ($action === 'destroy') {
    // Clear server-side session data.
    $_SESSION = [];

    // Delete session cookie on client side if cookie-based sessions are enabled.
    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params['path'],
            $params['domain'],
            $params['secure'],
            $params['httponly']
        );
    }

    // Destroy current session storage.
    session_destroy();

    // Start a fresh empty session so the page can still display session info.
    session_start();
    $flashMessage = 'Session has been destroyed and restarted for this demo page.';
}

// Prepare debug values for display.
$sessionDump = print_r($_SESSION, true);
$sessionCookieName = session_name();
$sessionCookieValue = $_COOKIE[$sessionCookieName] ?? 'Cookie not found yet';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions Demo</title>
</head>

<body>
    <h1>Sessions Demo</h1>

    <p>
        HTTP is stateless. Sessions let us keep user data between requests.
    </p>

    <?php if ($flashMessage !== ''): ?>
        <p style="color: green;"><?php echo escapeHtml($flashMessage); ?></p>
    <?php endif; ?>

    <h2>Current Session Info</h2>
    <ul>
        <li><strong>Session Name:</strong> <?php echo escapeHtml($sessionCookieName); ?></li>
        <li><strong>Session ID:</strong> <?php echo escapeHtml(session_id()); ?></li>
        <li><strong>Session Cookie Value:</strong> <?php echo escapeHtml($sessionCookieValue); ?></li>
    </ul>

    <h2>Actions</h2>
    <!-- This form stores username and initializes demo session values. -->
    <form method="post" action="">
        <input type="hidden" name="action" value="set_demo">
        <label for="username">Username for session:</label>
        <input id="username" type="text" name="username" placeholder="e.g. Alex">
        <button type="submit">Save session data</button>
    </form>

    <br>

    <!-- This button increments the session counter only. -->
    <form method="post" action="" style="display: inline;">
        <input type="hidden" name="action" value="increment">
        <button type="submit">Increment counter</button>
    </form>

    <!-- This button regenerates the session ID for security demo. -->
    <form method="post" action="" style="display: inline; margin-left: 8px;">
        <input type="hidden" name="action" value="regenerate">
        <button type="submit">Regenerate session ID</button>
    </form>

    <!-- This button clears session values but does not destroy the session itself. -->
    <form method="post" action="" style="display: inline; margin-left: 8px;">
        <input type="hidden" name="action" value="clear">
        <button type="submit">Clear session data</button>
    </form>

    <!-- This button destroys session and removes session cookie. -->
    <form method="post" action="" style="display: inline; margin-left: 8px;">
        <input type="hidden" name="action" value="destroy">
        <button type="submit">Destroy session</button>
    </form>

    <h2>$_SESSION Dump</h2>
    <pre><?php echo escapeHtml($sessionDump); ?></pre>
</body>

</html>