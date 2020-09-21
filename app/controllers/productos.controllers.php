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

        function showProductos(){
          echo "entro";
            //1.obtener los productos
          $productos = $this->modelProducto->getAllProductos();
          $this->view->renderProductos($productos);
        }

        function showDetalleProducto($id){
            $producto = $this->modelProducto->getDetalleProducto($id);
            $this->view->renderDetalleProducto($producto); 
        }
        
        function showProductosByCategoria($tipoCategoria){
            // obtiene la categoria enviado por GET 
            //$categoria = $_GET['categoria'];
            // obtengo los productos por categoria
            $productosCategoria = $this->modelProducto->getProductosByCategoria($tipoCategoria);
            //var_dump($productosCategoria);
            // actualizo la vista
            $this->view->renderProductosByCategoria($productosCategoria);
        }

        function showCategorias(){
            $categorias = $this->modelCategoria->getAllCategorias();
            $this->view->renderCategorias($categorias);
        }

        
    }