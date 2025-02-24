<?php
if (!function_exists('dd')) :
    function dd($data)
    {
        echo "<pre>\n";
        var_dump($data);
        echo "</pre>\n";
        die();
    }
endif;
