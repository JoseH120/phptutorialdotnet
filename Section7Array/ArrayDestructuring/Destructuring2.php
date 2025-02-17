<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array destructuring</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h3>Array destructuring instead of list construct</h3>
    <?php include('../misc/misc.php');
    ////////////////////////////////////////
    ['scheme' => $scheme, 'host' => $host, 'path' => $path] = parse_url('https://phptutorial.net/');
    print_array([$scheme, $host, $path]);
    print_paragraph('The array destructuring works with both indexed and associative arrays. For Example:');
    $person = ['John', 'Doe'];
    [$first_name, $last_name] = $person;

    /////////////////////////////////////////
    echo "<hr/>\n";
    print_title3('Skiping element');
    $person = ['John', 'doe', 24];
    unset($last_name);
    [$first_name,, $age] = $person;
    print_array([$first_name, $last_name, $age]);

    /////////////////////////////////////////
    print_title3('1&#41;Swapping variable');
    $x = 10;
    $y = 20;
    echo "<p> (\$x, \$y)= ($x, $y) </p>\n";
    //Swapping variables
    [$x, $y] = [$y, $x];
    echo "<p> (\$x, \$y)= ($x, $y) </p>\n";

    /////////////////////////////////////////
    print_title3('2&#41;Parsing an array returned from a function.');
    [
        'dirname' => $dirname,
        'basename' => $basename,
    ] = pathinfo('c:\temp\readme.txt');

    print_dump($dirname, $basename);
    ?>
</body>

</html>