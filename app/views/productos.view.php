<?php

class ViewProducto{

    //require_once "libs\smarty\Smarty.class.php";
    
    /************************ TABLAS DEL ADMINISTRADOR ************************/
    
    // PRODUCTOS

    function renderAdmin(){
        include_once 'templates\header.php';
        include_once 'templates\administrador.php';
        include_once 'templates\footer.php';        
    }
     function renderHome(){
        include_once 'templates\header.php';
        include_once 'templates\home.php';
        include_once 'templates\footer.php';  
     }

    function renderProductosAdmin($productos)
    {
        include_once 'templates\header.php';      
        include_once 'templates\form.php';
/*
        $smaty = new Smarty();
        $smaty->assign();
        $smarty->assing();

*/      
        echo "<ul class='list-group mt-5'>";
        foreach ($productos as $producto) {

            echo "<li class='listaProductoView'>
                      $producto->nombre |  $producto->precio 
                    <div class= 'cajaBtn'>     
                      <a class='btnBorrar' href='eliminarProducto/$producto->id'>Eliminar</a>
                      <a class='btnEditar' href='editarProducto/$producto->id'>Editar</a>
                    </div>                  
                      </li>";
        }
        echo "</ul>";

        include_once 'templates\footer.php';
    }

    function ShowHomeLocation()
    {
        header("Location: " . BASE_URL . "administrador");
    }
    
    
    // CATEGORIAS 
    
    function renderCategoriasAdmin($categorias){
        include_once 'templates\header.php';
        include_once 'templates\formCategoria.php';
        //incluir form para las categorias
        echo "<ul class='list-group mt-5'>";
        foreach ($categorias as $categoria) {
            echo "<li class='listaCategoriasView'>
            $categoria->nombre  | $categoria->origen
            <div class= 'cajaBtn'>     
            <a class='btnBorrar' href='eliminarCategoria/$categoria->id_categoria'>Eliminar</a>
            <a class='btnEditar' href='editarCategoria/$categoria->id_categoria'>Editar</a>
            </div>
            </li>";
            echo "<li class='list-group-item'>
            $categoria->descripcion
            </li>";            
        }
        echo "</ul>";
        
        include_once 'templates\footer.php';
    }

    function renderProductosByCategoria($productosCategoria , $tipoCategoria){
        include_once 'templates\header.php';
            echo "<h1> Lista de: " . $tipoCategoria ."</h1>"; 
        echo "<ul class='list-group mt-5'>";
        foreach ($productosCategoria as $producto) {
            echo "<li class='list-group-item'>
            $producto->nombre | $tipoCategoria 
            </li>";
        }
        echo "</ul>";
    }
    
    function ShowHomeLocationCategory()
    {
        header("Location: " . BASE_URL . "allCategorias");
    }

    /************************ TABLAS DEL USUARIO ************************/
    
    
    
    function renderProductos($productos)
    {
        include_once 'templates\header.php';
        echo "<ul class='list-group mt-5'>";
        foreach ($productos as $producto) {
            echo "<li class='list-group-item'>
            $producto->nombre |  $producto->precio | $producto->id_categoria  
            <a class='btnDetalle' href='detalleProducto/$producto->id'>descripcion</a>
            </li>";
        }
        echo "</ul>";
    }
    
    function renderDetalleProducto($producto){
        include_once 'templates\header.php';
        echo "<ul class='list-group mt-5'>";
        echo "<li class='list-group-item'>
        $producto->nombre   
        </li>";
        echo "<li class='list-group-item'> $producto->descripcion | $producto->precio </li>";
        echo "</ul>";
        echo "<a class='btnVolver' href='productos/'>volver</a>";
    }
    
    function renderCategoriasUsuario($categorias)
    {
        include_once 'templates\header.php';
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
    }


    function ShowHomeLocationUsuario()
    {
        header("Location: " . BASE_URL . "home");
    }
    
}
