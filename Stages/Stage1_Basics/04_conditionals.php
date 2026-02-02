<?php
// 1. if / else / elseif
$score = 72;
if ($score >= 90) {
    echo "Excellent!" . PHP_EOL;
} elseif ($score >= 75) {
    echo "Good!" . PHP_EOL;
} else {
    echo "Try again!" . PHP_EOL;
}
// Output: Try again!


// 2. Ternary operator
$isAdmin = false;
echo ($isAdmin ? "Access granted" : "Access denied") . PHP_EOL;
// Output: Access denied
// Nested ternary
$score = 76;
echo ($score >= 90 ? "Excellent!" : ($score >= 75 ? "Good!" : "Try again!")) . PHP_EOL;
// Output: Good!

// 3. switch / case
$day = "Friday";
switch ($day) {
    case "Monday":
        echo "Start of the week" . PHP_EOL;
        break;
    case "Friday":
        echo "Weekend soon!" . PHP_EOL;
        break;
    default:
        echo "Regular day" . PHP_EOL;
}
// Output: Weekend soon!

// 4. match (PHP 8+)
$status = 500;
$message = match($status) {
    200 => "OK",
    404 => "Not Found",
    500 => "Server Error",
    default => "Unknown"
};
echo $message . PHP_EOL;
$day = "Wednesday";
$weekday = match($day) {
    "Monday" => "Start of the week",
    "Friday" => "Weekend soon!",
    default => "Regular day"
};
echo $weekday . PHP_EOL;
// Output: Server Error



// practice exercise
//1. if / else / elseif
$age = 10;
if ($age < 13) {
    echo "Child" . PHP_EOL;
} elseif ($age >=13 && $age <= 17){
    echo "Teenager" . PHP_EOL;
} elseif ($age >= 18) {
    echo "Adult" . PHP_EOL;
}
//2. Тернарный оператор
$isLoggedIn = true;
echo ($isLoggedIn ? "Welcome!" : "Please log in");

//3. switch / case
$color = "red";
switch ($color) {
    case "red":
        echo "Stop" . PHP_EOL;
        break;
    case "green": 
        echo "Go" . PHP_EOL;
        break;
    case "blue":
        echo "Calm" . PHP_EOL;
        break;
    default: 
        echo "Unknown color" . PHP_EOL;
};

//4. match (PHP 8+)
$httpCode = 301;
$httpAnswear = match($httpCode) {
    200 => "Success",
    301 => "Redirect",
    404 => "Not Found",
    500 => "Server Error",
    default => "Unknown code"
};
echo $httpAnswear . PHP_EOL;
//5. Вложенный тернарный оператор
$temp = 22;
echo ($temp < 10 ? "Cold" : (($temp >= 10 && $temp <=25) ? "Warm" : "Hot"));