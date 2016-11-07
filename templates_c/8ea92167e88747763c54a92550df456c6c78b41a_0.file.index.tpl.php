<?php
/* Smarty version 3.1.30, created on 2016-10-31 19:24:44
  from "C:\wamp64\www\blogpoo\Vue\Accueil\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58179a7cc6e170_40129790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ea92167e88747763c54a92550df456c6c78b41a' => 
    array (
      0 => 'C:\\wamp64\\www\\blogpoo\\Vue\\Accueil\\index.tpl',
      1 => 1477933684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58179a7cc6e170_40129790 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['donnees']->value['billets'], 'b');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
?>
    
    <article>
        <header>
            <a href="billet/index/<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
">
                <h1 class="titreBillet"><?php echo $_smarty_tpl->tpl_vars['b']->value['titre'];?>
</h1>
            </a>
            <time><?php echo $_smarty_tpl->tpl_vars['b']->value['date'];?>
</time>
        </header>
        <p><?php echo $_smarty_tpl->tpl_vars['b']->value['contenu'];?>
</p>
    </article>
    <hr />
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php }
}
