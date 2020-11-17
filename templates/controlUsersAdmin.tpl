{include file='header.tpl'}
<main class="container">
<div class="listaUsuarios">
    <h1>Lista de Usuarios</h1>
</div>
<ul class='list-group mt-5'>
    {foreach $users as $user}
        <li class='listaCategoriasView'>
              {$user->nombre_administrador} | {$user->email} | {$user->permiso}
            <div class='cajaBtn'>
                <a class='btnBorrar' href='eliminarUsuario/{$user->id}'>Eliminar</a>
                <a class='btnEditar' href='editarUsuario/{$user->id}'>Editar</a>
            </div>
        </li>
    {/foreach}
</ul>
{include file='footer.tpl'}