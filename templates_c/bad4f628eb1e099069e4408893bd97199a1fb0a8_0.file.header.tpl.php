<?php
/* Smarty version 3.1.30, created on 2016-11-06 09:42:10
  from "C:\wamp64\www\blogpoo\Vue\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581efaf2f13510_19622251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bad4f628eb1e099069e4408893bd97199a1fb0a8' => 
    array (
      0 => 'C:\\wamp64\\www\\blogpoo\\Vue\\header.tpl',
      1 => 1478425318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581efaf2f13510_19622251 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE7" />
<![endif]-->

<title>Dashboard</title>

<META NAME="Description" CONTENT="SAS KARAMEMIS - Dashboard."> 

<meta name="viewport" content="width=device-width, minimum-scale=1.0">

<base href=<?php echo $_smarty_tpl->tpl_vars['racineWeb']->value;?>
>
<link href="web/css/bootstrap.min.css" rel="stylesheet">
<link href="web/css/styles.css" rel="stylesheet">
<link href="web/css/chosen.css" rel="stylesheet">
<link rel="shortcut icon" type="img/x-icon" href="img/ilogo.ico" />
<link href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href=""><span>SAS KARAMEMIS</span> Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href=""><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href=""><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="connexion/deconnecter"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Déconnexion</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
</nav>
<?php }
}
