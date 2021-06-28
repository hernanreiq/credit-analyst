<div class="container my-5 dashboard">
    <div class="my-4">
        <?php require_once 'controller/tipo_de_alertas.php'; //ALERTAS?> 
    </div>
    <div class="row">
        <div class="col-md-8">
            <?php require_once 'controller/services_user_or_admin.php'; //SERVICIOS Y BÚSQUEDA - USUARIO O ADMINISTRADOR?>
        </div>
        <div class="col-md-4">
            <?php require_once 'controller/data_user_or_admin.php'; //SERVICIOS ACTIVOS ?>
            <?php require_once 'views/datos_personales.php'; //DATOS PERSONALES?>
        </div>
    </div>
</div>