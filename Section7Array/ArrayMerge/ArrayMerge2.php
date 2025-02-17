<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array merge 2</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h3>2&#41;Using array_merge() function with strings keys</h3>
    <?php include('../misc/misc.php');
    $before = [
        'PHP' => 2,
        'JavaScript' => 4,
        'HTML' => 4,
        'CSS' => 3,
    ];

    $after = [
        'PHP' => 5,
        'JavaScript' => 5,
        'MySQL' => 4
    ];

    $skills = array_merge($before, $after);
    echo "<hr>";
    print_paragraph('Before array');
    print_array($before);
    echo "<hr>";
    print_paragraph('After array');
    print_array($after);
    echo "<hr>";
    print_paragraph('Skills array = Before array + After array');
    print_array($skills);

    ?>
</body>

</html>