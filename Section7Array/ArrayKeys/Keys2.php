<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP array_keys</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h3>Using php array_keys() function with an associative array</h3>
    <h4>Example1</h4>
    <?php include('../misc.php');

    $user = [
        'username' => 'admin',
        'email' => 'admin@phptutorial.net',
        'is_active' => '1',
    ];
    print_array($user);
    $properties = array_keys($user);
    print_array($properties);
    ?>
    <hr />
    <h4>Example2</h4>
    <p>
        The following example uses the <span>array_keys()</span> function
        to get the keys whose values equal '1'
    </p>
    <?php
    $properties = array_keys($user, 1);
    print_array($properties);
    ?>
</body>

</html>