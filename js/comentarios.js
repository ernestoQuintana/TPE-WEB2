/*"use strict"

document.addEventListener('DOMContentLoaded',() => {
    getComentario();
    document.querySelector('#formComentario').addEventListener('submit', e => {
        e.preventDefault();//evita el envio del formulario

        addComentario();
    })
});




    function getComentario(){
        fetch('api/comentarios')
            .then(response => response.json())
            .then(comentarios => render(comentarios))
            .catch(error => console.log(error));
    }

    function addComentario(){

        fetch('api/comentarios',{
            method: 'POST',
            headers: {"Content-Type": "application/json"},
            body: JSON.stringify(comentario)
        })
        .then(response => response.json())
        .then(comentario => console.log(comentario))
        .catch(error => console.log(error));
    }
/*
    function render(comentarios){

        const comentario = document.querySelector('#cajaComentario');

        for (let comentario of comentarios){
            comentario.innerHTML += '<li> ${comentario.titulo} - ${comentario.texto}</li>';
        }

    }
*/
   
