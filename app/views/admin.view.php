<?php
include_once "libs/smarty/Smarty.class.php";
class ViewAdmin
{

    /************************ TABLAS DEL ADMINISTRADOR ************************/
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
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
}