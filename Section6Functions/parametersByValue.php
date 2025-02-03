<?php
echo "Passing parameter argument by value.\n";
$counter = 1;
function increase($value)
{
    $value += 1;
    echo $value . "\n";
}
increase($counter);
echo $counter . "\n";
