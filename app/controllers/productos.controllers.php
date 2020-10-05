<?php

    require_once 'app\views\productos.view.php';
    require_once 'app\models\categorias.model.php';
    require_once 'app\models\productos.model.php';
    require_once 'app\controllers\user.controllers.php';


    class ProductosControllers{

        private $modelProducto;
        private $modelCategoria;
        private $view;
      //  private $viewUsuario;
        
        function __construct(){
            $this->modelProducto = new ModelProducto();
            $this->modelCategoria = new ModelCategoria();
            $this->view = new ViewProducto();
        //    $this->viewUsuario = new ViewUsuario();
        } 


    /***********************  FUNCIONES DEL ADMINISTRADOR ***********************/

    
        //FUNCIONES DE LOS PRODUCTOS

        
        function showIndex(){
            $categorias = $this->modelCategoria->getAllCategorias();
            $this->view->renderIndex($categorias);
        }

        function checkLogin(){
           // $categorias = $this->modelCategoria->getAllCategorias();
            session_start();
            if(!isset($_SESSION['nombre'])){
                header("Location: " .LOGIN);
              //  $this->viewUsuario->renderViewUsuario($categorias , $mensaje = "");
                die();
            }
            
        }
        //administrador
       /* function showAdmin(){
            $categorias = $this->modelCategoria->getAllCategorias();
            $this->view->renderAdmin($categorias);
        }*/

        function showProductosAdmin(){

            $this->checkLogin();

            $categorias = $this->modelCategoria->getAllCategorias();
            $productos = $this->modelProducto->getAllProductos();
            $this->view->renderProductosAdmin($productos, $categorias);
        }

        function showCategoriasAdmin(){
            $this->checkLogin();
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

       function editarP($params = null){
            $id = $params[':ID'];
            $categorias = $this->modelCategoria->getAllCategorias();
            $this->view->renderFormEditar($id, $categorias);
        }

        function editarProducto($params = null){
            
            $id = $params[':ID'];
            if (isset($_REQUEST['input_title']) && isset($_REQUEST['input_description'])&& 
                isset($_REQUEST['input_precio']) && isset($_REQUEST['select_categoria'])){ 
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

        function editarC($params = null){
            $id = $params[':ID'];
            $this->view->renderFormEditarCategoria($id);
        }
        
        function editarCategoria($params = null){
            $id = $params[':ID'];
            if (isset($_REQUEST['input_title']) && isset($_REQUEST['input_description'])
            && isset($_REQUEST['input_origen'])){
                $nombre = $_REQUEST['input_title'];
                $descripcion = $_REQUEST['input_description'];
                $origen = $_REQUEST['input_origen'];
            }  
            
            $this->modelCategoria->editarCategoriaID($nombre,$descripcion,$origen,$id);
            $this->view->ShowHomeLocationCategory();
        }
       


        /********************** FUNCIONES DEL USUARIO **********************/

        function showProductos(){
            //1.obtener los productos
          $productos = $this->modelProducto->getAllProductos();
          $categorias = $this->modelCategoria->getAllCategorias();
          $this->view->renderProductos($productos ,$categorias);
        }

        function showDetalleProducto($params = null){
            $id = $params[':ID'];
            $producto = $this->modelProducto->getDetalleProducto($id);
            $categorias = $this->modelCategoria->getAllCategorias();
            $this->view->renderDetalleProducto($producto ,$categorias); 
        }
                
        function showProductosByCategoria($params = null){
           
            $idCategoria = $params[':ID'];
            $productosCategoria = $this->modelProducto->getProductosByCategoria($idCategoria);
            $categorias = $this->modelCategoria->getAllCategorias();
            $nombreCategoriaId = $this->modelCategoria->getNombreCategoria($idCategoria);
            //var_dump($nombreCategoriaId);
            // actualizo la vista
            $this->view->renderProductosByCategoria($categorias,$productosCategoria , $nombreCategoriaId);
        }

        function showCategoriasUsuario(){
            $categorias = $this->modelCategoria->getAllCategorias();
            $this->view->renderCategoriasUsuario($categorias);
        }

    }