<?php
function view(string $file, array $data): void
{
    foreach ($data as $key => $value) {
        $$key = $value;
    }

    require __DIR__ . '/' . $file;
}

view(
    'inc/home2.php',
    ['title' => 'Home 2', 'heading' => 'Welcome to my home page']
);
