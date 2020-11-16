{include file="header.tpl"}
<div class="container loginDiv">
<div class="mensajeError">
    {$mensaje}
</div>
    <h1 class="tituloIngresar"> Ingrese sus Datos</h1>
    <form action="usuario" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" id="user" name="input_usuario" aria-describedby="emailHelp" placeholder="Enter your name or email" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="input_passwordUsuario" id="password" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
</div>
{include file="footer.tpl"}