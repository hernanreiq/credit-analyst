<?php
    require_once 'connect_database.php';
    $consultar_servicios = mysqli_query($connect_db, "SELECT * FROM servicios");

    $resta_servicio = 3;
    while($resultados_servicios = mysqli_fetch_array($consultar_servicios)){
        if(($resta_servicio - $resultados_servicios[0]) == 2){
            echo '<div class="row">';
        }
        echo '<div class="col-md-4">';
            echo '<div class="card my-2">';
                echo '<h3 class="card-title py-2 bg-primary text-white text-center">'.$resultados_servicios[1].'</h3>';
                    echo '<div class="card-body">';
                        echo $resultados_servicios[2];
                        echo '<h4><span class="badge badge-success w-100 mt-3">RD$ '.number_format($resultados_servicios[3], 0, '.', ',').'</span></h4>';
                    echo '</div>';
        if($_SESSION['usuario-online'][1] == 'Gerente'){
            echo '<a href="?view=services&edit-services='.$resultados_servicios[0].'" class="btn btn-info">Editar servicio <i class="far fa-edit"></i></a>';
        } else if($_SESSION['usuario-online'][1] == 'Usuario'){
            echo '<a href="?add='.$resultados_servicios[1].'" class="btn btn-success">Adquirir servicio <i class="fas fa-plus"></i></a>';
        }
            echo '</div>';
        echo '</div>';
        if(($resultados_servicios[0] % 3) == 0){
            $resta_servicio += 3;
            echo '</div>';
        }
    }
    if((mysqli_num_rows($consultar_servicios) % 3) != 0){
        echo '</div>';
    }
?>