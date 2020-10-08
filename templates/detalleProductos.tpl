{include file="head.tpl"}
{include file='header.tpl'}

<div class="container">
        <ul class='detalleProducto list-group mt-5'>
            <li class='list-group-item'>
             {$producto->nombre}   
            </li>
            <li class='list-group-item'> <h4> Descripcion: </h4> {$producto->descripcion}   <h4> Precio: </h4> ${$producto->precio} </li>
        </ul>
        <a class='btnVolver' href='productos/'>volver</a>
</div>
{include file='footer.tpl'}  

        