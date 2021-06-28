<?php
    $servicios_usuario = mysqli_query($connect_db, "SELECT * FROM historiales WHERE ID_Usuario = '$id_usuario'");     
    if(mysqli_num_rows($servicios_usuario) >= 1){ // COMPROBAR QUE EL USUARIO TENGA AL MENOS 1 SERVICIO REGISTRADO
        $resultados_servicios_usuario = mysqli_fetch_array($servicios_usuario);
        echo $resultados_servicios_usuario[0];
    } else { // NO HAY NINGUN SERVICIO REGISTRADO EN ESTA CUENTA
        echo '<h3>No hay ningún servicio activo en esta cuenta.</h3>';
    }
?>