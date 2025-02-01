<?php
echo "PHP Or Operator.\n";
echo <<<TEXT
To represent the logical OR operator, PHP uses either the 
"OR" , "or", or "||" as follows
EXAMPLES
expression1 or expression2
OR
expression1 || expression2
true table of operator OR 
exp1\texp2\texp1 || exp2
true\ttrue\ttrue
true\tfalse\ttrue
false\ttrue\ttrue
false\tfalse\tfalse
<hr/>
TEXT;

$expired = true;
$purged  = false;
$clear_cache = $expired || $purged;
var_dump($clear_cache);

echo "Short-circuiting.\n";
/*  When the first operand is true, the logical OR operator knows that the
result must be also 'true'. In this case, it desn't evaluate the second 
operand. This process is called short-circuiting */
function connect_to_db()
{
    return false;
}

connect_to_db() || die("Cannot connect to the database.");
