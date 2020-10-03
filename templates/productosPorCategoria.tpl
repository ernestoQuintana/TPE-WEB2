{include file="head.tpl"}
{include file='header.tpl'}
        <h1> Lista de: {$nombreCategoriaId->nombre_categoria} </h1>
        <ul class='list-group mt-5'>
            {foreach $productosCategoria as $producto} 
                <li class='list-group-item'>
                    {$producto->nombre} | {$producto->nombre_categoria} 
                </li>
            {/foreach}
        </ul>
{include file='footer.tpl'}        
    