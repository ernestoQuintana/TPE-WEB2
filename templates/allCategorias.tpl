{include file="head.tpl"}
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
                <!--     <td><a class='btnDetalle' href='detalleProducto/{$producto->id}'>descripcion</a></td> -->
            </tr>
        {/foreach}
        <!-- <ul class='list-group mt-5'>
        {foreach $categorias as $categoria} 
                <li class='list-group-item'>
                    <h5> Categoria: </h5>{$categoria->nombre_categoria}  <h5> Origen: </h5> {$categoria->origen}
                </li>
                <li class='list-group-item'>
                   <h5> Descripcion: </h5> {$categoria->descripcion_categoria}
                </li>
            {/foreach} 
    </ul> -->
    </tbody>
</table>
{include file='footer.tpl'}