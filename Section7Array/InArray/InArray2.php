<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In array 2</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h4>2&#41;using php <span>in_array()</span> function with strict comparison example</h4>
    <p><span>$users_id</span> array</p>
    <?php include('../misc.php');
    $users_id = [10, '15', '20', 30];
    print_array($users_id);
    print_expression("\$result = in_array(15, \$users_id)");
    $result = in_array(15, $users_id);
    print_dump($result);
    ?>
    <p>
        To use the strict comparison, you pass 'true' to the third argument of the
        <span>in_array()</span> function as follows.
    </p>
    <?php
    $result = in_array(15, $users_id, true);
    print_expression("\$result = in_array(15, \$users_id, true)");
    print_dump($result)
    ?>
</body>

</html>