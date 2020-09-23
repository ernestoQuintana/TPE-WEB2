<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="<?= BASE_URL ?>">
    <link rel="stylesheet" href="css\style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>'Productos'</title>
</head>

<body>
    <header>

        <nav class="navBar">
            <img src="img\crema.png" class="imgCremas" alt="crema natural">
            <div>
                <h1 class="tituloProductos">Cremas Zaraquin</h1>
                <h5 class="tituloDescripcion">Cremas a base de Productos organicos</h5>
            </div>
            <div>
                <div class="btn-group" role="group">
                    <a class="navbar-brand" href="productos.php?categoria=home">Home</a>
                    <a class="navbar-brand" href="productos.php?categoria=productos">Productos</a>
                    <a class="navbar-brand nav-link dropdown-toggle categorias" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="productos.php?categoria=rostro">Rostro</a>
                        <a class="dropdown-item" href="productos.php?categoria=cuerpo">Cuerpo</a>
                        <a class="dropdown-item " href="productos.php?categoria=hombre">Hombre</a>
                        <a class="dropdown-item" href="productos.php?categoria=cabello">Cabello</a>
                    </div>
                </div>
            </div>


            </ul>

            <a class="admin" href="productos.php?categoria=administrador">Administrador</a>
        </nav>
    </header>
    <main class="container">