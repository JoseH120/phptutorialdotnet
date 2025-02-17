<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spread operator6</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h3>Spread operator and named arguments.</h3>
    <p>
        PHP 8 allows you to call a function using named arguments. for example.
    </p>
    <?php include('../misc/misc.php');
    print_paragraph('using format_name arguments with echo ');
    echo format_name(
        first: 'John',
        middle: 'V.',
        last: 'Doe',
    );
    echo "<hr>\n";
    ?>
    <p>
        Also you can pass the arguments to the format_name funcion using the
        spread operator.
    </p>
    <?php
    $names = [
        'first' => 'John',
        'middle' => 'V.',
        'last' => 'Doe',
    ];
    echo format_name(...$names);
    ?>
    <p>In this case, the keys of the array elements correspond to
        parameter names of the 'format_name()' function.
    </p>
</body>

</html>