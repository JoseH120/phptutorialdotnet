<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spread operator4</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h3>Using PHP spread operator with a generator.</h3>
    <p>
        The following example, first, we define a generator that
        returns even numbers between 2 and 10. Then, we use the spread
        operator to spread out the returned value of the generator into
        an array.
    </p>

    <?php include('../misc/misc.php');
    $even = [...even_number()];
    echo "<hr>";
    print_paragraph('Even number');
    print_array($even);

    ?>
</body>

</html>