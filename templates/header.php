<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="<?= BASE_URL ?>">
    <link rel="stylesheet" href="css\style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>'Productos'</title>
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
                    <a class="navbar-brand" href="home">Home</a>
                    <a class="navbar-brand" href="productos">Productos</a>
                    <a class="navbar-brand nav-link dropdown-toggle categorias" 
                    id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="allCategoriasUsuario">Todas las Categorias</a>
                        <a class="dropdown-item" href="categoria/1">Rostro</a>
                        <a class="dropdown-item" href="categoria/2">Cuerpo</a>
                        <a class="dropdown-item " href="categoria/3">Hombre</a>
                        <a class="dropdown-item" href="categoria/4">Cabello</a>
                    </div>
                </div>
            </div>

            <a class="admin" href="administrador">Administrador</a>
        </nav>
    </header>
   