<?php require_once '../resources/Str.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variable Functions.</title>
    <link rel="stylesheet" href="../styles/misestilos.css">

</head>

<body>
    <h3>PHP Variable Functions.</h3>
    <p>Allow you to use a <u>variable</u> like a function. When you append
        parentheses () to a variable, PHP will look for the function whose
        name is the same as the value of the variable and execute it. </p>
    <?php
    $f = 'strlen';
    echo "<pre>\n";
    echo $f('Hello');
    echo "</pre>\n";
    ?>
    <hr>
    <h3>1&#41;Using variable functions to call a method example.</h3>
    <p>The variable functions allow you to call the methods of an
        <u>object</u>. The syntax for calling a method using a variable
        function is as follows:
    </p>
    <pre>$this->$variable($arguments)</pre>
    <?php
    $str = new Str("Hello there");
    echo "<p>";
    echo $str->convert('upper');
    echo "</p>";
    ?>
    <hr>
    <h3>2&#41;Using variable functions to call a static method example</h3>
    <p>
        The <u><i>Str</i></u> has a constructor that accepts a string. It
        implements the toString() method that converts the <u><i>Str</i></u>
        intance to a string.
    </p>
    <?php
    $str1 = new Str('Hi');
    $str2 = new Str('Hi');

    $action = 'compare';

    echo Str::$action($str1, $str2) === 0 ? 'Both strings are equal' : 'Both strings are not equal';
    ?>


</body>

</html>