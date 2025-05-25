<?php
/* ----------- Arrrays ----------- */

/*
    Arrays hold multiple values. Each value in an array is called an "element"
*/

//Simple Array
$numbers = array(1, 2, 3, 4, 5); // Old way of creating an array
$fruits = ['Apple', 'Banana', 'Orange']; // New way of creating an array
//echo $fruits[1] . '<br>'; // Outputs Banana
//echo $numbers[2]; // Outputs 3    

//var_dump($fruits); // Outputs the array structure and values

//Associative Array

$colors = [
    1 => '#f00',
    2 => '#0f0',
    3 => '#00f'
];
//echo $colors[1]; // Outputs #0f0

$hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f'
];

//echo $hex['green']; // Outputs #0f0

$person = [
    'first_name' => 'Alex',
    'last_name' => 'P',
    'email' => 'alex@gmail.com'
];
//echo $person['first_name'] . ' ' . $person['last_name'] . '<br>'; // Outputs Alex Traversy
//echo $person['email']; // Outputs

//Multi-dimensional Array
$people = [
    [
        'first_name' => 'Alex',
        'last_name' => 'P',
        'email' => 'alex@gmail.com'
    ],
    [
        'first_name' => 'Branko',
        'last_name' => 'B',
        'email' => 'Branko@gmail.com'
    ],
    [
        'first_name' => 'John',
        'last_name' => 'J',
        'email' => 'John@gmail.com'
    ]
];
//echo $people[1]['first_name'] . ' ' . $people[1]['last_name'] . '<br>'; // Outputs Branko B

//var_dump(json_encode($people)); // Outputs the JSON representation of the array