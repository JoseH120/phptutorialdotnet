<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shift PHP</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h3>PHP array_shift()</h3>
    <p>
        The <span>array_shift()</span> functions removes the first element
        from an <span>array</span> and returns it. Syntax:
    </p>
    <pre>array_shift(array &$array) : mixed</pre>
    <?php include('../misc.php');
    $numbers = [1, 2, 3];
    echo "<h3>Before use the array_shift </h3>";
    print_array($numbers);
    $first_number = array_shift($numbers);
    echo "<br>";
    echo "<h3>After use the array_shift </h3>";
    print_array($numbers);
    ?>


</body>

</html>