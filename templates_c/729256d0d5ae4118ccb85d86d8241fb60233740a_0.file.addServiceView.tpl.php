<?php
/* Smarty version 3.1.30, created on 2016-11-06 13:12:16
  from "/var/www/vhosts/karamemis.fr/adminweb.karamemis.fr/Vue/Clients/addServiceView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581f2c30c403b2_29232494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '729256d0d5ae4118ccb85d86d8241fb60233740a' => 
    array (
      0 => '/var/www/vhosts/karamemis.fr/adminweb.karamemis.fr/Vue/Clients/addServiceView.tpl',
      1 => 1478073813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581f2c30c403b2_29232494 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['donnees']->value['clients'], 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['ID_client'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select></td>
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
