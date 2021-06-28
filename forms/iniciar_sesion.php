<div class="container-md py-5 contenedor-formulario h-100">
    <form action="forms/actions/action_iniciar_sesion.php" method="POST" class="formulario mx-auto text-white px-5">
        <fieldset>
            <legend class="text-center py-3 h2">Iniciar sesión</legend>
            <div class="mb-3 text-center">
                <label class="h5" for="email-login">Correo electrónico</label><br>
                <input type="email" id="email-login" name="email-login" class="w-100" placeholder="Escriba su email">
            </div>
            <div class="mb-3 text-center">
                <label class="h5" for="user-password-login">Contraseña</label><br>
                <input type="password" id="user-password-login" name="user-password-login" class="w-100" placeholder="Escriba su contraseña">
            </div>
            <div class="mb-3 text-center py-1">
                <?php require_once 'controller/tipo_de_alertas.php'; //ALERTAS?>   
            </div>
            <div class="mb-3 text-center">
                <div class="row">
                    <div class="col-md-6 py-2">
                        <a href="?user=register" class="btn btn-secondary w-100">Registrarse</a>
                    </div>
                    <div class="col-md-6 py-2">
                        <button type="submit" class="btn btn-success w-100">Acceder</button>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
</div>