<?php
    echo '<h3>'.$_SESSION['usuario-online']['Nombres'] . ' ' . $_SESSION['usuario-online']['Apellidos'].'</h3>';
    if($_SESSION['usuario-online'][1] == 'Gerente'){
        echo '<p class="h3"><span class="badge badge-warning">Gerente</span></p>';
    } else if($_SESSION['usuario-online'][1] == 'Usuario'){
        echo '<p class="h3"><span class="badge badge-info">Usuario</span></p>';
    }
    echo '<p>Correo electrónico: '.$_SESSION['usuario-online']['Email'].'</p>';
    if($_SESSION['usuario-online'][1] == 'Usuario'){
        echo '<p>Saldo: <span class="badge badge-success">RD$ '.$_SESSION['usuario-online']['Saldo'].'</span></p>';
        echo '<p>Deuda: <span class="badge badge-danger">RD$ '.$_SESSION['usuario-online']['Deuda'].'</span></p>';
        echo '<a href="?add=money" class="btn btn-success w-100 mb-1">Recargar saldo <i class="fas fa-money-bill"></i></a>';
    } 
?>