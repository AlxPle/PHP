<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/


$name = 'Brad'; // String
$age = 40; // Integer
$has_kids = true; // Boolean
$cash_on_hand = 20.75; // Float
// $name = 'John'; // Reassigning the variable

//echo $name;
//echo $age;
//echo $has_kids;
//echo $cash_on_hand;
//var_dump($has_kids); // Outputs the data type and value of the variable

//echo $name . ' is ' . $age . ' years old'; // Concatenation

//$x = '5' + '5'; // This will be 10 because PHP will convert the string to an integer
//echo $x; // Outputs 10
//echo '<br>';
//var_dump($x); // Outputs the data type and value of the variable

define('HOST', 'localhost'); // Define a constant
define('DB_NAME', 'dev_db'); // Define a constant

echo HOST . '<br>'; // Outputs localhost
echo DB_NAME . '<br>'; // Outputs dev_db
