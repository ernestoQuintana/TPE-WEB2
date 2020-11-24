<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="{BASE_URL}">
    <link rel="stylesheet" href="css\style.css">
    {* <script src="https://kit.fontawesome.com/c178af35d7.js" crossorigin="anonymous"></script> *}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    {* <script type="text/javascript" src="./js/comentarios.js"></script> *}
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Productos</title>
</head>

<body>
    <header>
        <nav class="navBar">
            <img src="img\crema.png" class="imgCremas" alt="crema natural">
            <div>
                <h1 class="tituloProductos">Distribuidora Zaraquin</h1>
                <h5 class="tituloDescripcion">Cremas a base de Productos organicos</h5>
            </div>
            <div>
                <div class="btn-group" role="group">
                    <a class="navbar-brand" href="index">Home</a>
                    <a class="navbar-brand" href="productos">Productos</a>
                    <a class="navbar-brand nav-link dropdown-toggle categorias" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="allCategoriasUsuario">Todas las Categorias</a>
                        {foreach $categorias as $categoria}
                            <a class="dropdown-item" href="categoria/{$categoria->id_categoria}">{$categoria->nombre_categoria}</a>
                        {/foreach}
                    </div>
                    <a class="navbar-brand" href="busquedaAvanzada">Busqueda</a>
                    <a class="navbar-brand" href="registro">Registrate</a>
                    <a class="admin" id="loginJs" href="login">Ingresá</a>

                </div>
            </div>
            <div class="iconosRedesNav">
                <a href="#"><i class="iconosNav fab fa-facebook"></i></a>
                <a href="#"><i class="iconosNav fab fa-instagram-square"></i></a>
                <a href="#"><i class="iconosNav fab fa-twitter"></i></a>
                <a href="#"><i class="iconosNav fab fa-github"></i></a>
                <a href="#"><i class="iconosNav fab fa-vk"></i></a>
                <a href="#"><i class="iconosNav fab fa-telegram"></i></a>
            </div>

        </nav>
    </header>
    <main>