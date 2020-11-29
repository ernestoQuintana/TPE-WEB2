document.addEventListener('DOMContentLoaded', () => {
    "use strict"
    const contenedor = document.querySelector('#logoutHiddenJS');
    let permiso = contenedor.dataset.usuario;


    function toggleMenu() {
        document.querySelector(".logoutHidden").classList.toggle("show");
    }

    // 'Api un endpoint chequear sesion,cuando te devuelva en js tener sesion , para cuando toque el logout se rompa , 
    // 'como ver la fK en comentario para borrar y que no se pise'
    function btnLogin(permiso) {
        console.log(permiso);
        if(permiso != null){
            toggleMenu(); 
            
        }else{
          console.log('Listo');
        }
    }
    btnLogin(permiso);

})
