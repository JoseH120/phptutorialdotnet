<?php include('../resources/misc.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP empty</title>
    <link rel="stylesheet" href="../styles/misestilos.css">
</head>

<body>
    <h3>PHP empty</h3>
    <p>Check if a variable is empty</p>
    <pre>empty(mixed $v): bool</pre>
    <p>A variable is empty when:</p>
    <ul>
        <li>The <u>false</u></li>
        <li>The integer <u>0</u></li>
        <li>The float <u>0.0</u> and <u>-0.0</u></li>
        <li>The string <u>"0"</u></li>
        <li>The empty string <u>''</u></li>
        <li>An <u>Array</u> with no element</li>
        <li><u>null</u></li>
        <li>SimpleXML objects created from <u>empty</u> elements that have no attributes</li>
    </ul>
    <p>Alternatively, you can use the <u>Arrow function syntax</u> to
        define a new function that uses the empty construct.</p>
    <?php
    $empty = fn($var) => empty($var);
    ?>
    <p>The empty() is essentially the same as the following expression</p>
    <pre>!isset($v) || $v == false</pre>
    <p>Like the isset() construct, the empty() is a language construct, not a
        function. Therefore, you cannot call it using variable functions.</p>
    <p>However, you can work around it by defining a function that uses the
        empty() construct and call that function using variable functions.</p>
    <pre>function not_exist_or_false($var):bool
{
    return empty($var);
}</pre>
    <p>Alternatively, you can use the 'arrow function syntax to define a new
        function that uses the empty() construct:</p>
    <pre>$empty = fn($var) => empty($var);</pre>
    <hr>
    <h3>PHP empty() examples:</h3>
    <?php
    print_paragraph('example1');
    print_dmp(empty($count));
    print_paragraph('example2');
    $count = 0;
    print_dmp(empty($count));
    ?>
    <h3>When to use the PHP empty() construct</h3>
    <p>You use the empty() construct in the situation that you're not
        sure if a variable even exists</p>
    <p>Suppose, you receive an array $data from an external source,
        e.g., an API call or database query.</p>
    <p>To check if the $data array has an element with the key 'username'
        and it is not empty, and you may use the following expression</p>
    <pre>isset($data['username'] && $data['username'] !== '')</pre>
    <p>However, it's shorter you use the empty() construct:</p>
    <pre>!empty($data['username'])</pre>
</body>

</html>