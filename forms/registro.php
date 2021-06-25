<div class="container-md py-5 contenedor-formulario h-100">
    <form action="" class="formulario mx-auto text-white px-5">
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
                <input type="text" id="names-register" class="w-100">
            </div>
            <div class="mb-3 text-center">
                <label class="h5" for="lastnames-register">Apellidos</label><br>
                <input type="text" id="lastnames-register" class="w-100">
            </div>            
            <div class="mb-3 text-center">
                <label class="h5" for="email-register">Correo electrónico</label><br>
                <input type="email" id="email-register" class="w-100">
            </div>
            <div class="mb-3 text-center">
                <label class="h5" for="password-register">Contraseña</label><br>
                <input type="password" id="password-register" class="w-100">
            </div>
            <div class="mb-3 text-center">
                <label class="h5" for="password-repeat-register">Repetir contraseña</label><br>
                <input type="password" id="password-repeat-register" class="w-100">
            </div>
            <div class="mb-3 text-center py-1">
            <!--ALERTAS-->    
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
</di