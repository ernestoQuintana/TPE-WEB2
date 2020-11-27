document.addEventListener('DOMContentLoaded', () => {
    "use strict"
    const contenedor = document.querySelector('#logoutHiddenJS');
    let permiso = contenedor.dataset.permiso;


    function toggleMenu() {
        document.querySelector(".logoutHidden").classList.toggle("show");
    }

    function btnLogin(permiso) {
        if(permiso == null){
            
            console.log('no podes ver nada porque no esta logueado');
        }else{
            if(permiso == 1 || permiso == 0 ){
                console.log('hola');
                toggleMenu();
                
            }
        }
    }
    btnLogin(permiso);

})
