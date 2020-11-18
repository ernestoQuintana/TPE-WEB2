<?php
include_once "libs/smarty/Smarty.class.php";
class ViewProducto
{

    /************************ TABLAS DEL ADMINISTRADOR ************************/
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    // PRODUCTOS

    //pasar como templated de smarty y adentro del administrador incluir el header y footer
    function renderAdmin($categorias)
    {
        $this->smarty->assign('BASE_URL', BASE_URL);// agregar al constructor
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('administrador.tpl');
    }
    //prueba
    function renderIndex($categorias)
    {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('index.tpl');
    }

    function renderFormEditar($id,$categorias,$producto)
    {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('id', $id);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('producto', $producto);
        $this->smarty->display('formEditar.tpl');
    }

    function renderProductosAdmin($productos, $categorias)
    {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('productos', $productos);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('productosAdmin.tpl');
    }

    function ShowHomeLocation()
    {
        header("Location: " . BASE_URL . "allProductos");
    }


    // CATEGORIAS 

    function renderCategoriasAdmin($categorias)
    {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('categoriasAdmin.tpl');
    }
    function renderFormEditarCategoria($idCategoria, $categoria, $categorias)
    {

        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('idCategoria', $idCategoria);
        $this->smarty->assign('categoria',$categoria);
        $this->smarty->display('formEditarCategoria.tpl');
    }

    function renderProductosByCategoria($categorias ,$productosCategoria, $nombreCategoriaId)
    {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('nombreCategoriaId', $nombreCategoriaId);
        $this->smarty->assign('productosCategoria', $productosCategoria);
        $this->smarty->display('productosPorCategoria.tpl');

    }

    function ShowHomeLocationCategory()
    {
        header("Location: " . BASE_URL . "allCategorias");
    }

    /************************ TABLAS DEL USUARIO ************************/

    function renderProductos($productos , $categorias)
    {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('allProductos.tpl');
    }

    function renderDetalleProducto($producto , $categorias , $user)
    {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('producto', $producto);
        $this->smarty->assign('user', $user);
        $this->smarty->display('detalleProductos.tpl');
    }

    function renderCategoriasUsuario($categorias)
    {
        $this->smarty->assign('BASE_URL', BASE_URL);
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('allCategorias.tpl');
    }

    function ShowHomeLocationUsuario()
    {
        header("Location: " . BASE_URL . "index");
    }
}
