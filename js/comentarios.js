document.addEventListener('DOMContentLoaded', () => {
    "use strict"

    document.querySelector('#formComentario').addEventListener('submit', e => {
        e.preventDefault();//evita el envio del formulario
       
        agregarFila();
    })


    const baseURL = 'api/comentarios';
    const listaComentarios = document.querySelector('#listaComentario');
    const listaComentariosAdmin = document.querySelector('#listaComentarioAdmin');


    // TRAER COMENTARIOS ADMIN

    function getComentarioAdmin() {
        fetch('productos/:ID/comentario')
            .then(response => 
                
                { console.log(response);
                console.log(response.body)})
            
            .then()
            .catch(error => console.log(error));
    }

    function renderAdmin(comentarios) {

        for (let comentario of comentarios) {

            let idComentario = comentario.id_comentario;
            let div = document.createElement('div');
           
            let h2 = document.createElement('h2');
            h2.innerText = comentario.titulo;
            div.appendChild(h2);
            let p = document.createElement('p');
            p.innerText = comentario.texto;
            div.appendChild(p);
            let ul = document.createElement('ul');
            let li = document.createElement('li');
            li.appendChild(div);
            ul.appendChild(li);
            
          //  li.innerText =' titulo: ' +comentario.titulo + ' ' + comentario.texto + ' ' + comentario.puntuacion;
            //let btnBorrar = document.createElement('button');


            // btnBorrar.innerHTML = '<i class="fa fa-trash" aria-hidden="true"></i>';
            // botonBorrar.addEventListener("click", function () {
            //     borrar(idComentario);
            // });

           // li.appendChild(btnBorrar);
           
            
            listaComentarios.appendChild(ul);
        }

    }

    // agregar Fila A la APi
    function agregarFila() {

        let comentario = {    
                "titulo": document.querySelector("#tituloComentario").value,
                "texto": document.querySelector("#descriptionComentario").value,
                "puntuacion": document.querySelector("#puntajeComentario").value,
                "id_usuario": 2,  //cuando me logue , el api trae el usuario, Json, Guardo en una variable y lo uso aca
                "id_producto": 17 //obtener datos de la barra del navegador
        };

        fetch(baseURL, {
            "method": "POST",
            "headers": { "Content-Type": "application/json" },
            "body": JSON.stringify(comentario)
        }).then(function (r) {
            return r.json()
        }).then(function (json) {
            console.log(json);
            renderAdmin([json])
            vaciarInput();
        }).catch(function (e) {
            console.log(e)
        })
    }

    function vaciarInput() {
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

    function btnLogin(){
        document.querySelector('#loginUser');
        //agregar un innerText con el dato


    }

});