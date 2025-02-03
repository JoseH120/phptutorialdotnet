<?php
echo <<<TEXT
PHP while
syntax
while(expression)
{
    statement;
}
The Alternative syntax for the PHP while loop
while(expression):
    statement;
endwhile;

TEXT;
$total = 0;
$nuumber = 1;
while ($number <= 10):
    $total += $number;
    $number++;
endwhile;

echo $total . PHP_EOL;
