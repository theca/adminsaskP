$(document).ready(function(){
     //Get all service one client
        /*$(".clientName").change(function (){
            var id_client = $(this).val();
            $(".service-select").fadeOut('slow', function()
             {
                    $(".service-select").fadeIn('slow');
                    $(".service-select").load('?page=allClientService&id_client='+id_client);                               
                    
            });
            return false;
        });*/
        $('.clientName').on('change',function(){
            var id_client = $(this).val();
            if(id_client != 0){
                
                var requete = $.ajax({
                    type:'POST',
                    url:'Nouveauchantier/selectService',
                    data:{ id_client : id_client },                    
                    dataType: "html"
                });
                requete.done(function( html ) {
                    
                    $(".service-select").fadeOut( function(){
                                    $(".service-select").html(html);
                                });
                        $(".service-select").fadeIn('slow');
                });
            }else{
                $('.service-select').html('<label>Service</label>\n\
                                           <select class="form-control" name="FK_service">\n\
                                                <option value="">Veuillez d\'abord choisir un client</option>\n\
                                           </select>'); 
            }
        });
        
        /* Data Insert Starts Here */
        
	/*$(document).on('submit', '#chantier-SaveForm', function() {

            var requete = $.ajax({
                url: "Nouveauchantier/createChantier",
                type: "POST",
                data: $(this).serialize(),
                dataType: "html",
              });
            requete.done(function( data ) {
                $("#dis").fadeOut();
                    $("#dis").fadeIn('slow', function(){
                                $("#dis").html('<div class="alert alert-info">'+data+'</div>');
                                
                            });
                //document.location.href="?page=chantier&id_chantier="+data.id;
            });
            return false;
        });*/
        
        /* Data Delete Chantier Starts Here */
	$(".delete-link-chantier").click(function()
	{
            var id = $(this).attr("id");
            var del_id = id;
            var parent = $(this).parent("td").parent("tr");
            if(confirm('Sure to Delete ID no = ' +del_id))
            {
                /*$.post('?page=deleteService', {'del_id':del_id}, function(data)
                {
                        parent.fadeOut('slow');
                });*/
                var requete = $.ajax({
                                url: "chantiers/supprimerChantier",
                                method: "POST",
                                data: { del_id : del_id },
                                dataType: "html"
                              });
                requete.done(function( data ) {

                    $("#dis").fadeOut();
                    $("#dis").fadeIn('slow', function(){
                                $("#dis").html('<div class="alert alert-info">'+data+'</div>');
                                $("#dis").html('<div class="alert alert-info">'+data+'</div>');
                                        var val=$("#dis").text();
                                        console.log(val);
                                        if(val=='Success'){
                                             parent.fadeOut('slow');
                                        }                                         

                            });                        

                });
            }
            return false;
	});
	/* Data Delete Service Ends Here */
        
        /* Data Update Chantier Start Here */
        //Tranformation en input
        $(document).on('click','.editChantierInput',function(){
            var colonne = $(this).attr("id");
            var value = colonne + 'Value';            
            var input = $('<input />', {
                'type': 'text',
                'class':'form-control w85 fl validEnter',
                'name': colonne,
                'value': $('#'+value).text(),
            });
            
            $(this).prev().remove();
            $(this).parent().append(input);
            $(this).parent().append('<a href="" id="'+colonne+'" class="glyphicon glyphicon-ok validEdit"></a>');
            $(this).parent().append('<span id="'+colonne+'"  class="glyphicon glyphicon-remove exitEdit"></span>');
            $(this).remove();            
            input.focus();
            return false;
        });
        $(document).on('click','.editChantierSelect',function(){
            var colonne = $(this).attr("id");
            var value = colonne + 'Value';            
            var input = '<select class="form-control w85 fl">\n\
                            <option value="1">En attente</option>\n\
                            <option value="2">Accepter</option>\n\
                            <option value="3">Rejeter</option>\n\
                        </select>'
            $(this).prev().prev().remove();
            $(this).prev().remove();
            $(this).parent().append(input);
            $(this).parent().append('<a href="" id="'+colonne+'" class="glyphicon glyphicon-ok validEdit"></a>');
            $(this).parent().append('<span id="'+colonne+'"  class="glyphicon glyphicon-remove exitEdit"></span>');            
            $(this).remove();
            return false;
        });
        
        $(document).on('click','.validEdit',function(event){ 
            event.preventDefault();
            var colonne = $(this).attr("id");
            var id_lot=colonne+'Value';            
            var id = $('.page-header').attr("id");            
            var donnee = $(this).prev().val();
            var displayAjax = $(this).parent();
            var requete = $.ajax({
                type:'POST',
                url:'chantier/modifierChantier',
                data:{ id_client : id, colonne : colonne, donnee : donnee },                    
                dataType: "html"
            });
            requete.done(function( html ) {
                displayAjax.html(html);
                
                if(colonne)
                $( "#"+colonne+" use" ).attr( "xlink:href", function( i, val ) {
                    var loc2 = $(location).attr('href');
                    loc2 =loc.split('#');
                    loc2 = loc2[0];
                    return loc2 + val;
                  });         
              
            });
            var id_lotb = $(this).parent().next();            
            //console.log(id_lotb);
            displayOnePrix(donnee,id_lotb);
            
        });
        
        /* Start Edit TTC prive and TVA price */
        function prixTTC(prixValue, id_TTC) {
                        
            prixHT = prixValue.substring(0,prixValue.indexOf('€'));
            var prixTTC = prixHT*1.20;
            id_TTC.text("Prix TTC : "+prixTTC+" €");
        }
        function prixTVA(prixValue, id_TVA) {
            
            prixHT = prixValue.substring(0,prixValue.indexOf('€'));
            var prixTVA = prixHT*0.20;            
            id_TVA.text("TVA : "+prixTVA+" €"); 
        }
        function displayPrix(){
            for (var i = 0; i < 3; i++) {
                var id_TTC = $('#Prix_lot_0'+i+'Value').parent().next().next();
                var id_TVA = $('#Prix_lot_0'+i+'Value').parent().next();
                var prixValue = $('#Prix_lot_0'+i+'Value').text();
                prixTTC(prixValue,id_TTC);
                prixTVA(prixValue,id_TVA);
            }
        }
        function displayOnePrix(prixValue,id_lotb){
            id_TVA = id_lotb;
            id_TTC = id_lotb.next();
            var prixValue = prixValue;
            prixTTC(prixValue,id_TTC);
            prixTVA(prixValue,id_TVA);
            
        }
        displayPrix();
        
         /* END edit TTC prive and TVA price */
        
        
          
});