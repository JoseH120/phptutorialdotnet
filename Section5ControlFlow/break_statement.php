<?php
echo <<<TEXT
PHP break

TEXT;
echo "Using PHP break statement in a for loop.\n";
for ($i = 0; $i < 10; $i++) :
    if ($i === 5) :
        break;
    endif;
    // echo '$i';
    echo "$i\n";
endfor;
echo "Using PHP break statement in a do ... while loop.\n";
$j = 0;
do {
    if ($j === 5):
        break;
    endif;
    echo $j . "\n";
    $j++;
} while ($j <= 10);
echo "Using PHP break statement in a while loop.\n";
$k = 0;
while ($k <= 10):
    if ($k === 5):
        break;
    endif;
    echo $k . "\n";
    $k++;
endwhile;

echo "Using break statement to jump out of a nested loop.\n";
$i = 0;
$j = 0;
for ($i = 0; $i < 5; $i++):
    for ($j = 0; $j < 3; $j++):
        if ($i === 3):
            break 2;
        endif;
        echo "($i, $j)\n";
    endfor;
endfor;
/* By default, the 'break' statement only ends the enclosing loop. But in 
this example,we use the number 2 in the break statement, therefore, it 
terminates both inner and outer loops */
echo str_repeat('-', 30) . PHP_EOL;
$i = 0;
$j = 0;
for ($i = 0; $i < 5; $i++):
    for ($j = 0; $j < 3; $j++):
        if ($i === 3):
            break;
        endif;
        echo "($i, $j).\n";
    endfor;
endfor;
