<?php
/* Smarty version 3.1.30, created on 2016-11-06 13:07:41
  from "/var/www/vhosts/karamemis.fr/adminweb.karamemis.fr/Vue/Chantiers/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581f2b1d61bfa3_84545105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7988acae19de2fb1fe4d14bac38e295a46c2c55f' => 
    array (
      0 => '/var/www/vhosts/karamemis.fr/adminweb.karamemis.fr/Vue/Chantiers/index.tpl',
      1 => 1478027372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581f2b1d61bfa3_84545105 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <div class="row">
            <ol class="breadcrumb">
                    <li><a href="?page=dashboard"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                    <li class="active">Chantiers</li>
            </ol>
    </div><!--/.row-->

    <div class="row">
            <div class="col-lg-12">
                    <h1 class="page-header">Chantiers</h1>
            </div>
    </div><!--/.row-->


    <div class="row">
            <div class="col-lg-12">
                    <div class="panel panel-info">
                            <div class="panel-heading">Liste des chantiers</div>
                            <div class="panel-body">
                                <a href="?page=dashboardd"<button class="btn btn-info" type="button" id="btn-add"> <span class="glyphicon glyphicon-pencil"></span> &nbsp; Ajouter un chantier</button></a>                           
                            <hr />
                            <style type="text/css">
                                #dis{ display:none;}
                            </style>
                            <div id="dis">
                                    <!-- here message will be displayed -->
                            </div>
                            <div class="chantier-loader">

                                <table  id="chantierTable" class="table table-bordered table-striped table-hover table-responsive">
                                <thead>
                                <tr>
                                <th>ID</th>
                                <th>Nom du chantier</th>
                                <th>Lot</th>                                
                                <th>Client</th>
                                <th>Date de remise</th>
                                <th>Etat</th>
                                <th></th>
                                <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['donnees']->value['chantiers'], 'ch');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ch']->value) {
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ch']->value['ID_chantier'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ch']->value['Nom_chantier'];?>
</td>
                                        <td>
                                            <?php if (isset($_smarty_tpl->tpl_vars['ch']->value['Lot_01']) && $_smarty_tpl->tpl_vars['ch']->value['Lot_01'] != NULL) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['ch']->value['Numero_lot_01'];?>
- <?php echo $_smarty_tpl->tpl_vars['ch']->value['Lot_01'];?>
<br>
                                            <?php }?>
                                            <?php if (isset($_smarty_tpl->tpl_vars['ch']->value['Lot_02']) && $_smarty_tpl->tpl_vars['ch']->value['Lot_02'] != NULL) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['ch']->value['Numero_lot_02'];?>
 - <?php echo $_smarty_tpl->tpl_vars['ch']->value['Lot_02'];?>

                                            <?php }?>
                                        </td>                                        
                                        <td><?php echo $_smarty_tpl->tpl_vars['ch']->value['Nom'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ch']->value['Date_de_remise'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['ch']->value['decision'];?>
</td>
                                        <td align="center">
                                        <a id="" class="open-link" href="chantier/index/<?php echo $_smarty_tpl->tpl_vars['ch']->value['ID_chantier'];?>
" title="Open">
                                        <svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg>
                                        </a></td>
                                        <td align="center"><a id="<?php echo $_smarty_tpl->tpl_vars['ch']->value['ID_chantier'];?>
" class="delete-link-chantier" href="#" title="Delete">
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
        </div><!--/.row-->                 
    </div><!--/.main-->
<?php }
}
