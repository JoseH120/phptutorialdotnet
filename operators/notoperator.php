<?php
echo <<<TEXT
PHP NOT operator
The logical NOT operator returns "true" if the operands is 'false' and returns
'false' if the operands is 'true'.

PHP uses the both 'not' keyword and (!) to represent the logical NOT Operator.
Syntaxis 1
not expression
Syntaxis 2
! expression
True table of not operator.
  Expression\tNot Expresion
\ttrue\tfalse
\tfalse\ttrue

PHP NOT operator examples\n.
TEXT;
$text = <<<TEXT
\$priority = 5;
var_dump(! \$priority < 5);\n
TEXT;

$priority = 5;

echo $text;
var_dump(! $priority < 5);
