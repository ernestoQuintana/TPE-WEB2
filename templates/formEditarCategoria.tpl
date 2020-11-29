{include file='header.tpl'}
<main class="container">
    <div class="container">
        <h1 class="listaCategorias"> Lista de Categorias</h1>
        <form action="editarCategoria/{$idCategoria}" method="POST">
            <div class="form-group">
                <label for="title">Nombre</label>
                <input class="form-control" id="title" name="input_title" aria-describedby="emailHelp" value="{$categoria->nombre_categoria}" required>
            </div>
            <div class="form-group">
                <label for="description">Descripcion</label>
                <input class="form-control" name="input_description" id="description" value="{$categoria->descripcion_categoria}" required>
            </div>
            <div class="form-group">
                <label for="priority">Origen</label>
                <input class="form-control" name="input_origen" id="origen" value="{$categoria->origen}" required>
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>
{include file='footer.tpl'}