<?php
$balance = 100;
$message = 'Insufficient Balance';

var_dump($balance);
var_dump($message);

echo 'Before calling the die function';

die();


echo 'After calling the die function';
