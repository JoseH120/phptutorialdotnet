<?php
echo "Changing Array Elements.\n";
$scores  = [1, 2, 3];
print_r($scores);
echo str_repeat('-', 20) . "\n";
$scores[0] = 0;
print_r($scores);
