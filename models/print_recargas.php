<?php
    if($_SESSION['usuario-online'][1] == 'Usuario'){
        $id_usuario = $_SESSION['usuario-online'][0];
    }
    $buscar_recargas = mysqli_query($connect_db, "SELECT * FROM recargas WHERE ID_Usuario = '$id_usuario'");
    while($resultados_recargas = mysqli_fetch_array($buscar_recargas)){
        echo '<tr>';
            echo '<td><span class="badge badge-success">RD$ '.number_format($resultados_recargas[2], 0, '.', ',').'</span></td>';
            echo '<td><span class="badge badge-danger">RD$ '.number_format($resultados_recargas[3], 0, '.', ',').'</span></td>';
            echo '<td>'.$resultados_recargas[4].'</td>';
        echo '</tr>';
    }
?>