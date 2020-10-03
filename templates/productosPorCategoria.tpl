{include file="head.tpl"}
{include file='header.tpl'}
        <h1> Lista de: {$tipoCategoria} </h1>
        <ul class='list-group mt-5'>
            {foreach $productosCategoria as $producto} 
                <li class='list-group-item'>
                    {$producto->nombre} | {$tipoCategoria} 
                </li>
            {/foreach}
        </ul>
{include file='footer.tpl'}        
    