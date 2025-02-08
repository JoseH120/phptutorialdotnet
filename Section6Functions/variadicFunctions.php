<?php
echo 'PHP Variadic Functions.' . PHP_EOL;
/* The following example defines a fuction called 'sum()' that returns the sum of two 
integers: */
echo "EXAMPLE 1.\n";
function sum1(int $x, int $y)
{
    return $x + $y;
}
echo sum1(10, 20) . PHP_EOL;

echo str_repeat('-', 20) . PHP_EOL;
echo "EXAMPLE2.\n";
/* to Allow the 'sum()' function to accept a variable of arguments, you need to use 
'func_get_args()' function. The func_num_args() function returns an 'array' that contains 
all function arguments. For example: */
function sum2()
{
    $numbers = func_get_args();
    $total = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $total += $numbers[$i];
    }
    return $total;
}

echo sum2(10, 20) . PHP_EOL;
echo sum2(10, 20, 30) . PHP_EOL;

/* In this example, we don't specify any parameter for the 'sum'function. When calling
the 'sum()' function, we can pass any number of arguments into it.
Inside the function, the 'func_get_args()' returns an array that contains all the 
arguments. To sum up all the arguments, we use a 'for' loop */
echo str_repeat('-', 20) . "\n";
echo "EXAMPLE 3.\n";
function sum3(...$numbers)
{
    $total = 0;
    for ($i = 0; $i < count($numbers); $i++) {
        $total += $numbers[$i];
    }
    return $total;
}
echo sum3(10, 20) . "\n";
echo sum3(10, 20, 30) . "\n";

/* PHP 7 allows you to declare types for variadic arguments. For example> */
function sum4(int ...$numbers): int
{
    $total = 0;
    for ($i = 0; $i < count($numbers); $i++):
        $total += $numbers[$i];
    endfor;
    return $total;
}
echo str_repeat('-', 20) . "\n";
echo "EXAMPLE 4.\n";
echo sum4(10, 20) . "\n";
echo sum4(10, 20, 30) . "\n";

/* If a function has multiple parameters, only the last parameter can be variadic. 
For example. */
echo str_repeat('-', 20) . "\n";
echo "EXAMPLE 5.\n";
function my_func($a, ...$b)
// IF YOU PLACE THE VARIADIC PARAMETER BEFORE A REGULAR ONE, YOU'LL GET AN ERROR
{
    return "hello.";
}
echo my_func(1, 2, 3) . PHP_EOL;
/* Note that you can use the 'array_sum()' to calculate the sum of all elements of
an array. So you can simplify the 'sum()' function like this: */
echo str_repeat('-', 20) . PHP_EOL;
echo "EXAMPLE 6. \n";
function sum(int ...$numbers): int
{
    return array_sum($numbers);
}
echo sum(10, 20, 30) . PHP_EOL;
