<?php


class ViewProducto{
    
    
    function renderProductos($productos){

        echo "<ul class='list-group mt-5'>";
        foreach($productos as $producto) {
            echo "<li class='list-group-item'>
                    $producto->nombre |  $producto->precio | $producto->categoria  
                    <a class='btn btn-danger btn-sm' href=detalleProducto'/$producto->id'>descripcion</a>
                </li>";
        }
        echo "</ul>";



    }







}