<style type="text/css">
#dis{
	display:none;
}
</style>
    <div id="dis">
    <!-- here message will be displayed -->
	</div>
        
 	
<form method='post' id='client-SaveForm' action="#">
 
    <table class='table table-bordered'>
 
        <tr>
            <td>Nom</td>
            <td><input type="text" name="Nom" class='form-control' placeholder='EX : Ville de Mulhouse' required /></td>
        </tr>
 
        <tr>
            <td>Adresse</td>
            <td><textarea rows="2" cols="1" name='Adresse' class='form-control' placeholder='EX : 6 rue de la paix' required></textarea></td>
        </tr>
 
        <tr>
            <td>Code postal</td>
            <td><input type='text' name='Code_postal' class='form-control' placeholder='EX : 68200' required></td>
        </tr>
        <tr>
            <td>Ville</td>
            <td><input type='text' name='Ville' class='form-control' placeholder='EX : Mulhouse' required></td>
        </tr> 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
    		<span class="glyphicon glyphicon-plus"></span> Save this Record
            </button>  
            </td>
        </tr>
 
    </table>
</form>