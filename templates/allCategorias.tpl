{include file="head.tpl"}
{include file='header.tpl'}    
    <ul class='list-group mt-5'>
        {foreach $categorias as $categoria} 
            <li class='list-group-item'>
                <h5> Categoria: </h5>{$categoria->nombre_categoria}  <h5> Origen: </h5> {$categoria->origen}
            </li>
            <li class='list-group-item'>
               <h5> Descripcion: </h5> {$categoria->descripcion_categoria}
            </li>
            {/foreach} 
    </ul>
{include file='footer.tpl'}      