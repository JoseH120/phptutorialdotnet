<?php
echo "Removing Array Elements.\n";
$scores = [1, 2, 3];
print_r($scores);
unset($scores[1]);
echo str_repeat('-', 20) . "\n";
print_r($scores);
