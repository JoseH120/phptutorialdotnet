<?php
echo "PHP String" . PHP_EOL;
$title = 'PHP string is awesome';
echo $title . PHP_EOL;
/* Single-quoted strings vs. double-quoted strings */
$name = 'John';
echo "Single-quoted And Double-quoted.\n ";
/* And you want too show a message that displays the following: */
echo 'Hello ' . $name . "\n";
/* However, if you use a double-quoted string, you can place the $name 
variable inside the string as follows */
echo "Hello $name \n";
/* An alternative syntax is to wrap the variable in curly braces like this */
echo "Hello {$name} \n";
/* Note that php doesn't substitute the value of variables in the 
single-quoted string, For example */
echo 'Hello {$name} \n' . PHP_EOL;
/* Besides substituting the variables, the 'double-quoted' strings also
accept special characters, e.g. \n, \r, \t by escaping them.
It's a good practice to use single-quoted strings when you don't use 
variable interpolation because PHP doesn't have to parse and evaluate 
them for double-quoted strings.*/
echo "Accesing characters in a string.\n";
echo $title[0] . "\n";
echo "Getting the length of a string.\n";
echo strlen($title) . "\n";
