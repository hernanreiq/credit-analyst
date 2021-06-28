<?php
    require_once 'connect_database.php';

    if(isset($_POST['name-service']) && isset($_POST['description-service']) && isset($_POST['price-service'])){
        //SANEAMIENTO DE LOS DATOS ENVIDOS POR POST
        $name_service = mysqli_real_escape_string($connect_db, $_POST['name-service']);
        $description_service = mysqli_real_escape_string($connect_db, $_POST['description-service']);
        $price_service = mysqli_real_escape_string($connect_db, $_POST['price-service']);

        //EXTRAYENDO EL ID DEL USUARIO QUE SERÁ ACTUALIZADO
        $id_servicio_editar = $_SESSION['id-servicio-editar'];

        //ACTUALIZANDO EL SERVICIO
        $consulta_actualizar = mysqli_query($connect_db, "UPDATE servicios SET Nombre = '$name_service', Descripcion = '$description_service', Precio = '$price_service' WHERE ID_Servicio = '$id_servicio_editar'");
        
        //ELIMIANDO EL ID DEL SERVICIO EDITADO
        unset($_SESSION['id-servicio-editar']);

        $_SESSION['alertas-positivas'] = 'Servicio editado con éxito!';
        header('Location:../index.php?view=services');
    } else {
        $_SESSION['alertas-negativas'] = 'Debe llenar los campos antes de guardar los cambios.';
        header('Location:../index.php?view=services');
    }
?>