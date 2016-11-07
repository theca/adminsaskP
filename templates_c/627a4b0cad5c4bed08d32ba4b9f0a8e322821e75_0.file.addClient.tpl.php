<?php
/* Smarty version 3.1.30, created on 2016-11-02 07:36:48
  from "C:\wamp64\www\blogpoo\Vue\Clients\addClient.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58199790df3f05_73245136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '627a4b0cad5c4bed08d32ba4b9f0a8e322821e75' => 
    array (
      0 => 'C:\\wamp64\\www\\blogpoo\\Vue\\Clients\\addClient.tpl',
      1 => 1478071980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58199790df3f05_73245136 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
</form><?php }
}
