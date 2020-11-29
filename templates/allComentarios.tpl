{include file='header.tpl'}
    <ul class='list-group mt-5'>
        {foreach $comentarios as $comentario}
            <li class='listaComentariosView'>
            Nombre: {$comentario->nombre} ,{$comentario->titulo} |  {$comentario->puntuacion}
                <div class='cajaBtn'>
                    <a class='btnBorrar' href='eliminarComentario/{$comentario->id_comentario}'>Eliminar</a>
                </div>
            </li>
            <li class='list-group-item'>
                {$comentario->texto}
            </li>
        {/foreach}
    </ul>
{include file='footer.tpl'}