<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List2</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h3>1&#41;Using a list to skip array elements.</h3>
    <p>The following example uses the list to assign the first
        and the third element to variables. It skips the second element
    </p>
    <pre>$prices = [100, 0.1, 0.05];
list($buy_price, ,$discount) = $prices;</pre>
    <?php include('../misc/misc.php');
    $prices = [100, 0.1, 0.05];
    list($buy_price,, $discount) = $prices;
    print_paragraph("The price is $buy_price with the discount of $discount");
    ?>
</body>


</html>