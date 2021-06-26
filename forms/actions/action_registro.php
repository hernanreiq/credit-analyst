<?php
    //CONEXIÓN A LA BASE DE DATOS
    require_once '../../models/connect_database.php';

    //VARIABLES
    $tipo_usuario = $_POST['typeuser'];
    $email = $_POST['email-register'];
    $email = trim($email);
    $repeat_password = $_POST['password-repeat-register'];
    $user_password_register = $_POST['password-register'];
  
    //COMPROBANDO QUE SEA UN TIPO DE USUARIO VÁLIDO
    if($tipo_usuario === 'Gerente' || $tipo_usuario === 'Usuario'){
        $email = mysqli_real_escape_string($connect_db, $email);
        $email_existente = mysqli_query($connect_db, "SELECT * FROM usuarios WHERE Email = '$email'");
        $consulta_email_existente = mysqli_fetch_array($email_existente);
        
        //COMPROBANDO QUE EL EMAIL NO ESTÉ EN USO
        if(isset($consulta_email_existente[0])){ 
            $_SESSION['alertas-negativas'] = 'Ya existe un correo eléctronico asociada a esta cuenta.';
            header('Location:../../index.php?user=register');
        } else {
            //SANEAMIENTO DEL NOMBRE Y CONTRASEÑA PARA EVITAR INYECCIONE SQL            
            $nombres = mysqli_real_escape_string($connect_db, $_POST['names-register']);
            $apellidos = mysqli_real_escape_string($connect_db, $_POST['lastnames-register']);
            
            //ENCRIPTACION DE LA CONTRASEÑA
            $hash = password_hash($user_password_register, PASSWORD_BCRYPT, ['cost' => 12]);
            if(password_verify($repeat_password, $hash)){ //SI LA CONTRASEÑA ES VÁLIDA, ENTONCES SE HACE EL REGISTRO
                $query = "INSERT INTO usuarios (Tipo_Usuario, Email, User_Password, Nombres, Apellidos) VALUES ('$tipo_usuario', '$email', '$hash', '$nombres', '$apellidos')";
                if (mysqli_query($connect_db, $query)){
                    $_SESSION['alertas-positivas'] = 'Registro realizado con éxito, ya puedes iniciar sesión!';
                    header('Location:../../index.php?user=login');
                } else {
                    $_SESSION['alertas-negativas'] = 'Ha ocurrido un error, rellene el formulario nuevamente.';
                    header('Location:../../index.php?user=register');
                }
            } else {
                $_SESSION['alertas-negativas'] = 'La contraseña debe ser igual en ambos campos.';
                header('Location:../../index.php?user=register');
            }
        }
    } else { //EL USUARIO HA MODIFICADO EL CAMPO DE TIPO DE USUARIOS
        $_SESSION['alertas-negativas'] = 'Debe elegir un tipo de usuario válido.';
        header('Location:../../index.php?user=register');
    }
?>