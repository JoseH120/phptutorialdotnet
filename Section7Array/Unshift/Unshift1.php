<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../styles/misestilos.css" />
</head>

<body>
    <h3>PHP array_unshift</h3>
    <p>To prepend one or more elements to an array, you use the
        <span>array_unshift()</span> function:
    </p>
    <pre>
    array_unshift(array &$array, mixed ...$values) : intdi
    </pre>

    <h4>PHP array_unshift examples</h4>
    <?php include('../misc/misc.php');
    echo '<p>Before using unshift</p>';
    $permissions = [
        'edit',
        'delete',
        'view',
    ];
    print_array($permissions);
    echo '<hr/>';
    echo '<p>After using unshift</p>';
    array_unshift($permissions, 'new', 'approve', 'reject');
    print_array($permissions);

    ?>

</body>

</html>