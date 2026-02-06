<?php
// Calculator project starter file

// Functions for operations will be added here
function add($a, $b)
{
    return $a + $b;
}
function subtract($a, $b)
{
    return $a - $b;
}
function multiply($a, $b)
{
    return $a * $b;
}
function divide($a, $b)
{
    if ($b == 0) {
        return "Error: Division by zero";
    }
    return $a / $b;
}

// User input and operation selection will be handled here
$num1 = "10";
$num2 = "10";
$operation = "+";
$result = match ($operation) {
    "+" => add($num1, $num2),
    "-" => subtract($num1, $num2),
    "*" => multiply($num1, $num2),
    "/" => divide($num1, $num2),
    default => "Unknown operation",
};
echo "Result: $result" . PHP_EOL;
