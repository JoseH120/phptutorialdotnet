<?php
echo "Introduction to PHP multidimentional array.\n";

/* Typically, you have an 'array' with one dimension. For example. */
$scores = [1, 2, 3, 4, 5];
$rates = [
    'Excelent' => 5,
    'Good' => 4,
    'Ok' => 3,
    'Bad' => 2,
    'VeryBad' => 1
];
/* Both $scores and $rates are one-dimensional arrays.

A multidimensional array is an array that has more than one dimension.
For example, a two dimensional array is an array of arrays. It is like a
table of rows and columns.
The following example uses an array of arrays to define a 
two-dimensional array:*/
$tasks = [
    ['Learn PHP programming', 2],
    ['Practice PHP', 2],
    ['Work', 8],
    ['Do exercise', 1],
];
/* In the $tasks array, the first dimension represents the tasks and 
the second dimension specifies hour 'spent' for each. 
To display all the elements in a multidimensional array, you use 
the print_r() function like this: */
echo '<pre>';
print_r($tasks);
echo '</pre>';
