<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List 1</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h3>Introduction to the PHP list syntax</h3>
    <?php include('../misc/misc.php');
    $prices = [100, 0.1];
    $buy_price  = $prices[0];
    $tax = $prices[1];
    print_paragraph(<<<text
    To assign each element of the \$prices array to variables, you'll do
    like this.
    <pre>\$prices = [100, 0.1]; 
    \$buy_price  = \$prices[0]; 
    \$tax = \$prices[1]; </pre>\n
    text);
    ?>
    <hr>
    <p>Php provides the list() construct that assigns the elements
        of an array to a list of variables in one assignment:
    </p>
    <pre> list( var1, var2, ...) =$array;</pre>
    <?php
    list($buy_price1, $tax1) = $prices;
    print_dump($buy_price1, $tax1);
    // var_dump($buy_price1, $tax1);

    ?>
</body>

</html>