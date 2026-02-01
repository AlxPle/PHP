<?php
// Arithmetic operators
$a = 10;
$b = 3;
echo $a + $b . PHP_EOL;   // Addition: 13
echo $a - $b . PHP_EOL;   // Subtraction: 7
echo $a * $b . PHP_EOL;   // Multiplication: 30
echo $a / $b . PHP_EOL;   // Division: 3.333...
echo $a % $b . PHP_EOL;   // Modulo: 1
echo $a ** $b . PHP_EOL;  // Exponentiation: 1000

// Comparison operators
echo ($a == "10" ? "true" : "false") . PHP_EOL;   // true (loose comparison)
echo ($a === "10" ? "true" : "false") . PHP_EOL;  // false (strict comparison)
echo ($a != $b ? "true" : "false") . PHP_EOL;     // true
echo ($a !== "10" ? "true" : "false") . PHP_EOL;  // true
echo ($a < $b ? "true" : "false") . PHP_EOL;      // false
echo ($a > $b ? "true" : "false") . PHP_EOL;      // true
echo ($a <= 10 ? "true" : "false") . PHP_EOL;     // true
echo ($a >= 5 ? "true" : "false") . PHP_EOL;      // true

// Logical operators
$x = true;
$y = false;
echo ($x && $y ? "true" : "false") . PHP_EOL;     // false
echo ($x || $y ? "true" : "false") . PHP_EOL;     // true
echo (!$x ? "true" : "false") . PHP_EOL;          // false

// Null coalescing
$name = null;
echo ($name ?? "Guest") . PHP_EOL;                // Output: Guest

// Null coalescing assignment
$user = null;
$user ??= "Anonymous";
echo $user . PHP_EOL;                             // Output: Anonymous

// Spaceship operator (PHP 7+)
echo (1 <=> 1) . PHP_EOL;   // 0 (equal)
echo (1 <=> 2) . PHP_EOL;   // -1 (less)
echo (2 <=> 1) . PHP_EOL;   // 1 (greater)