<?php

class ModelComentarios{

    private $dbComentarios;

    function __construct(){
        $this->dbComentarios = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
    }


    function getComentariosPorProducto($idProducto){
        $comentario =  $this->dbComentarios->prepare('SELECT administrador.nombre_administrador as nombre , administrador.imagen as imagen,
         comentario.id_comentario, comentario.titulo , comentario.texto, comentario.puntuacion, comentario.id_usuario 
        FROM comentario INNER JOIN producto 
        ON producto.id = comentario.id_producto 
        INNER JOIN administrador ON comentario.id_usuario = administrador.id
        WHERE producto.id = ? '
    ); // El as te define como se va llamar la columna(atributo) en la respuesta  que te va a dar el sql
    // el as nombra como quiero yo que se llame el atributo en la respuesta del select , por defecto el ponen el mismo nombre
        $comentario->execute([$idProducto]);
        return $comentario->fetchAll(PDO::FETCH_OBJ);
    }

    function DeleteComentarioDelModelo($id){
        $comentario = $this->dbComentarios->prepare('DELETE FROM comentario  WHERE id_comentario = ?');
        $comentario->execute([$id]);
        return $comentario->rowCount();// Trae un numero mayor a 0 si borro.
    }


    function insertarComentario($titulo,$texto,$puntuacion,$id_usuario,$idProducto){
        $comentario = $this->dbComentarios->prepare('INSERT INTO comentario (titulo,texto,puntuacion,id_usuario,id_producto) VALUES(?,?,?,?,?)');
        $comentario->execute([$titulo,$texto,$puntuacion,$id_usuario,$idProducto]);
        return $this->dbComentarios->lastInsertId();//Trae el ultimo id que toco.
    }
    
    function getComentarioId($idComentario){
        $comentario = $this->dbComentarios->prepare('SELECT administrador.nombre_administrador as nombre , administrador.imagen as imagen, 
        comentario.id_comentario, comentario.titulo , comentario.texto, comentario.puntuacion, comentario.id_usuario
        FROM comentario INNER JOIN administrador ON comentario.id_usuario = administrador.id WHERE id_comentario = ?'); 
        $comentario->execute([$idComentario]);
        return $comentario->fetch(PDO::FETCH_OBJ);
    }

    function getComentario(){
        $comentario = $this->dbComentarios->prepare('SELECT * FROM comentario');
        $comentario->execute([]);
        return $comentario->fetchAll(PDO::FETCH_OBJ);
    }


}