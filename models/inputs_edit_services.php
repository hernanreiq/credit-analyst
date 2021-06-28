<?php 
    require_once 'connect_database.php';
    if(isset($_GET['edit-services'])){
        if(is_numeric($_GET['edit-services'])){
            $id_servicio = $_GET['edit-services'];
            $consultar_servicios = mysqli_query($connect_db, "SELECT * FROM servicios WHERE ID_Servicio = '$id_servicio'");
            if(mysqli_num_rows($consultar_servicios) == 0){
                $_SESSION['alertas-negativas'] = 'Este servicio no existe en la base de datos.';
                header('Location: index.php?view=services');
            } else {
                $resultado_servicios = mysqli_fetch_array($consultar_servicios);
            }
        }
    }
?>

<div class="row mb-3">
    <label class="h4" for="name-service">Nombre</label>
    
    <?php //CAMBIAR EL INPUT DEL NOMBRE SI SE HA ELEGIDO EDITAR UN SERVICIO
        if(isset($_GET['edit-services'])){
            if(is_numeric($_GET['edit-services'])){
                $_SESSION['id-servicio-editar'] = $resultado_servicios[0];
                echo '<input required type="text" name="name-service" id="name-service" class="w-100 p-1" value="'.$resultado_servicios[1].'">';
            }
        } else {
            echo '<input required type="text" placeholder="Elige un servicio para editar" class="w-100 p-1" disabled>';
        }
    ?>
</div>
<div class="row mb-3">
    <label class="h4" for="description-service">Descripción</label>

    <?php //CAMBIAR EL TEXTAREA DE LA DESCRIPCION SI SE HA ELEGIDO EDITAR UN SERVICIO
        if(isset($_GET['edit-services'])){
            if(is_numeric($_GET['edit-services'])){
                echo '<textarea requiered name="description-service" id="description-service" cols="30" rows="10" class="w-100 p-1">'.$resultado_servicios[2].'</textarea>';
            }
        } else {
            echo '<textarea requiered id="description-service" placeholder="Elige un servicio para editar" cols="30" rows="10" class="w-100 p-1" disabled></textarea>';
        }
    ?>   
</div>
<div class="row mb-3">
    <label class="h4" for="price-service">Precio</label>

    <?php //CAMBIAR EL TEXTAREA DE LA DESCRIPCION SI SE HA ELEGIDO EDITAR UN SERVICIO
        if(isset($_GET['edit-services'])){
            if(is_numeric($_GET['edit-services'])){
                echo '<input required type="number" name="price-service" id="price-service" class="w-100 p-1" value="'.$resultado_servicios[3].'">';
            }
        } else {
            echo '<input required type="text" placeholder="Elige un servicio para editar" class="w-100 p-1" disabled>';
        }
    ?>
</div>
<div class="row md-3">
    <?php //CAMBIAR EL TEXTAREA DE LA DESCRIPCION SI SE HA ELEGIDO EDITAR UN SERVICIO
        if(isset($_GET['edit-services'])){
            if(is_numeric($_GET['edit-services'])){
                echo '<button class="btn btn-info w-100" type="submit">Guardar cambios <i class="far fa-save"></i></button>';
            }
        } else {
            echo '<button class="btn btn-secondary w-100" disabled>Guardar cambios <i class="far fa-save"></i></button>';
        }
    ?>    
</div>