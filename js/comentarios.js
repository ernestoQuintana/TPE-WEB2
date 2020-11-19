document.addEventListener('DOMContentLoaded', () => {
    "use strict"
  
    document.querySelector('#formComentario').addEventListener('submit', e => {
        e.preventDefault();//evita el envio del formulario

        getComentarioAdmin();



        document.querySelector('#btnAgregarComentario').addEventListener('click',agregarFila);
    })
});


const baseURL = 'api/comentarios';
const listaComentarios = document.querySelector('#listaComentario');
const listaComentariosAdmin = document.querySelector('#listaComentarioAdmin');


// TRAER COMENTARIOS ADMIN

function getComentarioAdmin() {
    fetch('productos/:ID/comentario')
        .then(response => response.json())
        .then(comentarios => renderAdmin(comentarios))
        .catch(error => console.log(error));
}

function renderAdmin(comentarios) {

    for (let comentario of comentarios) {

        let idComentario = comentario.id;
        let ul = document.createElement('ul');
        let li = document.createElement('li').innerHTML = comentario;
        let btnBorrar = document.createElement('button');


        btnBorrar.innerHTML = '<i class="fa fa-trash" aria-hidden="true"></i>';
        botonBorrar.addEventListener("click", function () {
            borrar(idComentario);
        });

        li.appendChild(btnBorrar);
        ul.appendChild(li);
        listaComentarios.appendChild(ul);
    }

}

//TRAER COMENTARIOS USUARIOS

function getComentarioUsuario() {
    fetch(baseURL)
        .then(response => response.json())
        .then(comentarios => renderUsuario(comentarios))
        .catch(error => console.log(error));
}
function renderUsuario(comentarios) {

    for (let comentario of comentarios) {

        let idComentario = comentario.id;
        let ul = document.createElement('ul');
        let li = document.createElement('li').innerHTML = comentario;
        ul.appendChild(li);
        listaComentarios.appendChild(ul);
    }

}

// agregar Fila A la APi
function agregarFila() {

    let comentario = {
        "thing":
        {
            "titulo": document.querySelector("#tituloComentario").value,
            "descripcion": document.querySelector("#descriptionComentario").value,
            "puntaje": document.querySelector("#puntajeComentario").value,
        }
    };
    fetch(baseURL, {
        "method": "POST",
        "headers": { "Content-Type": "application/json" },
        "body": JSON.stringify(comentario)
    }).then(function (r) {
        return r.json()
    }).then(function (json) {
        //console.log(json);
        getComentarioUsuario();
        vaciarInput();
    }).catch(function (e) {
        console.log(e)
    })
}

function vaciarInput(){
    document.querySelector("#tituloComentario").value = "";
    document.querySelector("#descriptionComentario").value = "";
    document.querySelector("#puntajeComentario").value = "";
}



function borrar(idComentario) {
    fetch('api/comentarios/' + idComentario, {
        "method": "DELETE",
        "headers": { "Content-Type": "application/json" },
    }).then(response => response.json())
        .then(function (json) {
            getComentario();
        }).catch(function (e) {
            console.log(e);
        })
}

