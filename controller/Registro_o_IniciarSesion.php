<?php
    if(isset($_GET['user'])){
        if($_GET['user'] == 'login'){
            require_once 'forms/iniciar_sesion.php';
        } else if ($_GET['user'] == 'register'){
            require_once 'forms/registro.php';
        } else {
            header('Location:index.php?user=login');
        }
    } else {
        header('Location:index.php?user=login');
    }
?>