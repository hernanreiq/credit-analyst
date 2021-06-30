
<page backtop="7mm" backbottom="7mm" backleft="10mm" backright="10mm"> 
    <page_header> 
         <?php
            date_default_timezone_set('UTC');
            echo 'Fecha de creación del documento: ' . date("Y-m-d");   
         ?>
    </page_header> 
    <page_footer> 
        Desarrollo y diseño web por: <a href="https://bit.ly/hernanreiq" target="_blank">Hernan.Reiq</a>
    </page_footer> 
    <?php require_once 'views/css/style_pdf.php'; //ESTILOS DEL PDF?>
    <div class="row">
        <div class="col-md-8">
            <div class="card my-3">
                <h2 class="card-title bg-dark text-center text-white py-2 mb-0">Datos del usuario</h2>   
                <div class="card-body">
                    <?php require_once 'models/print_user_data.php'; //IMPRIMIR LA INFORMACIÓN DEL USUARIO SELECCIONADO ?>
                </div>
            </div>
            <?php require_once 'views/servicios_activos.php'; // RECARGAS REALIZADAS POR EL USUARIO?>
            <?php require_once 'views/recargas.php'; // RECARGAS REALIZADAS POR EL USUARIO?>
            <?php require_once 'views/historial_servicios.php'; // VER EL HISTORIAL DE SERVICIOS DEL USUARIO?>
        </div>
    </div>
</page>
