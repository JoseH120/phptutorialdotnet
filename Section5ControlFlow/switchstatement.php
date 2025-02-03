<?php
echo "PHP Switch.\n";
$role = 'subscriber';
if ('admin' === $role) {
    $message = 'Welcome, admin';
} elseif ('editor' === $role) {
    $message = 'Welcome! You have some pending articles to edit.!';
} elseif ('author' === $role) {
    $message = 'Welcome! Do you want to publish the draft';
} elseif ('subscriber' === $role) {
    $message = 'Welcome! Check out some new articles.';
} else {
    $message = 'Sorry! You are not authorized to access this page.';
}
echo $message . PHP_EOL;

/* When the value of a single variable specifies the number of different 
choices, it's much cleaner to use the 'switch' statement like this: */
$role = 'admin';
$message = '';

switch ($role) {
    case 'admin':
        $message = 'Welcome, Admin';
        break;
    case 'editor':
        $message = 'Welcome! You have some pending article to edit.!';
        break;
    case 'author':
        $message = 'Welcome! Do you want to publish the draft.';
        break;
    case 'subscriber':
        $message = 'Welcome! check out some new articles.';
        break;
    default:
        $message = 'Sorry! you are not authorized to access this page.';
        break;
}
echo $message . PHP_EOL;
