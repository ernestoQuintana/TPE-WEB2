<?php

require_once 'app\views\productos.view.php';
require_once 'app\models\categorias.model.php';
require_once 'app\models\productos.model.php';
require_once 'app\controllers\admin.controllers.php';
require_once 'app\controllers\helper.php';


class ProductosControllers
{

    private $modelProducto;
    private $modelCategoria;
    private $view;
    private $helper;

    function __construct()
    {
        $this->modelProducto = new ModelProducto();
        $this->modelCategoria = new ModelCategoria();
        $this->view = new ViewProducto();
        $this->helper = new helper();
    }


    /***********************  FUNCIONES DEL ADMINISTRADOR ***********************/


    //FUNCIONES DE LOS PRODUCTOS


    function showIndex()
    {
        $categorias = $this->modelCategoria->getAllCategorias();
        $this->view->renderIndex($categorias);
    }

    function showProductosAdmin()
    {
        $user = $this->helper->checkLogin();
        if($user->permiso ==1){
            $categorias = $this->modelCategoria->getAllCategorias();
            $productos = $this->modelProducto->getAllProductos();
            $this->view->renderProductosAdmin($productos, $categorias);
        }$this->view->ShowHomeLocationUsuario();
    }

    function showCategoriasAdmin()
    {
        $user = $this->helper->checkLogin();
        if($user->permiso ==1){
            $categorias = $this->modelCategoria->getAllCategorias();
            $this->view->renderCategoriasAdmin($categorias);
        }
        $this->view->ShowHomeLocationUsuario();

    }


    function agregarProducto()
    {
        $user = $this->helper->checkLogin();
        if($user->permiso == 1){
            if(isset($_POST['input_title']) && isset($_POST['input_description']) && isset($_POST['input_precio']) && isset($_POST['select_categoria'])){
                $nombre = $_POST['input_title'];
                $descripcion = $_POST['input_description'];
                $precio = $_POST['input_precio'];
                $categoria = $_POST['select_categoria'];
            }
            $this->modelProducto->insertarProducto($nombre,$descripcion,$precio,$categoria);
            $this->view->ShowHomeLocation();
        }$this->view->ShowHomeLocationUsuario();
    }

    function editarP($params = null)
    {
        $user = $this->helper->checkLogin();
        if($user->permiso ==1){
            $id = $params[':ID'];
            $producto = $this->modelProducto->getDetalleProducto($id);
            $categorias = $this->modelCategoria->getAllCategorias();
            $this->view->renderFormEditar($id,$categorias,$producto);
        }
        $this->view->ShowHomeLocationUsuario();

    }

    function editarProducto($params = null)
    {
        $user = $this->helper->checkLogin();
        if($user->permiso ==1){
            $id = $params[':ID'];
            if (isset($_REQUEST['input_title']) && isset($_REQUEST['input_description']) && isset($_REQUEST['input_precio']) && isset($_REQUEST['select_categoria'])){
                $nombre = $_REQUEST['input_title'];
                $descripcion = $_REQUEST['input_description'];
                $precio = $_REQUEST['input_precio'];
                $categoria = $_REQUEST['select_categoria'];
            }
            $this->modelProducto->editarProductoID($nombre, $descripcion, $precio, $categoria, $id);
            $this->view->ShowHomeLocation();
        }$this->view->ShowHomeLocationUsuario();  
    }

    function eliminarProducto($params = null)
    {   
        $user = $this->helper->checkLogin();
            if($user->permiso ==1){
            $this->helper->checkLogin();
            $id = $params[':ID'];
            $this->modelProducto->eliminarProductoID($id);
            $this->view->ShowHomeLocation();
        }$this->view->ShowHomeLocationUsuario();        
    }

    //FUNCIONES DE LAS CATEGORIAS

    function agregarCategoria()
    {
        $user = $this->helper->checkLogin();
            if($user->permiso ==1){

            if (isset($_POST['input_title']) && isset($_POST['input_description']) && isset($_POST['input_origen'])) {
                $nombre = $_POST['input_title'];
                $descripcion = $_POST['input_description'];
                $origen = $_POST['input_origen'];
            }
        
            $this->modelCategoria->insertarCategoria($nombre, $descripcion, $origen);
            $this->view->ShowHomeLocationCategory();
        }$this->view->ShowHomeLocationUsuario();
    }

    function eliminarCategoria($params = null)
    {
        $user = $this->helper->checkLogin();
            if($user->permiso ==1){
            $id = $params[':ID'];
            $categoriaID = $this->modelCategoria->categoriaID($id);
            
            if($categoriaID === false){
                $this->modelCategoria->eliminarCategoriaID($id);
                $this->view->ShowHomeLocationCategory();   
            }       
        }$this->view->ShowHomeLocationUsuario();    
    }

    function editarC($params = null)
    {
        $user = $this->helper->checkLogin();
        if($user->permiso ==1){
            $this->helper->checkLogin();
            $idCategoria = $params[':ID'];
            $categorias = $this->modelCategoria->getAllCategorias();
            $categoria = $this->modelCategoria->getNombreCategoria($idCategoria);
            $this->view->renderFormEditarCategoria($idCategoria ,$categoria , $categorias);
        }$this->view->ShowHomeLocationUsuario();    
    }

    function editarCategoria($params = null)
    {
        $user = $this->helper->checkLogin();
        if($user->permiso ==1){
            $id = $params[':ID'];
            if (
                isset($_REQUEST['input_title']) && isset($_REQUEST['input_description'])
                && isset($_REQUEST['input_origen'])
            ) {
                $nombre = $_REQUEST['input_title'];
                $descripcion = $_REQUEST['input_description'];
                $origen = $_REQUEST['input_origen'];
            }

            $this->modelCategoria->editarCategoriaID($nombre, $descripcion, $origen, $id);
            $this->view->ShowHomeLocationCategory();
        }$this->view->ShowHomeLocationUsuario();    
    }



    /********************** FUNCIONES DEL USUARIO **********************/

    function showProductos()
    {
        //1.obtener los productos
        $productos = $this->modelProducto->getAllProductos();
        $categorias = $this->modelCategoria->getAllCategorias();
        $this->view->renderProductos($productos, $categorias);
    }

    function showDetalleProducto($params = null)
    {
        $user = $this->helper->checkLogin();
        $id = $params[':ID'];
        $producto = $this->modelProducto->getDetalleProducto($id);
        $categorias = $this->modelCategoria->getAllCategorias();
        $this->view->renderDetalleProducto($producto, $categorias,$user);
     
    }

    function showProductosByCategoria($params = null)
    {

        $idCategoria = $params[':ID'];
        $productosCategoria = $this->modelProducto->getProductosByCategoria($idCategoria);
        $categorias = $this->modelCategoria->getAllCategorias();
        $nombreCategoriaId = $this->modelCategoria->getNombreCategoria($idCategoria);
        $this->view->renderProductosByCategoria($categorias, $productosCategoria, $nombreCategoriaId);
    
    }

    function showCategoriasUsuario()
    {
        $categorias = $this->modelCategoria->getAllCategorias();
        $this->view->renderCategoriasUsuario($categorias);
    }
     
}
