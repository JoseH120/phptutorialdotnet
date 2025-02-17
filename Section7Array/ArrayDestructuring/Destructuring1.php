<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array destructuring.</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">

</head>

<body>
    <h3>PHP array destructuring.</h3>
    <?php include('../misc/misc.php');
    $urls = parse_url('https://www.phptutorial.net/');
    print_paragraph('To assign the elements of the array to multiple variables, you can use the list() construct');
    list('scheme' => $scheme, 'path' => $path, 'host' => $host) = parse_url('https://phptutorial.net/');
    print_dump($scheme, $host, $path);
    ?>
</body>

</html>