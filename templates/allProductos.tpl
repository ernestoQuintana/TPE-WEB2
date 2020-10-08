{include file="head.tpl"}
{include file='header.tpl'}
    <div class="tituloTablaProductos">
        <h1>Nuestra Lista de Productos</h1>
    </div>
    
    <table class="tablaProductos">
        <thead class="thead">
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Categoria</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody class="tbody">
        {foreach $productos as $producto}
            <tr>
                <td>{$producto->nombre}</td>
                <td>{$producto->precio}</td>
                <td>{$producto->nombre_categoria}</td>
                <td><a class='btnDetalle' href='detalleProducto/{$producto->id}'>
                    <i class="iconoDescripcion far fa-list-alt">
                </i></a></td>
            </tr>    
        {/foreach} 
            <!--  <ul class='list-group mt-5'>
        {foreach $productos as $producto}
                <li class='list-group-item'>
                <h5>{$producto->nombre}</h5> | Precio: ${$producto->precio} | Categoria: {$producto->nombre_categoria}  
                <a class='btnDetalle' href='detalleProducto/{$producto->id}'>descripcion</a>
                </li>
        {/foreach} 
        </ul> -->
        </tbody>
    </table>
{include file='footer.tpl'}