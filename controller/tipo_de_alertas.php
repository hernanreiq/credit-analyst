<?php
    if(isset($_SESSION['alertas-positivas'])){
        require_once 'views/alerta-positiva.php';
    } else if(isset($_SESSION['alertas-negativas'])){
        require_once 'views/alerta-negativa.php';
    }
?>