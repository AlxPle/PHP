<?php
// Variable declaration
$name = "Alice";         // string
$age = 30;               // int
$height = 1.75;          // float
$isStudent = false;      // bool
$fruits = ["apple", "banana", "cherry"]; // array
$nothing = null;         // null

//string 
echo $name . PHP_EOL;      // Output: Alice

// Type juggling (automatic type conversion)
$sum = "5" + 10;         // $sum = 15 (string "5" is converted to int)
// PHP_EOL is a special constant for end-of-line character (cross-platform)
echo $sum . PHP_EOL;     // Output: 15

// Type declarations (parameter and return types)
function multiply(int $a, float $b): float {
    return $a * $b;
}
echo multiply(3, 2.5) . PHP_EOL;   // Output: 7.5

// Union types (PHP 8.0+)
function showValue(int|string $value): void {
    echo $value . PHP_EOL;
}
showValue(42);           // Output: 42
showValue("hello");      // Output: hello

// Nullable types
function getNickname(): ?string {
    return null;         // or return "Al";
}

var_dump(getNickname()); // Output: NULL

function getUserName(string $value): string {
    echo $value . PHP_EOL;
    return $value;
}

function getUserNameVoid(string $value): void {
    echo $value . PHP_EOL;
}

getUserName("John");       // Output: John
getUserNameVoid("Doe");    // Output: Doe