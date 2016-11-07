<?php
/* Smarty version 3.1.30, created on 2016-11-02 08:03:39
  from "C:\wamp64\www\blogpoo\Vue\Clients\addServiceView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58199ddbe2d373_76926363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13e8f2e7dcec2c2d4720fb65bfdf431ac3abf67e' => 
    array (
      0 => 'C:\\wamp64\\www\\blogpoo\\Vue\\Clients\\addServiceView.tpl',
      1 => 1478073813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58199ddbe2d373_76926363 (Smarty_Internal_Template $_smarty_tpl) {
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
