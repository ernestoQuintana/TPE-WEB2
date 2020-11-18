{literal}
<div id="vue-listaComentarios">

    <ul id="listaComentarios" class="list-group">
        <li
            v-for="comentario in comentarios"
            data-id-comentarios="{{comentario.id}}" class="list-group-item"> 
            {{comentario.titulo}} - {{comentario.texto}}
        </li>
    </ul>
</div>
{literal}
