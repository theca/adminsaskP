<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    
    
    <div class="row">
        <ol class="breadcrumb">
                <li><a href="?page=dashboard"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="?page=chantiers">Chantiers</a></li>
                <li class="active">{$donnees.chantier.Nom_chantier}</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
                <h1 id="{$donnees.chantier.ID_chantier}" class="page-header">{$donnees.chantier.Nom_chantier}</h1>
        </div>
    </div><!--/.row-->
    {if isset($donnees.msg) && $donnees.msg != NULL}
    <div id="dis">
            {$donnees.msg}
    </div>
    {/if}
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-info">
                <div class="panel-heading">Chantier</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Objet du marché :</label>
                            <p name="Nom_chantier">
                                <span id="Nom_chantierValue">{$donnees.chantier.Nom_chantier}</span>
                                <span id="Nom_chantier" class="editChantierInput"  title="Edit">
                                    <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
                                </span>
                            </p>
                            
                        </div>
                        {if isset($donnees.chantier.Lot_01) && $donnees.chantier.Lot_01 != NULL}
                            <div class="form-group">
                                <label>Lot n°{$donnees.chantier.Numero_lot_01} : {$donnees.chantier.Lot_01}</label>
                                <p name="Prix_lot_01">
                                    <span>Prix HT :</span>
                                    <span class="Prix_lot_01">
                                        <span id="Prix_lot_01Value">{$donnees.chantier.Prix_lot_01}</span>
                                        <span id="Prix_lot_01" class="editChantierInput"  title="Edit">
                                        <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
                                        </span>
                                    </span>
                                </p>
                                <p >TVA : {$donnees.chantier.Prix_lot_02}</p>
                                <p>Prix TTC : {$donnees.chantier.Prix_lot_02}</p>
                            </div>
                        {/if}
                        {if isset($donnees.chantier.Lot_02) && $donnees.chantier.Lot_02 != NULL}
                            <div class="form-group">
                                <label>Lot n°{$donnees.chantier.Numero_lot_02} : {$donnees.chantier.Lot_02}</label>
                                <p name="Prix_lot_02">
                                    <span>Prix HT :</span>
                                    <span class="Prix_lot_02">
                                        <span id="Prix_lot_02Value">{$donnees.chantier.Prix_lot_02}</span>
                                        <span id="Prix_lot_02" class="editChantierInput"  title="Edit">
                                        <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
                                        </span>
                                    </span>
                                </p>
                                <p>TVA : {$donnees.chantier.Prix_lot_02}</p>
                                <p>Prix TTC : {$donnees.chantier.Prix_lot_02}</p>
                            </div>
                        {/if}
                        
                        <form role="form" method='post' id='chantier-Download' action="chantier/downloadDoc">
                            <div class="form-group">
                                <label>Télécharger les fichiers du chantier</label><br>
                                <input type="hidden" name="id_chantier" value="{$donnees.chantier.ID_chantier}">
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
                                <span id="NomValue">{$donnees.chantier.Nom}</span>
                                <!--<span id="Nom" class="editChantierSelect"  title="Nom">
                                    <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
                                </span>-->
                            </p>
                        </div>
                        <div class="form-group">
                            <label>Adresse :</label>
                            <adress><br>
                                {$donnees.chantier.Adresse}<br>
                                {$donnees.chantier.Code_postal}<br>
                                {$donnees.chantier.Ville}
                            </adress>
                        </div>
                            <div class="form-group">
                            <label>Décision du client</label>
                            <p  name="decision">
                                <span id="decisionValue">{$donnees.chantier.decision}</span>
                                <span id="FK_decision" class="editChantierSelect"  title="decision">
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
{literal}
    <script src="web/js/jquery-3.1.1.min.js"></script>
    <script>
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
                            $(this).parent().append("<span id='"+colonne+"Value'>{/literal}{$donnees.chantier.Nom_chantier}{literal}</span>");
                            $(this).parent().append("<span id='"+colonne+"' class='editChantierInput'  title='Edit'><svg class='glyph stroked pencil'><use xlink:href='"+loc2+"#stroked-pencil'/></svg></span>");
                            break;
                        case 'Prix_lot_01':
                            $(this).parent().append("<span id='"+colonne+"Value'>{/literal}{$donnees.chantier.Prix_lot_01}{literal}</span>");
                            $(this).parent().append("<span id='"+colonne+"' class='editChantierInput'  title='Edit'><svg class='glyph stroked pencil'><use xlink:href='"+loc2+"#stroked-pencil'/></svg></span>");
                            break;
                        case 'Prix_lot_02':
                            $(this).parent().append("<span id='"+colonne+"Value'>{/literal}{$donnees.chantier.Prix_lot_02}{literal}</span>");
                            $(this).parent().append("<span id='"+colonne+"' class='editChantierInput'  title='Edit'><svg class='glyph stroked pencil'><use xlink:href='"+loc2+"#stroked-pencil'/></svg></span>");
                        break;                        
                        case 'decision':
                            $(this).parent().append("<span id='"+colonne+"Value'>{/literal}{$donnees.chantier.decision}{literal}</span>");
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
    </script>
{/literal}
                              