<?php include('../resources/misc.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP array_reduce</title>
    <link rel="stylesheet" href="../styles/misestilos.css">
</head>

<body>
    <h3>PHP array_reduce</h3>
    <p>The array_reduces() function reduces an array to a single value using a
        callback function.</p>
    <p>The following example calculate the sum of all numbers in an array</p>
    <?php
    $numbers = [10, 20, 30];
    print_array($numbers);
    print_paragraph('Using foreach loop');
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    echo "$total<br><hr>\n";
    print_paragraph('Using reduce function');
    $total = 0;
    $total = array_reduce(
        $numbers,
        fn($previous, $current) => $previous + $current
    );
    echo "$total<br><hr>\n";
    ?>
    <h3>PHP array_reduce() function syntax</h3>
    <pre>array_reduce(array $array, callable $callback, mixed $initial = null): mixed</pre>
    <hr>
    <h3>PHP array_reduce function example</h3>
    <?php
    $carts = [
        ['item' => 'A', 'qty' => 2, 'price' => 10],
        ['item' => 'B', 'qty' => 3, 'price' => 20],
        ['item' => 'C', 'qty' => 5, 'price' => 30],
    ];
    unset($total);
    $total = array_reduce(
        $carts,
        fn($prev, $item) => $prev + $item['qty'] * $item['price']
    );
    echo "$total<br><hr>\n";
    ?>
    <p>If the carts array is empty, you'll get the $total as null.</p>
    <?php
    $carts = [];
    $total = array_reduce(
        $carts,
        fn($prev, $item) => $prev + $item['qty'] * $item['price'],
        0
    );
    echo $total, "<br><hr>\n";
    ?>
</body>

</html>