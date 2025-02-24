<?php $title = "PHP require"; ?>
<?php include "../inc/header.php"; ?>
<h1>PHP require construct</h1>

<p>php require is not a function.</p>

<h3>php require_once</h3>
<p>PHP require_once is the counterpart of the include_once except that
    the require_once issues an error if it fails to load the file. Also,
    the require_once wont't load the ifle again if the file has been loaded</p>
<?php
require '../inc/functions.php';
/* Sometimes, you see the following code: */
dd([1, 2, 3]);

?>
<?php include "../inc/footer.php"; ?>