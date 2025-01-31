<?php
echo "Hola mundo.\n";
$text = <<<TEST
OPERATOR\tNAME\t\t\tDESCRIPTION
==\t\tEqualTo\t\t\treturn true only if both operands are equal
!=, <>\t\tNotEqualTo\t\treturn true only if both operands are not equal
===\t\tIdenticalTo\t\treturn true if both operands have the same data type and equal; 
!==\t\tNotIdenticalTo\t\treturn true if both operands are not equal or not have the same data type;
>\t\tGreaterThan\t\treturn true if the operand on the left if greater than the operand on the right;
>=\t\tGreaterOrEqualThan\treturn true if the operand on the left if greater or equal than the operand on the right;
<\t\tLessThan\t\treturn true if the operand on the right if less than the operand on the left;
<=\t\tLessOrEqualThan\t\treturn true if the operand on the right if less or equal than the operand on the left;
TEST;

echo $text;
