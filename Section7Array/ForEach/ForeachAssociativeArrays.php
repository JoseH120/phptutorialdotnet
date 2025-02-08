<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>PHP Foreach With Associative Array.</h1>
    <?php
    /* 
    Syntax
       foreach ($array_name as $key => $value){
        //Proccess element here.
        }*/
    $capitals = [
        'Japan' => 'Tokyo',
        'France' => 'Paris',
        'Germany' => 'Berlin',
        'United Kingdom' => 'London',
        'United States' => 'Washington D.C.'
    ];

    ?>
    <?php foreach ($capitals as $country => $capital) : ?>
        <?php
        echo <<<text
        <p>The capital {$country} is $capital.</p>\n
        text;
        ?>
    <?php endforeach; ?>
</body>

</html>