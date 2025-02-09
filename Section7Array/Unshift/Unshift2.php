<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../styles/misestilos.css" />
</head>

<body>
    <h4>Prepending an element to the beginning of an associative array</h4>
    <p>To prepend an element to an associative array, you use the <span>+</span> operator. For example:</p>
    <?php include('../misc.php');

    echo '<p>Before using unshift</p>';
    $colors = [
        'red' => '#ff0000',
        'green' => '#00ff00',
        'blue' => '#0000ff',
    ];
    print_array($colors);
    echo '<hr/>';
    echo '<p>After using unshift</p>';
    $colors = ['black' => '#000000'] + $colors;
    print_array($colors);

    ?>

</body>

</html>