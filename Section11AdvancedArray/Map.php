<?php include('../resources/misc.php');
include('../resources/User.php');
include('../resources/Square.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Advanced Array</title>
    <link rel="stylesheet" href="../styles/misestilos.css">
</head>

<body>
    <h3>PHP array_map</h3>
    <p>Suppose that you have an 'array' that holds the lenghts of squares:</p>
    <?php
    $lengths = [10, 20, 30];
    print_array($lengths);
    print_paragraph('To calculate the areas of the squares, you may come up with the foreach loop like this.');
    foreach ($lengths as $length):
        $areas[] = $length * $length;
    endforeach;
    print_array($areas);
    ?>
    <p>Alternatively, you can use the 'array_map' function that achieves the same result:</p>
    <?php
    $areas = array_map(
        fn($length) =>
        $length * $length,
        $lengths
    );
    print_array($areas);
    ?>
    <h3>PHP array_map() function syntax:</h3>
    <pre>array_map( callable|null $callback, array $array, array ...$array): array</pre>
    <hr>
    <h3>1&#41;Using the PHP array_map() with an array of objects:</h3>
    <p>The following defines a class that has three properties: </p>
    <?php
    $users = [
        new User(1, 'joe', 'joe@phptutorial.net'),
        new User(1, 'john', 'john@phptutorial.net'),
        new User(1, 'jane', 'jane@phptutorial.net')
    ];
    echo "<hr>\n";
    print_paragraph('Array of users');
    print_array($users);
    $usernames = array_map(
        fn($user) => $user->username,
        $users
    );
    echo "<hr>\n";
    print_paragraph('The following illustrates how to use the array_map() function to get a list of usernames from the $users array');
    print_paragraph('Array of usernames');
    print_array($usernames);
    ?>
    <h3>2&#41;Using a static method as a callback</h3>
    <p>The syntax for passing a public static method to the array_map() function is as follows:</p>
    <pre>'className::staticMethodName'</pre>
    <?php
    $lengths = [10, 20, 30];
    $areas = array_map('Square::area', $lengths);
    print_array($areas);
    ?>




</body>

</html>