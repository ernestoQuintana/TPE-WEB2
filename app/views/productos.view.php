<?php
include_once "libs/smarty/Smarty.class.php";
class ViewProducto
{

    /************************ TABLAS DEL ADMINISTRADOR ************************/
    private $smarty;

    function __construct($categorias)
    {
        $this->smarty = new Smarty();
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->assign('BASE_URL', BASE_URL);
    }

    // PRODUCTOS

    function renderAdmin()
    {
        $this->smarty->display('administrador.tpl');
    }
    //prueba
    function renderIndex($user)
    {
        $this->smarty->assign('user', $user);
        $this->smarty->display('index.tpl');
    }

    function renderFormEditar($id,$producto)
    {
        $this->smarty->assign('id', $id);
        $this->smarty->assign('producto', $producto);
        $this->smarty->display('formEditar.tpl');
    }

    function renderProductosAdmin($productos)
    {
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('productosAdmin.tpl');
    }

    function ShowHomeLocation()
    {
        header("Location: " . BASE_URL . "allProductos");
    }


    // CATEGORIAS 

    function renderCategoriasAdmin()
    {
        $this->smarty->display('categoriasAdmin.tpl');
    }
    function renderFormEditarCategoria($idCategoria, $categoria)
    {
        $this->smarty->assign('idCategoria', $idCategoria);
        $this->smarty->assign('categoria',$categoria);
        $this->smarty->display('formEditarCategoria.tpl');
    }

    function renderProductosByCategoria($productosCategoria, $nombreCategoriaId)
    {
        $this->smarty->assign('nombreCategoriaId', $nombreCategoriaId);
        $this->smarty->assign('productosCategoria', $productosCategoria);
        $this->smarty->display('productosPorCategoria.tpl');
    }

    function ShowHomeLocationCategory()
    {
        header("Location: " . BASE_URL . "allCategorias");
    }

    /************************ TABLAS DEL USUARIO ************************/

    function renderProductos($productos)
    {
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('allProductos.tpl');
    }

    function renderDetalleProducto($producto,$user)
    {
        $this->smarty->assign('producto', $producto);
        $this->smarty->assign('user', $user);
        $this->smarty->display('detalleProductos.tpl');
    }
    function renderBusqueda(){
        $this->smarty->display('searchBox.tpl');
    }

    function renderCategoriasUsuario()
    {
        $this->smarty->display('allCategorias.tpl');
    }

    function ShowBusquedaLocationUsuario($productos)
    {
        $this->smarty->assign('productos',$productos);
        $this->smarty->display('renderProductoBuscado.tpl');
       // header("Location: " . BASE_URL . "busqueda");
    }

    function ShowHomeLocationUsuario()
    {
        header("Location: " . BASE_URL . "index");
    }
}
