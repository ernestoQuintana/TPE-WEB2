<main class="container">
    <div class="btnLogout">
        <a href="logout"><i class="fas fa-exclamation-triangle">Logout</i></a>
    </div>
    <div class="container">
        <h1 class="comentarioUser"> Comentario</h1>
        <form action="agregarComentario" method="POST">
            <div class="form-group">
                <label for="title">Titulo</label>
                <input class="form-control" id="title" name="input_titleComentario" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="description">Comentario</label>
                <textarea class="form-control" name="input_comentario" id="description" required> </textarea>
            </div>
            <div class="form-group">
                <label for="priority">Puntaje</label>
                 <!--Agregar un select de puntaje -->
                <input class="form-control" name="input_puntaje" id="precio" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Comentario</button>
        </form>
    </div>