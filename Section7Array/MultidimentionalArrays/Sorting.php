<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Sorting a multidimensional array.</h3>
    <?php
    function print_array($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
    $tasks = [
        ['Learn PHP programming', 2],
        ['Practice php', 2],
        ['work', 8],
        ['do exercise', 1],
    ];
    print_array($tasks);
    /* In this example, we use the spaceship operator '<=>', which
    has been available since PHP 7, to compare the time spent for each 
    task and sort the tasks by hours.*/
    usort($tasks, function ($a, $b) {
        return $a[1] <=> $b[1];
    });
    print_array($tasks);

    ?>
</body>

</html>