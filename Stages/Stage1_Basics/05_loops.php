<?php
// 1. for loop
for ($i = 1; $i <= 5; $i++) {
    echo "For loop iteration: $i" . PHP_EOL;
}
// Output: 1 2 3 4 5

// 2. while loop
$count = 1;
while ($count <= 3) {
    echo "While loop count: $count" . PHP_EOL;
    $count++;
}
// Output: 1 2 3

// 3. do-while loop
$num = 1;
do {
    echo "Do-while number: $num" . PHP_EOL;
    $num++;
} while ($num <= 2);
// Output: 1 2

// 4. foreach loop (array)
$fruits = ["apple", "banana", "cherry"];
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit" . PHP_EOL;
}
// Output: apple banana cherry

// 5. break and continue
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue; // Skip 3
    }
    if ($i == 5) {
        break; // Stop at 5
    }
    echo "Loop with break/continue: $i" . PHP_EOL;
}
// Output: 1 2 4
