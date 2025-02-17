<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In Array1</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h3>PHP in_array</h3>
    <p>
        The <span>in_array()</span> function returns <u>true</u> if a
        value exists in an array. Here's the syntax:
    </p>
    <pre>in_array(mixed $needle, array $hastack, bool strict=false):bool</pre>
    <ul>
        <li>$needle is the searched value.</li>
        <li>$hastack is the array to search</li>
        <li>$strict if the $strict sets to 'true', the in_array() will use the strict comparison.</li>
    </ul>
    <h4>1&#41;Simple php in_array() function examples.</h4>
    <p><span>$action</span> array</p>
    <?php include('../misc.php');
    $actions = [
        'new',
        'edit',
        'update',
        'view',
        'delete'
    ];
    print_array($actions);
    $result = in_array('update', $actions);
    print_dump($result);
    ?>
    <p>
        The following example returns 'false' because the value 'new' doesn't exist in the <span>$action</span> array
    </p>
    <?php
    $result = in_array("New", $actions);
    $text = '$result = in_array("New", $actions);';
    print_expression($text);
    print_dump($result);
    ?>
</body>


</html>