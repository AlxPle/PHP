<?php
/* ---------- String Functions -------- */

/*
    Functions to work with strings
    https://www.php.net/manual/en/ref.strings.php
*/

$string = 'Hello World';

// Get the length of a string
echo strlen($string) . "\n";

// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'o') . "\n";

// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o') . "\n";

// Reverse a string
echo strrev($string) . "\n";

// Convert all characters to lowercase
echo strtolower($string) . "\n";

// Convert all characters to uppercase
echo strtoupper($string) . "\n";

// Uppercase the first character of each word
echo ucwords($string) . "\n";

// String replace
echo str_replace('World', 'Everyone', $string) . "\n";

// Return portion of a string specified by the offset and length
echo substr($string, 0, 5) . "\n";
echo substr($string, 5) . "\n";

// Starts with
if (str_starts_with($string, 'Hello')) {
    echo 'YES' . "\n";
}

// Ends with
if (str_ends_with($string, 'ld')) {
    echo 'YES' . "\n";
}

// HTML Entities
$string2 = '<h1>' . 'Hello World' . '</h1>' . "\n";
echo htmlentities($string2) . "\n";

// Formatted Strings - useful when you have outside data
// Different specifiers for different data types
printf('%s is a %s', 'Brad', 'nice guy') . "\n";
printf('1 + 1 = %f', 1 + 1) . "\n"; // float