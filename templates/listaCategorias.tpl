<select class="form-control" name="select_categoria" required>
    {foreach $categorias as $categoria}
        <option>{$categoria->nombre_categoria}</option>
    {/foreach}
</select>