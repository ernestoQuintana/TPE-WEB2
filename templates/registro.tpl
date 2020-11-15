{include file="header.tpl"}
<div class="container">
<div class="mensajeError">
 <!--   {$mensaje} -->
</div>
    <h1 class="tituloRegistrar"> Registro de Usuario</h1>
    <form action="agregaUsuario" method="POST">
        <div class="form-group">
            <label for="title">Nombre de usuario</label>
            <input class="form-control" id="user" name="input_nameRegister" aria-describedby="emailHelp" required>
        </div>
        <div class="form-group">
            <label for="description">Email</label>
            <input type="email" class="form-control" name="input_emailRegister" id="email" required>
        </div>
        <div class="form-group">
            <label for="description">Password</label>
            <input type="password" class="form-control" name="input_passwordRegister" id="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
{include file="footer.tpl"}