<?php
// 1. Named arguments (PHP 8.0+)
function showUser($name, $age, $city)
{
    echo "$name, $age, $city" . PHP_EOL;
}
showUser(age: 30, name: "Anna", city: "Berlin"); // Output: Anna, 30, Berlin

// 2. Arrow functions (PHP 7.4+)
$add = fn($a, $b) => $a + $b;
echo $add(2, 5) . PHP_EOL; // Output: 7

// 3. Union types (PHP 8.0+)
function printValue(int|string $value)
{
    echo $value . PHP_EOL;
}
printValue(42); // Output: 42
printValue("hello"); // Output: hello

// 4. Match expression (PHP 8.0+)
$status = 404;
$message = match ($status) {
    200 => "OK",
    404 => "Not Found",
    500 => "Server Error",
    default => "Unknown"
};
echo $message . PHP_EOL; // Output: Not Found

// 5. Enums (PHP 8.1+)
// Uncomment if using PHP 8.1+

enum Status: string
{
    case Active = 'active';
    case Inactive = 'inactive';
    case Pending = 'pending';
}
$state = Status::Active;
echo $state->value . PHP_EOL; // Output: active


// 6. Readonly properties (PHP 8.1+)
// Uncomment if using PHP 8.1+

class User
{
    public readonly string $username;
    public function __construct(string $username)
    {
        $this->username = $username;
    }
}
$user = new User("Max");
echo $user->username . PHP_EOL; // Output: Max


// 7. Constructor property promotion (PHP 8.0+)
class Point
{
    public function __construct(
        public int $x,
        public int $y
    ) {}
}
$p = new Point(3, 7);
echo $p->x . ", " . $p->y . PHP_EOL; // Output: 3, 7
