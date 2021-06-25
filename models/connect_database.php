<?php
    $server_name = 'localhost';
    $user_name = 'root';
    $password = '';

    $connect_db = mysqli_connect($server_name, $user_name, $password);

    if(!$connect_db){
        die('La conexión ha fallado: ' . mysqli_connect_error());
    }
?>