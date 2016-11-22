// JavaScript Document

$(document).ready(function(){
	
	/* Data Insert Starts Here */
	$(document).on('submit', '#client-SaveForm', function() {
	  
            var requete = $.ajax({
                                        url: "clients/ajouterClient",                                        
                                        type: "POST",
                                        data: $(this).serialize(),
                                        dataType: "html"
                                      });
                        
            requete.done(function(data){
			$("#dis").fadeOut();
			$("#dis").fadeIn('slow', function(){
				 $("#dis").html('<div class="alert alert-info">'+data+'</div>');
                                $("#client-SaveForm")[0].reset();
		     });	
		 });
                 requete.fail(function(data){
			$("#dis").fadeOut();
			$("#dis").fadeIn('slow', function(){
				 $("#dis").html('<div class="alert alert-info">'+data+'</div>');
                                $("#client-SaveForm")[0].reset();
		     });	
		 });  
	     return false;
    });
	/* Data Insert Ends Here */
	
	
	/* Data Delete Starts Here */
	$(".delete-link").click(function()
	{
		var id = $(this).attr("id");
		var del_id = id;
		var parent = $(this).parent("td").parent("tr");
		if(confirm('Sure to Delete ID no = ' +del_id))
		{
                        var requete = $.ajax({
                                        url: "clients/supprimerClient",
                                        method: "POST",
                                        data: { del_id : del_id },
                                        dataType: "html"
                                      });
                        requete.done(function( data ) {
                            
                            $("#dis").fadeOut();
                            $("#dis").fadeIn('slow', function(){
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
	/* Data Delete Ends Here */
	
	/* Get Edit ID  */
	$(".edit-link").click(function()
	{
		var id = $(this).attr("id");
		var edit_id = id;
		if(confirm('Sure to Edit ID no = ' +edit_id))
		{
                    var requete = $.ajax({
                        url: "clients/editClientView",
                        method: "POST",
                        data: { edit_id : edit_id },
                        dataType: "html"
                      });
                    requete.done(function( data ) {


                        $(".content-loader").fadeOut( function(){
                                    $(".content-loader").html(data);
                                });
                        $(".content-loader").fadeIn('slow');
                        $("#btn-add").hide();
                        $("#btn-view").show();
                      });
		}
		return false;
	});
	/* Get Edit ID  */
	
	/* Update Record  */
	$(document).on('submit', '#client-UpdateForm', function() {
	 
	   $.post("clients/editerClient", $(this).serialize())
        .done(function(data){
			$("#dis").fadeOut();
			$("#dis").fadeIn('slow', function(){
			     $("#dis").html('<div class="alert alert-info">'+data+'</div>');
			     $("#client-UpdateForm")[0].reset();
				 $("body").fadeOut('slow', function()
				 {
					$("body").fadeOut('slow');
					window.location.href="clients";
				 });				 
		     });	
		});   
	    return false;
        });
	/* Update Record  */
        
        //Get all service one client
        /*$(".selectClient").change(function (){
            var id_client = $(this).val();
            $(".service-loader").fadeOut('slow', function()
             {
                    $(".service-loader").fadeIn('slow');
                    $(".service-loader").load('?page=allClientService&id_client='+id_client);                               
                    
            });
            return false;
        });*/
        
     
        
        //Data insert service        
	$(document).on('submit', '#service-SaveForm', function() {
	  
	   $.post("clients/ajouterService", $(this).serialize())
        .done(function(data){
			$("#disService").fadeOut();
			$("#disService").fadeIn('slow', function(){
				 $("#disService").html('<div class="alert alert-info">'+data+'</div>');
			     $("#service-SaveForm")[0].reset();
		     });	
		 });   
	     return false;
    });
    
    /* Get Edit ID Service */
	$(".edit-link-service").click(function()
	{
		var id = $(this).attr("id");
		var edit_id_service = id;
		if(confirm('Sure to Edit ID no = ' +edit_id_service))
		{
			var requete = $.ajax({
                        url: "clients/editServiceView",
                        method: "POST",
                        data: { edit_id_service : edit_id_service },
                        dataType: "html"
                      });
                    requete.done(function( data ) {


                        $(".service-loader").fadeOut( function(){
                                    $(".service-loader").html(data);
                                });
                        $(".service-loader").fadeIn('slow');
                        $("#btn-add-service").hide();
                        $("#btn-view-service").show();
                      });
		}
		return false;
	});
        /* Update Service Record  */
	$(document).on('submit', '#service-UpdateForm', function() {
	 
	   $.post("clients/editerService", $(this).serialize())
        .done(function(data){
			$("#disService").fadeOut();
			$("#disService").fadeIn('slow', function(){
			     $("#disService").html('<div class="alert alert-info">'+data+'</div>');
			     
				 $("body").fadeOut('slow', function()
				 {
					$("body").fadeOut('slow');
					document.location.href="clients";
				 });				 
		     });	
		});   
	    return false;
        });
	/* Update Service Record  */
        /* Data Delete Service Starts Here */
	$(".delete-link-service").click(function()
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
                                url: "clients/supprimerService",
                                method: "POST",
                                data: { del_id : del_id },
                                dataType: "html"
                              });
                requete.done(function( data ) {

                    $("#dis2").fadeOut();
                    $("#dis2").fadeIn('slow', function(){
                                $("#dis2").html('<div class="alert alert-info">'+data+'</div>');
                                var val=$("#dis2").text();                                
                                if(val=='Success'){
                                     parent.fadeOut('slow');
                                }                                           

                            });                        

                });
            }
            return false;
	});
	/* Data Delete Service Ends Here */
        
});
