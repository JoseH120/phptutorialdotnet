<?php include('../resources/misc.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP arrow functions</title>
    <link rel="stylesheet" href="../styles/misestilos.css">
</head>

<body>
    <h3>PHP Arrow Functions.</h3>
    <p>Arrow functions provide a more concise syntax for the
        <u>Anonymous Functions</u>. <br> Basic Syntax:
    </p>
    <pre>fn(arguments) => expression; </pre>
    <p>The arrow function is functionally equivalent to the following
        anonymous function: </p>
    <pre>function(arguments){ return expression; }</pre>
    <hr>
    <h3>1&#41;Assign an arrow function to a variable.</h3>
    <?php
    $eq = fn($x, $y) => $x === $y;
    print_dump($eq(100, '100'));
    ?>
    <hr>
    <h3>2&#41;Pass an arrow function to a function example.</h3>
    <?php
    $list = [10, 20, 30];
    print_array($list);
    $results = array_map(fn($item) => $item * 2, $list);
    print_array($list);
    ?>
    <hr>
    <h3>3&#41;Return an arrow function from a function.</h3>
    <?php
    function multiplier($x)
    {
        return fn($y) => $x * $y;
    }
    $double = multiplier(2);
    print_dump($double(10));
    ?>

</body>

</html>