{include file="head.tpl"}
{include file='header.tpl'}    
    <ul class='list-group mt-5'>
        {foreach $categorias as $categoria} 
            <li class='list-group-item'>
                {$categoria->nombre_categoria}  | {$categoria->origen}
            </li>
            <li class='list-group-item'>
                {$categoria->descripcion_categoria}
            </li>
            {/foreach} 
    </ul>
{include file='footer.tpl'}      