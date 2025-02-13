<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Pop</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h3>PHP array_pop</h3>
    <p>
        The <span>array_pop()</span> function removes an element from the of
        an array and returns that element.
        <br>
        Here's the syntax:
    </p>
    <pre>array_pop(array &$array) : mixed</pre>
    <h4>PHP array_pop() function example</h4>
    <?php include('../misc.php');
    $numbers = [1, 2, 3];
    echo "<h4>Before using array_pop</h4>";
    print_array($numbers);
    $last_number = array_pop($numbers);
    echo 'last element of the array deleted -> ' .  $last_number;
    echo "<h4>After using array_pop</h4>";
    print_array($numbers);
    ?>
</body>

</html>