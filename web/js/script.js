//SIDEBAR ACTIVE

var loc = $(location).attr('href');
var astr =loc.indexOf('#');
if(astr!='-1'){
    var ahref= loc.substring(30,astr);
}
else{
    var ahref= loc.split("#");
    ahref= ahref[0];
}

    var href= ahref;
    $("li").removeClass("active");
    $('[href="' + href + '"]').parent().addClass("active");


/* global consol */

$(".addplus").click(function(){
    
    $(".addplus").toggle();
    $("#addform").toggleClass('hiddenform');
    
});


$(".addplus_service").click(function(){
    $(".addplus_service").toggle();
    $("#addform_service").toggleClass('hiddenform');
});


$("#addplus_lot").click(function(){
    
        var num     = $('.lot').length; // how many "duplicatable" input fields we currently have
        var newNum  = new Number(num + 1);      // the numeric ID of the new input field being added
 
        // create the new element via clone(), and manipulate it's ID using newNum value
        var newElem = $('#lot_' + num).clone().attr('id', 'lot_' + newNum);
        
        // manipulate the name/id values of the input inside the new element
        newElem.children('#lot_' +newNum+ ' .num_lot' ).attr('name', 'Numero_lot_' + newNum);
        newElem.children('#lot_' +newNum+ ' .nom_lot' ).attr('name', 'Lot_' + newNum);
        newElem.children().children().children().children().attr('name', 'optionsmt' + newNum).prop('checked', false);
        // insert the new element after the last "duplicatable" input field
        $('#lot_' + num).after(newElem);
 

});


	
$(function(){
   $('#datepicker1').datepicker({
      format: 'dd-mm-yyyy',
      lang: 'fr-FR'
    });
});

    
//------------SCRIPT POUR PAGE CLIENT-----------------

$("#btn-view").hide();
	
$("#btn-add").click(function(){
        
           var requete = $.ajax({
                            url: "clients/addClientView",
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
        
});

$("#btn-view").click(function(){

        $("body").fadeOut('slow', function()
        {
                $("body").load('?page=clients');
                $("body").fadeIn('slow');
                window.location.href="clients";
        });
});
$('#clientTable').DataTable();

$('#clientTable')
.removeClass( 'display' )
.addClass('table table-bordered');

$("#btn-view-service").hide();
   //Get add client
 $("#btn-add-service").click(function()
    { 
        var requete = $.ajax({
                            url: "clients/addServiceView",
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
        
    });
$("#btn-view-service").click(function(){

        $("body").fadeOut('slow', function()
        {
                $("body").load('?page=client');
                $("body").fadeIn('slow');
                window.location.href="clients/#service-loader";
                
        });
        
});

$('#serviceTable').DataTable( {
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select class="form-control"><option value="">Séléctionner un client</option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    if(column.search() === '^'+d+'$'){
                        select.append( '<option value="'+d+'" selected="selected">'+d+'</option>' )
                    } else {
                        select.append( '<option value="'+d+'">'+d+'</option>' )
                    }
                } );
            } );
        }
    } );
    
    $('tfoot th:nth-child(3)>select').appendTo('#selectClientService');
    
    
    //------------END SCRIPT POUR PAGE CLIENT-----------------

//----------------START SCRIPT POUR PAGE CHANTIERS------------------------------

$('#chantierTable').DataTable();

$('#chantierTable')
.removeClass( 'display' )
.addClass('table table-bordered');

//----------------END SCRIPT POUR PAGE CHANTIERS--------------------------------

//----------------START SCRIPT POUR PAGE CHANTIER------------------------------
/*$(document).on('submit', '#chantier-Download', function(){
    
   var requete = $.ajax({
                url: "?page=downloadDoc",
                type: "POST",
                data: $(this).serialize(),
                dataType: "html",
              });
            requete.done(function( data ) {
                
                $("#dis").fadeOut();
                $("#dis").fadeIn('slow', function(){
                            $("#dis").html(data)
                        });
            });
            return false;             
});*/
//----------------END SCRIPT POUR PAGE CHANTIER--------------------------------
 $(".clientName").chosen({no_results_text: "Oops, nothing found!"}); 

//$('use').attr('xlink:href', loc);

$( "use" ).attr( "xlink:href", function( i, val ) {
  var loc2 = $(location).attr('href');
  loc2 =loc.split('#');
  loc2 = loc2[0];
  return loc2 + val;
});

$.fn.pressEnter = function(fn) {  

    return this.each(function() {  
        $(this).bind('enterPress', fn);
        $(this).keyup(function(e){
            if(e.keyCode == 13)
            {
              $(this).trigger("enterPress");
            }
        })
    });  
 }; 