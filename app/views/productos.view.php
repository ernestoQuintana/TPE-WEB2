<?php

echo "";
class ViewProducto
{

    function renderPaginaAdmin($productos)
    {

        include_once 'templates\header.php';
        include_once 'templates\form.php';

        echo "<ul class='list-group mt-5'>";
        foreach ($productos as $producto) {

            echo "<li class='listaProductoView'>
                      $producto->nombre |  $producto->precio 
                    <div class= 'cajaBtn'>     
                      <a class='btnDetalle' href='detalleProducto/$producto->id'>descripcion</a>
                      <a class='btnBorrar' href='borrar/$producto->id'>Eliminar</a>
                    </div>                  
                      </li>";
        }
        echo "</ul>";

        include_once 'templates\footer.php';
    }

    function ShowHomeLocation()
    {
        header("Location: " . BASE_URL . "home");
    }

    function renderDetalleProducto($producto)
    {
        include_once 'templates\header.php';

        echo "<ul class='list-group mt-5'>";
        echo "<li class='list-group-item'>
        $producto->nombre //aca tenemos q poner la categoria con el nuevo metodo  
        </li>";
        echo "<li class='list-group-item'> $producto->descripcion | $producto->precio </li>";
        echo "</ul>";
    }

    function renderProductosByCategoria($productosCategoria)
    {
        include_once 'templates\header.php';

        echo "<ul class='list-group mt-5'>";
        foreach ($productosCategoria as $producto) {
            echo "<li class='list-group-item'>
            $producto->nombre | $producto->categoria 
            </li>";
        }
        echo "</ul>";
    }

    function renderCategorias($categorias)
    {
        include_once 'templates\header.php';
        echo "<ul class='list-group mt-5'>";
        foreach ($categorias as $categoria) {
            echo "<li class='list-group-item'>
            $categoria->nombre 
            </li>";
        }
        echo "</ul>";
    }

    /*
        function renderProductos($productos)
        {
            echo "<ul class='list-group mt-5'>";
            foreach ($productos as $producto) {
                echo "<li class='list-group-item'>
                        $producto->nombre |  $producto->precio | $producto->categoria  
                        <a class='btn btn-danger btn-sm' href='detalleProducto/$producto->id_producto'>descripcion</a>
                    </li>";
            }
            echo "</ul>";
        }*/
}
