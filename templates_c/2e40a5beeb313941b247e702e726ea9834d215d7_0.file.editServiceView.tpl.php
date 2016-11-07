<?php
/* Smarty version 3.1.30, created on 2016-11-02 09:17:31
  from "C:\wamp64\www\blogpoo\Vue\Clients\editServiceView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5819af2b43feb1_99762620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e40a5beeb313941b247e702e726ea9834d215d7' => 
    array (
      0 => 'C:\\wamp64\\www\\blogpoo\\Vue\\Clients\\editServiceView.tpl',
      1 => 1478078245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5819af2b43feb1_99762620 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
        <input type='hidden' name='id' value='<?php echo $_smarty_tpl->tpl_vars['donnees']->value['service']['ID_service'];?>
' />
        <tr>
            <td>Service</td>
            <td><input type='text' name='desc' class='form-control'  value='<?php echo $_smarty_tpl->tpl_vars['donnees']->value['service']['Description'];?>
' required /></td>
        </tr>
 
        <tr>
            <td>Adresse</td>
            <td>
                <select class="select_Client form-control" name="s_client">
                
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['donnees']->value['clients'], 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
                    
                    <?php if ($_smarty_tpl->tpl_vars['donnees']->value['service']['ID_client'] == $_smarty_tpl->tpl_vars['c']->value['ID_client']) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['ID_client'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom'];?>
</option>
                    <?php } elseif ($_smarty_tpl->tpl_vars['donnees']->value['service']['ID_client'] != $_smarty_tpl->tpl_vars['c']->value['ID_client']) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['ID_client'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom'];?>
</option>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
              
</form><?php }
}
