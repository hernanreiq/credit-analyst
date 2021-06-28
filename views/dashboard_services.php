<div class="container my-5 dashboard">
    <div class="my-4">
        <?php require_once 'controller/tipo_de_alertas.php'; //ALERTAS?> 
    </div>
    <div class="row">
        <div class="col-md-8">
            <?php require_once 'views/servicios_disponibles.php'; //TODOS LOS SERVICIOS EN TARJETAS?>
        </div>
        <div class="col-md-4">
            <?php 
                require_once 'views/create_services.php'; //CREADOR DE SERVICIOS
                require_once 'views/edit_services.php'; //EDITOR DE SERVICIOS 
            ?>
            <a href="?user=dashboard" class="btn btn-success w-100 mb-3">Volver al inicio <i class="fas fa-home"></i></a>
        </div>
    </div>
</div>