{include file="header.tpl"}
{include file="form.tpl"}
<ul class='list-group mt-5'>

    {foreach $productos as $producto}
        <div class="imagenProducto">
            {if isset($producto->imagen)}
                <img src="{$producto->imagen}" width="220" height="250" />
            {/if}
        </div>
        <li class='listaProductoView'>
            {$producto->nombre} | {$producto->precio} | {$producto->nombre_categoria}
            <div class='cajaBtn'>
                <a class='btnBorrarImg' href='eliminarImagen/{$producto->id}'>Eliminar Imagen</a>
                <a class='btnBorrar' href='eliminarProducto/{$producto->id}'>Eliminar</a>
                <a class='btnEditar' href='editarP/{$producto->id}'>Editar</a>
            </div>
        </li>
        <li class='listaProductoView'>
         {$producto->descripcion}
        </li>
    {/foreach}
    
</ul>
{include file="footer.tpl"}