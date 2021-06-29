<?php
    if($_SESSION['usuario-online'][1] == 'Usuario'){
        $id_usuario = $_SESSION['usuario-online'][0];
    }
    $historial_usuario = mysqli_query($connect_db, "SELECT * FROM historiales WHERE ID_Usuario = '$id_usuario' AND Fecha_Expiracion IS NOT NULL");     
    if(mysqli_num_rows($historial_usuario) >= 1){ // COMPROBAR QUE EL USUARIO TENGA AL MENOS 1 SERVICIO REGISTRADO
        while($resultados_historial_usuario = mysqli_fetch_array($historial_usuario)){
            $buscar_servicio = mysqli_query($connect_db, "SELECT * FROM servicios WHERE ID_Servicio = '$resultados_historial_usuario[2]'");
            $resultado_servicio = mysqli_fetch_array($buscar_servicio);
            echo '<tr>';
                echo '<td>'.$resultado_servicio[1].'</td>';
                echo '<td><span class="badge badge-success">RD$ '.number_format($resultados_historial_usuario[4], 0, '.', ',').'</span></td>';
                echo '<td>'.$resultados_historial_usuario[3].'</td>';
            echo '</tr>';
        }
    } else { // NO HAY NINGUN SERVICIO REGISTRADO EN ESTA CUENTA
        echo '<h3>No hay ningún servicio expirado en esta cuenta.</h3>';
    }
?>