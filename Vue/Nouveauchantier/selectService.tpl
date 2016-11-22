<label>Service</label>
<select class="form-control" name="FK_service">
    <option>Selectionner un service</option>    
    {foreach from=$donnees['services'] item=r}
        <option value="{$r.ID_service}">{$r.Description}</option>
    {/foreach}
</select>