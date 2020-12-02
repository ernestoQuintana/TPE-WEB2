document.addEventListener('DOMContentLoaded', () => {
    "use strict"

    const baseURL = 'api/comentarios';
    const contenedor = document.querySelector('#listaComentario');
    let id_producto = contenedor.dataset.producto;
    let permiso = contenedor.dataset.permiso;
    const div = document.querySelector("#cargando");


    /*********************************************************************/
    /************************* TRAER COMENTARIOS *************************/
    /*********************************************************************/



    cargarComentarios(id_producto);

    function cargarComentarios(id_producto) {
        div.innerHTML = "Imprimiendo...";
        fetch('api/productos/' + id_producto + '/comentarios', {
            method: "GET",
        })
            .then(function (r) {
                if (!r.ok) {
                    console.log("error");
                }
                return r.json();
            })
            .then(function (json) {
                console.log(json);
                div.innerHTML = "";
                contenedor.innerText = "";
                renderAdmin(json);
            })
    }

    /*********************************************************************/
    /*********************** AGREGAR COMENTARIOS *************************/
    /*********************************************************************/

    function agregarFila() {
        let comentario = {
            "titulo": document.querySelector("#tituloComentario").value,
            "texto": document.querySelector("#descriptionComentario").value,
            "puntuacion": document.querySelector("#puntajeComentario").value,
            "id_usuario": contenedor.dataset.usuario,  
            "id_producto": contenedor.dataset.producto,
        };

        fetch(baseURL, {
            "method": "POST",
            "headers": { "Content-Type": "application/json" },
            "body": JSON.stringify(comentario)
        }).then(function (r) {
            return r.json()
        }).then(function (json) {
            renderizarComentario(json);
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

    let form = document.querySelector('#formComentario');
    if (form) {
        form.addEventListener('submit', e => {
            e.preventDefault();//evita el envio del formulario
            agregarFila();
        })
    }

    /*********************************************************************/
    /*********************** BORRAR COMENTARIOS *************************/
    /*********************************************************************/

    function borrarComentarios(id_comentario, id_producto) {
        div.innerHTML = "Borrando...";
        console.log('hola');
        fetch(baseURL + '/' + id_comentario, {
            "method": "DELETE",
            "headers": { "Content-Type": "application/json" },
        }).then(function (r) {
            return r.json()
        }).then(function (json) {
            cargarComentarios(id_producto);
        }).catch(function (e) {
            console.log(e);
        })

    }

    /*********************************************************************/
    /*********************** CREACION DE DIV COMENTARIOS *************************/
    /*********************************************************************/
    function renderAdmin(json) {
        for (let i = 0; i < json.length; i++) {
          renderizarComentario(json[i]);
        }
    }

    function renderizarComentario(comentario){

        let id_comentario = comentario.id_comentario;
        let div = document.createElement('div');
        div.classList.add("cajaComentario");
        
        let div2 = document.createElement('img');
        div2.classList.add("imagenUsuario");
        div2.src = comentario.imagen;
        div.appendChild(div2);

        let h4 = document.createElement('h4');
        h4.innerHTML = `<span class="nombre-usuario"> ${comentario.nombre}: </span> ${comentario.titulo}`;

        div.appendChild(h4);
        h4.classList.add("tituloComentario");

        let p = document.createElement('p');
        p.classList.add('parrafoComentario');
        p.innerText = comentario.texto ;
        div.appendChild(p);

        let div3 = document.createElement('div');
        div3.classList.add("puntuacion");
        let p2 = document.createElement('p');
        p2.classList.add('parrafoPuntuacion');
        p2.innerText = ' Puntuacion: ' + comentario.puntuacion;
        div.appendChild(div3);
        div3.appendChild(p2);

        let ul = document.createElement('ul');
        let li = document.createElement('li');
        li.appendChild(div);
        ul.appendChild(li);
        li.classList.add("liComentario");

        if (permiso == 1) {
            let btn = document.createElement("button");
            btn.innerText = "Eliminar";
            btn.addEventListener("click", function () {
                borrarComentarios(id_comentario, id_producto);

            });
            btn.classList.add("btnEliminarComentario");
            li.appendChild(btn);
        }
        ul.classList.add("listaCajasComentario")
        contenedor.appendChild(ul);
    }

});