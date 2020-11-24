{include file="header.tpl"}
<main class="busquedaMain">
<div class="contenedor busqueda">
    <h2 class="busqueda-esloganB">Cremas, Perfumes y más</h2>
    <h1 class="busqueda-esloganA">Tu Producto está acá</h1>
    <div class="nav-searching">
        <form action="busqueda" method="GET">
        <div class="form-group">
            <input class="form-control" type="search" placeholder="Nombre del producto...">
        </div>
            <div class="form-group">
                <select class="form-control" name="input_origen" id="origenJs">
                    <option value="Categoria">Categorias por nombre</option>
                    <option value="allCategoriasUsuario">Todas las Categorias</option>  
                    {foreach $categorias as $categoria}
                        <option value="{$categoria->id_categoria}">{$categoria->nombre_categoria}</option>
                    {/foreach}
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" name="input_origen" id="origenJs">
                    <option value="Categoria">Categorias por Origen</option>
                    <option value="allCategoriasUsuario">Todas las Categorias</option>  
                {foreach $categorias as $categoria}
                    <option value="{$categoria->id_categoria}">{$categoria->origen}</option>
                {/foreach}
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" id="busquedaJS" name="select_categoria">
                        <option value="Productos">Productos</option>    
                    {foreach $productos as $producto}
                        <option value="{$producto->id}">{$producto->nombre}</option>
                    {/foreach}
                </select>
            </div>

            <div class="form-group">
                <select class="precioMin" id="precioMinJS" name="select_precioMin">
                <option value="Precio Min">Precio Min</option>  
                    {foreach $productos as $producto}
                        <option value="{$producto->id}">{$producto->precio}</option>
                    {/foreach}
                </select>
                <select class="precioMin" id="precioMaxJS" name="select_precioMin">
                <option value="Precio Max">Precio Max</option>  
                    {foreach $productos as $producto}
                        <option value="{$producto->id}">{$producto->precio}</option>
                    {/foreach}
                </select>
            </div>
           
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </div>
</div>


{include file="footer.tpl"}