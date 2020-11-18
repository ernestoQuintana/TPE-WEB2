{include file='header.tpl'}
<div class="btnLogout">
<a href="logout"><i class="fas fa-exclamation-triangle">Logout</i></a>
</div>
<main class="container">
<div class="listaUsuarios">
    <h1>Lista de Usuarios</h1>
</div>
<ul class='list-group mt-5'>
    {foreach $users as $user}
        <li class='listaUsuarioView'>
              {$user->nombre_administrador} | {$user->email} | {$user->permiso}
            <div class='cajaBtn'>
            {if $user->permiso == 0}
                <a class='btnEditar' href='permisoUsuario/{$user->id}'>Agregar Permiso</a>
                {else}
                <a class='btnEditar' href='permisoUsuario/{$user->id}'>Quitar Permiso</a>
            {/if}
                <a class='btnBorrar' href='eliminarUsuario/{$user->id}'>Eliminar</a>
            </div>
        </li>
    {/foreach}
</ul>
{include file='footer.tpl'}