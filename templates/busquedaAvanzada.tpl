{include file="header.tpl"}
<main class="busquedaMain">
<div class="contenedor busqueda">
    <h2 class="busqueda-esloganB">Cremas, Perfumes y más</h2>
    <h1 class="busqueda-esloganA">Tu Producto está acá</h1>
    <div class="nav-searching">
        <form action="busquedaAvanzada" method="POST">
        <div class="form-group">
            <input class="form-control" name="input_busquedaNombre" type="search" placeholder="Nombre del producto...">
        </div>
            <div class="form-group">
            {* <input  class="form-control" name="input_busquedaCategoria" type="search" placeholder="Categoria..."> *}
                <select class="form-control" name="input_busquedaCategoria" id="origenJs">
                    <option value="">Categorias por nombre</option>
                    <option value="">Todas las Categorias</option>  
                    {foreach $categorias as $categoria}
                        <option value="{$categoria->id_categoria}">{$categoria->nombre_categoria}</option>
                    {/foreach}
                </select>
            </div>
            <div class="form-group">
                <input type="search" class="form-control" name="input_busquedaDescripcion" id="descripcionJs" placeholder="Ingrese una palabra">
                  

            <div class="form-group">
                <input type="number" class="form-control" name="select_precioMin" id="descripcionJs" placeholder="precio min">
                <input type="number" class="form-control" name="select_precioMax" id="descripcionJs" placeholder="precio max">
                    
                {* <select class="precioMin" id="precioMinJS" name="select_precioMin">
                <option value="">Precio Min</option>  
                    {foreach $productos as $producto}
                        <option value="{$producto->id}">{$producto->precio}</option>
                    {/foreach}
                </select>
                <select class="precioMin" id="precioMaxJS" name="select_precioMax">

                <option value="">Precio Max</option>  
                    {foreach $productos as $producto}
                        <option value="{$producto->id}">{$producto->precio}</option>
                    {/foreach} *}
                </select>
            </div>
           
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </div>
</div>


{include file="footer.tpl"}