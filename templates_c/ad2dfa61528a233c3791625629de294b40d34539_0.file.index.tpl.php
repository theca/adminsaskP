<?php
/* Smarty version 3.1.30, created on 2016-11-06 17:14:43
  from "/var/www/vhosts/karamemis.fr/adminweb.karamemis.fr/Vue/Connexion/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581f65034659a0_32884757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad2dfa61528a233c3791625629de294b40d34539' => 
    array (
      0 => '/var/www/vhosts/karamemis.fr/adminweb.karamemis.fr/Vue/Connexion/index.tpl',
      1 => 1478451685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581f65034659a0_32884757 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">Log in</div>
            <div class="panel-body">
                <?php if (isset($_smarty_tpl->tpl_vars['donnees']->value['msgErreur'])) {?>
                    <div dis>
                        <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['donnees']->value['msgErreur'];?>
</div>
                    </div>
                <?php }?>
                <form action="connexion/connecter" method="post">
                    <fieldset>
                        <div class="form-group">
                                <input class="form-control" placeholder="login" name="login" id="login"  autofocus="">
                        </div>
                        <div class="form-group">
                                <input class="form-control" placeholder="Password" name="mdp" id="mdp" type="password" value="">
                        </div>
                        <button class="btn btn-primary">Login</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
<?php }
}
