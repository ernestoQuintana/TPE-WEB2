<div class="container">
    <form action="insert" method="POST">
        <div class="form-group">
            <label for="title">Nombre</label>
            <input class="form-control" id="title" name="input_title" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Titulo de la tarea</small>
        </div>
        <div class="form-group">
            <label for="description">Descripcion</label>
            <input class="form-control" name="input_description" id="description">
        </div>
        <div class="form-group">
            <label for="priority">Precio</label>
            <input class="form-control" name="input_precio" id="precio">
        </div>
        <div class="form-group">
            <label for="title">Categoria</label>
            <select class="form-control" name="input_categoria">
                <option></option>
                <option value="1">rostro</option>
                <option value="2">hombre</option>
                <option value="3">cabello</option>
                <option value="4">cuerpo</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>