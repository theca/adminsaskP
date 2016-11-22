<?php
/* Smarty version 3.1.30, created on 2016-10-31 20:39:43
  from "C:\wamp64\www\blogpoo\Vue\Admin\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5817ac0f752409_80221824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af6c00b9a7f115a86ec107e62f592570bc369b7b' => 
    array (
      0 => 'C:\\wamp64\\www\\blogpoo\\Vue\\Admin\\index.tpl',
      1 => 1477946380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5817ac0f752409_80221824 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h2>Administration</h2>

Bienvenue, <?php echo $_smarty_tpl->tpl_vars['donnees']->value['login'];?>
 !
Ce blog comporte <?php echo $_smarty_tpl->tpl_vars['donnees']->value['nbBillets'];?>
 billet(s) et <?php echo $_smarty_tpl->tpl_vars['donnees']->value['nbCommentaires'];?>
 commentaire(s).
<br>
<a id="lienDeco" href="connexion/deconnecter">Se déconnecter</a><?php }
}
