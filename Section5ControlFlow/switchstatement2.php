<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch statementq</title>
</head>

<body>
    <?php
    $expression = 1;
    switch ($expression):
        case 1:
            echo <<<TEXT
            <a href="#">Hola mundo</a>
TEXT;
            break;
        case 10:

            break;
    endswitch;
    ?>


</body>

</html>