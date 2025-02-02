<?php
echo <<<TEXT
PHP Ternary Operator.
Syntax : 
\$result = condition ? value1 : value2;
PHP Ternary Operator Example.

TEXT;
$is_user_logged_in = false;
if ($is_user_logged_in) {
    $title = 'Logout';
} else {
    $title = 'Login';
}
$title1 = $is_user_logged_in ? 'Logout' : 'Login';
echo str_repeat('-', 30) . PHP_EOL;
echo <<<TEXT
The Shorthand Ternary Operator.
\$result = \$initial ?: \$default;
Php evaluates \$initial in the boolean context. 
If \$initial is true, PHP assigns the value of the \$initial to the
\$result variable.
Otherwise, it assings the \$default to the \$result variable.

TEXT;
echo str_repeat('-', 30) . PHP_EOL;
echo <<<TEXT
EXAMPLE 1.
\$path = '/about'
\$url = \$path ?: '/'
echo \$url; //Output ->
TEXT;
$path = '/about';
$url = $path ?: '/';
echo $path . PHP_EOL;
echo <<<TEXT
Chaining Ternary Operators.
You can chain ternary operators by using parentheses.
\$eligible = true;
\$has_credit = false;
\$result = \$eligible ? ( \$has_credit ? 'Can use the credit' : 'Not enough credit' ) : 'Not eligible to buy'; 
echo \$result // Output -> 
TEXT;
$eligible = true;
$has_credit = false;
$result = $eligible ? ($has_credit ? 'Can use the credit' : 'Not enough credit') : 'Not eligible to buy';
echo $result . PHP_EOL;
