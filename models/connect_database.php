<?php
    $server_name = 'localhost';
    $user_name = 'root';
    $password = '';
    $database = 'credit_analyst';
    
    $connect_db = mysqli_connect($server_name, $user_name, $password, $database);
    if(!$connect_db){
        die('La conexión ha fallado: ' . mysqli_connect_error());
    }

    session_start();
?>