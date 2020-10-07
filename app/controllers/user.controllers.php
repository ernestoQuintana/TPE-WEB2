<?php

require_once 'app\views\usuario.view.php';
require_once 'app\models\user.model.php';
require_once 'app\models\categorias.model.php';
require_once 'app\controllers\helper.php';

class UsersControllers
{

    private $viewUsuario;
    private $modelUsuario;
    private $modelCategoria;
    private $helper;

    function __construct()
    {

        $this->viewUsuario = new ViewUsuario();
        $this->modelUsuario = new ModelUsuario();
        $this->modelCategoria = new ModelCategoria();
        $this->helper = new helper();
    }

    function login()
    {   
        $categorias = $this->modelCategoria->getAllCategorias();
        $this->viewUsuario->renderViewUsuario($categorias);
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
        //   var_dump($usuarioDB);

        $usuarioDB =  $this->modelUsuario->getUsuario($nombre);

        if (isset($usuarioDB) && $usuarioDB){
        
           if (password_verify($password, $usuarioDB->password_usuario)) {
               
                session_start();
                $_SESSION["nombre"] = $usuarioDB->nombre_usuario;
                $_SESSION['LAST_ACTIVITY'] = time();

                $this->viewUsuario->renderAdmin($categorias); 
            }
            else{
                $mensaje = "PASSWORD INCORRECTO";
                $this->viewUsuario->renderViewUsuario($categorias, $mensaje);
            }

        } else {
            $mensaje = "NO EXISTE EL USUARIO";
            $this->viewUsuario->renderViewUsuario($categorias, $mensaje);
        }
    }
}
