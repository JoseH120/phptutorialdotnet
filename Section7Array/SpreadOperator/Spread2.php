<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spread operator2</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h3>Using PHP spread operator multiple times</h3>
    <?php include('../misc/misc.php');
    $even = [2, 4, 6];
    $odd = [1, 2, 3];
    $all = [...$odd, ...$even];
    print_paragraph('Even array');
    print_array($even);
    echo "<hr>\n";
    print_paragraph('Odd array');
    print_array($odd);
    echo "<hr>\n";
    print_paragraph('All array');
    print_array($all);
    ?>
</body>

</html>