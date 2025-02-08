<?php
echo str_repeat('-', 30) . "\n" . <<<text
CREATING ARRAYS.
1-creating an array using array construct
\$empty_array = array();\n
text;
$empty_array = array();
echo "is array => " . is_array($empty_array)  . "\n";
$scores = array(1, 2, 3);
var_dump($scores);
echo <<<text
2-Creating an array using the [] syntax.
\$empty_array = [];\n
text;
$empty_array = [];
echo "is array => " . is_array($empty_array)  . "\n";
$scores = [1, 2, 3];
var_dump($scores);
echo str_repeat('-', 20) . "\nDISPLAYING ARRAYS.\n";
/* To show the contents of an array, you use the 'var_dump()' function. */

echo str_repeat('-', 20) . "\nEXAMPLE3.\n" . <<<text
\$scores = [1, 2, 3];
var_dump(\$scores);\n
text;
var_dump($scores);
echo str_repeat('-', 20) . "\nEXAMPLE4.\n" .  <<<text
OR you can use the 'print_r()' function.
\$scores = [1, 2, 3];
print_r(\$scores);

text;
echo str_repeat('-', 20) . "\nEXAMPLE 5\n";
/* It's moore convenient to define a function that prints out an array like this. */
function print_array($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    echo "\n";
}
print_array($scores);
