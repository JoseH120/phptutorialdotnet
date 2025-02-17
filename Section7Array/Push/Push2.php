<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h3>Push an element to the end of an associative array</h3>

    <?Php include('../misc/misc.php');
    $roles = [
        'admin' => 1,
        'editor' => 2
    ];

    echo '<p>before insert elements </p>';
    print_array($roles);
    echo '<hr/>';
    echo '<p>after insert elements </p>';
    $roles['approver'] = 3;
    print_array($roles);
    ?>
</body>

</html>