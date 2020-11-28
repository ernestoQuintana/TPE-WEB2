<div class="busquedaMain">
    <div class="contenedor busqueda">
        <h2 class="busqueda-esloganB">Cremas, Perfumes y más</h2>
        <h1 class="busqueda-esloganA">Tu Producto está acá</h1>
        <div class="nav-searching">
            <form action="busquedaAvanzada" method="POST">
                <div class="form-group">
                    <input class="form-control" name="input_busquedaNombre" type="search" placeholder="Ingrese el Producto" required>
                </div>
                <div class="form-group">
                
                    <select class="form-control" name="input_busquedaCategoria" id="origenJs">
                        <option value="">Categorias por nombre</option>
                        {foreach $categorias as $categoria}
                            <option value="{$categoria->id_categoria}">{$categoria->nombre_categoria}</option>
                        {/foreach}
                    </select>
                </div>
                <div class="form-group">
                    <input type="search" class="form-control" name="input_busquedaDescripcion" id="descripcionJs" placeholder="Caracteristica">

                </div>
                <div class="form-group precios">
                    <input type="number" class="form-control" name="select_precioMin" id="descripcionJs" placeholder="precio min">
    
                    <input type="number" class="form-control" name="select_precioMax" id="descripcionJs" placeholder="precio max">
                </div>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        </div>

    </div>
</div>