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
    <div> 
  
    </div>
</div>

<div class="mensajeLogin">
        <h3>Para agregar comentarios logueate <a href='login'>Login</a></h3>
    </div>

{if $user->permiso === '0'}
    <div>
      <p> entro </p>

    </div>
{elseif $user->permiso === '1'}
    <div >
         <p>entro ADMIN </p>
    </div>

{/if}

</div>


<!--<script src="js\comentarios.js"></script>-->

{include file='footer.tpl'}