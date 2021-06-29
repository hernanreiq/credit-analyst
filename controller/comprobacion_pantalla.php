<?php
    //CONEXIÓN CON LA BASE DE DATOS
    require_once 'models/connect_database.php';

    //COMPROBANDO EN QUE PARTE DEL SISTEMA 
    if(isset($_SESSION['usuario-online'])){ // SI EL USUARIO ESTÁ ONLINE
        if(isset($_GET['user'])){
            if($_GET['user'] == 'dashboard'){ //PANEL DE USUARIO
                require_once 'views/user_dashboard.php';
            } else if($_GET['user'] == 'logout'){ // CERRAR LA SESIÓN
                unset($_SESSION['usuario-online']);
                $_SESSION['alertas-positivas'] = 'Sesión cerrada con éxito!';
                header('Location: index.php?user=login');
            } else {
                header('Location:index.php?user=dashboard');
            }
        } else if(isset($_GET['add']) && $_SESSION['usuario-online'][1] == 'Usuario'){ // AÑADIR SERVICIOS
            require_once 'models/add_services.php';
        } else if (isset($_GET['view'])){ //ADMINISTRADOR DE SERVICIOS
            if($_GET['view'] == 'services' && $_SESSION['usuario-online'][1] == 'Gerente'){
                require_once 'views/dashboard_services.php';
            } else {
                $_SESSION['alertas-negativas'] = 'Usted no tiene permisos de Gerente.';
                header('Location:index.php?user=dashboard');
            }
        } else if(isset($_GET['view-user-id']) && $_SESSION['usuario-online'][1] == 'Gerente'){ // VER LOS DATOS DE UN USUARIO DESDE LA CUENTA DE GERENTE
            require_once 'views/view_user_data.php';
        } else if(isset($_GET['cancel']) && $_SESSION['usuario-online'][1] == 'Usuario'){//CANCELAR UN SERVICIO ACTIVO
            require_once 'models/cancel_services.php';
        } else { //EL USUARIO ESTÁ ONLINE PERO TIENE UN ENLACE DISTINTO
            $_SESSION['alertas-negativas'] = 'Usted no tiene permisos de Gerente.';
            header('Location:index.php?user=dashboard');
        }
    } else if(isset($_GET['user'])){ // EL USUARIO NO ESTÁ ONLINE
        if($_GET['user'] == 'login'){ // INICIAR SESION
            require_once 'forms/iniciar_sesion.php';
        } else if ($_GET['user'] == 'register'){ // REGISTRARSE
            require_once 'forms/registro.php';
        } else {
            header('Location:index.php?user=login');
        }
    } else { // INICIAR SESION PORQUE NO HAY NADA SELECIONADO
        header('Location:index.php?user=login');
    }
?>