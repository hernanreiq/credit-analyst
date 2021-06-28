<?php
    if($_SESSION['usuario-online'][1] == 'Usuario'){
        require_once 'views/servicios_activos.php'; //SERVICIOS ACTIVOS
    } else if($_SESSION['usuario-online'][1] = 'Gerente'){
        require_once 'views/service_list.php';
    }
?>