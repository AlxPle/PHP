<?php
/* --------- Array Functions -------- */

/*
    Functions to work with arrays
    https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'banana', 'orange'];

// Get length of array
$length = count($fruits);
//echo $length . "\n"; // Output: 3

// Search array
// var_dump(in_array('apple', $fruits)); // Output: bool(true)
// var_dump(in_array('grape', $fruits)); // Output: bool(false)

// Add to array
$fruits[] = 'grape'; // Add to end of array
array_push($fruits, 'kiwi'); // Add to end of array
array_unshift($fruits, 'mango'); // Add to beginning of array

//print_r($fruits); // Output: Array ( [0] => apple [1] => banana [2] => orange [3] => grape )

// Remove from array
//array_pop($fruits); // Remove from end of array
//array_shift($fruits); // Remove from beginning of array
//unset($fruits[1]); // Remove specific index
//print_r($fruits); // Output: Array ( [0] => mango [1] => apple [2] => banana [3] => orange )

// Split into chunks of 2 array
$chunked = array_chunk($fruits, 2);

// print_r($fruits); // Output: Array ( [0] => apple [1] => banana [2] => orange [3] => grape )
//print_r($chunked); // Output: Array ( [0] => Array ( [0] => mango [1] => apple ) [1] => Array ( [0] => banana [1] => orange ) )

// Merge arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2]; // Using spread operator to merge arrays
// print_r($arr3); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )
// print_r($arr4); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )

// Combine arrays
$colors1 = ['red', 'green', 'blue'];
$colors2 = ['apple', 'grass', 'sky'];

$combined = array_combine($colors1, $colors2);
// print_r($combined); // Output: Array ( [red] => apple [green] => grass [blue] => sky )

$keys = array_keys($combined);
// print_r($keys); // Output: Array ( [0] => red [1] => green [2] => blue )

$flipped = array_flip($combined);
// print_r($flipped); // Output: Array ( [apple] => red [grass] => green [sky] => blue )

$numbers = range(1, 10);
// print_r($numbers); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 [9] => 10 )

$new_numbers = array_map(function ($number) {
    return "Number $number";
}, $numbers);
// print_r($new_numbers); // Output: Array ( [0] => Number 1 [1] => Number 2 [2] => Number 3 [3] => Number 4 [4] => Number 5 [5] => Number 6 [6] => Number 7 [7] => Number 8 [8] => Number 9 [9] => Number 10 )

$less_than_five = array_filter($numbers, function ($number) {
    return $number < 5;
});

// print_r($less_than_five); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )

$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number, 0);
// echo $sum . "\n"; // Output: 55


