document.addEventListener('DOMContentLoaded', () => {
    "use strict"
    const contenedor = document.querySelector('#logoutHiddenJS');
    let permiso = contenedor.dataset.usuario;


    function toggleMenu() {
        document.querySelector(".logoutHidden").classList.toggle("show");
    }

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
