<?php
echo "PHP Type Juggling.\n";
/* php is a loosely typed programming language. */
$my_var = 'php';
/* and you assign an integer to the same variable, and its type will be 
the integer: */
$my_var = 100;
/* Php has a feature call "type Juggling". It means that during the 
comparison of variables of different types, PHP will convert them to the
common, comparable type. For example. */
$qty = 20;
if ($qty == "20") {
    echo "Equal.\n";
}
/* Because of type juggling, PHP converts the string '20' to an integer 
(20) and compares it with $qty variable. The result is 'true'. Therefore,
you'll se the message 'Equal' in the output.
The type juggling also works in arithmetic operations for variables of 
different types. the following example illustrates how the type juggling 
works in an arithmetic operation */
$total = 100;
$qty = '20';
$total = $total + $qty;
echo $total . PHP_EOL;
/* The type of $total is an integer, whereas the $qty is a string.
To calculate the sum, PHP first converts the value of the $qty variable to
an integer. The result is an integer.
consider the following example: */
$total = 100;
$qty = "20 pieces";
$total  = $total + $qty;
echo $total . PHP_EOL;
