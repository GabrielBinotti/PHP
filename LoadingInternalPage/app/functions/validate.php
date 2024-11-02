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


function flash($key, $message, $type = 'danger')
{
    if(!isset($_SESSION['flash'][$key])){
        $_SESSION['flash'][$key] = "<span class='alert alert-{$type}'>{$message}</span>";
    }
}


function get($key){
    if(isset($_SESSION['flash'][$key])){
        $message = $_SESSION['flash'][$key];
        unset($_SESSION['flash'][$key]);

        return $message ?? '';
    }
}

function isEmpty(){

    $request = request();

    $empty = false;

    foreach ($$request as $key => $value) {
        if(empty($request[$key])){
            $empty = true;
        }
    }

    return $empty;
}