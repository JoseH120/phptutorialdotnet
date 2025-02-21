<?php include('../resources/misc.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP is_null construct</title>
    <link rel="stylesheet" href="../styles/misestilos.css">
</head>

<body>
    <h3>PHP is_null() construct</h3>
    <p>accepts a variable and returns true if that variable is 'null'. Otherwise returns false</p>
    <pre>is_null( mixed $v):bool</pre>
    <h3>PHP is_null() examples:</h3>
    <p>example1</p>
    <?php
    print_dmp(is_null($count)); //-> throw a warning message
    print_paragraph('example2');
    $count = null;
    print_dmp(is_null($count)); //-> true
    print_paragraph('example3');
    $count = 1;
    print_dmp(is_null($count)); //-> false
    ?>
    <hr>
    <h3>PHP is_null() with array</h3>
    <p>The following example uses the is_null() to check if the element with the key
        'link' is null or not. It returns true because the element doesn't exist:</p>
    <?php
    print_paragraph('example4');
    $colors = [
        'text' => 'black',
        'background' => 'white',
    ];
    print_dmp(is_null($colors['link'])); // -> throw a warnning message
    ?>
    <hr>
    <h3>PHP is_null() with string index.</h3>
    <p>The following example uses the is_null() to check if
        the element at index 5 in the string $message is null or not</p>
    <p>example5</p>
    <?php
    $message = 'Hello';
    print_dmp(is_null($message[5])); // -> throw a warning message
    ?>
    <hr>
    <h3>PHP is_null(), equal operator (==), and identity operator (===)</h3>
    <p>The echo displays and empty string for the false value, which is not intuitive.
        The following defines a function that displays false as the string false
        instead of an empty string:</p>
    <?php
    function echo_bool(string $title, bool $v): void
    {
        echo $title, "\t", $v === true ? 'true' : 'false', "<br>" . PHP_EOL;
    }
    echo "<hr>\n";
    print_title3('comparing falsy values with null using equal operator (==) ');
    echo_bool('null == false:', null == false);
    echo_bool('null == 0:', null == 0);
    echo_bool('null == 0.0:', null == 0.0);
    echo_bool('null == "0"', null == "0");
    echo_bool('null == "":', null == "");
    echo_bool('null == []:', null == []);
    echo_bool('null == null:', null == null);
    echo "<hr>\n";
    print_title3('comparing falsy values with null using identity operator (===) ');
    echo_bool('null === false:', null === false);
    echo_bool('null === 0:', null === 0);
    echo_bool('null === 0.0:', null === 0.0);
    echo_bool('null === "0"', null === "0");
    echo_bool('null === "":', null === "");
    echo_bool('null === []:', null === []);
    echo_bool('null === null:', null === null);
    echo "<hr/>\n";
    print_title3('comparing falsy values with null using the PHP is_null() construct');
    echo_bool('is_null(false):', is_null(false));
    echo_bool('is_null(0):', is_null(0));
    echo_bool('is_null(0.0):', is_null(0.0));
    echo_bool('is_null("0")', is_null("0"));
    echo_bool('is_null(""):', is_null(""));
    echo_bool('is_null([]):', is_null([]));
    echo_bool('is_null(null):', is_null(null));
    ?>

</body>


</html>