
{include file="head.tpl"}
{include file='header.tpl'}
        <ul class='list-group mt-5'>
            <li class='list-group-item'>
                {$producto->nombre}   
            </li>
            <li class='list-group-item'> {$producto->descripcion} | {$producto->precio} </li>
        </ul>
        <a class='btnVolver' href='productos/'>volver</a>
{include file='footer.tpl'}  

        