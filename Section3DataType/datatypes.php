<?php

/**
 * Scalar
 */
echo "Integers\n";
// echo '<br>';
$count = 0;
$max = 1000;
$page_size = 10;
echo $count . "\n";
echo $max . "\n";
echo $page_size . "\n";

echo  "Float\n";
$price = 10.25;
$tax = 0.88;
echo $price . "\n";
echo $tax . "\n";

echo "Boolean\n";
$is_admin = true;
$is_user_logged_in = false;
echo $is_admin . "\n";
// echo $is_user_logged_in . "\n";

echo "String\n";
$str = "php scalar type";
$message = "PHP data types";
echo $str . "\n";
echo $message . "\n";

/**
 * Compound
 */
echo "Arrays";
$carts = ['laptop', 'mouse', 'keyboard'];
echo "Indexed array.\n";
var_dump($carts);
echo "Associative arrays.\n";
$prices = [
    "laptop" => 1000,
    "mouse" => 50,
    "keyboard" => 120
];
var_dump($prices);
