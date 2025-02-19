<?php //Including resources for this file
include('../resources/misc.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP asort</title>
    <link rel="stylesheet" href="../styles/misestilos.css">
</head>

<body>
    <h3>PHP asort</h3>
    <p>Sort an associative array and maintain the index association. Syntax</p>
    <pre>asort(array &$array, int $flags = SORT_REGULAR):bool</pre>
    <?php
    $mountains = [
        'K2' => 8611,
        'Lhotse' => 8516,
        'Mount Everest' => 8848,
        'Kangchenjunga' => 8586,
    ];
    print_array($mountains);
    asort($mountains);
    print_array($mountains);
    ?>
    <h3>PHP arsort() function</h3>
    <p>Sort an associative array in descending order and maintain
        index association. Syntex</p>
    <pre>arsort(array &$array, int $flags = SORT_REGULAR): bool</pre>
    <?php
    arsort($mountains);
    print_array($mountains);
    ?>
</body>

</html>