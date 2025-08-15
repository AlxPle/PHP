<?php

session_start();

if (isset($_SESSION['username'])) {
    echo '<h1> Welcome' . "\n" . $_SESSION['username']  . '</h1>';
    echo '<a href="/php/playlist/traversymedia/extras/logout.php">Logout</a>';
} else {
    echo '<h1>Welcome Guest</h1>';
    echo '<a href="/php/playlist/traversyMedia/13_sessions.php">Home</a>';
}
