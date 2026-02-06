<?php
// 1. Function declaration
function greet($name)
{
    echo "Hello, $name!" . PHP_EOL;
}
greet("Alice"); // Output: Hello, Alice!

// 2. Parameters by value (default)
function add($a, $b)
{
    return $a + $b;
}
echo add(2, 3) . PHP_EOL; // Output: 5

// 3. Parameters by reference
function increment(&$num)
{
    $num++;
}
$value = 10;
increment($value);
echo $value . PHP_EOL; // Output: 11

// 4. Default values
function power($base, $exp = 2)
{
    return $base ** $exp;
}
echo power(3) . PHP_EOL; // Output: 9

echo power(3, 3) . PHP_EOL; // Output: 27

// 5. Return values
function getGreeting($name)
{
    return "Hi, $name!";
}
$message = getGreeting("Bob");
echo $message . PHP_EOL; // Output: Hi, Bob!

// 6. Named arguments (PHP 8+)
function displayInfo($name, $age, $city)
{
    echo "$name, $age, $city" . PHP_EOL;
}
displayInfo(age: 25, name: "John", city: "London"); // Output: John, 25, London

// 7. Arrow functions (PHP 7.4+)
$square = fn($x) => $x * $x;
echo $square(4) . PHP_EOL; // Output: 16

// practice exercise
// 1. Function declaration:
function printHello()
{
    echo "Hello, world!" . PHP_EOL;
}
printHello(); // Output: Hello, world!
// 2. Parameters by value:
function multiply($a, $b)
{
    return $a * $b;
}
echo multiply(2, 2) . PHP_EOL; // Output: 4
// 3. Parameters by reference:
function makeNegative(&$num)
{
    $num = -abs($num);
}
$valueNum3 = 10;
makeNegative($valueNum3);
echo $valueNum3 . PHP_EOL; // Output: -10

// 4. Default values:
function greetUser($name, $greeting = "Hello")
{
    echo "$greeting, $name" . PHP_EOL;
}
greetUser("Alex"); // Output: Hello, Alex
greetUser("Alex", "Hi"); // Output: Hi, Alex
// 5. Return values:
function isEven($num)
{
    if ($num % 2 === 0) {
        return true;
    } else {
        return false;
    }
}
echo isEven(2) . PHP_EOL; // Output: true
// 6. Named arguments:
function userProfile($name, $age, $country)
{
    echo "$name, $age, $country" . PHP_EOL;
}
userProfile(country: "UK", age: 37, name: "Alex"); // Output: Alex 37 UK
// 7. Arrow functions:
$triple = fn($num) => $num * 3;
echo $triple(2) . PHP_EOL; // Output: 6
