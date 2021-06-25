<?php
    $tipo_usuario = $_POST['typeuser'];
    $nombres = $_POST['names-register'];
    $apellidos = $_POST['lastnames-register'];
    $email = $_POST['email-register'];
    $password = $_POST['password-register'];
    $repeat_password = $_POST['password-repeat-register'];

    if($tipo_usuario === 'Gerente' || $tipo_usuario === 'Usuario'){
        echo 'Tipo de usuario registrado: ' . $tipo_usuario;
    }
?>