<?php
function view(string $file, array $data): void
{
    require __DIR__ . $file;
}

view(
    '/inc/home.php',
    ['title' => 'Home', 'heading' => 'Welcome to my homepage']
);
