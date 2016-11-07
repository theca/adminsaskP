<style type="text/css">
#disService{
	display:none;
}
</style>
    
    <div id="disService">
    <!-- here message will be displayed -->
	</div>
        
 	
	 <form method='post' id='service-UpdateForm' action="#">
 
    <table class='table table-bordered'>
        <input type='hidden' name='id' value='{$donnees.service.ID_service}' />
        <tr>
            <td>Service</td>
            <td><input type='text' name='desc' class='form-control'  value='{$donnees.service.Description}' required /></td>
        </tr>
 
        <tr>
            <td>Adresse</td>
            <td>
                <select class="select_Client form-control" name="s_client">
                
                {foreach from=$donnees['clients'] item=c}
                    
                    {if $donnees.service.ID_client==$c.ID_client}
                        <option value="{$c.ID_client}" selected="selected">{$c.Nom}</option>
                    {elseif $donnees.service.ID_client!=$c.ID_client}
                        <option value="{$c.ID_client}">{$c.Nom}</option>
                    {/if}
                {/foreach}
                </select>
            </td>
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
			</button>  
            </td>
        </tr>
        
    </table>
              
</form>