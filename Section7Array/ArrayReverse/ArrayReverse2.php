<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array reverse2</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h3>2&#41;Using the PHP array_reverse() function to preserve numeric keys</h3>
    <?php include('../misc/misc.php');
    $book = [
        'PHP awesome',
        999,
        ['Programming', 'Web Development']
    ];
    $preserved = array_reverse($book,  true);
    print_paragraph('Original array');
    print_array($book);
    print_paragraph('Reversed array');
    print_array($preserved);
    ?>
</body>

</html>