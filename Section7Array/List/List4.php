<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List4 </title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h3>3&#41;Using a PHP list with an associative array.</h3>

    <?php
    $person = [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'age' => 25,
    ];
    list('first_name' => $first_name, 'last_name' => $last_name, 'age' => $age) = $person;
    var_dump($first_name, $last_name, $age);
    ?>
</body>


</html>