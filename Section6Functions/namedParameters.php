<?php
echo <<<TEXT
    PHP Named Arguments.
    
    TEXT;
/* Since PHP 8.0, you can use named arguments for functions. The named 
arguments allow you to pass arguments to a "function" based on the 
"parameter names" rather than the parameter positions. */
function find($needle, $hastack)
{
    return strpos($hastack, $needle);
}
/* To call the find() function , you pass the arguments based on the
parameter position like this: */
find('awesome', 'PHP is awesome!');
/* In this case $needle is 'awesome' and $haystack is 'PHP is awesome!'
However, the function call is not apparent. For example, you don't know
which argument is the needle and which argument is the haystack.
Sometimes, you may accidentally make mistake by passing the arguments in
the wrong order. For Example. */
find(
    'PHP is awesome!',
    'awesome'
);
/* This is buggy and very difficult to troubleshoot.
To avoid this, you may add commets to the argument like this. */
find(
    'PHP is awesome!', // needle
    'awesome'          //haystack
);
/* The comment makes the code more clear. However,it's not robust. 
to improve this, php introduced the named arguments that allow you to specify
the parameter names when passing arguments:*/
echo find(
    $needle = 'awesome',
    $haystack = 'PHP is awesome!'
);
