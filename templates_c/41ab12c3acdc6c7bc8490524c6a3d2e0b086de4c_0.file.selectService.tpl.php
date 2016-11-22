<?php
/* Smarty version 3.1.30, created on 2016-11-03 07:53:19
  from "C:\wamp64\www\blogpoo\Vue\Nouveauchantier\selectService.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581aecef3b6191_67608400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41ab12c3acdc6c7bc8490524c6a3d2e0b086de4c' => 
    array (
      0 => 'C:\\wamp64\\www\\blogpoo\\Vue\\Nouveauchantier\\selectService.tpl',
      1 => 1478159233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581aecef3b6191_67608400 (Smarty_Internal_Template $_smarty_tpl) {
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
