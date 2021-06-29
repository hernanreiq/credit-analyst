<?php
    $nombre_servicio = mysqli_real_escape_string($connect_db, $_GET['cancel']);
    $buscar_id_servicio = mysqli_query($connect_db, "SELECT ID_Servicio FROM servicios WHERE Nombre = '$nombre_servicio'");

    if(mysqli_num_rows($buscar_id_servicio) != 1){
        $_SESSION['alertas-negativas'] = 'No se pudo cancelar el servicio, prueba cancelarlo otra vez.';
    } else {
        $id_servicio = mysqli_fetch_array($buscar_id_servicio);
        $id_usuario = $_SESSION['usuario-online'][0];
        $buscar_servicio_en_historial = mysqli_query($connect_db, "SELECT ID_Historial FROM historiales WHERE ID_Usuario = '$id_usuario' AND ID_Servicio = '$id_servicio[0]' AND Fecha_Expiracion IS NULL");
        if(mysqli_num_rows($buscar_servicio_en_historial) == 1){
            $id_historial = mysqli_fetch_array($buscar_servicio_en_historial);
            date_default_timezone_set('UTC-4');
            $hoy = date("Y-m-d"); 
            mysqli_query($connect_db, "UPDATE historiales SET Fecha_Expiracion = '$hoy' WHERE ID_Historial = '$id_historial[0]'");
            $_SESSION['alertas-positivas'] = 'Servicio cancelado con éxito!';
        } else {
            $_SESSION['alertas-negativas'] = 'No este servicio no necesita cancelación.';
        }
    }
    header('Location: index.php?user=dashboard');
?>