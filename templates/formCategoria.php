<main class="container">
<div class="container">
    <h1 class="listaCategorias"> Lista de Categorias</h1>
    <form action="agregarCategoria" method="POST">
        <div class="form-group">
            <label for="title">Nombre</label>
            <input class="form-control" id="title" name="input_title" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="description">Descripcion</label>
            <input class="form-control" name="input_description" id="description">
        </div>
        <div class="form-group">
            <label for="priority">Origen</label>
            <input class="form-control" name="input_origen" id="precio">
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
</div>  