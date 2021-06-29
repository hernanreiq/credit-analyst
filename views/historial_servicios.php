<div class="card my-3">
    <h2 class="card-title bg-info text-center text-white py-2 mb-0">Historial de servicios</h2>
    <div class="card-body p-0">
        <table class="table text-center table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Servicio usado</th>
                    <th scope="col">Precio de la activación</th>
                    <th scope="col">Fecha de expiración</th>
                </tr>
            </thead>
            <tbody>
                <?php require_once 'models/print_user_expired_services.php'; //IMPRIMIR LOS SERVICIOS QUE HAYAN SIDO CANCELADOS EN ESTA CUENTA?>
            </tbody>
        </table>   
    </div>
</div>