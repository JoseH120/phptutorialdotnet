<?php
echo "Assignment Operator \"=\"\n";
echo '$variable_name = expression;' . PHP_EOL;
echo "Arithmetic Assignment Operators.\n";
$text = <<<ARITHMETIC
OPERATOR\tEXAMPLE\t\tEQUIVALENT\t\tOPERATION
+=\t\t\$x+=\$y\t\t\$x=\$x+\$y\t\tAddition
-=\t\t\$x-=\$y\t\t\$x=\$x-\$y\t\tSubstraction
*=\t\t\$x*=\$y\t\t\$x=\$x*\$y\t\tMultiplication
/=\t\t\$x/=\$y\t\t\$x=\$x/\$y\t\tDivision
%=\t\t\$x%=\$y\t\t\$x=\$x%\$y\t\tModulus
**=\t\t\$x**=\$y\t\t\$x=\$x**\$y\t\tExponentiation

ARITHMETIC;
echo $text;
echo "Concatenation Assignment Operator.\n";
/* php uses the concatenation operator (.) to concatenate two strings.
for example. */
$greeting = 'Hello ';
$name = 'John';
$greeting = $greeting . $name;
echo $greeting . PHP_EOL;
/*  By using the concatenation assignment operator you can concatenate
two string and assings the result string to a variable. for example*/
$greeting = 'Hello ';
$name = 'Juan';
$greeting .= $name;
echo $greeting . PHP_EOL;
