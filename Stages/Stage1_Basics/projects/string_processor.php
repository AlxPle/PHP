<?php
// String processor mini-project

// 1. Function to count words in a string
function countWords(string $text): int
{
    // Implementation will be added
    return str_word_count($text);
}

// 2. Function to reverse a string
function reverseString(string $text): string
{
    // Implementation will be added
    return strrev($text);
}

// 3. Function to search and replace a word
function searchAndReplace(string $text, string $search, string $replace): string
{
    // Implementation will be added
    return str_replace($search, $replace, $text);
}

// User input and processing will be handled here
// Example usage and output will be added
$text = "Hello world, from Alex!";
echo $text . PHP_EOL;
echo countWords($text) . PHP_EOL;
echo reverseString($text) . PHP_EOL;
echo searchAndReplace($text, "world", "PHP") . PHP_EOL;
