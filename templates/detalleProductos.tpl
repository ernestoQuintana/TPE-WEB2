{include file='header.tpl'}
<div class="container">
        <ul class='detalleProducto list-group mt-5'>
            <li class='list-group-item'>
             {$producto->nombre}   
            </li>
            <li class='list-group-item'> <h4> Descripcion: </h4> {$producto->descripcion}   <h4> Precio: </h4> ${$producto->precio} </li>
        </ul>
        <a class='btnVolver' href='productos/'><i class="fas fa-backward"> Volver</i></a>
</div>

{include file="formComentario.tpl"}
{include file="listaComentarios"}

titulo comentario puntaje
titulo comentario puntaje 

{include file="comentarios.tpl"}
{include file='footer.tpl'}

        