<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h3>PHP array_push</h3>
    <p>
        The <span>array_push()</span> function adds one or more elements
        to the end of an array. <br>
        The syntax:
    </p>
    <pre>array_push(array &$array, mixed ...$values) : int</pre>
    <?Php include('../misc.php');
    $numbers = [1, 2, 3];

    echo '<p>before array_push() function examples. </p>';
    print_array($numbers);
    echo '<hr/>';
    echo '<p>after array_push() function examples. </p>';
    array_push($numbers, 4, 5);
    print_array($numbers);
    ?>
</body>

</html>