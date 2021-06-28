<?php
    require_once 'connect_database.php';

    $nombre_servicio = mysqli_real_escape_string($connect_db, $_POST['name-service']);
    $descripcion_servicio = mysqli_real_escape_string($connect_db, $_POST['description-service']);
    $precio_servicio = mysqli_real_escape_string($connect_db, $_POST['price-service']);

    $buscar_servicio = mysqli_query($connect_db, "SELECT * FROM servicios WHERE Nombre = '$nombre_servicio' OR Descripcion = '$descripcion_servicio'");

    if(mysqli_num_rows($buscar_servicio) == 0){
        $guardar_servicio = mysqli_query($connect_db, "INSERT INTO servicios (Nombre, Descripcion, Precio) VALUES ('$nombre_servicio', '$descripcion_servicio', '$precio_servicio')");
        $_SESSION['alertas-positivas'] = 'Servicio creado con éxito!';
        header('Location: ../index.php?view=services');
    } else {
        $_SESSION['alertas-negativas'] = 'Este servicio ya existe!';
        header('Location: ../index.php?view=services');
    }
?>