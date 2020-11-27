<?php

class ModelProducto
{
    private $dbProductos;

    function __construct()
    {
        $this->dbProductos = new PDO('mysql:host=localhost;' . 'dbname=db_productos;charset=utf8', 'root', '');
    }
    //llamamos todos los productos
    function getAllProductos()
    {

        $query = $this->dbProductos->prepare('SELECT producto.nombre, producto.precio ,producto.descripcion, categoria.nombre_categoria, producto.id , producto.imagen  FROM producto INNER JOIN categoria ON producto.id_categoria=categoria.id_categoria');
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }

    //llamamos un producto por id
    function getDetalleProducto($id)
    {

        $query = $this->dbProductos->prepare('SELECT * FROM `producto` WHERE id = ?');
        $query->execute([$id]);
        $producto = $query->fetch(PDO::FETCH_OBJ);
        return $producto;
    }

    //llamamos productos por categoria
    function getProductosByCategoria($idCategoria)
    {

        $query = $this->dbProductos->prepare('SELECT producto.nombre , categoria.nombre_categoria , producto.id FROM producto INNER JOIN categoria ON producto.id_categoria=categoria.id_categoria WHERE producto.id_categoria = ?');
        $query->execute([$idCategoria]);
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }

    function insertarProductoImg($nombre, $descripcion, $precio, $categoria, $imagen = null)
    {
        $img = null;
        if ($imagen) {

            $img = $this->uploadImage($imagen);
            $query = $this->dbProductos->prepare('INSERT INTO producto (nombre, descripcion, precio, id_categoria,imagen) VALUES(?,?,?,?,?)');
            $query->execute([$nombre, $descripcion, $precio, $categoria, $img]);
            return $this->dbProductos->lastInsertId();
        }
    }

    function uploadImage($imagen)
    {
        $target = 'img/' . uniqid() . '.jpg';
        move_uploaded_file($imagen, $target);
        return $target;
    }


    function editarProductoID($nombre, $descripcion, $precio, $categoria, $id, $imagen = null)
    {
        $img = null;
        if ($imagen) {
            $img = $this->uploadImage($imagen);
            $query = $this->dbProductos->prepare("UPDATE `producto` SET `nombre`= ?
            ,`descripcion`= ? ,`precio`= ?,`id_categoria`= ?,`imagen` =?  WHERE `id`= ?");
            $query->execute([$nombre, $descripcion, $precio, $categoria, $id, $img]);
            return $this->dbProductos->lastInsertId();
        }
    }

    function eliminarProductoID($id)
    {
        $query = $this->dbProductos->prepare('DELETE FROM `producto` WHERE id = ?');
        $query->execute([$id]);
    }
    function eliminarImagenID($id)
    {
        $query = $this->dbProductos->prepare('UPDATE producto SET imagen = NULL WHERE id=?');
        $query->execute([$id]);
    }




    /************************* BUSQUEDA AVANZADA **************************/

    function getBusquedaAvanzada($nombre = null, $categoria = null, $descripcion = null, $precioMin = null, $precioMax = null)
    {
        $base = "SELECT * FROM producto WHERE nombre LIKE ''$nombre'%' AND";
        var_dump($categoria);
        if ($nombre != null && $categoria != null) {
            $query = $this->dbProductos->prepare("SELECT * FROM producto INNER JOIN categoria ON producto.id_categoria = categoria.id_categoria 
            WHERE producto.id_categoria = ? AND producto.nombre LIKE '%?%'");
            $query->execute([$nombre, $categoria]); 
            var_dump('entro de una');     
        }
         elseif ($nombre != null && $descripcion != null) {
            $query = $this->dbProductos->prepare($base + "producto.descripcion LIKE = '%'?'%'");
            $query->execute([$nombre, $descripcion]); 
        } elseif ($nombre != null && $precioMin != null && $precioMax != null) {
            $query = $this->dbProductos->prepare($base + "(producto.precio > '?' AND producto.precio < '?')");
            $query->execute([$nombre, $precioMin,$precioMax]);
        } elseif($nombre != null && $categoria != null && $descripcion != null && $precioMin != null && $precioMax != null){
            $query = $this->dbProductos->prepare("SELECT * FROM producto INNER JOIN categoria ON producto.id_categoria = categoria.id_categoria WHERE producto.id_categoria = ? 
            AND producto.descripcion LIKE '%'?'%' AND (producto.precio > ? AND producto.precio < ?) AND producto.nombre LIKE '%'?'%'");
            $query->execute([$categoria,$descripcion,$precioMin,$precioMax,$nombre]);
        }
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }
}
