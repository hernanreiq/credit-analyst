<?php

    $tipo_usuario = $_POST['typeuser'];
    $email = $_POST['email-register'];
    $email = trim($email);
    $repeat_password = $_POST['password-repeat-register'];
    $user_password_register = $_POST['password-register'];

    if($tipo_usuario === 'Gerente' || $tipo_usuario === 'Usuario'){
        //CONEXIÓN A LA BASE DE DATOS
        require_once '../../models/connect_database.php';
        $nombres = mysqli_real_escape_string($connect_db, $_POST['names-register']);
        $apellidos = mysqli_real_escape_string($connect_db, $_POST['lastnames-register']);
        $email = mysqli_real_escape_string($connect_db, $email);
        $hash = password_hash($user_password_register, PASSWORD_BCRYPT, ['cost' => 12]);
        if(password_verify($repeat_password, $hash)){
            echo 'La contraseña es valida';
            $query = "INSERT INTO usuarios (Tipo_Usuario, Email, User_Password, Nombres, Apellidos) VALUES ('$tipo_usuario', '$email', '$hash', '$nombres', '$apellidos')";
            if (mysqli_query($connect_db, $query)){
                header('Location:../../index.php?user=login');
            } else {
                echo 'No se ha enviado nada!';
            }
        } else {
            echo 'La contraseña NO es valida';
        }
    }
?>