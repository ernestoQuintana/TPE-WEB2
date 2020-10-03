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
                </div>
            </div>

            <a class="admin" href="administrador">Administrador</a>
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