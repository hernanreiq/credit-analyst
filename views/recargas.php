<div class="card my-3">
    <h2 class="card-title bg-success text-center text-white py-2 mb-0">Recargas</h2>
    <div class="card-body p-0">
        <table class="table text-center table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Monto recargado</th>
                    <th scope="col">Deuda pagada</th>
                    <th scope="col">Fecha de la recarga</th>
                </tr>
            </thead>
            <tbody>
                <?php require_once 'models/print_recargas.php'; //IMPRIMIR TODAS LAS RECARGAS DE ESTE USUARIO?>
            </tbody>
        </table>
    </div>
</div>