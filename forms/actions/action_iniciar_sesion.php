<?php
    //CONEXION CON LA BASE DE DATOS
    require_once '../../models/connect_database.php';

    //VARIABLES
    $email = $_POST['email-login'];
    $user_password = $_POST['user-password-login'];

    //SANEAMIENTO DE LAS VARIABLES
    $email = trim($email);
    $email = mysqli_real_escape_string($connect_db, $email);
    
    //COMPROBAR EXISTENCIA DEL EMAIL DEL USUARIO
    $comprobar_existencia_email = "SELECT * FROM usuarios WHERE Email = '$email'";
    $resultado_consulta = mysqli_query($connect_db, $comprobar_existencia_email);
    $datos_usuario = mysqli_fetch_array($resultado_consulta);

    if(isset($datos_usuario[2])){
        if(password_verify($user_password, $datos_usuario[3])){ //COMPROBAR QUE LA CONTRASEÑA INGRESADA SEA LA MISMA QUE HAY ENCRIPTADA EN LA BASE DE DATOS
            $_SESSION['usuario-online'] = $datos_usuario;
            header('Location:../../index.php?user=dashboard');
        } else {//EL CORREO EXISTE EN EL SISTEMA PERO LA CONTRASEÑA ES INCORRECTA
            $_SESSION['alertas-negativas'] = 'El correo o la contraseña son incorrectas.';
            header('Location:../../index.php?user=login');
        }
    } else {// EL EMAIL INGRESADO NO ESTÁ REGISTRADO EN EL SISTEMA
        $_SESSION['alertas-negativas'] = 'El correo o la contraseña son incorrectas.';
        header('Location:../../index.php?user=login');
    }
?>