<?php
/* Smarty version 3.1.30, created on 2016-11-06 16:23:12
  from "C:\wamp64\www\blogpoo\Vue\sidebar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581f58f04c9647_09062958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93c66170615ab00172ddb69bc3c563591f5bcbcc' => 
    array (
      0 => 'C:\\wamp64\\www\\blogpoo\\Vue\\sidebar.tpl',
      1 => 1478449388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581f58f04c9647_09062958 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['donnees']->value['ID_membres'])) {?>
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
</div><!--/.sidebar-->
<?php }
}
}
