<?php


require_once "../app/functions/validate.php";

if(isEmpty()){
    flash('message','Preencher todos os campos');

    header('Location: mandar para algum lugar');
}


$validate = validate([
    "name"      => 's',
    "email"     => 'e',
    "subject"   => 's',
    "message"   => 's'
]);


print_r($validate);

