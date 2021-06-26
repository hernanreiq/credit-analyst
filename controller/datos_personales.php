<?php
    echo '<h3>'.$_SESSION['usuario-online']['Nombres'] . ' ' . $_SESSION['usuario-online']['Apellidos'].'</h3>';
    echo '<p>Correo electrónico: '.$_SESSION['usuario-online']['Email'].'</p>';
    echo '<p>Saldo: <span class="badge badge-success">RD$ '.$_SESSION['usuario-online']['Saldo'].'</span></p>';
    echo '<p>Deuda: <span class="badge badge-danger">RD$ '.$_SESSION['usuario-online']['Deuda'].'</span></p>';
?>