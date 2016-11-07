<?php
/* Smarty version 3.1.30, created on 2016-11-06 13:04:30
  from "/var/www/vhosts/karamemis.fr/adminweb.karamemis.fr/Vue/sidebar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581f2a5e9464f7_23054659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '165b7c784ad5c807cae5738be917701bb02387de' => 
    array (
      0 => '/var/www/vhosts/karamemis.fr/adminweb.karamemis.fr/Vue/sidebar.tpl',
      1 => 1478156849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581f2a5e9464f7_23054659 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="Nouveauchantier"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-pencil"></use></svg> Nouveau chantier</a></li>
                        <li><a href="chantiers"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Chantiers</a></li>
                        <li><a href="clients"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Clients</a></li>		
		</ul>
</div><!--/.sidebar--><?php }
}
