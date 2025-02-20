<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP anonymous function</title>
    <link rel="stylesheet" href="../styles/misestilos.css">
</head>

<body>
    <h3>PHP anonymous function</h3>
    <p>The following example assings the anonymous function to
        the $multiply variable</p>
    <?php
    $multiply = function ($x, $y) {
        return $x * $y;
    };
    echo $multiply(10, 20);
    echo "<br>\n<pre>";
    var_dump($multiply);
    echo "</pre>\n";
    ?>
    <h3>Passing an anonymous function to another function</h3>
    <?php
    $list = [10, 20, 30];
    $results = array_map(function ($element) {
        return $element * 2;
    }, $list);
    print_r($results);
    ?>
    <hr>
    <h3>Scope of the anonymous function</h3>
    <p>To use the variable from the parent scope inside an anonymous function, you place the
        variable in the <u>use</u> construct as follows</p>
    <?php
    $message = 'Hi';
    $say = function () use (&$message) {
        echo "<p>" .  $message . "</p>";
        $message = 'Hello';
    };
    $say();
    echo $message;
    ?>
    <hr>
    <h3>Return an anonymous function from a function.</h3>
    <?php
    function multiplier($x)
    {
        return function ($y) use ($x) {
            return $x * $y;
        };
    }
    $double = multiplier(2);
    echo "<p>" . $double(100) . "</p>\n";

    $tripple = multiplier(3);
    echo "<p>" . $tripple(100) . "</p>\n";
    ?>

</body>

</html>