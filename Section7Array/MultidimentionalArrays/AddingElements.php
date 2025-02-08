<?php
echo "Adding Elements to a PHP Multidimensional Array.\nSyntax.\n";
/* To add an element to a multidimentional array, You use the following syntax: */
echo '$array[] = [element1, element2, ...]';
$tasks = [
    ['Learn PHP Programming', 2],
];
$tasks[] = ['build something matter in PHP', 2];
echo '<pre>';
print_r($tasks);
echo '</pre>';
