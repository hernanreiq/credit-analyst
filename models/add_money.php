<?php
    $id_usuario = $_SESSION['usuario-online'][0];
    if($_SESSION['usuario-online'][6] < 3000){ //SE COMPRUEBA QUE EL USUARIO TENGA MENOS DE 3000 EN LA CUENTA
        $monto_recargar = 1500;
        date_default_timezone_set('UTC');
        $hoy = date("Y-m-d"); 
        if($_SESSION['usuario-online'][7] > 0){ // SE COMPRUEBA QUE EL USUARIO TENGA UNA DEUDA
            $deuda_reducida = $_SESSION['usuario-online'][7] - $monto_recargar;
            if($deuda_reducida > 0){ // SI EL USUARIO NO PUDO PAGAR SU DEUDA ENTONCES ENTONCES DEBE ACTUALIZARSE LO QUE LE FALTA POR PAGAR
                mysqli_query($connect_db, "UPDATE usuarios SET Deuda = '$deuda_reducida' WHERE ID_Usuario = '$id_usuario'");
                mysqli_query($connect_db, "INSERT INTO recargas (ID_Usuario, Monto_Recargado, Pago_Deuda, Fecha_Recarga) VALUES ('$id_usuario', '$monto_recargar', '$monto_recargar', '$hoy')");
                $_SESSION['alertas-positivas'] = 'Su deuda ha sido reducida, pero aún debe recargar más.';
            } else if($deuda_reducida < 0){ // SI LA DEUDA FUE SALDADA Y LE HA QUEDADO DINERO, ENTONCES SE LE AGREGA AL SALDO Y LA DEUDA SE PONE EN 0
                $deuda_reducida = abs($deuda_reducida);
                $deuda = $_SESSION['usuario-online'][7];
                mysqli_query($connect_db, "INSERT INTO recargas (ID_Usuario, Monto_Recargado, Pago_Deuda, Fecha_Recarga) VALUES ('$id_usuario', '$monto_recargar', '$deuda', '$hoy')");
                mysqli_query($connect_db, "UPDATE usuarios SET Saldo = Saldo + '$deuda_reducida', Deuda = '0' WHERE ID_Usuario = '$id_usuario'");
                $_SESSION['alertas-positivas'] = 'Su deuda fue saldada y ahora su saldo es de RD$ '.number_format($deuda_reducida + $_SESSION['usuario-online'][6], 0, '.', ',').'.';
            }
        } else if($_SESSION['usuario-online'][6] < 3000){ //SI EL USUARIO NO TIENE DEUDA PERO TIENE EN SU CUENTA MENOS DE 3000 ENTONCES SE AGREGA BALANCE
            mysqli_query($connect_db, "INSERT INTO recargas (ID_Usuario, Monto_Recargado, Pago_Deuda, Fecha_Recarga) VALUES ('$id_usuario', '$monto_recargar', '0', '$hoy')");
            mysqli_query($connect_db, "UPDATE usuarios SET Saldo = Saldo + '$monto_recargar' WHERE ID_Usuario = '$id_usuario'");
            $_SESSION['alertas-positivas'] = 'Su cuenta ha sido recargada con RD$ '. $monto_recargar.'.';
        }
        // ACTUALIZACION DE LOS DATOS DEL USUARIO
        $actualizar_datos_usuario = mysqli_query($connect_db, "SELECT * FROM usuarios WHERE ID_Usuario = '$id_usuario'");
        $_SESSION['usuario-online'] = mysqli_fetch_array($actualizar_datos_usuario);
    } else { // EL USUARIO NO NECESITA RECARGAR
        $_SESSION['alertas-negativas'] = 'Usted ya dispone de saldo suficiente para adquirir servicios.';
    }
    header('Location: index.php?user=dashboard');
?>