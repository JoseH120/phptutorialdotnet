<?php
echo <<<TEXT
PHP do ... while
Syntax
do {
    statement;
} while (expression);

TEXT;
$i = 0;
do {
    echo $i;
} while ($i > 0);

$i = 10;
do {
    echo $i . "'\n'";
    $i--;
} while ($i > 0);
