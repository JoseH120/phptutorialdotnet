<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <style>
        * {
            margin: 0;
            box-sizing: border-box;
        }

        p {
            margin-bottom: 4px;
        }
    </style>
</head>

<body>
    <?php
    /*
    Scalar 
        * boolean
        * integer
        * float 
        * string
    Compound
        * Array
        * Object
    Special
        * Null
        *Resource
    */
    echo '<p> Integers </p>';
    // echo '<br>';
    $count = 0;
    $max = 1000;
    $page_size = 10;
    echo '<p>' . $count . ' ' . $max . ' ' . $page_size . '</p>';
    echo '<hr/>';

    echo  '<p> Float</p>';
    $price = 10.25;
    $tax = 0.88;
    echo '<p>' . $price . '</p>';
    echo '<p>' . $tax . '</p>';
    echo '<hr/>';

    ?>
</body>

</html>