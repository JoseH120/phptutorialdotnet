<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spread operator3</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h3>Using PHP spread operator with return value of a function call.</h3>
    <?php include('../misc/misc.php');
    $random_numbers = [...get_random_numbers()];
    echo "<hr>\n";
    print_paragraph('Random numbers with spread operator with a return value of a function call');
    print_array($random_numbers);
    ?>
</body>

</html>