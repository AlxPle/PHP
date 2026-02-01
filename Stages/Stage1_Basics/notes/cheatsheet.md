# PHP Basics Cheatsheet

## PHP Tags
```php
<?php
// PHP code here
?>
```

---

## Comments
```php
// Single-line comment
# Alternative single-line comment
/* Multi-line
   comment */
/** Doc comment for documentation */
```

---

## Output
```php
echo "Hello";              // Output string
print "Hello";             // Output string (returns 1)
var_dump($var);            // Detailed info (type + value)
print_r($array);           // Human-readable array output
```

---

## Variables & Data Types
```php
$name = "Alice";           // string
$age = 25;                 // int
$price = 19.99;            // float
$active = true;            // bool
$items = [1, 2, 3];        // array
$nothing = null;           // null
```

---

## Type Declarations
```php
// Parameter and return types
function greet(string $name): string {
    return "Hello, $name!";
}

// Union types (PHP 8.0+)
function show(int|string $value): void {
    echo $value;
}

// Nullable types
function getName(): ?string {
    return null;
}

// Strict typing
declare(strict_types=1);
```

---

## Arithmetic Operators
| Operator | Description      | Example      |
|----------|------------------|--------------|
| `+`      | Addition         | `$a + $b`    |
| `-`      | Subtraction      | `$a - $b`    |
| `*`      | Multiplication   | `$a * $b`    |
| `/`      | Division         | `$a / $b`    |
| `%`      | Modulo           | `$a % $b`    |
| `**`     | Exponentiation   | `$a ** $b`   |

---

## Comparison Operators
| Operator | Description              | Example          |
|----------|--------------------------|------------------|
| `==`     | Equal (loose)            | `$a == $b`       |
| `===`    | Identical (strict)       | `$a === $b`      |
| `!=`     | Not equal (loose)        | `$a != $b`       |
| `!==`    | Not identical (strict)   | `$a !== $b`      |
| `<`      | Less than                | `$a < $b`        |
| `>`      | Greater than             | `$a > $b`        |
| `<=`     | Less than or equal       | `$a <= $b`       |
| `>=`     | Greater than or equal    | `$a >= $b`       |
| `<=>`    | Spaceship                | `$a <=> $b`      |

---

## Logical Operators
| Operator | Description | Example       |
|----------|-------------|---------------|
| `&&`     | AND         | `$a && $b`    |
| `\|\|`   | OR          | `$a \|\| $b`  |
| `!`      | NOT         | `!$a`         |
| `and`    | AND         | `$a and $b`   |
| `or`     | OR          | `$a or $b`    |

---

## Null Coalescing
```php
$name = null;
echo $name ?? "Guest";     // Output: Guest

$user ??= "Anonymous";     // Assign if null
```

---

## Spaceship Operator
```php
1 <=> 1;  // 0 (equal)
1 <=> 2;  // -1 (less)
2 <=> 1;  // 1 (greater)
```

---

## Conditionals
```php
// if / else / elseif
if ($a > $b) {
    echo "a is greater";
} elseif ($a == $b) {
    echo "equal";
} else {
    echo "b is greater";
}

// Ternary operator
$result = $a > $b ? "yes" : "no";

// switch
switch ($color) {
    case "red":
        echo "Red";
        break;
    case "blue":
        echo "Blue";
        break;
    default:
        echo "Unknown";
}

// match (PHP 8.0+)
$result = match($color) {
    "red" => "Red color",
    "blue" => "Blue color",
    default => "Unknown",
};
```

---

## Loops
```php
// for
for ($i = 0; $i < 5; $i++) {
    echo $i;
}

// while
while ($i < 5) {
    echo $i++;
}

// do-while
do {
    echo $i++;
} while ($i < 5);

// foreach
$arr = [1, 2, 3];
foreach ($arr as $value) {
    echo $value;
}

// foreach with key
foreach ($arr as $key => $value) {
    echo "$key: $value";
}

// break and continue
for ($i = 0; $i < 10; $i++) {
    if ($i == 3) continue;  // Skip 3
    if ($i == 7) break;     // Stop at 7
    echo $i;
}
```

---

## Functions
```php
// Basic function
function greet(string $name): string {
    return "Hello, $name!";
}

// Default parameter
function greet(string $name = "Guest"): string {
    return "Hello, $name!";
}

// Pass by reference
function addOne(int &$num): void {
    $num++;
}

// Named arguments (PHP 8.0+)
function createUser(string $name, int $age, bool $active = true) {}
createUser(name: "John", age: 25);

// Arrow functions (PHP 7.4+)
$double = fn($n) => $n * 2;
echo $double(5);  // 10
```

---

## PHP 8.x Features

### Enums (PHP 8.1+)
```php
enum Status {
    case Active;
    case Inactive;
    case Pending;
}
$status = Status::Active;
```

### Constructor Property Promotion
```php
class User {
    public function __construct(
        public string $name,
        public int $age
    ) {}
}
```

### Readonly Properties (PHP 8.1+)
```php
class User {
    public readonly string $name;
}
```

### Match Expression
```php
$result = match($value) {
    1 => "one",
    2 => "two",
    default => "other",
};
```

---

## Quick Tips

- Use `===` instead of `==` for strict comparison
- Use `match` instead of `switch` when possible (PHP 8+)
- Always use `declare(strict_types=1)` for type safety
- Use `??` for default values instead of `isset()` checks
- Use arrow functions for simple one-line callbacks
