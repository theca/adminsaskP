<?php
/* Smarty version 3.1.30, created on 2016-10-31 20:18:09
  from "C:\wamp64\www\blogpoo\Vue\Billet\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5817a701a36062_82168937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46c734c189e0f707ff192a25c24aaf3ea53831ce' => 
    array (
      0 => 'C:\\wamp64\\www\\blogpoo\\Vue\\Billet\\index.tpl',
      1 => 1477945087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5817a701a36062_82168937 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <article>
        <header>
            <h1 class="titreBillet"><?php echo $_smarty_tpl->tpl_vars['donnees']->value['billet']['titre'];?>
</h1>
            <time><?php echo $_smarty_tpl->tpl_vars['donnees']->value['billet']['date'];?>
</time>
        </header>
        <p><?php echo $_smarty_tpl->tpl_vars['donnees']->value['billet']['contenu'];?>
</p>
    </article>

<hr />
<header>
    <h1 id="titreReponses">Réponses à <?php echo $_smarty_tpl->tpl_vars['donnees']->value['billet']['titre'];?>
</h1>
</header>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['donnees']->value['commentaires'], 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
    <p><?php echo $_smarty_tpl->tpl_vars['c']->value['auteur'];?>
 dit :</p>
    <p><?php echo $_smarty_tpl->tpl_vars['c']->value['contenu'];?>
</p>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<hr />
<form method="post" action="billet/commenter">
    
    <input id="auteur" name="auteur" type="text" placeholder="Votre pseudo" 
           required /><br />
    <textarea id="txtCommentaire" name="contenu" rows="4" 
              placeholder="Votre commentaire" required></textarea><br />
    <input type="hidden" name="id" value=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['billet']['id'];?>
 />
    <input type="submit" value="Commenter" />
</form>
<?php }
}
