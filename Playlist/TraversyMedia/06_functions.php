<?php
/* ------------ Functions ----------- */

/*
    Functions are reusable blocks of code that we can call to perform a specific task.
    We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
    function functionName($arg1, $arg2, ...) {
    // code to be executed
    }
*/

function functionName($arg1, $arg2)
{
    return $arg1 + $arg2; // This function takes two arguments and returns their sum
}
functionName(5, 5);
$sum = functionName(5, 5); // Call the function and store the result in a variable
echo $sum; // Output: 10


$subtract = function ($arg1, $arg2) {
    return $arg1 - $arg2; // This is an anonymous function that takes two arguments and returns their difference
};
echo $subtract(10, 5); // Output: 5
$multiply = fn($arg1, $arg2) => $arg1 * $arg2; // This is a short arrow function that takes two arguments and returns their product
echo $multiply(2, 5);
