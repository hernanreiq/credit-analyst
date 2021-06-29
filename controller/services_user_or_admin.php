<?php
    if($_SESSION['usuario-online'][1] == 'Usuario'){
        require_once 'views/servicios_disponibles.php'; //SERVICIOS DISPONIBLES 
        require_once 'views/recargas.php'; //RECARGAS REALIZADAS  
        require_once 'views/historial_servicios.php'; //HISTORIAL DE SERVICIOS
    } else if($_SESSION['usuario-online'][1] == 'Gerente'){
        require_once 'views/search_user.php'; // BUSCAR USUARIOS
        require_once 'views/results_user.php'; // RESULTADOS DE LA BUSQUEDA
    }
?>