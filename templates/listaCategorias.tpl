<select class="form-control" name="select_categoria" required>
    {foreach $categorias as $categoria}
        <option value="{$categoria->id_categoria}">{$categoria->nombre_categoria}</option>
    {/foreach}
</select>