{include file='header.tpl'}
<!--<div class="saludoBienvenida">
   <h4>Bienvenido {$usuarioDB->nombre_usuario}</h4>
</div>-->
<div class="btnLogout">
    <a href="logout"><i class="fas fa-exclamation-triangle">Logout</i></a>
</div>
    <div class="selecAdmin">
            <div class="adminImg">
                <h2>Lista de Productos</h2> 
                <a class="" href="allProductos"><img src="img\producto.jpeg" alt="" srcset=""></a>
            </div>
            
            <div class="adminImg">
                <h2>Lista de categorias</h2>
                <a class="" href="allCategorias"><img src="img\categorias.jpeg" alt="" srcset=""></a>
            </div>
    </div>
{include file='footer.tpl'}