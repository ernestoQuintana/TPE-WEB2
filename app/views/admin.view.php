<?php
include_once "libs/smarty/Smarty.class.php";
class ViewAdmin
{

    /************************ TABLAS DEL ADMINISTRADOR ************************/
    private $smarty;

    function __construct($categorias)
    {
        $this->smarty = new Smarty();
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('BASE_URL', BASE_URL);
    }

    function renderIndex(){
        $this->smarty->display('index.tpl');
    }

    function renderViewAdmin($mensaje = ""){
        
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('login.tpl');
    }

    function renderAdmin()
    {
        $this->smarty->display('administrador.tpl');
    }

    function renderRegistro($mensaje = ""){
        $this->smarty->assign('mensaje', $mensaje);
        $this->smarty->display('registro.tpl');
    }

    function renderUsersAdmin($users){
        $this->smarty->assign('users', $users);
        $this->smarty->display('controlUsersAdmin.tpl');
    }
    
    function ShowUsuarioLocation()
    {
        header("Location: " . BASE_URL . "allUsers");
    }

    function ShowIndex()
    {
        header("Location: " . BASE_URL . "index");
    }


}