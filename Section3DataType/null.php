<?php

echo "PHP null.\n";
/* The 'null' is a special type in PHP. The 'null' type has only one value
which is also 'null'. In fact, 'null' indicates the absence of a value for
a 'variable' 
A variable is null when you assign null to it like this:
*/
$email = null;
var_dump($email);
/* In addition, when you use the 'unset()' function to unset a variable,
the variable is also 'null'. For Example: */
$email = 'webmaster@phptutorial.net';
echo $email . PHP_EOL;
unset($email);
var_dump($email);
echo "PHP NULL and case-sensitivity.\n";
/* To check if a variable is 'null' or not, you use the 'is_null()' function.
The is_null() function returns 'true' if a variable is 'null'; otherwise, it 
returns 'false'. For example: */
echo "Testing for NULL.\n";
$email = null;
var_dump(is_null($email));
$home = "phptutorial.net";
var_dump(is_null($home));
/* To test if a variable is 'null' or not, you an also use the identical 
operator === . For example */
$result = ($email === null);
var_dump($result);
