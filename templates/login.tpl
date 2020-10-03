{include file="head.tpl"}
{include file="header.tpl"}
<div class="mensajeError">
    {$mensaje}
</div>
<div class="container">
    <h1 class="tituloIngresar"> Ingresar</h1>
    <form action="administrador" method="POST">
        <div class="form-group">
            <label for="title">Ingrese su Usuario</label>
            <input class="form-control" id="user" name="input_user" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="description">Password</label>
            <input type="password" class="form-control" name="input_password" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
</div>  

{include file="footer.tpl"}