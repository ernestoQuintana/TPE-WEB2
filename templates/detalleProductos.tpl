{include file='header.tpl'}

<div class="container">
    <div class='detalleProducto'>
        <div class="imagenProducto">
            {if isset($producto->imagen)}
                <img src="{$producto->imagen}" width="500" height="600" />
            {/if}
        </div>
        <div class='nombreProducto'>
            <h3 >{$producto->nombre}</h3>    
        </div>
        <div class='descripcionProducto'>
            <h5> Descripcion: </h5> {$producto->descripcion}
        </div>
        <div>
            <h5> Precio: </h5> ${$producto->precio}
        </div>
    </div>
    <a class='btnVolver' href='productos/'><i class="fas fa-backward"> Volver</i></a>
</div>
<div id="cargando"></div>

{if $user == null}
    <div class="mensajeLogin">
        <p>Para comentar tenes que estar registrado. Si ya tenes una cuenta, ingresá <span><a href='login'>Aquí</a> o Registrate <a href="registro">Aquí</a>.</span></p>
    </div>
    <div id="listaComentario" data-producto="{$producto->id}"></div>
{elseif $user->permiso === '0'}
    {include file="formComentario.tpl"}
    <div id="listaComentario" data-usuario="{$user->id}" data-imagen="{$user->imagen}" data-permiso="{$user->permiso}" data-producto="{$producto->id}"></div>
{else}
    <div id="listaComentario" data-usuario="{$user->id}" data-imagen="{$user->imagen}" data-permiso="{$user->permiso}" data-producto="{$producto->id}"></div>
{/if}




<script type="text/javascript" src="./js/comentarios.js"></script>

{include file='footer.tpl'}