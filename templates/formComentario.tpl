<main class="container">
    <div class="containerComentario">
        <h1 class="comentarioUser">Dejanos un comentario</h1>
        <form id="formComentario" >
            <div class="form-group">
                <input class="form-control" id="tituloComentario" name="input_titleComentario" 
                 placeholder="titulo" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="input_comentario" id="descriptionComentario"
                placeholder="Dejá un comentario..." required>
            </div>
            <div class="form-group">
                <input type="number" min="1" max="5" class="form-control" name="input_puntaje" 
                placeholder="Puntua el item" id="puntajeComentario" required>
            </div>
            <button type="submit" id="btnAgregarComentario" class="btn btn-primary">Agregar Comentario</button>
        </form>
    </div>