<?php
echo "Passing Arguments By Reference.\n";

$counter = 1;
function increase(&$value)
{
    $value += 1;
    echo $value . "\n";
}

increase($counter);

echo $counter . "\n";
