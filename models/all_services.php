<?php
    require_once 'connect_database.php';
    $consulta_servicios = mysqli_query($connect_db, "SELECT Nombre FROM servicios");

    while ($servicios = mysqli_fetch_array($consulta_servicios)){
        echo '<h4>'.$servicios[0].'</h4>';
        echo '<hr>';
    }
?>