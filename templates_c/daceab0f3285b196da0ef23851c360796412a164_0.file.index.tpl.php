<?php
/* Smarty version 3.1.30, created on 2016-11-01 10:20:17
  from "C:\wamp64\www\blogpoo\Vue\Connexion\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58186c6178d640_28523011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daceab0f3285b196da0ef23851c360796412a164' => 
    array (
      0 => 'C:\\wamp64\\www\\blogpoo\\Vue\\Connexion\\index.tpl',
      1 => 1477995607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58186c6178d640_28523011 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Mixins-->
<!-- Pen Title-->

    <link rel="stylesheet" href="web/css/loginstyle.css">
<div class="pen-title">
  <h1>SASK LOGIN</h1>
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form action="connexion/connecter" method="post">
     
      <div class="input-container">
        <input type="text" name="login" id="login" required="required"/>
        <label for="login">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name="mdp" id="password" required="required"/>
        <label for="password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Go</span></button>
      </div>
      <div class="footer"><a href="#">Forgot your password?</a></div>
    </form>
    
  </div>
 </div>
 <?php echo '<script'; ?>
 src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="js/login.js"><?php echo '</script'; ?>
>
<?php }
}
