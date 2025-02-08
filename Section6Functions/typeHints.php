<?php
echo "PHP Type Hints.\n";
echo str_repeat('-', 20) . PHP_EOL;
/* Introduction to PHP Type hints.
PHP is dynamically typed language. When you 'define a function', you don't 
need to declare types for 'parameters'. For example:
*/
function add($x, $y)
{
    return $x + $y;
}

$result = add(1, 2);
echo $result . PHP_EOL;

/* The add function accepts two arguments and returns the sum of them. In
this example, we pass two integers into the 'add' function and get the 
result as an integer.

If you pass two floating-point numbers into the 'add' function, you'll 
get the sum of the 'floats' which is a floating-point number.*/
$result = add(1.0, 2.5);
echo $result . PHP_EOL;

/* More interestingly, you can pass an integer and a numeric string into
the 'add' function, it will return an integer: */
$result = add(1, '2');
echo $result . PHP_EOL;

/* In this case, the 'add' function implicitly coerces the numeric string
'2' into the integer '2' because of the + operator. If PHP fails to coerce
the string argument into an integer, it'll issue an error. For example */
// $result = add('Hi', 'There'); // uncaught TypeError. 
// echo $result . PHP_EOL;
echo "PHP Type hints for function parameters.\n";
echo str_repeat('-', 20) . PHP_EOL;
function add2(int $x, int $y)
{
    return $x + $y;
}

$result = add2(1, 2);
echo $result . PHP_EOL;

/* However, if you pass two floats, you'll get the result as an integer. */
$result = add2(1, 2.5);
echo $result . PHP_EOL;

echo "PHP Type hints for function's return value.\n";
echo str_repeat('-', 20) . PHP_EOL;
/* To specify a return value's type for a function, you add the type after
the function header like this: */
function add3(int $x, int $y): int
{
    return $x + $y;
}
echo add3(10, 20) . PHP_EOL;

/* Starting from PHP 7.0, if a function doesn't return a value, you use the 
'void' type. For example: */

function dd($data): void
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die;
}
echo str_repeat('-', 20) . PHP_EOL;
// dd([10, 20]);

/* The Union Type
starting from PHP 8.0, if a function returns a value of several types, you 
can declare it as a union type. For example: */
function add4($x, $y): int | float
{
    return $x * $y;
}
echo add4(10, 20) . PHP_EOL;
echo add4(1.5, 2.5) . PHP_EOL;

echo str_repeat('-', 20) . PHP_EOL;
echo "The mixed type.\n";
/* If a function returns a value of many types, you can use the mixed type.
The mixed type means one several types. The mixed types. It's equivalented to 
the following union type:
object | resource | array | string | int | float | bool | null  
filter_var(mixed $value, int $filter = FILTER_DEFAULT, array|int $options = 0): mixed
*/
echo str_repeat('-', 20) . PHP_EOL;
echo "The nullable type.\n";
/* The following defines a function that accepts a string and returns the 
uppercase of that string: */
function upper(string $str): string
{
    return strtoupper($str);
}
/* If you pass an argument with null, you'll get an error. */
$str = null;
// echo upper($str); // Throw error -> Uncaught TypeError.
/* To fix this, you can make the $str parameter nullable like this: */
function upper2(?string $str): string
{
    return strtoupper($str);
}
/* PHP allows you to mark the type declarations and returns values as nullable by 
prefixing the type name with a question mark (?).
In the above example, we add the '?' to the string type of the $str parameter. The
'?string' allows you to pass a string argument or null.
Note that the mixed type already includes the null type. Therefore, you don't need 
to include nullable mixed like this: */
var_dump(upper2($str));
