<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <h1>Removing elements from a PHP multidimensional array.</h1>
    <section>
        <p>
            To remove an element from a multidimensiona array, you can use the
            unset() function.
            <br>
            The following example uses the <span>unset()</span>
        </p>
        <h5>Before using unset</h5>
        <?php include('../misc/misc.php');
        $tasks = [
            ['Learn php programming', 2],
            ['Practice php', 2],
            ['Work', 8],
            ['Do exercise', 1]
        ];
        // print_array($tasks);
        ?>

        <!-- <h5>After using unset</h5> -->
        <?php
        /*         unset($tasks[1]);
        print_array($tasks); */
        ?>
        <p>Note that the unset() functiont doesn't change the array's keys.
            <br>
            To reindex the key, you can use the array_splice() function.
            <br>
            For example:
        </p>
        <?php
        // array_splice($tasks[2], 2, 1);
        array_splice($tasks[2], 2, 1);
        print_array($tasks);
        ?>
    </section>

</body>

</html>