<style type="text/css">
#disService{
	display:none;
}
</style>
    
    <div id="disService">
    <!-- here message will be displayed -->
	</div>
        
 	
	 <form method='post' id='service-SaveForm' action="#">
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Service</td>
            <td><input type='text' name='desc' class='form-control' placeholder='EX : Ville de Mulhouse' required /></td>
        </tr>
 
        <tr>
            <td>Adresse</td>
            <td><select class="select_Client form-control" name="s_client">
                <option value="0">--Choisissez un client--</option>
                {foreach from=$donnees['clients'] item=c}
                <option value="{$c.ID_client}">{$c.Nom}</option>
                {/foreach}
            </select></td>
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
			</button>  
            </td>
        </tr>
 
    </table>
</form>