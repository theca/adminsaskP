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
                                            {foreach from=$donnees['clients'] item=c}
                                                <tr>
                                                    <td>{$c.ID_client}</td>
                                                    <td>{$c.Nom}</td>
                                                    <td id="adresseClient">{$c.Adresse}</td>
                                                    <td>{$c.Code_postal}</td>
                                                    <td>{$c.Ville}</td>
                                                    <td align="center">
                                                    <a id="{$c.ID_client}" class="edit-link" href="#" title="Edit">
                                                    <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
                                                    </a></td>
                                                    <td align="center"><a id="{$c.ID_client}" class="delete-link" href="#" title="Delete">
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
                                                {foreach from=$donnees['services'] item=a}
                                                    {if $a.Description!='Sans service'}
                                                    <tr>
                                                        <td>{$a.ID_service}</td>
                                                        <td>{$a.Description}</td>
                                                        <td>{$a.Nom}</td>                                                            
                                                        <td align="center">
                                                        <a id="{$a.ID_service}" class="edit-link-service" href="#" title="Edit">
                                                        <svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"/></svg>
                                                        </a></td>
                                                        <td align="center"><a id="{$a.ID_service}" class="delete-link-service" href="#" title="Delete">
                                                        <svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"/></svg>
                                                        </a></td>
                                                    </tr>
                                                    {/if}
                                                {/foreach}
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
	</div><!--/.main-->