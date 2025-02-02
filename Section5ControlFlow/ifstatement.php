<?php
$example1 = false;
$example3 = false;
$example2 = ! ($example1 || $example3);
$example2_1 = true;

?>
<!-- Example 1 if statement-->
<?php
$example1 && example1();
function example1()
{
    echo "If statement.\n";
    $is_admin = true;
    $can_approve = false;
    if ($is_admin) {
        echo "Welcome Admin.\n";
    }


    echo "Nesting IF Statements.\n";
    if ($is_admin) {
        echo "Welcome Admin inside of just one if.\n";
        $can_approve = !$can_approve;
        if ($can_approve) {
            echo "Please approve the pending items.\n";
        }
    }


    echo <<<TEXT
Embed if statement in HTML.\n
<?php if( expression ) : ?>
// HTML CODE HERE
<?php endif; ?>

+++++++++++++++++++++++++++++++++++++++++++++++++
+ \t\t\tTry\t\t\t+
+ \tChangin the value of \$example1 to false\t+
+++++++++++++++++++++++++++++++++++++++++++++++++

TEXT;
};
?>
<!-- Example 2 if statement -->
<?php if ($example2): ?>
    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <?php $is_admin = true; ?>
        <?php if ($is_admin) : ?>
            <a href="#">Edit</a>
        <?php endif; ?>
        <a href="#">View</a>
    </body>

    </html>
<?php endif; ?>