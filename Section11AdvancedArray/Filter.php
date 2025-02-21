<?php include('../resources/misc.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP array filter</title>
    <link rel="stylesheet" href="../styles/misestilos.css">
</head>

<body>
    <h3>PHP array_filter function</h3>
    <p>When you want to filter elements of an array, you often iterate over
        the elements and check whether the result array should include
        each element</p>
    <?php
    $numbers = [1, 2, 3, 4, 5];
    $odd_numbers = [];
    foreach ($numbers as $number):
        if ($number % 2 === 1) $odd_numbers[] = $number;
    endforeach;
    print_array($odd_numbers);
    ?>
    <hr>
    <h3>PHP array_filter() function examples</h3>
    <h3>1&#41;Basic array_filter()</h3>
    <p>The array_filter() function makes the code less verbose and more expressive:</p>
    <?php
    $odd_numbers = [];
    print_array($odd_numbers);
    $odd_numbers = array_filter(
        $numbers,
        fn($number) => $number % 2 === 1
    );
    print_array($odd_numbers);
    ?>
    <hr>
    <h3>2&#41;Using callback as method as a class</h3>
    <pre>array_filter($items, [$instance, 'callback']);</pre>
</body>

</html>