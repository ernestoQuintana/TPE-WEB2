{include file="head.tpl"}
{include file='header.tpl'}
        <ul class='list-group mt-5'>
        {foreach $productos as $producto}
            <li class='list-group-item'>
            <h5>{$producto->nombre}</h5> | Precio: ${$producto->precio} | Categoria: {$producto->nombre_categoria}  
            <a class='btnDetalle' href='detalleProducto/{$producto->id}'>descripcion</a>
            </li>
        {/foreach} 
        </ul>
{include file='footer.tpl'}        

