<?php
include_once "libs/smarty/Smarty.class.php";
class ViewProducto{

    /************************ TABLAS DEL ADMINISTRADOR ************************/
    private $smarty;

    function __construct()
    {
       $this->smarty = new Smarty();     
    }
    
    // PRODUCTOS

    //pasar como templated de smarty y adentro del administrador incluir el header y footer
    function renderAdmin(){

        include_once 'templates\header.tpl';
        include_once 'templates\administrador.php';
        include_once 'templates\footer.tpl';        
    }
     function renderHome(){
        include_once 'templates\header.tpl';
        include_once 'templates\home.php';
        include_once 'templates\footer.tpl';  
     }

    function renderFormEditar($id)
    {
        $this->smarty->assign('BASE_URL', BASE_URL); //variable url que se lo paso al string pepito que esta en el FORM editar
        $this->smarty->assign('id', $id); //el id que me viene transformo al $id     
        $this->smarty->display('formEditar.tpl');
    }

    function renderProductosAdmin($productos)
    {
        $this->smarty->assign('productos',$productos);
        $this->smarty->display('productosAdmin.tpl');
    }

    function ShowHomeLocation()
    {
        header("Location: " . BASE_URL . "allProductos");
    }
    
    
    // CATEGORIAS 
         
    function renderCategoriasAdmin($categorias){
       $this->smarty->assign('categorias' , $categorias);
       $this->smarty->display('categoriasAdmin.tpl');
        
    }
    function renderFormEditarCategoria($id){
        $this->smarty->assign('id' , $id);
        $this->smarty->display('formEditarCategoria.tpl');
    }

    function renderProductosByCategoria($productosCategoria , $tipoCategoria){
        include_once 'templates\header.tpl';
            echo "<h1> Lista de: " . $tipoCategoria ."</h1>"; 
        echo "<ul class='list-group mt-5'>";
        foreach ($productosCategoria as $producto) {
            echo "<li class='list-group-item'>
            $producto->nombre | $tipoCategoria 
            </li>";
        }
        echo "</ul>";
        include_once 'templates\footer.tpl';
    }
    
    function ShowHomeLocationCategory()
    {
        header("Location: " . BASE_URL . "allCategorias");
    }

    /************************ TABLAS DEL USUARIO ************************/
    
    
    
    function renderProductos($productos)
    {
        include_once 'templates\header.tpl';
        echo "<ul class='list-group mt-5'>";
        foreach ($productos as $producto) {
            echo "<li class='list-group-item'>
            $producto->nombre |  $producto->precio | $producto->id_categoria  
            <a class='btnDetalle' href='detalleProducto/$producto->id'>descripcion</a>
            </li>";
        }
        echo "</ul>";
        include_once 'templates\footer.tpl';
    }
    
    function renderDetalleProducto($producto){
        include_once 'templates\header.tpl';
        echo "<ul class='list-group mt-5'>";
        echo "<li class='list-group-item'>
        $producto->nombre   
        </li>";
        echo "<li class='list-group-item'> $producto->descripcion | $producto->precio </li>";
        echo "</ul>";
        echo "<a class='btnVolver' href='productos/'>volver</a>";
        include_once 'templates\footer.tpl';
    }
    
    function renderCategoriasUsuario($categorias)
    {
        include_once 'templates\header.tpl';
        echo "<ul class='list-group mt-5'>";
        foreach ($categorias as $categoria) {
            echo "<li class='list-group-item'>
            $categoria->nombre  | $categoria->origen
            </li>";
            echo "<li class='list-group-item'>
            $categoria->descripcion;
            </li>";            
        }
        echo "</ul>";
        include_once 'templates\footer.tpl';
    }

    function ShowHomeLocationUsuario()
    {
        header("Location: " . BASE_URL . "home");
    }
    
}
