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
    <div class="claseComentario" id="cajaComentario">
    </div>
</div>

    <div class="mensajeLogin">
        <h3>Para ver los comentarios logueate <a href='loginUsuario'>Login</a></h3>
    </div>

{if {$users->permiso} === 0}
    <div id="formComentarios">
        {include file="formComentario.tpl"}
    </div>
    <div id="listaComentarios">
        {include file="vue/comentarios.vue"}
    </div>
{elseif {$users->permiso} === 1}
    {include file="vue/comentariosAdmin.vue"}
{/if}

</div>


<!--<script src="js\comentarios.js"></script>-->

{include file='footer.tpl'}