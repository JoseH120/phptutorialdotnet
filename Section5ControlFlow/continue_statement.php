<?php
echo <<<TEXT
PHP continue
The 'continue' statement is used within a loop structure such as
'for', 'do...while', and 'while' Loop.

TEXT;
for ($i = 0; $i < 10; $i++):
    if ($i % 2 === 0) :
        continue;
    endif;
    echo "$i\n";
endfor;
/* First, use a for ... loop to iterate from 0 to 9.
* Second, skip the current echo statement if $i is an even number. The 
$i is an even number when the $i % 2 returns 0. As a result, the output
shows only the odd numbers. */