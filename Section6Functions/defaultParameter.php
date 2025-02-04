<?php
echo <<<TEXT
    PHP DEFAULT ARGUMENTS

    TEXT;
/* when you use default parameters, it's a good practice to place them after 
the parameters that don't have default values.  */

function concat($str1, $str2, $delimiter = ' ')
{
    return $str1 . $delimiter . $str2;
}
$message = concat('Hi', 'there');

echo $message . PHP_EOL;
