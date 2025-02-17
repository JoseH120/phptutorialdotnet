<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP array_keys</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h3>PHP array_keys</h3>
    <p>
        The PHP <span>array_keys()</span> function accepts an <u>array</u>
    </p>
    <?php include('../misc/misc.php');
    $numbers = [10, 20, 30];
    $keys = array_keys($numbers);

    print_array($keys);
    ?>
</body>

</html>