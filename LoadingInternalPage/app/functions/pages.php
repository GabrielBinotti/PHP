<?php

function load()
{
    $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);

    $page = (!$page) ? 'home.php' : "{$page}.php";

    if (!file_exists($page)) {
        throw new \Exception("Error, Page Not Found!!!", 1);
    }

    return $page;
}