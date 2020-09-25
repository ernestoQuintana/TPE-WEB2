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

       /* function showProductos(){
            //1.obtener los productos
          $productos = $this->modelProducto->getAllProductos();
          $this->view->renderProductos($productos);
        }*/

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

        function showCategorias(){
            $categorias = $this->modelCategoria->getAllCategorias();
            $this->view->renderCategorias($categorias);
        }

        function homeAdministrador(){
            $productos = $this->modelProducto->getAllProductos();
            $this->view->renderPaginaAdmin($productos);
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
            if (isset($_POST['input_title']) && isset($_POST['input_description'])&& 
                isset($_POST['input_precio']) &&isset($_POST['select_categoria'])){
                $nombre = $_POST['input_title'];
                $descripcion = $_POST['input_description'];
                $precio = $_POST['input_precio'];
                $categoria = $_POST['select_categoria'];
            }
            $this->modelProducto->editarProductoID($nombre,$descripcion,$precio,$categoria,$id);
            $this->view->ShowHomeLocation();
        }


        function eliminarProducto($params = null){
            $id = $params[':ID'];
            $id_producto = $this->modelProducto->eliminarProductoID($id);
            $this->view->ShowHomeLocation();
        }

    }