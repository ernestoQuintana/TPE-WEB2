{include file="header.tpl"}
<div class="container">
<div class="mensajeError">
    {$mensaje}
</div>
    <h1 class="tituloIngresar"> Ingresar</h1>
    <form action="administrador" method="POST">
        <div class="form-group">
            <label for="title">Ingrese su Usuario</label>
            <input class="form-control" id="user" name="input_user" aria-describedby="emailHelp" required>
        </div>
        <div class="form-group">
            <label for="description">Password</label>
            <input type="password" class="form-control" name="input_password" id="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
</div>
{include file="footer.tpl"}