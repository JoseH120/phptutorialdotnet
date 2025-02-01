<?php
echo "PHP Type casting.\n";
echo "Cast To An Integer.\n";
echo (int)12.5 . PHP_EOL;
echo (int)12.1 . PHP_EOL;
echo (int)12.9 . PHP_EOL;
echo (int)-12.9 . PHP_EOL;
/* Suppose you have a string and want to cast it as an integer. */
$message = 'Hi';
$num = (int) $message;
echo $num . PHP_EOL;
/* The result may not be what you expected.
If a string is numeric or leading numeric,then the (int) will cast it to 
the corresponding integer value. Otherwise, the (int) cast the string to 
zero. For example: */
$amount = (int)'100 USD';
echo $amount . PHP_EOL;

echo "Cast To Float.\n";
$amount = (float) 100;
echo $amount . PHP_EOL;

echo "Cast To String.\n";
$amount = 100;
echo (string)$amount . " USD\n";
/* The string operator converts the 'true' value to the string '1' and
false value to empty string(""). For example */
$is_user_logged_in = true;
echo (string)$is_user_logged_in;
echo PHP_EOL;
/* The string operator cast null to an empty string.
The string cast an array to the "Array" string. For Example */
$numbers = [1, 2, 3];
$str = (string) $numbers;
echo $str;
echo PHP_EOL;
/* And you'll get a warning that you're attempting to convert an array to a
string. */