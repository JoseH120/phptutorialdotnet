<?php include('../resources/misc.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP uasort</title>
    <link rel="stylesheet" href="../styles/misestilos.css">
</head>

<body>
    <h3>PHP uasort</h3>
    <p>Sorts the elements of an <u>associative array</u> with a user-defined
        comparison function and maintains the index association. Syntax</p>
    <pre>uasort(array &$array, callable $callback) : bool</pre>
    <?php
    $countries = [
        'China' => ['gdp' => 12.238, 'gdp_growth' => 6.9],
        'Germany' => ['gdp' => 3.693, 'gdp_growth' => 2.22],
        'Japan' => ['gdp' => 4.872, 'gdp_growth' => 1.71],
        'USA' => ['gdp' => 19.485, 'gdp_growth' => 2.27],
    ];
    //sort the country by GDP
    uasort($countries, function ($x, $y) {
        return $x['gdp'] <=> $y['gdp'];
    });
    //show the array
    foreach ($countries as $name => $stat):
        echo "$name has GDP of {$stat['gdp']} trillion USD with a GDP growth rate of {$stat['gdp_growth']}%" . '<br>' . PHP_EOL;
    endforeach;
    ?>
</body>

</html>