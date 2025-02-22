<?php include('../resources/misc.php');
include('../resources/Odd.php');
include('../resources/Positive.php');
include('../resources/Even.php'); ?>
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
    <?php
    $odd_numbers = [];
    $numbers = [1, 2, 3, 4, 5];
    $odd_numbers = array_filter($numbers, [new Odd(), 'isOdd']);
    print_array($odd_numbers);
    echo "<hr>\n";
    print_paragraph("The following uses the isEven static method as callback of the array_filter");
    $even_numbers = array_filter($numbers, ['Even', 'isEven']);
    print_array($even_numbers);
    echo "<hr>\n";
    print_paragraph("The Positive class has the __invoke magic method that returns true if the argument is positive; otherwise, it returns false.");
    $numbers = [-1, -2, 0, 1, 2, 3];
    $positives = array_filter($numbers, new Positive());
    print_array($positives);
    ?>
    <hr>
    <h3>Passing elements to the callback function.</h3>
    <p>Sometimes, you want to pass the key, not the value, to the callback function.
        In this case,you can pass ARRAY_FILTER_USE_KEY as the third argument of the
        array_filter() function. For example:</p>
    <?php
    $inputs = [
        'first' => 'john',
        'last' => 'doe',
        'password' => 'secret',
        'email' => 'john.doe@example.com'
    ];
    $filtered = array_filter(
        $inputs,
        fn($key) => $key !== 'password',
        ARRAY_FILTER_USE_KEY
    );
    print_array($filtered);
    echo "<hr>\n";
    print_paragraph("To pass both the 'key' and 'value' of the element to the callback function.");
    $inputs['email'] = '';
    $filtered = [];
    print_array($filtered);

    $filtered = array_filter(
        $inputs,
        fn($value, $key) => $value !== '' && $key !== 'password',
        ARRAY_FILTER_USE_BOTH
    );
    print_array($filtered);
    ?>
</body>

</html>