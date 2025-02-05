<?php
echo <<<TEXT
PHP Variable Scopes.
In PHP, variables have four types of scopes
* local
* global
* static
* function parameters

TEXT;
/* Global variables. */
$message = "hello";


/* Local variables. */
function say()
{
    /* the variable $message is a local variable inside of this function. */
    $message = 'HI';
    echo $message .  PHP_EOL;
}
say();

echo $message . PHP_EOL;
/* In this script, we have two variables with the same name $message.
The first variable is the global variable because we define it outside of
a function. The $message variable that we define inside the function is the 
local variable. Even though these variables have the same name, they're two
different variables.
PHP allows you to access a global variable within a function by using the 
'global' keyword. For example:  */
echo str_repeat('-', 20) . PHP_EOL;
function say2()
{
    global $message;
    echo $message . PHP_EOL;
    $message = 'hi';
}
say2();

echo $message . PHP_EOL;
/* Super global variables. 
* $GLOBALS   'RETURNS AN ARRAY THAT CONTAINS GLOBAL VARIABLES'
* $_SERVER   'RETURNS DATA ABOUT THE WEBSERVER ENVIRONMENT'
* $_GET      'RETURN DATA FROM GET REQUEST'
* $_POST     'RETURN DATA FROM POST REQUEST'
* $_COOKIE   'RETURN DATA FROM HTTP COOKIES'
* $_FILES    'RETURN DATA FROM POST FILE UPLOADS'
* $_ENV      'RETURN INFORMATION ABOUT THE SCRIPS'S ENVIRONMENT'
* $_REQUEST  'RETURN DATA FROM THE HTTP REQUEST'
* $_SESSION  'RETURN VARIABLES REGISTERED IN A SESSION'
*/

/* STATIC VARIABLES */
echo str_repeat('-', 20);
function get_counter()
{
    static $counter = 1;
    return $counter++;
}

echo get_counter() . PHP_EOL;
echo get_counter() . PHP_EOL;
echo get_counter() . PHP_EOL;

/* Functino parameters. */
function sum($items)
{
    $total = 0;
    foreach ($items as $item) {
        $total += $item;
    }
    return $total;
}
echo str_repeat('-', 20) . PHP_EOL;
echo sum([10, 20, 30]) . PHP_EOL;
