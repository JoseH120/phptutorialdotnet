<?php

echo "\n";
echo <<<text
PHP for
Introduction PHP for statement.
for (start; condition; increment){
    statement;
}
start is evaluated once when the loop starts.
condition is evaluated once in each iteration. 
increment expression is evaluated once after each iteration.

Alternative syntax of the for statement.
for (start; condition; increment):
    statement;
endfor;

text;
$total = 0;
for ($i = 1; $i <= 10; $i++):
    $total += $i;
endfor;

echo $total . PHP_EOL;
