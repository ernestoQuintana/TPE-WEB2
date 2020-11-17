<?php
include_once "libs/smarty/Smarty.class.php";
class ViewAdmin
{

    /************************ TABLAS DEL ADMINISTRADOR ************************/
    private $smarty;

    function __construct()
    {
        //$this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty = new Smarty();
    }

    function renderIndex($categorias){
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('index.tpl');
    }

    function renderViewAdmin($categorias , $mensaje = ""){
        
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('login.tpl');
    }

    function renderAdmin($categorias)
    {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('administrador.tpl');
    }

    function renderViewUser($categorias , $mensaje = ""){

        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('loginUsuario.tpl');
    }
    function renderRegistro($categorias, $mensaje = ""){

        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('registro.tpl');
    }

    function renderUsersAdmin($categorias,$users){

        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('users', $users);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('controlUsersAdmin.tpl');
    }
    function ShowUsuarioLocation()
    {
        header("Location: " . BASE_URL . "allUsers");
    }
}