<?php
/* Smarty version 3.1.30, created on 2016-11-06 13:09:41
  from "/var/www/vhosts/karamemis.fr/adminweb.karamemis.fr/Vue/Nouveauchantier/selectService.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581f2b95bbada3_69077242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ddac83b45c080b9a63a77193c78bbfe206544a1' => 
    array (
      0 => '/var/www/vhosts/karamemis.fr/adminweb.karamemis.fr/Vue/Nouveauchantier/selectService.tpl',
      1 => 1478159233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581f2b95bbada3_69077242 (Smarty_Internal_Template $_smarty_tpl) {
?>
<label>Service</label>
<select class="form-control" name="FK_service">
    <option>Selectionner un service</option>    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['donnees']->value['services'], 'r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['ID_service'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['Description'];?>
</option>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</select><?php }
}
