<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="<?= BASE_URL ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>'Productos'</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <ul>
                <a class="navbar-brand" href="productos.php?categoria=home">Home</a>
                <a class="navbar-brand" href="productos.php?categoria=productos">Productos</a>

                <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categorias
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                        <a class="navbar-brand dropdown-item" href="productos.php?categoria=rostro">Rostro</a>
                        <a class="navbar-brand dropdown-item" href="productos.php?categoria=cuerpo">Cuerpo</a>
                        <a class="navbar-brand dropdown-item" href="productos.php?categoria=hombre">Hombre</a>
                        <a class="navbar-brand dropdown-item" href="productos.php?categoria=cabello">Cabello</a>
                        <a class="navbar-brand admin" href="productos.php?categoria=administrador">Administrador</a>
                    </div>
            </ul>
        </nav>
    </header>
    <main class="container">