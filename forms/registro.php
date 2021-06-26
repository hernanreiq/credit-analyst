<div class="container-md py-5 contenedor-formulario h-100">
    <form action="forms/actions/action_registro.php" method="POST" class="formulario mx-auto text-white px-5">
        <fieldset>
            <legend class="text-center py-3 h2">Registrarse</legend>
            <div class="mb-3 text-center">
                <label class="h5" for="typeuser-register">Tipo de usuario</label><br>
                    <select name="typeuser" id="typeuser-register" class="w-100">
                        <option value="Usuario">Usuario</option>
                        <option value="Gerente">Gerente</option>
                    </select>
                </div>
            <div class="mb-3 text-center">
                <label class="h5" for="names-register">Nombres</label><br>
                <input type="text" name="names-register" id="names-register" class="w-100" required placeholder="Escriba su nombre">
            </div>
            <div class="mb-3 text-center">
                <label class="h5" for="lastnames-register">Apellidos</label><br>
                <input type="text" name="lastnames-register" id="lastnames-register" class="w-100" required placeholder="Escriba su apellido">
            </div>            
            <div class="mb-3 text-center">
                <label class="h5" for="email-register">Correo electrónico</label><br>
                <input type="email" name="email-register" id="email-register" class="w-100" required placeholder="Escriba su correo electrónico">
            </div>
            <div class="mb-3 text-center">
                <label class="h5" for="password-register">Contraseña</label><br>
                <input type="password" name="password-register" id="password-register" class="w-100" required placeholder="Escriba una contraseña">
            </div>
            <div class="mb-3 text-center">
                <label class="h5" for="password-repeat-register">Repetir contraseña</label><br>
                <input type="password" name="password-repeat-register" id="password-repeat-register" class="w-100" required placeholder="Repita su contraseña">
            </div>
            <div class="mb-3 text-center py-1">
                <?php require_once 'controller/tipo_de_alertas.php'; //ALERTAS?>
            </div>
            <div class="mb-3 text-center">
                <div class="row">
                    <div class="col-md-6 py-2">
                        <a href="?user=login" class="btn btn-secondary w-100">Iniciar sesión</a>
                    </div>
                    <div class="col-md-6 py-2">
                        <button type="submit" class="btn btn-success w-100">Crear cuenta</button>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
</div>