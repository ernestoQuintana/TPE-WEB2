<main class="container">
    <div class="btnLogout">
        <a href="logout"><i class="fas fa-exclamation-triangle">Logout</i></a>
    </div>
    <div class="container">
        <h1 class="comentarioUser"> Comentario</h1>
        <form id="formComentario" action="agregarComentario" method="POST">
            <div class="form-group">
                <label for="title">Titulo</label>
                <input class="form-control" id="tituloComentario" name="input_titleComentario" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="description">Comentario</label>
                <textarea class="form-control" name="input_comentario" id="descriptionComentario" required> </textarea>
            </div>
            <div class="form-group">
                <label for="priority">Puntaje</label> 
                <input type="number" min="1" max="5" class="form-control" name="input_puntaje" id="puntajeComentario" required>
            </div>
            <button type="submit" id="btnAgregarComentario" class="btn btn-primary">Agregar Comentario</button>
        </form>
    </div>