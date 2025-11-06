<?php

/* ---------- File Handling --------- */

/* 
    File handling is the ability to read and write files on the server.
    PHP has built in functions for reading and writing files.
*/

$file = 'extras/users.txt';
// Check if file exists
if (file_exists($file)) {
    // Read the file
    $handle = fopen($file, 'r'); // Open the file for reading
    $contents = fread($handle, filesize($file)); // Read the file contents
    fclose($handle); // Close the file handle
    echo $contents;
    // echo '<br>';
    // $contents = file_get_contents($file);
    // echo readfile($file); // Another way to read the file by bites
} else {
    $handle = fopen($file, 'w'); // Open the file for writing
    $contents = 'Alex' . PHP_EOL . 'John' . PHP_EOL . 'Jane'; // Create some content
    fwrite($handle, $contents); // Write the content to the file
    fclose($handle); // Close the file handle
    echo 'File created and content written';
    // echo 'File does not exist';
}
