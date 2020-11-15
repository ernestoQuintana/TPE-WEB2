<?php

require_once 'app\views\admin.view.php';
require_once 'app\models\admin.model.php';
require_once 'app\models\categorias.model.php';


class UsersControllers
{

    private $viewAdmin;
    private $modelAdmin;
    private $modelCategoria;
  

    function __construct()
    {

        $this->viewAdmin = new ViewAdmin();
        $this->modelAdmin = new ModelAdmin();
        $this->modelCategoria = new ModelCategoria();
   
    }

    function login()
    {   
        session_start();
        if(isset ($_SESSION["nombre"])){
            $categorias = $this->modelCategoria->getAllCategorias();
            $this->viewAdmin->renderAdmin($categorias);
        }else{
            $categorias = $this->modelCategoria->getAllCategorias();
            $this->viewAdmin->renderViewAdmin($categorias);
        }
    }
    
    function logout()
    {
        session_start();
        session_destroy();
        header("Location: " . LOGIN);
    }

    function verificarUsuario()
    {
        if (isset($_POST['input_user']) && isset($_POST['input_password'])) {
            $nombre = $_POST['input_user'];
            $password = $_POST['input_password'];
        }

        $categorias = $this->modelCategoria->getAllCategorias();

        $adminDB =  $this->modelAdmin->getAdmin($nombre);

        if (isset($adminDB) && $adminDB){
        
           if (password_verify($password, $adminDB->password_administrador)) {
               
                session_start();
                $_SESSION["nombre"] = $adminDB->nombre_administrador;
                $_SESSION['LAST_ACTIVITY'] = time();

                $this->viewAdmin->renderAdmin($categorias); 
            }
            else{
                $mensaje = "PASSWORD INCORRECTO";
                $this->viewAdmin->renderViewAdmin($categorias, $mensaje);
            }

        } else {
            $mensaje = "NO EXISTE EL USUARIO";
            $this->viewAdmin->renderViewAdmin($categorias, $mensaje);
        }
    }

    /********************** REGISTRO **********************/
    
    function showRegistro(){
        $categorias = $this->modelCategoria->getAllCategorias();
        $this->viewAdmin->renderRegistro($categorias);
    }

    function agregarUsuario(){
        if (isset($_POST['input_nameRegister']) && isset($_POST['input_emailRegister'])
         && isset($_POST['input_passwordRegister'])){
            $nombre = $_POST['input_nameRegister'];
            $email = $_POST['input_emailRegister'];
            $password = $_POST['input_passwordRegister'];
        }
        $passEncrypt = password_hash($password,PASSWORD_DEFAULT); //encriptamos el password ingresado

        $categorias = $this->modelCategoria->getAllCategorias();
        $this->modelAdmin->getUser($nombre,$passEncrypt,$email);
        $this->viewAdmin->renderAdmin($categorias);
    }
}
