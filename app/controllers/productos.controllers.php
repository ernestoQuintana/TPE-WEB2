<?php

    require_once 'app\views\productos.view.php';
    require_once 'app\models\categorias.model.php';
    require_once 'app\models\productos.model.php';

    class ProductosControllers{

        private $modelProducto;
        private $modelCategoria;
        private $view;

        function __construct(){
            $this->modelProducto = new ModelProducto();
            $this->modelCategoria = new ModelCategoria();
            $this->view = new ViewProducto();
        } 


    /***********************  FUNCIONES DEL ADMINISTRADOR ***********************/

    
        //FUNCIONES DE LOS PRODUCTOS

        //administrador
        function showHomeAdministrador(){
            $productos = $this->modelProducto->getAllProductos();
            $this->view->renderPaginaAdmin($productos);
        }

        function showCategoriasAdmin(){
            $categorias = $this->modelCategoria->getAllCategorias();
            $this->view->renderCategoriasAdmin($categorias);
        }

        function agregarProducto(){
            if (isset($_POST['input_title']) && isset($_POST['input_description'])&& 
                isset($_POST['input_precio']) &&isset($_POST['select_categoria'])){
                $nombre = $_POST['input_title'];
                $descripcion = $_POST['input_description'];
                $precio = $_POST['input_precio'];
                $categoria = $_POST['select_categoria'];
            }    
            $this->modelProducto->insertarProducto($nombre,$descripcion,$precio,$categoria);
            $this->view->ShowHomeLocation();
        }

        function editarProducto($params = null){
            $id = $params[':ID'];
            if (isset($_REQUEST['input_title']) && isset($_REQUEST['input_description'])&& 
                isset($_REQUEST['input_precio']) &&isset($_REQUEST['select_categoria'])){
                $nombre = $_REQUEST['input_title'];
                $descripcion = $_REQUEST['input_description'];
                $precio = $_REQUEST['input_precio'];
                $categoria = $_REQUEST['select_categoria'];
            }    
            
            $this->modelProducto->editarProductoID($nombre,$descripcion,$precio,$categoria,$id);
            $this->view->ShowHomeLocation();
        }

        function eliminarProducto($params = null){
            $id = $params[':ID'];
            $this->modelProducto->eliminarProductoID($id);
            $this->view->ShowHomeLocation();
        }
           
        //FUNCIONES DE LAS CATEGORIAS

        function agregarCategoria(){
            if (isset($_POST['input_title']) && isset($_POST['input_description'])&& isset($_POST['input_origen'])){
                $nombre = $_POST['input_title'];
                $descripcion = $_POST['input_description'];
                $origen = $_POST['input_origen'];
            }    
            $this->modelCategoria->insertarCategoria($nombre,$descripcion,$origen);
            $this->view->ShowHomeLocationCategory();
        }

        function eliminarCategoria($params = null){
            $id = $params[':ID'];
            $this->modelCategoria->eliminarCategoriaID($id);
            $this->view->ShowHomeLocationCategory();
        }

        function editarCategoria($params = null){
            $id = $params[':ID'];
            if (isset($_REQUEST['input_title']) && isset($_REQUEST['input_description'])&& isset($_REQUEST['input_origen'])){
                $nombre = $_REQUEST['input_title'];
                $descripcion = $_REQUEST['input_description'];
                $origen = $_REQUEST['input_origen'];
            }    
            $this->modelCategoria->editarCategoriaID($nombre,$descripcion,$origen,$id);
            $this->view->ShowHomeLocationCategory();
        }
       


        /********************** FUNCIONES DEL USUARIO **********************/



        function showHomeUsuario(){
            //1.obtener los productos
          $productos = $this->modelProducto->getAllProductos();
          $this->view->renderProductos($productos);
        }

        function showDetalleProducto($params = null){
            $id = $params[':ID'];
            $producto = $this->modelProducto->getDetalleProducto($id);
            $this->view->renderDetalleProducto($producto); 
        }
                
        function showProductosByCategoria($params = null){
           
            $tipoCategoria = $params[':ID'];
            $productosCategoria = $this->modelProducto->getProductosByCategoria($tipoCategoria);
            //var_dump($productosCategoria);
            // actualizo la vista
            $this->view->renderProductosByCategoria($productosCategoria);
        }

        function showCategoriasUsuario(){
            $categorias = $this->modelCategoria->getAllCategorias();
            $this->view->renderCategoriasUsuario($categorias);
        }

    }