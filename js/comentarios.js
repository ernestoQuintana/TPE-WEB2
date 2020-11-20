document.addEventListener('DOMContentLoaded', () => {
    "use strict"

    document.querySelector('#formComentario').addEventListener('submit', e => {
        e.preventDefault();//evita el envio del formulario
        cargarComentarios();
        agregarFila();
    })


    const baseURL = 'api/comentarios';
    const contenedor = document.querySelector('#listaComentario');
    const div = document.querySelector("#cargando");
    let datos = [];

/*********************************************************************/    
/************************* TRAER COMENTARIOS *************************/ 
/*********************************************************************/   


    function cargarComentarios() {
        div.innerHTML = "Imprimiendo...";
        fetch('productos/:ID/comentario',{
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
    
            datos = [];
    
            for (let i = 0; i < json.comentarios.length; i++) {
            
              datos.push(json.comentarios[i]);
              renderAdmin(json.comentarios[i]);
            }
        })
    }


/*********************************************************************/    
/*********************** AGREGAR COMENTARIOS *************************/ 
/*********************************************************************/    

    function agregarFila() {

        let comentario = {    
                "titulo": document.querySelector("#tituloComentario").value,
                "texto": document.querySelector("#descriptionComentario").value,
                "puntuacion": document.querySelector("#puntajeComentario").value,//poner paserINT?
                "id_usuario": 2,  //INVESTIGAR cuando me logue , el api trae el usuario, Json, Guardo en una variable y lo uso aca
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

    function renderAdmin(comentarios) {

        for (let comentario of comentarios) {

         //   let idComentario = comentario.id_comentario;
            let div = document.createElement('div');
            div.classList.add("cajaComentario");

            let h2 = document.createElement('h2');
            h2.innerText = comentario.titulo;
            div.appendChild(h2);
            h2.classList.add("tituloComentario");

            let p = document.createElement('p');
            p.innerText = comentario.texto;
            div.appendChild(p);


            let ul = document.createElement('ul');
            let li = document.createElement('li');
            li.appendChild(div);
            ul.appendChild(li);

            ul.classList.add("listaCajasComentario")
 
            contenedor.appendChild(ul);
        }

    }

   
/*********************************************************************/    
/*********************** ELIMINAR COMENTARIOS ************************/ 
/*********************************************************************/  

    function borrarComentarios(idComentario) {
        div.innerHTML = "Borrando...";
        fetch('api/comentarios/' + idComentario, {
            "method": "DELETE",
            "headers": { "Content-Type": "application/json" },
        }).then(response => response.json())
            .then(function (json) {
                cargarComentarios();
            }).catch(function (e) {
                console.log(e);
            })
    }


    setInterval(function(){ cargarComentarios()} , 20000);
});