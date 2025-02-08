<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>PHP ForEach With Indexed Arrays.</h1>
    <?php
    /* 
foreach($array_name as $element){
    //process element here.
}
*/
    $colors = ['red', 'green', 'blue'];
    ?>
    <?php foreach ($colors as $color) : ?>
        <?php echo $color . '<br/>'; ?>
    <?php endforeach; ?>
</body>

</html>