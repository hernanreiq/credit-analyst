<div class="card my-3" id="alerta-resultado" style="display: none;">
    <h3 class="card-title py-2 bg-info text-white px-3 h-100">No hay ningún registro de esta persona, prueba buscando de otra forma.</h3>
</div>
<div class="card my-3 text-center" id="contenedor-resultados" style="display: none;">
    <h2 class="card-title py-2 bg-success text-white mb-0">Resultados de la búsqueda</h2>
    <div class="card-body p-0">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Información</th>
                </tr>
            </thead>
            <tbody id="container-results-user">
                <!--RESULTADOS DE LA BUSQUEDA SE AGREGAN CON JAVASCRIPT-->
            </tbody>
        </table>
    </div>
    <div class="text-center my-3">
        <button class="btn btn-danger w-50" id="clear-search">Limpiar búsqueda <i class="fas fa-trash-alt"></i></button>
    </div>
</div>