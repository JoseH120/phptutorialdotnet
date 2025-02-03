<?php
echo <<<TEXT
PHP Function Parameters.
Introduction to the PHP function parameters.
function function_name(paremeter_list){
    statement;
}
when a function has multiple parameters, you need to separate them using
a comma ",". 
When you call the "contact()" function, you need to pass two arguments
that correspond to the parameters. For example: 
TEXT;
function concat($str1, $str2)
{
    return $str1 . $str2;
}

$greeting = concat('Welcome', ' admin');
echo $greeting . PHP_EOL;

/* In this example, the $str1 will take the first argument 'Welcome ', and 
the '$str2' will take the second argument 'Admin'.
PHP will raise an error if the number of arguments you pass to the function
is less than the number of parameters. For example */
// $greeting2 = concat('Welcome'); // => throw an error.

/* When you pass multiple arguments to a function, you can break the list
the arguments vertically to make the code more readable like this. */
function concat2($str1, $str2)
{
    return $str1 . $str2;
}

$greeting = concat2(
    'welcome ',
    'home'
);
echo $greeting . PHP_EOL;
/* Starting from PHP 8.0, you can place the trailing comma (,) in the
parameter list like this: */
function concatTrailing(
    $str1,
    $str2,
) {
    return $str1 . $str2;
}
$greeting = concatTrailing(
    'Hello ',
    "admin",
);
echo $greeting . PHP_EOL;
