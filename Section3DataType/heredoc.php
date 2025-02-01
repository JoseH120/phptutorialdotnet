<?php
echo "PHP Heredoc.\n";
/* When you place 'variables' in a 'double-quoted string', PHP will expand 
the variable names. If a string contains the double quotes ", you need to 
escape them using the backslash character '\'. */
$he = 'Bob';
$she = 'Alice';
echo "Not Using Heredoc.\n";
$text = "$he said, \"PHP is awesome\".
\"Of course.\" $she agreed.\n";

echo $text;
/* PHP heredoc strings behave like double-quoted strings, without the 
double-quotes. It means that they don't need to escape quotes and expand 
variables. For example. */
$text = <<<TEXT
$he said "PHP is awesome".
"Of course" $she agreed.

TEXT;
echo "Using Heredoc.\n";
echo $text;
/* How it works.
First, start with <<< operator, an identifier, and a new line:
Second, specify the string, which can span multiple lines and includes single
quotes (') or double-quoted (").
Third, close the string with the same identifier.
The identifier must contain only alphanumeric characters and underscores and 
start with an underscore or a non-digit character.
The closing identifier must follow these rules:
    Begins at the first column of the line.
    Contains no other characters except a semicolon ( ; ).
    The character before and after the closing identifier must be a newline 
    character defined by the local operating system.
the
*/
// $str = <<<IDENTIFIER
// invalid
//     IDENTIFIER;
// echo $str;
/* However, the following heredoc string is valid: */
$str = <<<IDENTIFIER
    valid
    IDENTIFIER;
echo $str . PHP_EOL;

echo "PHP Nowdoc syntax.\n";
/* The nowdoc's syntax is similar to the heredoc's syntax except that the 
identifier which follows the <<< operator needs to be enclosed in single 
quotes. The nowdoc's identifier also follows the rules for the heredoc 
identifier */
$str = <<<'identifier'
place a string here
it can span multiple lines
and include single quote ' and double quotes "
identifier;
echo $str . PHP_EOL;
