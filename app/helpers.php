<?php

use App\Framework\App;

if (! function_exists('view')) {
    function view($view)
    {
        return "app/views/$view.blade.php";
    }
}

if (! function_exists('config')) {
    function config($key = null)
    {
        if (! $key) {
            App::resolve('config');
        }

        return App::resolve('config')[$key];
    }
}

function redirect($path)
{
    header("Location: /{$path}");
}
