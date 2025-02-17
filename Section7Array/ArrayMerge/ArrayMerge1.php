<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Merge</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h3>PHP array_merge</h3>
    <p>
        The <span>array_merge()</span> functions accepts one or more
        arrays and returns a new array that contains the elements from
        the input arrays. look up the syntax below:
    </p>
    <pre>array_merge(array ...$arrays) : array</pre>

    <?php include('../misc/misc.php');
    $server_side = ['PHP'];
    $client_side = ['JavaScript', 'CSS', 'HTML'];
    $full_stack = array_merge($server_side, $client_side);
    print_paragraph('First array');
    print_array($server_side);
    echo "<br>";
    print_paragraph('Second array');
    print_array($client_side);
    echo "<br>";
    print_paragraph('Merge array');
    print_array($full_stack);
    ?>

</body>

</html>