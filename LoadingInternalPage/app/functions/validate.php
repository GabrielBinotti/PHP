<?php

declare(strict_types=1);

function validate(array $fields): object
{

    $validate = [];

    $request = request();

    foreach ($fields as $field => $type) {
        switch ($type) {
            case 's':
                $validate[$field] = strip_tags($request[$field]);
                break;
            case 'i':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_NUMBER_INT);
                break;
            case 'e':
                $validate[$field] = filter_var($request[$field], FILTER_SANITIZE_EMAIL);
                break;
        }
    }

    return (object) $validate;
}


function request()
{
    $request = $_SERVER['REQUEST_METHOD'];

    if($request == 'POST'){
        return $_POST;
    }

    return $_GET;
}