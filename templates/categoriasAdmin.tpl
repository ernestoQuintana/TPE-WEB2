{include file='header.php'}
{include file='formCategoria.php'}
    <ul class='list-group mt-5'>
        {foreach $categorias as $categoria}
            <li class='listaCategoriasView'>
                {$categoria->nombre} | {$categoria->origen}
                <div class='cajaBtn'>
                    <a class='btnBorrar' href='eliminarCategoria/{$categoria->id_categoria}'>Eliminar</a>
                    <a class='btnEditar' href='editar/{$categoria->id_categoria}'>Editar</a>
                </div>
            </li>
            <li class='list-group-item'>
                {$categoria->descripcion}
            </li>
        {/foreach}
        }
    </ul>;
}
{include file='footer.php'}