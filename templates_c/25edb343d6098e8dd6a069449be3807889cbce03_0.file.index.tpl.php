<?php
/* Smarty version 3.1.30, created on 2016-11-06 13:08:16
  from "/var/www/vhosts/karamemis.fr/adminweb.karamemis.fr/Vue/Nouveauchantier/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581f2b4066f8b4_28440711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25edb343d6098e8dd6a069449be3807889cbce03' => 
    array (
      0 => '/var/www/vhosts/karamemis.fr/adminweb.karamemis.fr/Vue/Nouveauchantier/index.tpl',
      1 => 1478196317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581f2b4066f8b4_28440711 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
    <form role="form" method='post' id='chantier-SaveForm' action="Nouveauchantier/createChantier">
        
        <div class="row">
                <ol class="breadcrumb">
                        <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                        <li class="active">Nouveau chantier</li>
                </ol>
        </div><!--/.row-->

        <div class="row">
                <div class="col-lg-12">
                        <h1 class="page-header">Nouveau chantier</h1>
                </div>
        </div><!--/.row-->
        <style type="text/css">
            #dis{ display:none;}
        </style>
        <div id="dis">
                <!-- here message will be displayed -->
        </div>

                <div class="col-lg-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">Chantier</div>
                        <div class="panel-body">
                            <div class="col-md-12">

                                <div id="testadd">
                                    <div class="form-group">
                                            <label>Titre du chantier</label>
                                            <input name="Nom_chantier" class="form-control" placeholder="Ecrire la désignation du chantier" required>
                                    </div>
                                    <div id="lot_1"class="lot form-group">
                                            <label>Lot</label>
                                            <div class="form-group">
                                                <p>Mémoire technique associé au lot</p>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsmt" id="optionsRadios1" value="GO">Type Gros-oeuvre
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsmt" id="optionsRadios2" value="PL">Type Platrerie
                                                    </label>
                                                </div>
                                            </div>
                                            <input name="Numero_lot_01" class="form-control num_lot" placeholder="Numéro du lot"></br>
                                            <input name="Lot_01" class="form-control nom_lot" placeholder="Désignation du lot">
                                    </div>
                                     <div class="form-group">
                                        <div id="addplus_lot" type="add" class="btn btn-default"><svg class="sizeplus glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg>Ajouter un Lot</div>
                                     </div>
                                    <div class="form-group">
                                            <label FOR="datepicker">Date der remise de dossier: </label>
                                            <input class="form-control" id="datepicker1" name="Date_remise" placeholder="Cliquer pour séléctionner une date" required><br />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-->
                <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">Client</div>
                        <div class="panel-body">
                            <div class="col-md-12">
                                    <div class="form-group">
                                            <label>Client</label>
                                            <select class="clientName form-control" id="selectforClient" name="clientName" >
                                                <option value="0">Selectionner un Client</option> 
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['donnees']->value['clients'], 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['ID_client'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['Nom'];?>
</option>                                                            
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    
                                            </select>
                                    </div>
                                    <!--<div class="form-group">
                                        <div id="addplus" class="btn btn-default addplus"><svg class="sizeplus glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg>Ajouter un client</div>
                                        <div id="addplus" style="display: none" class="btn btn-default addplus"><svg class="sizeplus glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg>Reduire</div>

                                    </div>
                                    <div id="addform" class="hiddenform">

                                        <div class="form-group">
                                                <label>Nom du client</label>
                                                <input name="new_Nom"class="form-control" placeholder="Ex: Ville de Mulhouse">
                                        </div>
                                        <div class="form-group">
                                                <label>Adresse</label>
                                                <input name="new_Adresse" class="form-control" placeholder="Ex: 1 avenue Colmar">
                                        </div>
                                        <div class="form-group">
                                                <label>Commune</label>
                                                <input name="new_Ville" class="form-control" placeholder="Ex: Mulhouse">
                                        </div>
                                        <div class="form-group">
                                                <label>Code postale</label>
                                                <input name="new_Code_postal"class="form-control" placeholder="Ex: 682100">
                                        </div>
                                    </div>-->
                                    <div class="service-select" class="form-group">
                                            <label>Service</label>
                                            <select class="form-control" name="FK_service">
                                                    <option value="0">Veuillez d'abord choisr un client</option>                                                            
                                            </select>
                                    </div>                                            
                                    <!--<div class="form-group">
                                        <div id="addplus_service" type="add" class="btn btn-default addplus_service"><svg class="sizeplus glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg>Ajouter un service</div>
                                        <div id="addplus_service" style="display: none" class="btn btn-default addplus_service"><svg class="sizeplus glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg>Reduire</div>
                                    </div>
                                    <div id="addform_service" class="hiddenform">
                                        <div class="form-group" id="addform" class="hiddenform">
                                                    <label>Ajouter un nouveau service</label>
                                                    <input name="new_Service" class="form-control" placeholder="Ex: service des eaux">
                                        </div>
                                    </div>-->

                            </div>
                        </div>
                    </div>
                </div><!-- /.col-->
                <div class="col-lg-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">Composition des envelloppes</div>
                            <div class="panel-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Candidature</label>
                                        <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="DC1" value="DC1">DC1
                                                </label>
                                        </div>
                                        <div class="checkbox">
                                                <label>
                                                        <input type="checkbox" name="DC2" value="DC2">DC2
                                                </label>
                                        </div>
                                        <div class="checkbox">
                                                <label>
                                                        <input type="checkbox" name="KBIS" value="KBIS">KBIS
                                                </label>
                                        </div>
                                        <div class="checkbox">
                                                <label>
                                                        <input type="checkbox" name="NOTI2" value="NOTI2">NOTI2
                                                </label>
                                        </div>
                                        <div class="checkbox">
                                                <label>
                                                        <input type="checkbox" name="CCAP" value="CCAP">CCAP
                                                </label>
                                        </div>
                                        <div class="checkbox">
                                                <label>
                                                        <input type="checkbox" name="Assurance" value="Assurance de la Société à jour et en règle">Attestation d'assurance
                                                </label>
                                        </div>
                                        <div class="checkbox">
                                                <label>
                                                        <input type="checkbox" name="Qualibat" value="Qualibat 2016">Certification Qualibat
                                                </label>
                                        </div>
                                        <div class="checkbox">
                                                <label>
                                                        <input type="checkbox" name="Attestation" value="Attestation visite">Attestation de visite
                                                </label>
                                        </div>
                                        <div class="checkbox">
                                                <label>
                                                        <input type="checkbox" name="Planning_candidature" value="Planning prévisionnelle">Planning prévisionnelle
                                                </label>
                                        </div><div class="checkbox">
                                                <label>
                                                        <input type="checkbox" name="Liste_reference" value="Liste des références">Liste des références
                                                </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Autres documents</label>
                                            <input name="Autre_candidature" class="form-control" placeholder="EX:CD" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Offre</label>
                                        <div class="checkbox">
                                                <label>
                                                        <input type="checkbox" value="Acte d'engagement" name="AE">Acte d'engagement + RIB
                                                </label>
                                        </div>
                                        <div class="checkbox">
                                                <label>
                                                        <input type="checkbox" value="CCTP" name="CCTP">CCTP
                                                </label>
                                        </div>
                                        <div class="checkbox">
                                                <label>
                                                        <input type="checkbox" value="DPGF" name="DPGF">DPGF
                                                </label>
                                        </div>
                                        <div class="checkbox">
                                                <label>
                                                        <input type="checkbox" value="DQE" name="DQE">DQE
                                                </label>
                                        </div>                                                
                                        <div class="checkbox">
                                                <label>
                                                        <input type="checkbox" value="Mémoire technique" name="MT">Mémoire technique
                                                </label>
                                        </div>
                                        <div class="checkbox">
                                                <label>
                                                        <input type="checkbox" value="PGC" name="PGC">PGC
                                                </label>
                                        </div>
                                        <div class="checkbox">
                                                <label>
                                                        <input type="checkbox" value="Planning prévisionnel" name="Planning">Planning prévisionnel
                                                </label>
                                        </div>
                                        <div class="checkbox">
                                                <label>
                                                        <input type="checkbox" value="Plan" name="Plan">Plan
                                                </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Autres documents</label>
                                            <input name="Autre_offre" class="form-control" placeholder="EX:CD" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div><!-- /.col-->
        </div><!-- /.row -->
        <div class="col-lg-12">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary" name="btn-save" id="btn-save">
                    <span class="glyphicon glyphicon-plus"></span> Enregistrer le chantier dans la base de donnée et creer les dodcuments
                </button>
            </div>
        </div>
    </form>	
</div><!--/.main--><?php }
}
