<?php
/* Smarty version 3.1.30, created on 2016-11-02 09:05:03
  from "C:\wamp64\www\blogpoo\Vue\Clients\editClientView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5819ac3f4031b1_51122380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbca71a2c2001878fe7d2bc66c53a2d0914dafe1' => 
    array (
      0 => 'C:\\wamp64\\www\\blogpoo\\Vue\\Clients\\editClientView.tpl',
      1 => 1478077496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5819ac3f4031b1_51122380 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style type="text/css">
#dis{
	display:none;
}
</style>
<div id="dis">
</div>
 <form method='post' id='client-UpdateForm' action='#'>
    <table class='table table-bordered'>
 		<input type='hidden' name='id' value='<?php echo $_smarty_tpl->tpl_vars['donnees']->value['client']['ID_client'];?>
' />
        <tr>
            <td>Nom</td>
            <td><input type='text' name='Nom' class='form-control' value="<?php echo $_smarty_tpl->tpl_vars['donnees']->value['client']['Nom'];?>
" required></td>
        </tr>
 
        <tr>
            <td>Adresse</td>
            <td><input type='text' name='Adresse' class='form-control' value="<?php echo $_smarty_tpl->tpl_vars['donnees']->value['client']['Adresse'];?>
" required></td>
        </tr>
 
        <tr>
            <td>Code postal</td>
            <td><input type='text' name='Code_postal' class='form-control' value="<?php echo $_smarty_tpl->tpl_vars['donnees']->value['client']['Code_postal'];?>
" required></td>
        </tr>
        <tr>
            <td>Ville</td>
            <td><input type='text' name='Ville' class='form-control' value='<?php echo $_smarty_tpl->tpl_vars['donnees']->value['client']['Ville'];?>
' required></td>
        </tr>
 
        <tr>
            <td colspan="2">
            <button type="submit" class="btn btn-primary" name="btn-update" id="btn-update">
    		<span class="glyphicon glyphicon-plus"></span> Save Updates
			</button>
            </td>
        </tr>
    </table>
</form>
     
<?php }
}
