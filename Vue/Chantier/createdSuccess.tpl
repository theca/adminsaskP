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
                <h1 class="page-header">{$donnees.chantier.Nom_chantier}</h1>
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
                            <p>{$donnees.chantier.Nom_chantier}</p>
                        </div>
                        {if isset($donnees.chantier.Lot_01) && $donnees.chantier.Lot_01 != NULL}
                            <div class="form-group">
                                <label>Lot n°{$donnees.chantier.Numero_lot_01} : {$donnees.chantier.Lot_01}</label>
                                <p>Prix HT : {$donnees.chantier.Prix_lot_01}</p>
                                <p>TVA : {$donnees.chantier.Prix_lot_02}</p>
                                <p>Prix TTC : {$donnees.chantier.Prix_lot_02}</p>
                            </div>
                        {/if}
                        {if isset($donnees.chantier.Lot_02) && $donnees.chantier.Lot_02 != NULL}
                            <div class="form-group">
                                <label>Lot n°{$donnees.chantier.Numero_lot_02} : {$donnees.chantier.Lot_02}</label>
                                <p>Prix HT : {$donnees.chantier.Prix_lot_02}</p>
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
                            <p>{$donnees.chantier.Nom}</p>
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
                            <label>Décidion du client</label>
                            <p>{$donnees.chantier.decision}</p>
                        </div>
                    </div>	
                </div>                
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    
</div>