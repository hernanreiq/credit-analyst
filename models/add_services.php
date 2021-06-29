<?php
    require_once 'connect_database.php';

    $id_usuario = $_SESSION['usuario-online'][0];
    $saldo_usuario = $_SESSION['usuario-online'][6];

    $nombre_servicio = mysqli_real_escape_string($connect_db, $_GET['add']);

    $consultar_existencia_servicio = mysqli_query($connect_db, "SELECT * FROM servicios WHERE Nombre = '$nombre_servicio'");
    $servicio_consultado = mysqli_fetch_array($consultar_existencia_servicio);
    $precio_servicio = $servicio_consultado[3];
    $id_servicio = $servicio_consultado[0];
    
    if(mysqli_num_rows($consultar_existencia_servicio) == 1 && $_SESSION['usuario-online'][1] == 'Usuario'){ //COMPROBAMOS QUE EL SERVICIO EXISTA Y QUE SEA UN USUARIO
        $consultar_historial = mysqli_query($connect_db, "SELECT * FROM historiales WHERE ID_Usuario = '$id_usuario' AND ID_Servicio = '$id_servicio' AND Fecha_Expiracion IS NULL");
        if(mysqli_num_rows($consultar_historial) >= 1){ //COMPROBAMOS QUE EL USUARIO NO HAYA ACTIVADO EL SERVICIO ANTES
            $_SESSION['alertas-negativas'] = 'Usted ya tiene este servicio activado.';
        } else { //SI EL SERVICIO AUN NO ESTÁ COMPRADO, ENTONCES SE LE PROCESA EL PAGO
            if ($saldo_usuario >= $precio_servicio){ //SI EL USUARIO TIENE SALDO LO PAGA DE INMEDIATO
                mysqli_query($connect_db, "UPDATE usuarios SET Saldo = Saldo - '$precio_servicio' WHERE ID_Usuario = '$id_usuario'");
            } else if($saldo_usuario > 0 && $saldo_usuario < $precio_servicio){ //EL USUARIO TIENE SALDO, PERO NO ES SUFICIENTE PARA PAGAR EL SERVICIO, ASI QUE LO RESTANTE ES UNA DEUDA
                $nueva_deuda = abs($saldo_usuario - $precio_servicio); 
                mysqli_query($connect_db, "UPDATE usuarios SET Saldo = '0', Deuda = '$nueva_deuda' WHERE ID_Usuario = '$id_usuario'");
            } else if ($saldo_usuario == 0){ // SI EL USUARIO NO TIENE SALDO ENTONCES SE CONVIERTE EN UNA DEUDA
                mysqli_query($connect_db, "UPDATE usuarios SET Deuda = Deuda + '$precio_servicio' WHERE ID_Usuario = '$id_usuario'");
            }
            //REGISTRAMOS LA COMPRA
            mysqli_query($connect_db, "INSERT INTO historiales (ID_Usuario, ID_Servicio, Monto_Pagado) VALUES ('$id_usuario', '$id_servicio', '$precio_servicio')");
            //ACTUALIZAMOS LOS DATOS DEL USUARIO EN LA VARIABLE SUPER GLOBAL DE SESSION
            $consultar_datos = mysqli_query($connect_db, "SELECT * FROM usuarios WHERE ID_Usuario = '$id_usuario'");
            $_SESSION['usuario-online'] = mysqli_fetch_array($consultar_datos);
            //RETROALIMENTACION
            $_SESSION['alertas-positivas'] = 'Servicio añadido con éxito!';
        }
    } else {
        $_SESSION['alertas-negativas'] = 'No es posible añadir este servicio, intente de nuevo.';
    }
    header('Location: index.php?user=dashboard');
?>