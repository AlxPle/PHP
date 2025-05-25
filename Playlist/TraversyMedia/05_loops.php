<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
    for (initialize; condition; increment) {
    // code to be executed
    }
    
*/

// for ($i = 0; $i < 10; $i++) {
//     echo 'Number i ' . $i . '<br>';
// };


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
    while (condition) {
    // code to be executed
    }
*/
// $i = 1; // Initialize the counter variable
// while ($i < 10) {
//     echo 'Number ' . $i . '<br>';
//     $i++; // or $i = $i + 1; // Increment the counter variable
// };


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
    do {
    // code to be executed
    } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/
// $i = 1; // Initialize the counter variable
// do {
//     echo 'Number ' . $i . '<br>';
//     $i++; // Increment the counter variable
// } while ($i < 20); // The loop will continue as long as $i is less than 20



/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
    foreach ($array as $value) {
    // code to be executed
    }
*/

$posts = ['First Post', 'Second Post', 'Third Post'];
foreach ($posts as $index => $post) {
    echo $index + 1 . ' - ' . $post . '<br>';
}

$person = [
    'first_name' => 'Alex',
    'last_name' => 'P',
    'email' => 'alex@gmail.com',
];

foreach ($person as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}
