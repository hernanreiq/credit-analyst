<?php
    if($_SESSION['usuario-online'][1] == 'Usuario'){
        $id_usuario = $_SESSION['usuario-online'][0];
    }
    $historial_usuario = mysqli_query($connect_db, "SELECT * FROM historiales WHERE ID_Usuario = '$id_usuario' AND Fecha_Expiracion IS NOT NULL");     
    if(mysqli_num_rows($historial_usuario) >= 1){ // COMPROBAR QUE EL USUARIO TENGA AL MENOS 1 SERVICIO REGISTRADO
        while($resultados_historial_usuario = mysqli_fetch_array($historial_usuario)){
            $buscar_servicio = mysqli_query($connect_db, "SELECT * FROM servicios WHERE ID_Servicio = '$resultados_historial_usuario[2]'");
            $resultado_servicio = mysqli_fetch_array($buscar_servicio);
            echo '<div class="card mb-3">';
                echo '<h4 class="card-title py-2 bg-secondary pl-3 text-white">'.$resultado_servicio[1].'</h4>';
                echo '<div class="card-body py-0">';
                    echo '<p class="font-weight-bold">Precio del servicio en el momento de su activación: <span class="badge badge-success">RD$ '.number_format($resultados_historial_usuario[4], 0, '.', ',').'</span></p>';
                    echo '<p class="font-weight-bold">Fecha de expiración: <span class="badge badge-secondary">'.$resultados_historial_usuario[3].'</span></p>';
                echo '</div>';
            echo '</div>';
        }
    } else { // NO HAY NINGUN SERVICIO REGISTRADO EN ESTA CUENTA
        echo '<h3>No hay ningún servicio expirado en esta cuenta.</h3>';
    }
?>