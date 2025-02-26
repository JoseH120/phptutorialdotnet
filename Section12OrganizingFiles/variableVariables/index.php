<?php $title = 'variable variables'; ?>
<?php include '../inc/header.php'; ?>
<h1>PHP variable variables</h1>
<p>Typically, you have a 'variable' with a predefined name.
    For example, the following defines a variable with the
    name $title that holds a string.</p>
<pre>$title = 'PHP variable variables';</pre>
<?php
$my_var = 'title';
$$my_var = 'PHP variable variables';
echo $title;
?>
<p>How it works:</p>
<ul>
    <li>first define a variable $my_var that holds the string <u>'title'</u> </li>
    <li>Second, define a variable variable that holdleers the string 'php variable variables'
        Note that we use double $ sings instead of one. By doing this, we technically
        create another variable with the name $title.</li>
    <li>Third, display the value of the $title variable</li>
</ul>
<hr>
<h3>Example how to use variable variables</h3>
<p>In the index.php, you define the following view() function that loads the
    code from a file specified by the $file parameter:</p>
<pre>function view(string $file): void
{
    require __DIR__ . $file;
}</pre>
<p>To pass the data to the script specified by the $file, you can add a second
    parameter to the view() function like this</p>
<pre>function view(string $file, array $data): void
{
    require __DIR__ . $file;
}</pre>
<p>From the $file script, you can access the elements of the $data array.</p>
<p>The following examples use the view() function to load the code from the
    home.php script and pass an array of two elements to it:</p>
<a href="./index2.php">Click here to see this example</a>
<p>When you launch the 'index.php' file,it loads the code from the 'home.php'
    file and displays the title and heading. However, it would be great if
    you can access the elements of the $data array in the 'home.php' like this.</p>
<a href="./index3.php">Click here to see this example</a>
<?php include '../inc/footer.php'; ?>