{include file="head.tpl"}
{include file='header.tpl'}

<div class="container">
    <h1> Lista de: {$nombreCategoriaId->nombre_categoria} </h1>
    <ul class='list-group mt-5'>
        {foreach $productosCategoria as $producto}
            <li class='listaProductoView'>
                {$producto->nombre} | {$producto->nombre_categoria}
                <div class='cajaBtn'>
                    <a class='btnEditar' href='detalleProducto/{$producto->id}'>Descripcion</a>
                </div>
            </li>
        {/foreach}
    </ul>
</div>
{include file='footer.tpl'}