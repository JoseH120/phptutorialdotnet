<?php
echo "PHP String" . PHP_EOL;
$title = 'PHP string is awesome';
echo $title . PHP_EOL;
/* Single-quoted strings vs. double-quoted strings */
$name = 'John';
echo "Single-quoted.\n";
/* And you want too show a message that displays the following: */
echo 'Hello ' . $name . "\n";
/* However, if you use a double-quoted string, you can place the $name variable inside the string as follows */
echo "Hello $name \n";
/* An alternative syntax is to wrap the variable in curly braces like this */
echo "Hello {$name} \n";
