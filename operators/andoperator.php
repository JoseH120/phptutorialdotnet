<?php
echo 'AND OPERATOR' . PHP_EOL;
/* Since PHP keywords are case-insensitive, the AND and 'and' operators are the same */
echo <<<TEXT
Syntax of the operator and
Assigning the result of the operation with the AND Operator.
\$variable = expresion1 and expresion2
True table of the AND OPERATOR
exp -> expression
exp1\texp2\texp1 and exp2
true\ttrue\ttrue
true\tfalse\tfalse
false\ttrue\tfalse
false\tfalse\tfalse


TEXT;
/* PHP AND OPERATOR EXAMPLES */

echo <<<TEXT
EXAMPLE USING AND with the && characters
\$price = 100;
\$qty = 5;
\$discounted = \$qty > 3 && \$price > 99;
var_dump(\$discounted);  -> 
TEXT;
$price = 100;
$qty = 5;
$discounted = $qty > 3 && $price > 99;
var_dump($discounted);
echo 'SHORT-CIRCUITING.' . PHP_EOL;
$debug = false;
$debug && print('PHP and operator demo!.');
