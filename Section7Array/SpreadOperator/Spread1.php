<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spread Operator1</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h3>PHP spread operator (...$array) </h3>
    <p>
        The spread operator offers better performance than the 'array_merge'
        function because it is a language construct whereas the 'array_merge'
        is a function call. Also, PHP optimizes the performance for constant
        arrays at compile time.
        Unlike argument unpacking, you can use the spread operator anywhere.
        For example, you can use the spread operator at the beginning of the
        array:
    </p>
    <?php include('../misc/misc.php');
    $numbers = [4, 5];
    $scores = [1, 2, 3, ...$numbers];
    echo "<hr>\n";
    print_paragraph("numbers array.");
    print_array($numbers);
    echo "<hr>\n";
    print_paragraph("scores array.");
    print_array($scores);
    ?>
</body>

</html>