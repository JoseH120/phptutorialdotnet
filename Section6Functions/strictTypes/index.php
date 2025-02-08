<?php
echo "PHP strict_types and include directives.\n";
include "functions.php";
echo add(1.5, 2.5);
/* Even though the functions.php declares the strict typing directive, it does not affect
the index.php
When you call a function defined in a file with strict type (functions.php) from a file 
without strict typing (index.php), PHP will respect the preference of the caller(index.php)
That means it's up to the caller to decide whether to use the strict mode or not. In this
case, the (index.php) won't execute in the strict mode. */
