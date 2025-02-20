<?php include('../resources/misc.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP uksort</title>
    <link rel="stylesheet" href="../styles/misestilos.css">
</head>

<body>
    <h3>PHP uksort</h3>
    <p>Sort an array by key using a user-defined comparison functions.
        Typically, you use the uksort function to sort the keys of
        an associative array. Syntax</p>
    <pre>uksort(array &$array, callable $callback) : bool</pre>
    <?php
    $names = [
        'c' => 'Charlie',
        'A' => 'Alex',
        'b' => 'Bob',
    ];
    print_array($names);
    uksort(
        $names,
        fn($x, $y) => strtolower($x) <=> strtolower($y)
    );
    print_array($names);
    ?>
</body>

</html>