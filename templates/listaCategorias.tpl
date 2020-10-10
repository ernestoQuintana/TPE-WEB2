<select class="form-control" name="select_categoria" required>
    {foreach $categorias as $categoria}
        <option value="{$categoria->id_categoria}"
            {if isset($producto) && $categoria->id_categoria == $producto->id_categoria}selected{/if}
        >{$categoria->nombre_categoria}</option>
    {/foreach}
</select>