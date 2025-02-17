<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In array 3</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h4>3&#41;Using PHP in_array() function with the searched value is an array</h4>
    <?php include('../misc.php');
    $colors = [
        ['red', 'green', 'blue'],
        ['cyan', 'magenta', 'yellow', 'black'],
        ['hue', 'saturation', 'ligthness']
    ];
    if (in_array(['red', 'green', 'blue'], $colors)):
        print_paragraph('RGB colors found');
    else :
        print_paragraph('RGB colors are not found');
    endif;


    ?>
</body>

</html>