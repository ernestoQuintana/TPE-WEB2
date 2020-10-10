{include file='header.tpl'}
<div class="tituloTablaCategoria">
    <h1>Nuestras Categorias</h1>
</div>

<table class="tablaCategorias">
    <thead class="theadCategorias">
        <tr>
            <th>Categoria</th>
            <th>Origen</th>
            <th>Descripcion</th>
        </tr>
    </thead>
    <tbody class="tbodyCategorias">
        {foreach $categorias as $categoria}
            <tr>
                <td class="tdCategoriaNombre">{$categoria->nombre_categoria}</td>
                <td class="tdCategoriaOrigen">{$categoria->origen}</td>
                <td class="tdDescripcion">{$categoria->descripcion_categoria}</td>
            </tr>
        {/foreach}

    </tbody>
</table>
{include file='footer.tpl'}