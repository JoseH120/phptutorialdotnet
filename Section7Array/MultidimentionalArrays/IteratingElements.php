<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Iterating over elements of a multidimensional array using foreach</h3>
    <?php
    $tasks = [
        ['Learn PHP programming', 2],
        ['Practice PHP', 2],
        ['Work', 8],
        ['Do exercise', 1],
    ];
    foreach ($tasks as $task):
        foreach ($task as $task_detail):
            echo $task_detail . '<br/>';
        endforeach;
    endforeach;
    ?>

</body>

</html>