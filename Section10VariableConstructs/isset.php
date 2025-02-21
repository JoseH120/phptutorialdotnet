<?php include('../resources/misc.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP isset() construct</title>
    <link rel="stylesheet" href="../styles/misestilos.css">
</head>

<body>
    <h3>PHP isset construct.</h3>
    <?php
    $isset = fn($var) => isset($var);
    print_paragraph('a variable that has not been declared and pass it to isset(), will return false');
    print_dmp($isset($count));
    echo "<hr>\n";
    $count = 0;
    print_paragraph('assign a value different than null and pass it to isset(), will return true');
    print_dmp(isset($count));
    echo "<hr>\n";
    print_paragraph('assing null to a variable and pass it to the isset(), will return false');
    $count = null;
    print_dmp(isset($count));
    echo "<hr>\n";
    ?>
    <h3>Using PHP isset with array</h3>
    <?php
    print_paragraph('If you pass an <u>array</u> element to isset(), it will return true.');
    $colors = ['primary' => 'blue'];
    print_dmp($colors);
    print_dmp(isset($colors['primary']));
    echo "<hr/>\n";
    print_paragraph('If you pass a non-existing element to isset(), it will return false.');
    print_dmp(isset($colors['secondary']));
    echo "<hr/>\n";
    $colors['seconday'] = null;
    print_paragraph('If you pass an array element with value null to isset(), it will return false');
    print_dmp(isset($colors['seconday']));
    ?>
    <hr>
    <h3>PHP isset() with string offsets</h3>
    <?php
    $message = 'Hello';
    print_paragraph('The isset() works iwth string offsets:');
    print_dmp(isset($message[0]));
    echo "<hr/>\n";
    print_paragraph('If you pass a string element with an invalid offset, the isset() will return false');
    print_dmp(isset($message[strlen($message)]));
    ?>
    <hr>
    <h3>PHP isset() with multiple variables.</h3>
    <p>the isset() accepts multiple variables and returns true if all variables
        are set. The isset() evaluates the variables from left to right and
        stops when it encounters an unset variable.</p>
    <?php
    $x = 10;
    $y = 20;
    $z = 30;
    print_dmp(isset($x, $y, $z));
    echo "<hr/>\n";
    print_paragraph('The following returns false because the variable $y is null, which is not set.');
    $y = null;
    print_dmp(isset($x, $y, $z));
    ?>
</body>

</html>