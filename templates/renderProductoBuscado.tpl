{include file="header.tpl"}
{include file="formBusquedaAvanzada.tpl"}

<div class="searchBox">
    {foreach $productos as $producto}
        <div class='searchProducto'>
            <div class="imagenProducto">
                {if isset($producto->imagen)}
                    <img src="{$producto->imagen}" width="250" height="300" />
                {/if}
            </div>
            <div class='nombreProducto'>
                <h5>{$producto->nombre}</h5>
            </div>
            <div class='descripcionProducto'>
                <h5> Descripcion: </h5> {$producto->descripcion}
            </div>
            <div class='categoriaProducto'>
                <h5> Categoria: </h5> {$producto->nombre_categoria}
            </div>
            <div>
                <h5> Precio: </h5> ${$producto->precio}
            </div>
            <a href="detalleProducto/{$producto->id}" > Detalle del Producto </a>
        </div>
    {/foreach}
    
    </div>
    <div class="paginador" >
    <ul>
        <li class=\"btn\"><a href=\"?pag=".$DecrementNum." \">◀</a></li>
        <li class=\"btn\"><a href=\"?pag=".$IncrimentNum." \">▶</a></li>
    </ul>
    </div>
    <a class='btnVolver' href='productos/'><i class="fas fa-backward"> Volver</i></a>

{include file="footer.tpl"}