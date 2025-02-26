<?php $title = 'PHP __DIR__'; ?>
<?php include '../inc/header.php'; ?>
<h1>PHP __DIR__</h1>
<h3>PHP __dir__ magic constant</h3>
<p>When you reference the __DIR__ inside a file, it
    returns the directory of the file.
    The __DIR__ doesn't include a trailing slash e.g.,
    / or \ except it's a root directory.</p>
<p>When you use the __DIR__ inside an include, the __DIR__
    returns the directory of the include file</p>
<p>Technically speaking, the __DIR__ is equivalent to the
    dirname(__FILE__). However, using the __DIR__ is more
    concise than the dirname(__FILE__).</p>
<h3>Simple PHP __DIR__ example</h3>
<p><?php echo __DIR__; ?></p>

<?php $showdir = true ?>
<?php include '../inc/footer.php'; ?>