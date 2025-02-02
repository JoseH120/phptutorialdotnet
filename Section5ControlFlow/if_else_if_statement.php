<?php
echo "IF ... ELSEIF statement.\n";
$x = 10;
$y = 20;
if ($x > $y) {
    $message = 'x is greater than y ';
} elseif ($x < $y) {
    $message = 'x is less than y';
} else {
    $message = 'x is equal to y';
}
echo $message . PHP_EOL;
echo str_repeat('-', 30) . PHP_EOL;
echo "PHP IF ELSEIF alternative syntax.\n";
if ($x > $y):
    $message = 'x is greater than y';
elseif ($x < $y):
    $message = 'x is less than y ';
else:
    $message = 'x is equal to y';
endif;
echo $message . PHP_EOL;
echo str_repeat('-', 30) . PHP_EOL;
echo "PHP ELSEIF vs. ELSE IF.\n";
/* Php allows you to write "else if"(in two words) that has the same result
as "elseif" (in a single word). */
echo <<<TEXT
if (condition) {
    statement;
} else if (condition){
    statement;
}
The "else if" in this case, is the same as the following nested 'if...else'
structure:
if (condition){
    statement
} else {
    if (condition) {
        statement
    }
}
The following example doesn't work and cause an error:
\$x = 10;
\$y = 20;
if (\$x > \$y) : 
    echo 'x is greater than y';
else if(\$x < \$y) :
    echo 'x is less than y';
else :
    echo 'x is equal to y';
endif;

TEXT;
