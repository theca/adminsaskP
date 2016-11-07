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
                                {foreach from=$donnees['chantiers'] item=ch}
                                    <tr>
                                        <td>{$ch.ID_chantier}</td>
                                        <td>{$ch.Nom_chantier}</td>
                                        <td>
                                            {if isset($ch.Lot_01) && $ch.Lot_01 != NULL}
                                                {$ch.Numero_lot_01}- {$ch.Lot_01}<br>
                                            {/if}
                                            {if isset($ch.Lot_02) && $ch.Lot_02 != NULL}
                                            {$ch.Numero_lot_02} - {$ch.Lot_02}
                                            {/if}
                                        </td>                                        
                                        <td>{$ch.Nom}</td>
                                        <td>{$ch.Date_de_remise}</td>
                                        <td>{$ch.decision}</td>
                                        <td align="center">
                                        <a id="" class="open-link" href="chantier/index/{$ch.ID_chantier}" title="Open">
                                        <svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></svg>
                                        </a></td>
                                        <td align="center"><a id="{$ch.ID_chantier}" class="delete-link-chantier" href="#" title="Delete">
                                        <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"/></svg>
                                        </a></td>
                                    </tr>
                                {/foreach}
                                </tbody>
                                </table>

                            </div>

                        </div>
                    </div>
            </div>
        </div><!--/.row-->                 
    </div><!--/.main-->
