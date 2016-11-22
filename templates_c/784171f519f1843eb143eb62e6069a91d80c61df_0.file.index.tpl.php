<?php
/* Smarty version 3.1.30, created on 2016-11-02 16:15:03
  from "C:\wamp64\www\blogpoo\Vue\Clients\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581a11073961f2_09910311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '784171f519f1843eb143eb62e6069a91d80c61df' => 
    array (
      0 => 'C:\\wamp64\\www\\blogpoo\\Vue\\Clients\\index.tpl',
      1 => 1478103262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581a11073961f2_09910311 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="?page=dashboard"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">clients</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Clients</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-info">
					<div class="panel-heading">Liste des clients</div>
                                        <div class="panel-body">
                                        <button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Ajouter un client</button>
                                        <button class="btn btn-info" type="button" id="btn-view"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; Voir les clients</button>
                                        <hr />
                                        <style type="text/css">
                                            #dis{ display:none;}
                                        </style>
                                        <div id="dis">
                                                <!-- here message will be displayed -->
                                        </div>
                                        
                                        <div class="content-loader">

                                            <table  id="clientTable" class="table table-bordered table-striped table-hover table-responsive">
                                            <thead>
                                            <tr>
                                            <th>ID</th>
                                            <th>Nom</th>
                                            <th>Adresse</th>
                                            <th>Code_postal</th>
                                            <th>Ville</th>
                                            <th></th>
                                            <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['donnees']->value['clients'], 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
                                                <tr>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value['ID_client'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom'];?>
</td>
                                                    <td id="adresseClient"><?php echo $_smarty_tpl->tpl_vars['c']->value['Adresse'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value['Code_postal'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['c']->value['Ville'];?>
</td>
                                                    <td align="center">
                                                    <a id="<?php echo $_smarty_tpl->tpl_vars['c']->value['ID_client'];?>
" class="edit-link" href="#" title="Edit">
                                                    <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
                                                    </a></td>
                                                    <td align="center"><a id="<?php echo $_smarty_tpl->tpl_vars['c']->value['ID_client'];?>
" class="delete-link" href="#" title="Delete">
                                                    <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"/></svg>
                                                    </a></td>
                                                </tr>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            </tbody>
                                            </table>

                                        </div>

                                    </div>
				</div>
			</div>
		</div><!--/.row--><div class="row">
			<div class="col-lg-12">
				<div class="panel panel-info">
					<div class="panel-heading">Liste des services</div>
                                        <div class="panel-body">
                                            <div>
                                                <div id="selectClientService" class="form-group">
                                                    <label>Choisissez un client pour afficher ses services</label>
                                                    
                                                </div>
                                            </div>
                                        <button class="btn btn-info" type="button" id="btn-add-service"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Ajouter un service</button>
                                        <button class="btn btn-info" type="button" id="btn-view-service"> <span class="glyphicon glyphicon-eye-open"></span> &nbsp; Voir les services</button>
                                        <hr />
                                        
                                        <style type="text/css">
                                            #dis2{ display:none;}
                                        </style>
                                        <div id="dis2">
                                                <!-- here message will be displayed -->
                                        </div>

                                        <div id="service-loader" class="service-loader">

                                            <table  id="serviceTable" class="table table-bordered table-striped table-hover table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Service</th>
                                                        <th>Nom du client</th>                                            
                                                        <th>Editer</th>
                                                        <th>Supprimer</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['donnees']->value['services'], 'a');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['a']->value['Description'] != 'Sans service') {?>
                                                    <tr>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['a']->value['ID_service'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['a']->value['Description'];?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['a']->value['Nom'];?>
</td>                                                            
                                                        <td align="center">
                                                        <a id="<?php echo $_smarty_tpl->tpl_vars['a']->value['ID_service'];?>
" class="edit-link-service" href="#" title="Edit">
                                                        <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
                                                        </a></td>
                                                        <td align="center"><a id="<?php echo $_smarty_tpl->tpl_vars['a']->value['ID_service'];?>
" class="delete-link-service" href="#" title="Delete">
                                                        <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"/></svg>
                                                        </a></td>
                                                    </tr>
                                                    <?php }?>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Service</th>
                                                        <th>Nom du client</th>                                            
                                                        
                                                    </tr>
                                                </tfoot>
                                            </table>
                                                
                                        </div>

                                    </div>
				</div>
			</div>
		</div><!--/.row-->	
	</div><!--/.main--><?php }
}
