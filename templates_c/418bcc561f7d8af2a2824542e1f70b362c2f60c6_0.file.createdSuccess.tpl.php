<?php
/* Smarty version 3.1.30, created on 2016-11-04 15:59:41
  from "C:\wamp64\www\blogpoo\Vue\Chantier\createdSuccess.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581cb06d040e81_24948263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '418bcc561f7d8af2a2824542e1f70b362c2f60c6' => 
    array (
      0 => 'C:\\wamp64\\www\\blogpoo\\Vue\\Chantier\\createdSuccess.tpl',
      1 => 1478274797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581cb06d040e81_24948263 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    
    
    <div class="row">
        <ol class="breadcrumb">
                <li><a href="?page=dashboard"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="?page=chantiers">Chantiers</a></li>
                <li class="active"><?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Nom_chantier'];?>
</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
                <h1 class="page-header"><?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Nom_chantier'];?>
</h1>
        </div>
    </div><!--/.row-->
    <?php if (isset($_smarty_tpl->tpl_vars['donnees']->value['msg']) && $_smarty_tpl->tpl_vars['donnees']->value['msg'] != NULL) {?>
    <div id="dis">
            <?php echo $_smarty_tpl->tpl_vars['donnees']->value['msg'];?>

    </div>
    <?php }?>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-info">
                <div class="panel-heading">Chantier</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Objet du marché :</label>
                            <p><?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Nom_chantier'];?>
</p>
                        </div>
                        <?php if (isset($_smarty_tpl->tpl_vars['donnees']->value['chantier']['Lot_01']) && $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Lot_01'] != NULL) {?>
                            <div class="form-group">
                                <label>Lot n°<?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Numero_lot_01'];?>
 : <?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Lot_01'];?>
</label>
                                <p>Prix HT : <?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Prix_lot_01'];?>
</p>
                                <p>TVA : <?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Prix_lot_02'];?>
</p>
                                <p>Prix TTC : <?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Prix_lot_02'];?>
</p>
                            </div>
                        <?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['donnees']->value['chantier']['Lot_02']) && $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Lot_02'] != NULL) {?>
                            <div class="form-group">
                                <label>Lot n°<?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Numero_lot_02'];?>
 : <?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Lot_02'];?>
</label>
                                <p>Prix HT : <?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Prix_lot_02'];?>
</p>
                                <p>TVA : <?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Prix_lot_02'];?>
</p>
                                <p>Prix TTC : <?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Prix_lot_02'];?>
</p>
                            </div>
                        <?php }?>
                        
                        <form role="form" method='post' id='chantier-Download' action="chantier/downloadDoc">
                            <div class="form-group">
                                <label>Télécharger les fichiers du chantier</label><br>
                                <input type="hidden" name="id_chantier" value="<?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['ID_chantier'];?>
">
                                <button type="submit" class="btn btn-primary" name="btn-download" id="btn-download">
                                    <span class="glyphicon glyphicon-plus"></span> Telecharger les documents
                                </button>
                            </div>
                        </form>
                    </div>	
                </div>                
            </div>
        </div><!-- /.col-->
    
    
        <div class="col-lg-6">
            <div class="panel panel-info">
                <div class="panel-heading">Client</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nom du client:</label>
                            <p><?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Nom'];?>
</p>
                        </div>
                        <div class="form-group">
                            <label>Adresse :</label>
                            <adress><br>
                                <?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Adresse'];?>
<br>
                                <?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Code_postal'];?>
<br>
                                <?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Ville'];?>

                            </adress>
                        </div>
                            <div class="form-group">
                            <label>Décidion du client</label>
                            <p><?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['decision'];?>
</p>
                        </div>
                    </div>	
                </div>                
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    
</div><?php }
}
