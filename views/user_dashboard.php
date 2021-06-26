<div class="container my-5 dashboard">
    <div class="alert alert-danger mt-4 alert-dismissible fade show" role="alert">
        <strong>No tiene saldo suficiente para adquirir este servicio</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card my-3">
                <h2 class="card-title bg-dark text-center text-white py-2">Servicios disponibles</h2>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card my-2">
                                <h3 class="card-title py-2 bg-primary text-white text-center">Internet</h3>
                                <div class="card-body">
                                     Disfruta de tus redes sociales y todos los servicios de streaming con nuestro plan de 25 Mbps.
                                     <h4><span class="badge badge-info w-100 mt-3">RD$ 1,800</span></h4>
                                </div>
                                <a href="?add=internet" class="btn btn-success">Adquirir servicio <i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card my-2">
                                <h3 class="card-title py-2 bg-warning text-white text-center">Electricidad</h3>
                                <div class="card-body">
                                    Paga una tarifa fija y olvídate de dormir con calor con nuestro plan de electricidad para el hogar.
                                    <h4><span class="badge badge-info w-100 mt-3">RD$ 1,200</span></h4>
                                </div>
                                <a href="?add=electricidad" class="btn btn-success">Adquirir servicio <i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card my-2">
                                <h3 class="card-title py-2 bg-info text-white text-center">Agua potable</h3>
                                <div class="card-body">
                                    Manten tu cuerpo siempre hidratado con nuestro servicio de agua potable en las tuberías de tu hogar.
                                    <h4><span class="badge badge-info w-100 mt-3">RD$ 500</span></h4>
                                </div>
                                <a href="?add=agua" class="btn btn-success">Adquirir servicio <i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card my-3">
                <h2 class="card-title bg-dark text-center text-white py-2">Historial de servicios</h2>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card my-2">
                                <h3 class="card-title bg-primary text-white text-center">Internet</h3>
                                <div class="card-body">
                                     Disfruta de tus redes sociales y todos los servicios de streaming con nuestro plan de 25 Mbps.
                                </div>
                                <h4><span class="badge badge-info">Expirado el 12/02/2019</span></h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card my-2">
                                <h3 class="card-title bg-primary text-white text-center">Internet</h3>
                                <div class="card-body">
                                     Disfruta de tus redes sociales y todos los servicios de streaming con nuestro plan de 25 Mbps.
                                </div>
                                <h4><span class="badge badge-info">Expirado el 12/02/2019</span></h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card my-2">
                                <h3 class="card-title bg-primary text-white text-center">Internet</h3>
                                <div class="card-body">
                                     Disfruta de tus redes sociales y todos los servicios de streaming con nuestro plan de 25 Mbps.
                                </div>
                                <h4><span class="badge badge-info">Expirado el 12/02/2019</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card my-3 text-center">
                <h2 class="card-title py-2 bg-dark text-white">Servicios activos</h2>
                <div class="card-body">
                    <div class="card mb-3">
                        <h3 class="card-title py-2 bg-primary text-white">Internet</h3>
                        <div class="card-body">
                            <a class="btn btn-danger" href="?cancel=internet">Cancelar servicio</a>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <h3 class="card-title py-2 bg-warning text-white">Electricidad</h3>
                        <div class="card-body">
                            <a class="btn btn-danger" href="?cancel=electricidad">Cancelar servicio</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card my-3 text-center">
                <h2 class="card-title py-2 bg-dark text-white">Datos personales</h2>
                <div class="card-body">
                    <?php require_once 'controller/datos_personales.php'; //DATOS PERSONALES?>
                    <a href="?add=money" class="btn btn-success w-100 mb-1">Recargar saldo <i class="fas fa-money-bill"></i></a>
                    <a href="?user=logout" class="btn btn-danger w-100 mt-1">Cerrar sesión <i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>