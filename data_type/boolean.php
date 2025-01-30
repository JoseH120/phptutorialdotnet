<?php
$is_submitted = false;
$is_valid = true;
echo $is_submitted . "\n";
echo $is_valid . "\n";
echo "When you use the \"echo\" to show a boolean value, \nit'll show 1 for \"true\" and nothing for \"false\",\nwhich is not intuitive. To make it more obvious,\nyou can use the \"var_dump()\" function\n";
var_dump($is_submitted);
// echo "\n";
var_dump($is_valid);
// echo "\n";
