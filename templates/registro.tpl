{include file="header.tpl"}
<div class="container registroUsuario">
<div class="mensajeError">
   {$mensaje}
</div>
    <h1 class="tituloRegistrar"> Registrate</h1>
    <form action="agregaUsuario" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" class="form-control" id="user" name="input_nameRegister" placeholder="Enter your name" aria-describedby="emailHelp" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="input_emailRegister" id="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="input_passwordRegister" placeholder="Enter your password" id="password" autocomplete="off" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="input_confirmPassword" placeholder="Confirm your password" id="passwordConfirm" autocomplete="off" required>
        </div>
        <div class="form-group">
            <input type="file" class="form-control imageInput" name="input_name" id="imagenRegistro">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
{include file="footer.tpl"}