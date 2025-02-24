<?php include 'inc/header.php'; ?>
<?php include_once 'functions.php'; ?>

<?php
/* The variables from the included file are local to that function. See the following example: */
function render_article()
{
    include 'functions.php';
    return "<article>
        <h1>$title</h1>
        <p>$content</p>
        </article>";
}
echo render_article();
/* however all functions, classes, interfaces and traits defined in the include file will have a global scope. */
?>

<?php include 'inc/footer.php'; ?>