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
        <h3>Para agregar comentarios logueate <a href='login'>Login</a></h3>
    </div>

{if $users->permiso === 0}
    <div id="listaComentarios">
      <p> entro </p>
  <!--  {include file="vue/listaComentarios.vue"} -->
    </div>
{elseif $users->permiso === 1}
    <div id="cajaFormComentarios">
         <p>entro ADMIN </p>
      <!--  {include file="formComentario.tpl"} -->
    </div>
    <!--{include file="vue/comentariosAdmin.vue"} -->
{/if}

</div>


<!--<script src="js\comentarios.js"></script>-->

{include file='footer.tpl'}