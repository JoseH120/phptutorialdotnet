<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sort 1</title>
    <link rel="stylesheet" href="../styles/misestilos.css">
</head>

<body>
    <h3>PHP array sort</h3>
    <p>Syntax: </p>
    <pre>sort(array &$array, int $flags = SORT_REGULAR) : bool</pre>
    <h3>1&#41;Using the PHP sort() function to sort an array of numbers</h3>
    <?php include('../resources/misc.php');
    $numbers = [2, 1, 3];
    print_paragraph('Before sort function:');
    print_array($numbers);
    sort($numbers);
    print_paragraph('After sort function:');
    print_array($numbers);
    ?>
    <h3>2&#41;Using the PHP sort() function to sort an array of strings.</h3>
    <?php
    $names = ['Bob', 'John', 'Alice'];
    print_paragraph('Before sort function:');
    print_array($names);
    sort($names, SORT_STRING);
    print_paragraph('After sort function:');
    print_array($names);
    ?>
    <h3>3&#41;Using the PHP sort() function to sort an array of strings. case-insensitively</h3>
    <?php
    $fruits = ['apple', 'Banana', 'Orange'];
    print_paragraph("Without case insensitively");
    print_paragraph('Before sort function:');
    print_array($fruits);
    print_paragraph('After sort function:');
    sort($fruits);
    print_array($fruits);
    print_paragraph('With case sensitively');
    print_paragraph('Before sort function:');
    print_array($fruits);
    print_paragraph('After sort function:');
    sort($fruits, SORT_FLAG_CASE | SORT_STRING);
    print_array($fruits);
    ?>
    <h3>4&#41;Using the PHP sort() function to sort an array of strings using "natural ordering"</h3>
    <?php
    $ranks = ['A-1', 'A-2', 'A-12', 'A-11'];
    print_paragraph('Before sort function:');
    print_array($ranks);
    sort($ranks, SORT_STRING | SORT_NATURAL);
    print_paragraph('After sort function:');
    print_array($ranks);
    ?>
    <h3>PHP rsort() function</h3>
    <p>sorts the elements of an array in descending order. Syntax:</p>
    <pre>rsor(array &$array, int $flags=SORT_REGULAR): bool</pre>
    <?php
    print_paragraph('Before rsort function');
    print_array($ranks);
    rsort($ranks, SORT_STRING | SORT_NATURAL);
    print_array($ranks);
    ?>
</body>

</html>