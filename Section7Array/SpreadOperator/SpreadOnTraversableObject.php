<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spread operator5</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h3>Using PHP spread operator with a Traversable object.</h3>
    <?php include('../misc/misc.php');
    include('../misc/RGBITraversable.php');
    $rgb = new RGB();
    $colors = [...$rgb];
    echo "<hr>\n";
    print_paragraph('Example using traversable on spread operator');
    print_array($colors)
    ?>
</body>

</html>