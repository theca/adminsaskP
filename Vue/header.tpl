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

<base href={$racineWeb}>
<link href="web/css/bootstrap.min.css" rel="stylesheet">
<link href="web/css/styles.css" rel="stylesheet">
<link href="web/css/chosen.css" rel="stylesheet">
<link rel="shortcut icon" type="img/x-icon" href="img/ilogo.ico" />
<link href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">

</head>

<body>
{if !isset($donnees.ID_membres)}
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
{/if}
