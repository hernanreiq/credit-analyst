<div class="container my-5 dashboard">
    <div class="my-4">
        <?php require_once 'controller/tipo_de_alertas.php'; //ALERTAS?> 
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card my-3">
                <h2 class="card-title bg-dark text-center text-white py-2">Datos del usuario</h2>
                <div class="card-body">
                    <?php require_once 'models/print_user_data.php'; //IMPRIMIR LA INFORMACIÓN DEL USUARIO SELECCIONADO ?>
                </div>
            </div>
            <?php require_once 'views/servicios_activos.php'; // RECARGAS REALIZADAS POR EL USUARIO?>
            <?php require_once 'views/recargas.php'; // RECARGAS REALIZADAS POR EL USUARIO?>
            <?php require_once 'views/historial_servicios.php'; // VER EL HISTORIAL DE SERVICIOS DEL USUARIO?>
        </div>
        <div class="col-md-4">            
            <div class="card my-3">
                <h2 class="card-title bg-info text-center text-white py-2">Opciones</h2>
                <div class="card-body">
                    <a href="?user=dashboard" class="btn btn-danger w-100 mb-3">Convertir en PDF <i class="far fa-file-pdf"></i></a>
                    <a href="?user=dashboard" class="btn btn-success w-100 mb-3">Volver al inicio <i class="fas fa-home"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
        </div>
    </div>
</div>