<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ksort function</title>
    <link rel="stylesheet" href="../styles/misestilos.css">
</head>

<body>
    <h3>PHP ksort function</h3>
    <p>Sorts the elements of an array by their keys. Syntax:</p>
    <pre>ksort(array &$array, int $flags = SORT_REGULAR): bool</pre>
    <?php include('../resources/ misc.php');
    $employees = [
        'john' => [
            'title' => 'Frond-end Developer',
            'age' => 24,
        ],
        'alice' => [
            'title' => 'Web Designer',
            'age' => 28,
        ],
        'bob' => [
            'title' => 'MySQL DBA',
            'age' => 25,
        ],
    ];
    print_paragraph('Before ksort functions');
    print_array($employees);
    ksort($employees, SORT_STRING);
    print_paragraph('After ksort function:');
    print_array($employees);
    ?>
    <h3>PHP krsort function</h3>
    <p>Is like the ksort function except that it sorts the keys of an array in descending order</p>
    <pre>krsort(array &$array, int $flags = SORT_REGULAR) : bool</pre>
    <p>Before krsort functions:</p>
    <?php
    print_array($employees);
    krsort($employees, SORT_STRING);
    print_paragraph('After krsort functions:');
    print_array($employees);
    ?>
</body>

</html>