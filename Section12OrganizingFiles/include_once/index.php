<?php
include 'inc/functions.php';
// include 'inc/functions.php'; // -> this throws errors
/* Like  */
?>
<?php include_once 'inc/header.php'; ?>
<?php include_once 'inc/header.php'; ?>

<h1>PHP include_once Demo</h1>
<h3>Why use the PHP include_once construct:</h3>
<p>Image that you have a filed called 'index.php' that
    loads two other files:</p>
<p>
    The <span>Database.php</span> file also loads the
    <span>Logger.php</span> file. In this case, the Logger.php
    file is used twice, once in the <span>Database.php</span>
    file and another in the <span>index.php</span>
</p>

<img src="public/img/php-include_once.svg" alt="imagen de muestra.">

<p>
    In this case, you need to use the <span>include_once</span>
    construct to load the <span>Logger.php</span> file to make
    it work properly.
</p>

<?php include 'inc/footer.php'; ?>