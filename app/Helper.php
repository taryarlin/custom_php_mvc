<?php

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function base_path($path = '')
{
    return constant('APP_ROOT') . '/' . $path;
}

function view($path, $attribute = [])
{
    extract($attribute);

    require base_path('views/' . $path);
}
