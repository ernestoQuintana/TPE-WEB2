{include file='header.tpl'}

<div class="container">
    <ul class='detalleProducto list-group mt-5'>
        <li class='list-group-item'>
            <div>
            {if isset($producto->imagen)}
                <img src="{$producto->imagen}"/>
            {/if}
            </div>
        </li>
        <li class='list-group-item'>
            {$producto->nombre}
        </li>
        <li class='list-group-item'>
            <h4> Descripcion: </h4> {$producto->descripcion} <h4> Precio: </h4> ${$producto->precio}
        </li>
    </ul>
    <a class='btnVolver' href='productos/'><i class="fas fa-backward"> Volver</i></a>
</div>
 <div id="cargando"></div>
{if $user == null}
    <div class="mensajeLogin">
        <h3>Para agregar comentarios logueate <a href='login'>Login</a></h3>
    </div>  
    <div id="listaComentario" data-producto="{$producto->id}"></div>
{elseif $user->permiso === '0'}
    {include file="formComentario.tpl"}    
    <div id="listaComentario" data-permiso="{$user->permiso}" data-producto="{$producto->id}"></div>
{else}
    <div id="listaComentario" data-permiso="{$user->permiso}" data-producto="{$producto->id}"></div>
{/if}
   
</div>


<script type="text/javascript" src="./js/comentarios.js"></script>

{include file='footer.tpl'}