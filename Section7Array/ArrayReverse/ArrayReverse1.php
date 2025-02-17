<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array reverse1</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h3>PHP array_revers</h3>
    <p>
        The <span>array_reverse</span> function accepts an <u>array</u>
        and returns a new array with the order of elements in the input
        array reversed.
    </p>
    <pre>array_reverse( array $array, bool $preserve_keys = false) : array</pre>
    <ul>
        <li>$array is the input array</li>
        <li>
            $preserve_keys determines if the numeric keys should be preserved.
            if $preserve_keys is true, the numeric key of elemenets in the new
            array will be preserved. The $preserve_keys doesn't affect the
            non-numeric keys.
        </li>
    </ul>
    <p>
        The <span>array_reverse()</span> doesn't change the input array,
        instead, it returns a new array.
    </p>
    <h4>1&#41;Simple PHP array_reverse() function example.</h4>
    <?php include('../misc/misc.php');
    $numbers = [10, 20, 30];
    $reversed = array_reverse($numbers);
    print_paragraph("Original array.");
    print_array($numbers);
    print_paragraph("Reversed array");
    print_array($reversed);
    ?>
</body>

</html>