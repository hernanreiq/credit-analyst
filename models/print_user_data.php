<?php
    require_once 'connect_database.php';
    if(isset($_GET['view-user-id'])){//SE COMPRUEBA SI VIENE UNA ID EN ESE PARAMETRO YA QUE EL CODIGO SE REUTILIZA PARA CREAR EL PDF
        $id_usuario = $_GET['view-user-id'];
        $id_usuario = mysqli_real_escape_string($connect_db, $_GET['view-user-id']);
    }
    if(is_numeric($id_usuario)){ // COMPROBAR QUE EL ID PASADO SEA UN NUMERO ANTES DE BUSCARLO EN LA BASE DE DATOS
        $datos_usuario = mysqli_query($connect_db, "SELECT * FROM usuarios WHERE ID_Usuario = '$id_usuario'");     
        if(mysqli_num_rows($datos_usuario) == 1){ // COMPROBAR QUE EL ID NO ESTE DUPLICADO
            $resultados_datos_usuario = mysqli_fetch_array($datos_usuario);
            echo '<div class="row">';
                echo '<div class="col-md-6">';
                    echo '<h4 class="font-weight-normal">ID: <span class="font-weight-bold">'.$resultados_datos_usuario[0].'</span></h4>';
                echo '</div>';
                echo '<div class="col-md-6">';
                    echo '<h4 class="font-weight-normal">Tipo de cuenta: <span class="font-weight-bold">'.$resultados_datos_usuario[1].'</span></h4>'; 
                echo '</div>';
            echo '</div>';
            echo '<div class="row">';
                echo '<div class="col-md-6">';
                    echo '<h4 class="font-weight-normal">Nombre(s): <span class="font-weight-bold">'.$resultados_datos_usuario[4].'</span></h4>';
                echo '</div>';
                echo '<div class="col-md-6">';
                    echo '<h4 class="font-weight-normal">Apellido(s): <span class="font-weight-bold">'.$resultados_datos_usuario[5].'</span></h4>'; 
                echo '</div>';
            echo '</div>';
            $_SESSION['nombre-apellido-usuario'] = $resultados_datos_usuario[4] . ' ' . $resultados_datos_usuario[5];
            echo '<div class="row">';
                echo '<div class="col-md-6">';
                    echo '<h4 class="font-weight-normal">Saldo disponible: <span class="font-weight-bold">RD$ '.number_format($resultados_datos_usuario[6], 0, '.', ',').'</span></h4>';
                echo '</div>';
                echo '<div class="col-md-6">';
                    echo '<h4 class="font-weight-normal">Deuda actual: <span class="font-weight-bold">RD$ '.number_format($resultados_datos_usuario[7], 0, '.', ',').'</span></h4>'; 
                echo '</div>';
            echo '</div>';
            echo '<div class="row">';
                echo '<div class="col-md-12">';
                    echo '<h4 class="font-weight-normal">Correo electr??nico: <span class="font-weight-bold"><a class="text-decoration-none" href="mailto:'.$resultados_datos_usuario[2].'">'.$resultados_datos_usuario[2].'</a></span></h4>';
                echo '</div>';
            echo '</div>';
        } else { // EL ID QUE SE PAS?? POR GET NO EST?? EN LA BASE DE DATOS
            $_SESSION['alertas-negativas'] = 'Este usuario no est?? registrado.';
            header('Location: index.php?user=dashboard');
        }
    } else { // EL ID QUE SE PAS?? POR GET NO  ES UN NUMERO
        $_SESSION['alertas-negativas'] = 'Este usuario no est?? registrado.';
        header('Location: index.php?user=dashboard');
    }
?>