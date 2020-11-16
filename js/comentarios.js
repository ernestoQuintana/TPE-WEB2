//document.addEventListener("DOMContentLoaded",iniciar);

//function iniciar(){
    "use strict"

    function getComentario(){
        fetch('api/comentarios')
            .then(response => response.json())
            .then(comentarios => render(comentarios))
            .catch(error => console.log(error));
    }

    function render(comentarios){
        const comentario = document.querySelector('#cajaComentario');

        for (let comentario of comentarios){
            comentario.innerHTML += '<li> ${comentario.titulo} - ${comentario.texto}</li>';
        }
    }

    getComentario();
