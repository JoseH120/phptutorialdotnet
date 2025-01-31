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
