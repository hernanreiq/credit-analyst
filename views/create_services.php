<div class="card my-3 text-left">
    <h2 class="card-title py-2 bg-primary text-white text-center">Crear servicios</h2>
    <div class="card-body">
        <form action="models/action_create_services.php" method="POST" class="px-3">
            <div class="row mb-3">
                <label class="h4" for="name-service">Nombre</label>
                <input required type="text" name="name-service" id="name-service" class="w-100 p-1">
            </div>
            <div class="row mb-3">
                <label class="h4" for="description-service">Descripción</label>
                <textarea requiered name="description-service" id="description-service" cols="30" rows="10" class="w-100 p-1"></textarea>
            </div>
            <div class="row mb-3">
                <label class="h4" for="price-service">Precio</label>
                <input required type="number" name="price-service" id="price-service" class="w-100 p-1">
            </div>
            <div class="row md-3">
                <button class="btn btn-success w-100" type="submit">Crear servicio <i class="fas fa-file-medical"></i></button>
            </div>
        </form>
    </div>
</div>