<?php


require_once "../app/functions/validate.php";

$validate = validate([
    "name"      => 's',
    "email"     => 'e',
    "subject"   => 's',
    "message"   => 's'
]);


print_r($validate);

