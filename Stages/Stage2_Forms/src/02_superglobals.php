<?php
// Print server information
echo '<h3>Server Info</h3>';
echo '<pre>';
print_r($_SERVER); // Shows all server/request info
echo '</pre>';

// Print combined request data
echo '<h3>Request Data</h3>';
echo '<pre>';
print_r($_REQUEST); // Shows GET, POST, and COOKIE data
echo '</pre>';

// Print specific server variables
echo '<h3>Specific Server Variables</h3>';
echo '<pre>';
echo 'Request method: ' . $_SERVER['REQUEST_METHOD'] . '<br>';
echo 'Request URI: ' . $_SERVER['REQUEST_URI'] . '<br>';
echo 'User agent: ' . $_SERVER['HTTP_USER_AGENT'] . '<br>';
echo 'Client IP: ' . $_SERVER['REMOTE_ADDR'] . '<br>';
echo 'Script filename: ' . $_SERVER['SCRIPT_FILENAME'] . '<br>';
echo '</pre>';

// Example of using $_REQUEST to get a parameter from either GET or POST
echo '<h3>$_REQUEST Example</h3>';
if (isset($_REQUEST['name'])) {
    echo 'Hello, ' . htmlspecialchars($_REQUEST['name']) . '!';
} else {
    echo 'No name provided in GET, POST, or COOKIE.';
}
?>




<!-- <pre> tag is used to preserve formatting of the output, 
making it easier to read arrays and objects printed by print_r. -->
<figure role="img" aria-labelledby="cow-caption">
    <pre>
  ____________________________
<  Я эксперт в своей области.  >
  ----------------------------
         \   ^__^
          \  (oo)\_______
             (__)\       )\/\
                 ||----w |
                 ||     ||
  </pre>
    <figcaption id="cow-caption">
        Корова говорит: «Я эксперт в своей области». Корова проиллюстрирована с
        использованием предварительно отформатированных текстовых символов.
    </figcaption>
</figure>