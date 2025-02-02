<?php
$example1 = false;
$example2 = !$example1;
?>
<?php
$example1 && Example1();
function Example1()
{

    echo "PHP if ... else statements.\n";

    $is_autenticated = false;
    if ($is_autenticated) {
        echo "Welcome.\n";
    } else {
        echo "You are not authorized to access this page.\n";
    }
};
?>
<?php if ($example2): ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>PHP if Statement Demo</title>
    </head>

    <body>
        <?php $is_authenticated = true; ?>
        <?php if ($is_authenticated) : ?>
            <a href="#">Logout</a>
        <?php else: ?>
            <a href="#">Login</a>
        <?php endif ?>
    </body>

    </html>
<?php endif; ?>