<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List3</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h3>2&#41;Using the nested list to assign variables.</h3>
    <p>The following example uses the nested list to assign the
        array's elements to the variables:</p>
    <?php include('../misc/misc.php');
    $elements = ['body', ['white', 'blue']];
    list($element, list($bgcolor, $color)) = $elements;
    print_dump($element, $bgcolor, $color);
    ?>
</body>

</html>