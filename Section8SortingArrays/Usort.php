<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/misestilos.css">
    <title>PHP usort</title>
</head>

<body>
    <h3>PHP usort function</h3>
    <p>Sort an array using a user-defined comparison function. Syntax</p>
    <pre>usort(array &$array, callable $callback) : bool</pre>
    <ul>
        <li>$array is the input array.</li>
        <li>$callback is the custom comparison function.</li>
    </ul>
    <p>The $callback function compare two elements($x and $y) and returns
        an integer value. </p>
    <ul>
        <li>zero means $x is equal to $y</li>
        <li>a negative number means $x is before $y</li>
        <li>a positive number means $x is after $y</li>
    </ul>
    <h3>1&#41;Using the PHP usort() function to sort an array of numbers</h3>
    <?php include('../resources/misc.php');
    $numbers = [2, 1, 3];
    print_array($numbers);
    usort($numbers, function ($x, $y) {
        if ($x === $y)
            return 0;
        return $x < $y ? -1 : 1;
    });
    echo "<hr/>\n";
    print_array($numbers);
    ?>
    <hr>
    <p>To sort the elements of the array in descending order, You just need
        to change the logic in the comparison function like this:</p>
    <?php
    $numbers = [2, 1, 3];
    usort($numbers, function ($x, $y) {
        if ($x === $y)
            return 0;
        return $x < $y ? 1 : -1;
    });
    print_array($numbers);
    ?>
    <hr>
    <p>You can use the spaceship operator (<=>) to make the code more concise:</p>
    <?php
    $numbers = [2, 1, 3];
    usort($numbers, function ($x, $y) {
        return $x <=> $y;
    });
    print_array($numbers);
    ?>
    <hr>
    <p>you can use an arrow function, if the callback is simple</p>
    <?php
    $numbers = [2, 1, 3];
    usort($numbers, fn($x, $y) =>  $y <=> $x);
    print_array($numbers);
    ?>
    <br>
    <hr>
    <h3>2&#41;Using the PHP usort() function to sort an array of strings by length:</h3>
    <?php
    $names = ['alex', 'peter', 'john'];
    usort($names, fn($x, $y) => strlen($x) <=> strlen($y));
    print_array($names);
    ?>
    <br>
    <hr>
    <h3>3&#41;Using the PHP usort() function to sort an array of objects</h3>
    <p>Sort an array of 'Person' objects by the 'age' property.</p>
    <?php include('../resources/Person.php');
    $group = [
        new Person('Bob', 20),
        new Person('Alex', 25),
        new Person('Peter', 30)
    ];
    print_array($group);
    usort($group, fn($x, $y) => $y->age <=> $x->age);
    print_array($group);
    ?>
    <hr>
    <h4>Using a static method as a callback</h4>
    <?php
    print_array($group);
    // The first element is the class name and the second one is the static method. 
    usort($group, ['PersonComparer', 'compare']);
    print_array($group);
    ?>
</body>

</html>