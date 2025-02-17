<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In Array 4</title>
    <link rel="stylesheet" href="../../styles/misestilos.css">
</head>

<body>
    <h4>4&#41;Using PHP in_array() function with an array of objects example.</h4>
    <p>
        The following example illustrate how to use the <span>in_array()</span> to check
        if a <u>Role</u> object exists in an array of <u>Role</u></p>

    <?php include('../misc/misc.php');
    include('../misc/Role.php');
    $roles = [
        new Role(1, 'admin'),
        new Role(2, 'editor'),
        new Role(3, 'subscribe'),
    ];
    print_array($roles);
    ///////////////////////////////////////////////////////////
    $text = <<<text
    Expression Evaluated.
    if (in_array(new Role(1, 'admin'), \$roles)):
        print_paragraph('found it');
    endif;
    text;
    print_expression($text);
    if (in_array(new Role(1, 'admin'), $roles)):
        print_paragraph('found it');
    endif;
    ///////////////////////////////////////////////////////////
    echo "<hr/>\n";
    print_paragraph("If you set the \$strict to true, the function will compare objects using their identities instead of values.");
    $text = <<<text
    Expression Evaluated.
    if (in_array(new Role(1, 'admin'), \$roles, true)):
        print_paragraph('found it');
    else:
        print_paragraph('not found it');
    endif;
    text;
    print_expression($text);
    if (in_array(new Role(1, 'admin'), $roles, true)):
        print_paragraph('found it');
    else:
        print_paragraph('not found it');
    endif;
    ?>
</body>

</html>