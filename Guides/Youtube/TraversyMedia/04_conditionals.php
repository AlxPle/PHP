<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
    < Less than
    > Greater than
    <= Less than or equal to
    >= Greater than or equal to
    == Equal to
    === Identical to
    != Not equal to
    !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/
// $age = 18;
// if ($age >= 18) {
//     echo 'You are old enough to vote';
// } else {
//     echo 'Sorry, you are not old enough to vote';
// }

$some_date = date("H"); // Get the current hour in 24-hour format
// echo $some_date . '<br>';
// if ($some_date < 12) {
//     echo 'Good morning!';
// } elseif ($some_date < 18) {
//     echo 'Good afternoon!';
// } else {
//     echo 'Good evening!';
// }

$posts = ['First Post'];

// if (!empty($posts)) {
//     echo $posts[0];
// } else {
//     echo 'No posts';
// }


/* -------- Ternary Operator -------- */
/*
    The ternary operator is a shorthand if statement.
    Ternary Syntax:
    condition ? true : false;
*/

// echo !empty($posts) ? $posts[0] : 'No posts'; // Outputs 'First Post' if $posts is not empty, otherwise outputs 'No posts'
// $first_post = !empty($posts) ? $posts[0] : 'No posts'; // Assigns 'First Post' to $first_post if $posts is not empty, otherwise assigns 'No posts'
// $first_post = $posts[0] ?? 'No posts'; // Null coalescing operator, assigns 'First Post' if $posts[0] exists, otherwise assigns 'No posts'
// echo $first_post; // Outputs 'First Post'


/* -------- Switch Statements ------- */

$favcolor = 'onion ';
switch ($favcolor) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
        echo 'Your favorite color is neither red, blue, nor green';
        break;
};
