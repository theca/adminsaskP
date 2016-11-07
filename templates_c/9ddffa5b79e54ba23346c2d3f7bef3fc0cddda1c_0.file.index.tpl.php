<?php
/* Smarty version 3.1.30, created on 2016-11-06 07:23:00
  from "C:\wamp64\www\blogpoo\Vue\Chantier\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_581eda5448fd39_03996228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ddffa5b79e54ba23346c2d3f7bef3fc0cddda1c' => 
    array (
      0 => 'C:\\wamp64\\www\\blogpoo\\Vue\\Chantier\\index.tpl',
      1 => 1478416977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581eda5448fd39_03996228 (Smarty_Internal_Template $_smarty_tpl) {
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
                <h1 id="<?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['ID_chantier'];?>
" class="page-header"><?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Nom_chantier'];?>
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
                            <p name="Nom_chantier"><span id="Nom_chantierValue"><?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Nom_chantier'];?>
</span>
                                <span id="Nom_chantier" class="editChantierInput"  title="Edit">
                                    <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
                                </span>
                            </p>
                            
                        </div>
                        <?php if (isset($_smarty_tpl->tpl_vars['donnees']->value['chantier']['Lot_01']) && $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Lot_01'] != NULL) {?>
                            <div class="form-group">
                                <label>Lot n°<?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Numero_lot_01'];?>
 : <?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Lot_01'];?>
</label>
                                <p name="Prix_lot_01">
                                    <span>Prix HT :</span>
                                    <span class="Prix_lot_01">
                                        <span id="Prix_lot_01Value"><?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Prix_lot_01'];?>
</span>
                                        <span id="Prix_lot_01" class="editChantierInput"  title="Edit">
                                        <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
                                        </span>
                                    </span>
                                </p>
                                <p >TVA : <?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Prix_lot_02'];?>
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
                                <p name="Prix_lot_02">
                                    <span>Prix HT :</span>
                                    <span class="Prix_lot_02">
                                        <span id="Prix_lot_02Value"><?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Prix_lot_02'];?>
</span>
                                        <span id="Prix_lot_02" class="editChantierInput"  title="Edit">
                                        <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
                                        </span>
                                    </span>
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
                            <p>
                                <span id="NomValue"><?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Nom'];?>
</span>
                                <!--<span id="Nom" class="editChantierSelect"  title="Nom">
                                    <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
                                </span>-->
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
                            <label>Décision du client</label>
                            <p  name="decision"><span id="decisionValue"><?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['decision'];?>
</span>
                                <span id="decision" class="editChantierSelect"  title="decision">
                                    <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
                                </span>
                            </p>
                            
                        </div>
                    </div>	
                </div>                
            </div>
        </div><!-- /.col-->
    </div><!-- /.row --> 
    <button id="other">
        Trigger the handler
    </button>
</div>

    <?php echo '<script'; ?>
 src="web/js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(document).ready(function() {
            $(document).on('click','.exitEdit',function(){
                    var loc2 = $(location).attr('href');                
                    var colonne = $(this).attr("id");
                    if(colonne == 'Prix_lot_01'){                    
                        $(this).parent().parent().append("<span class='Prix_lot_01Label'>Prix HT :</span>");
                        $(".Prix_lot_01").before($(".Prix_lot_01Label"));
                    }
                    switch(colonne)
                    {
                        case 'Nom_chantier':
                            $(this).parent().append("<span id='"+colonne+"Value'><?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Nom_chantier'];?>
</span>");
                            $(this).parent().append("<span id='"+colonne+"' class='editChantierInput'  title='Edit'><svg class='glyph stroked pencil'><use xlink:href='"+loc2+"#stroked-pencil'/></svg></span>");
                            break;
                        case 'Prix_lot_01':
                            $(this).parent().append("<span id='"+colonne+"Value'><?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Prix_lot_01'];?>
</span>");
                            $(this).parent().append("<span id='"+colonne+"' class='editChantierInput'  title='Edit'><svg class='glyph stroked pencil'><use xlink:href='"+loc2+"#stroked-pencil'/></svg></span>");
                            break;
                        case 'Prix_lot_02':
                            $(this).parent().append("<span id='"+colonne+"Value'><?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['Prix_lot_02'];?>
</span>");
                            $(this).parent().append("<span id='"+colonne+"' class='editChantierInput'  title='Edit'><svg class='glyph stroked pencil'><use xlink:href='"+loc2+"#stroked-pencil'/></svg></span>");
                        break;                        
                        case 'decision':
                            $(this).parent().append("<span id='"+colonne+"Value'><?php echo $_smarty_tpl->tpl_vars['donnees']->value['chantier']['decision'];?>
</span>");
                            $(this).parent().append("<span id='"+colonne+"' class='editChantierSelect'  title='Edit'><svg class='glyph stroked pencil'><use xlink:href='"+loc2+"#stroked-pencil'/></svg></span>");
                        break;
                        default:
                            alert('perdu');
                    }
                    
                    $(this).prev().prev().remove();
                    $(this).prev().remove();
                    $(this).remove();
                });
        });
    <?php echo '</script'; ?>
>

                              <?php }
}
