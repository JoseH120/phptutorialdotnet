<?php

declare(strict_types=1);
echo "PHP strict_types.\n";
/* Type hints allow you to declare types for 'function parameters' and return values.
for example: */
function add(int $x, int $y)
{
    return $x + $y;
}
// echo add(1.5, 2.5) . PHP_EOL;
/* In this example, the 'add' function accepts two integers and returns the sum of 
them.
However, when you pass two floats 1.5 and 2.5 the add functions returns 3 because PHP
implicitly coerces the values to the target types by default. In this case, PHP coerces
the 'FLOATS' into 'INTEGERS'
To enable strict typing, you can use the 
'declare(strict_types = 1);'
directive at the beginning of the file.
 */
echo str_repeat('-', 20) . PHP_EOL;
echo "PHP strict_types: the special case" . PHP_EOL;
function add2(float $x, float $y)
{
    return $x + $y;
}
echo add2(1, 2) . PHP_EOL;
