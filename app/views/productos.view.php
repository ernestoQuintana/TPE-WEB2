<?php


class ViewProducto{

    private $title;

    function __construct()
    {
        $this->title = "Lista de Productos";
    }

    function renderPagina($productos)
    {
        
        $html = '
        <!doctype html>
        <html lang="en">
            <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

            <title>' . $this->title . '</title>
            </head>
            <body>

            <h1>' . $this->title . '</h1>

            <div class="container">
            <form action="insert" method="POST">
              <div class="form-group">
                <label for="title">Nombre</label>
                <input class="form-control" id="title" name="input_title" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Titulo de la tarea</small>
              </div>
              <div class="form-group">
                <label for="description">Descripcion</label>
                <input class="form-control" name="input_description" id="description">
              </div>
              <div class="form-group">
                <label for="priority">Precio</label>
                <input class="form-control" name="input_precio" id="precio">
              </div>
              <div class="form-group">
              <label for="title">Categoria</label>
              <select class="form-control" name="select">
                     <option></option>
                     <option>rostro</option>
                     <option>hombre</option>
                     <option>cabello</option>
                     <option>cuerpo</option>
              </select>
              </div>
              <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
            <br>
          </div>
            
        <div class="container">

          <ul class="list-group">';

        echo $html;

        echo "<ul class='list-group mt-5'>";
        foreach ($productos as $producto) {

            echo "<li class='list-group-item'>
                      $producto->nombre |  $producto->precio | $producto->categoria     
                      <a class='btn btn-secondary btn-sm' href='detalleProducto/$producto->id_producto'>descripcion</a>
                      <a class='btn btn-dark btn-sm' href='delete/$producto->id_producto'>Eliminar</a>
                  </li>";
        }
        echo "</ul>";
        $html .= '</ul>
                </div>

                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
                </body>
            </html>';

      
    }
    
    function ShowHomeLocation(){
        header("Location: ".BASE_URL."home");
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

    function renderDetalleProducto($producto)
    {
        echo "<ul class='list-group mt-5'>";
        echo "<li class='list-group-item'>
                    $producto->nombre |  $producto->categoria  
                </li>";
        echo "<li class='list-group-item'> $producto->descripcion | $producto->precio </li>";
        echo "</ul>";
    }

    function renderProductosByCategoria($productosCategoria)
    {

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

        echo "<ul class='list-group mt-5'>";
        foreach ($categorias as $categoria) {
            echo "<li class='list-group-item'>
                    $categoria->nombre 
                </li>";
        }
        echo "</ul>";
    }
}
