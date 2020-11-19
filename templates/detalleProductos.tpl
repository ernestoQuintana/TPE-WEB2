{include file='header.tpl'}

<div class="container">
    <ul class='detalleProducto list-group mt-5'>
        <li class='list-group-item'>
            {$producto->nombre}
        </li>
        <li class='list-group-item'>
            <h4> Descripcion: </h4> {$producto->descripcion} <h4> Precio: </h4> ${$producto->precio}
        </li>
    </ul>
    <a class='btnVolver' href='productos/'><i class="fas fa-backward"> Volver</i></a>
</div>


{if $user != null}
    {if $user->permiso === '0'}
        {include file="formComentario.tpl"}
        <div id="listaComentario"></div>
    {elseif $user->permiso === '1'}
        <div id="listaComentarioAdmin">asd</div>
    {/if}
{else}
    <div class="mensajeLogin">
        <h3>Para agregar comentarios logueate <a href='login'>Login</a></h3>
    </div>
    <div id="listaComentario"></div>
{/if}

</div>


<!--<script src="js\comentarios.js"></script>-->

{include file='footer.tpl'}