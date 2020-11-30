{include file='header.tpl'}
<div class="container">
    <div class="tituloListaComentarios">
        <h1> Lista de comentarios </h1>
    </div>
    <div class="renderListaComentario">
        <ul class='list-group mt-5'>
            {foreach $comentarios as $comentario}
                <div class="cajaForComentario">
                    <li class='listaComentariosView'>
                        <div class="infoComentario">
                            <div>Usuario:<span class="spanNombreUsuario"> {$comentario->nombre}</span></div>
                            <div><span>Titulo: </span> {$comentario->titulo}</div>
                            <div><span>Puntaje:</span> {$comentario->puntuacion}</div>
                        </div>
                        <div class='cajaBtn'>
                            <a class='btnBorrarComentario' href='eliminarComentario/{$comentario->id_comentario}'>Borrar Comentario</a>
                        </div>
                    </li>
                    <li class='list-group-item'>
                        {$comentario->texto}
                    </li>
                </div>
            {/foreach}
        </ul>
    </div>
</div>
{include file='footer.tpl'}