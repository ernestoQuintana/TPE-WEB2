<main class="container">
    <div class="btnLogout">
        <a href="logout"><i class="fas fa-exclamation-triangle">Logout</i></a>
    </div>
    <div class="container">
        <h1 class="listaProductos">Lista de Productos</h1>
        <form action="agregarProducto" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              
                <input class="form-control" id="title" placeholder="Nombre" name="input_title" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <input class="form-control" name="input_description" placeholder="Descripcion" id="description" required>
            </div>
            <div class="form-group">
                <input class="form-control" name="input_precio" placeholder="Precio" id="precio" required>
            </div>
            <div class="form-group">
                <label for="title">Categorias</label>
                {include file="listaCategorias.tpl"}
            </div>
            <div class="form-group">
                <input type="file" name="input_name" id="imageToUpload">
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>