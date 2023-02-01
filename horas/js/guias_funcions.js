/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function consulta_the_guia(){
    alert("entro a consulta de guiasssss");
    
}
function consulta_the_guia2(){
    alert("entro a consulta de guiasssss");
    
}
function rere(){
    alert("funcionaaaa");
}
function consul_abrir_detalle(mde_cont,pvd_coda,mde_plac,mde_ngui){
 
 


 
    // $('#contenedor_div_principal').html("");
          $.ajax({
            type: "POST",
            url: "lib/Guias/vistas/edt_det_guia.php",
             data: { 
            mde_cont: mde_cont 
        },
            async: false,
            success: function(response) {
                $('#contenedor_div_principal').html(response);
            }
        });
   
   
 
 
   
 $('#PVD_CODA_CONSUL').val(pvd_coda); 
$('#MDE_PLAC_CONSUL').val(mde_plac); 
$("#MDE_NGUI_CONSUL").val(mde_ngui); 


 
}
function consul_abrir_detalle_deldetalle(MDE_CONT,PK_DDE_CONT,VALOR_DECLARADO,VALOR_FLETE,SOBRE_PORTE){
 
 
  $('#PKPK_MDE_CONT').val(MDE_CONT);
 $('#PK_DDE_CONT').val(PK_DDE_CONT); 
$('#VALOR_DECLARADO_EDT').val(VALOR_DECLARADO); 
$("#VALOR_FLETE_EDT").val(VALOR_FLETE); 
$("#SOBRE_PORTE_EDT").val(SOBRE_PORTE); 


  
}

function traspaso_variables_transportadora(PVD_CODI,DEP_CODD,NIT,NOMBRE_TRANSPORTADORA,NOMBRE_DETALLE){
 
  
 $('#PK_PVD_CODI').val(PVD_CODI); 
 $('#PK_DEP_CODD').val(DEP_CODD); 
 $('#CodigoTransportistaIndDet').val(NIT); 
$('#NombreTransportistaIndDet').val(NOMBRE_TRANSPORTADORA); 
$("#DetalleTransportistaIndDet").val(NOMBRE_DETALLE);  
 
CierraPopup("modalCambioTransportadora");
  
}

function traspaso(PVD_CODI,DEP_CODD){
 
 alert("PVD_CODI_"+PVD_CODI);
 alert("DEP_CODD_"+DEP_CODD);
//CierraPopup("modalCambioTransportadora"); 

/*
 $('#PK_PVD_CODI').val(PVD_CODI); 
 $('#PK_DEP_CODD').val(DEP_CODD); 
 $('#CodigoTransportistaIndDet').val(NIT); 
$('#NombreTransportistaIndDet').val(NOMBRE_TRANSPORTADORA); 
$("#DetalleTransportistaIndDet").val(NOMBRE_DETALLE);  
*/

  
}

function CierraPopup(modalmod) {
    $("#"+modalmod).modal('hide');//ocultamos el modal
  $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
    $('.modal-backdrop').remove();//eliminamos el backdrop del modal
}





function  abrir_guias(){
 
     $('#contenedor_div_principal').html("");
          $.ajax({
            type: "POST",
            url: "lib/Guias/vistas/guias.php",
            success: function(response) {
                $('#contenedor_div_principal').html(response);
            }
        });
   
    
}

function convinacion_list_detalle(mde_cont){
   //  "ajax": "lib/Guias/ajax/datatable-guias.ajax.php",
   
  //alert("mde_cont este _"+mde_cont);
 
   
  
       var datas;
 
    $.ajax({
        type: "POST",
        url: 'lib/Guias/ajax/datatable-guias-det.ajax_1.php',
        async: false,
        dataType: 'json',
        data: { 
            mde_cont:  mde_cont
        },
        success: function (retu) {
            datas = retu;
        }
    });

 // alert("data_"+datas);
    
   $('#tablaProductos223').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
}


function convinacion_list_Nom_transportadora(){
   //  "ajax": "lib/Guias/ajax/datatable-guias.ajax.php",
   
   var cod_cont_transport = $("#cod_nit_transport").val();
  //alert("mde_cont este _"+mde_cont);
     var datas;
 
    $.ajax({
        type: "POST",
        url: 'lib/Guias/ajax/datatable-transportadoras-guias.ajax.php',
        async: false,
        dataType: 'json',
        data: { 
            cod_cont_transport:  cod_cont_transport
        },
        success: function (retu) {
            datas = retu;
        }
    });

  //alert("data_"+datas);
    
   $('#tablaTransportadora').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
}



function ActualizarguiaEncabezado()
{
  
    var mensaje;
    var opcion = confirm("Esta a punto de hacer una modificacion al encabezado de la guia, desea continuar?");
    if (opcion == true) {
        mensaje = "Has clickado OK";
	} else {
	    mensaje = "Has clickado Cancelar";
            return false;
	}
 
   
  
 var MDE_PLAC= $("#PlacaIndDet").val();
 var PVD_CODI= $("#PK_PVD_CODI").val();
 var DEP_CODD= $("#PK_DEP_CODD").val();
 var MDE_PESO= $("#PesoIndDet").val();
 var MDE_VALO= $("#ValorDeclaradoIndDet").val();
 var MDE_FLET= $("#ValorFleteIndDet").val();
 var MDE_TFIJ= $("#TarifaFijaIndDet").val();
 var MDE_CONT= $("#PK_MDE_CONT").val();
 
 /*  
  alert("PVD_CODIiiiiiii_"+PVD_CODI);
  alert("DEP_CODD_"+DEP_CODD);
 */
 if(MDE_PLAC==''){
 
    MDE_PLAC=0;
 }
 
 
 if(MDE_PESO==''){
 
    MDE_PESO=0;
 }
 
 if(MDE_VALO==''){
    
    MDE_VALO=0;
 }
 
 if(MDE_FLET==''){
      
    MDE_FLET=0;
 }
 
 if(MDE_TFIJ==''){
      
    MDE_TFIJ=0;
 }
 
 
 
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/Guias/controladores/guiascontroller.php',
        async: false,
        data: {
            opcion: "ctrActualizarGuias",
            MDE_CONT: MDE_CONT,
            MDE_PLAC: MDE_PLAC,
            PVD_CODI: PVD_CODI,
            DEP_CODD: DEP_CODD,
            MDE_PESO: MDE_PESO,
            MDE_VALO: MDE_VALO,
            MDE_FLET: MDE_FLET,
            MDE_TFIJ: MDE_TFIJ 
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

 

   console.log(retorno);
//alert("retorno_"+retorno);
    if (retorno == 1) {
        alert("Se realizo correctamente la modificacion");
        $//("#dialg_crea_TOC").dialog('close');
     //   $("#dialg_crea_TOC").dialog('destroy');
     //   $("#dialg_crea_TOC").html("");
       // ListaTOC();
       abrir_guias();
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de ingresar la informacion");
            
    }

}






function RegistrodeAuditoria()
{
  
  
   
  
 var MDE_PLAC= $("#PlacaIndDet").val();
 var PVD_CODI= $("#PK_PVD_CODI").val();
 var DEP_CODD= $("#PK_DEP_CODD").val();
 var MDE_PESO= $("#PesoIndDet").val();
 var MDE_VALO= $("#ValorDeclaradoIndDet").val();
 var MDE_FLET= $("#ValorFleteIndDet").val();
 var MDE_TFIJ= $("#TarifaFijaIndDet").val();
 var MDE_CONT= $("#PK_MDE_CONT").val();
 
   
 // alert("PVD_CODIiiiiiii_"+PVD_CODI);
  //alert("DEP_CODD_"+DEP_CODD);
 
 if(MDE_PLAC==''){
 
    MDE_PLAC=0;
 }
 
 
 if(MDE_PESO==''){
 
    MDE_PESO=0;
 }
 
 if(MDE_VALO==''){
    
    MDE_VALO=0;
 }
 
 if(MDE_FLET==''){
      
    MDE_FLET=0;
 }
 
 if(MDE_TFIJ==''){
      
    MDE_TFIJ=0;
 }
 
 
 
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/Auditoria/controladores/AuditoriaController.php',
        async: false,
        data: {
            opcion: "RegistroAuditoria",
            MDE_CONT: MDE_CONT,
            MDE_PLAC: MDE_PLAC,
            PVD_CODI: PVD_CODI,
            DEP_CODD: DEP_CODD,
            MDE_PESO: MDE_PESO,
            MDE_VALO: MDE_VALO,
            MDE_FLET: MDE_FLET,
            MDE_TFIJ: MDE_TFIJ 
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

 

   console.log(retorno);
//alert("retorno_"+retorno);
    if (retorno == 1) {
        alert("Se realizo correctamente la insercion");
        $//("#dialg_crea_TOC").dialog('close');
     //   $("#dialg_crea_TOC").dialog('destroy');
     //   $("#dialg_crea_TOC").html("");
       // ListaTOC();
  //     abrir_guias();
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de ingresar la informacion");
            
    }

}









function ActualizarDetallesDeGuiaIndividual()
{
  
  
 
  
  
  var MDE_CONT= $('#PKPK_MDE_CONT').val();
 var PK_DDE_CONT =$('#PK_DDE_CONT').val(); 
var VALOR_DECLARADO=$('#VALOR_DECLARADO_EDT').val(); 
var VALOR_FLETE= $("#VALOR_FLETE_EDT").val(); 
var SOBRE_PORTE =$("#SOBRE_PORTE_EDT").val(); 

/*
alert("MDE_CONT_"+MDE_CONT);
alert("PK_DDE_CONT_"+PK_DDE_CONT);
alert("VALOR_DECLARADO_"+VALOR_DECLARADO);
alert("VALOR_FLETE_"+VALOR_FLETE);
alert("SOBRE_PORTE_"+SOBRE_PORTE);

 */
 /*
  *         
                   $DDE_VALO=$data['DDE_VALO'];
                   $DDE_VFLE=$data['DDE_VFLE'];
                   
                   $PED_SPRT=$data['PED_SPRT'];
                   
                   
                   $MDE_CONT=$data['MDE_CONT'];
                   $DDE_CONT=$data['DDE_CONT'];
                   
  **/
 
 
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/Guias/controladores/guiascontroller.php',
        async: false,
        data: {
            opcion: "ctrActualizarmdlActualizarDetalleIndividuaDeGuiaGuia",
            MDE_CONT: MDE_CONT,
            DDE_CONT: PK_DDE_CONT,
            DDE_VALO: VALOR_DECLARADO,
            DDE_VFLE: VALOR_FLETE,
            PED_SPRT: SOBRE_PORTE 
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

 

   console.log(retorno);
//alert("retorno_"+retorno);
    if (retorno == 1) {
        alert("Se realizo correctamente la modificacion");
        $//("#dialg_crea_TOC").dialog('close');
     //   $("#dialg_crea_TOC").dialog('destroy');
     //   $("#dialg_crea_TOC").html("");
       // ListaTOC();
     //  abrir_guias();
     CierraPopup("modalEditarDetalle");
    // llamado_individual_guia(MDE_CONT);
     convinacion_list_detalle(MDE_CONT);
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de ingresar la informacion");
            
    }

}



function ActualizarDetallesDeGuiaBloque()
{
  
   
  
 
  var MDE_CONT= $('#PK_MDE_CONT').val();
  
  
   
var VALOR_DECLARADO=$('#valorDeclaradoBloque').val(); 
var VALOR_FLETE= $("#valorFleteBloque").val(); 
var SOBRE_PORTE =$("#valorSobrePorteBloque").val(); 
 
 
  
 if(VALOR_DECLARADO==''){
 
    VALOR_DECLARADO=0;
 }
 
 
 if(VALOR_FLETE==''){
 
    VALOR_FLETE=0;
 }
 
 if(SOBRE_PORTE==''){
    
    SOBRE_PORTE=0;
 }
 
   
 var PK_DDE_CONT=0;
 /*
  *         
                   $DDE_VALO=$data['DDE_VALO'];
                   $DDE_VFLE=$data['DDE_VFLE'];
                   
                   $PED_SPRT=$data['PED_SPRT'];
                   
                   
                   $MDE_CONT=$data['MDE_CONT'];
                   $DDE_CONT=$data['DDE_CONT'];
                   
  **/
 
 
  var mensaje;
    var opcion = confirm("Esta a punto de hacer una modificacion en bloque de los registros en detalle de la guia, desea continuar?");
    if (opcion == true) {
        mensaje = "Has clickado OK";
	} else {
	    mensaje = "Has clickado Cancelar";
            return false;
	}
 
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/Guias/controladores/guiascontroller.php',
        async: false,
        data: {
            opcion: "ctrActualizarmdlActualizarDetalleIndividuaDeGuiaBloque",
            MDE_CONT: MDE_CONT,
            DDE_CONT: PK_DDE_CONT,
            DDE_VALO: VALOR_DECLARADO,
            DDE_VFLE: VALOR_FLETE,
            PED_SPRT: SOBRE_PORTE 
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

 

   console.log(retorno);
//alert("retorno_"+retorno);
    if (retorno == 1) {
        alert("Se realizo correctamente la modificacion");
        
        
        
         $('#valorDeclaradoBloque').val(""); 
  $("#valorFleteBloque").val(""); 
  $("#valorSobrePorteBloque").val(""); 

        
        
       //("#dialg_crea_TOC").dialog('close');
     //   $("#dialg_crea_TOC").dialog('destroy');
     //   $("#dialg_crea_TOC").html("");
       // ListaTOC();
     //  abrir_guias();
     CierraPopup("modalEditarBloque");
    // llamado_individual_guia(MDE_CONT);
     convinacion_list_detalle(MDE_CONT);
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de ingresar la informacion");
            
    }
    
    
    

}









function Actualizardetalleindividualguia()
{
  
 var MDE_PLAC= $("#PlacaIndDet").val();
 var PVD_CODI= $("#PK_PVD_CODI").val();
 var DEP_CODD= $("#PK_DEP_CODD").val();
 var MDE_PESO= $("#PesoIndDet").val();
 var MDE_VALO= $("#ValorDeclaradoIndDet").val();
 var MDE_FLET= $("#ValorFleteIndDet").val();
 var MDE_TFIJ= $("#TarifaFijaIndDet").val();
 var MDE_CONT= $("#PK_MDE_CONT").val();
 
 
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/Guias/controladores/guiascontroller.php',
        async: false,
        data: {
            opcion: "ctrActualizarmdlActualizarDetalleIndividuaDeGuiaGuia",
            MDE_CONT: MDE_CONT,
            MDE_PLAC: MDE_PLAC,
            PVD_CODI: PVD_CODI,
            DEP_CODD: DEP_CODD,
            MDE_PESO: MDE_PESO,
            MDE_VALO: MDE_VALO,
            MDE_FLET: MDE_FLET,
            MDE_TFIJ: MDE_TFIJ 
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

 

    //console.log(retorno);

    if (retorno == 1) {
        alert("Se realizo correctamente la modificacion");
        $//("#dialg_crea_TOC").dialog('close');
     //   $("#dialg_crea_TOC").dialog('destroy');
     //   $("#dialg_crea_TOC").html("");
       // ListaTOC();
       abrir_guias();
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de ingresar la informacion");
            
    }

}





function consulta_guias_detalle() {
    var datas;
var contador = 7;
  $.ajax({
        type: "POST",
        url: 'lib/Guias/ajax/datatable-guias.ajax_1.php',
        async: false,
        dataType: 'json',
        data: { 
            pvd_coda: $("#PVD_CODA").val(),
            mde_plac: $("#PVD_CODA").val(),
            mde_ngui: 26,
            cont_case:  contador
        },
        success: function (retu) {
            datas = retu;
        }
    });


    table = $('#tablaProductos22').DataTable({
        data: datas,
        destroy: true
    });
  

}

function bloqueo(botonbloqueo,botondesbloqueo,input){
   
    $("#"+botonbloqueo).css("display","none");
    $("#"+botondesbloqueo).css("display","block");
    $('#'+input).prop('readonly', true);
    
}

function desbloqueo(botonbloqueo,botondesbloqueo,input){
  
    $("#"+botonbloqueo).css("display","block");
    $("#"+botondesbloqueo).css("display","none");
    $('#'+input).prop('readonly', false);
    
}



 

function det(){
    alert("entro a consulta de guia detalle detalle");
    
}

function consulta_guias_general(){
    
 alert("entro a consultas Generales");
$('.tablaProductos').DataTable( {
    "ajax": "lib/Guias/ajax/datatable-guias.ajax.php",
    "deferRender": true,
	"retrieve": true,
	"processing": true,
	 "language": {

			"sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix":    "",
			"sSearch":         "Buscar:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
			"sFirst":    "Primero",
			"sLast":     "Último",
			"sNext":     "Siguiente",
			"sPrevious": "Anterior"
			},
			"oAria": {
				"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			}

	}

} );   
}

function consulta_guias_general_variables(PVD_CODA,MDE_PLAC,MDE_NGUI){
//        "ajax": "lib/Guias/ajax/datatable-guias.ajax.php?perfilOculto="+perfilOcult",

    
 alert("entro a consultas Generales detalle");
$('.tablaProductos').DataTable( {
   // "ajax": "lib/Guias/ajax/datatable-guias.ajax.php",
    //"data": {"PVD_CODA": PVD_CODA,"MDE_PLAC": MDE_PLAC,"MDE_NGUI": MDE_NGUI},
    "deferRender": true,
	"retrieve": true,
	"processing": true,
        "ajax":{
           "url" : "lib/Guias/ajax/datatable-guias.ajax_1.php",
          "type": "POST",
           "data":  {"PVD_CODA": PVD_CODA,"MDE_PLAC": MDE_PLAC,"MDE_NGUI": MDE_NGUI}
         },
        
	 "language": {

			"sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix":    "",
			"sSearch":         "Buscar:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
			"sFirst":    "Primero",
			"sLast":     "Último",
			"sNext":     "Siguiente",
			"sPrevious": "Anterior"
			},
			"oAria": {
				"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			}

	}

} );   
}




function consulta_detalle_guias(){
    
 alert("entro a consultas Detalle");
$('.tablaDetalle').DataTable( {
    "ajax": "lib/Guias/ajax/datatable-guias-detalle.ajax.php",
    "deferRender": true,
	"retrieve": true,
	"processing": true,
	 "language": {

			"sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix":    "",
			"sSearch":         "Buscar:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
			"sFirst":    "Primero",
			"sLast":     "Último",
			"sNext":     "Siguiente",
			"sPrevious": "Anterior"
			},
			"oAria": {
				"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			}

	}

} );   
}

function prueba(){
    alert(123456789);
    $("#dialog").dialog();
}

function prueba(){
    alert(123456789);
    $("#dialog").dialog();
}

function consulta_guias_filtros(){}

function detalle(){
     alert("entro guias detalle");
}
function guias_generadas_detalle(){
 alert("entro guias detalle");
 /*
            type: "POST",
            url: "lib/Guias/vistas/guias_detalle.php",
            success: function(response) {
                $('#contenedor_div_principal').html(response);
            }
        });
        
        */
}

function consulta_guias(){
    
     
  /*  
   
    
    
    var PVD_CODA = $("#PVD_CODA").val();
    
    alert("PVD_CODA_"+PVD_CODA);
    var MDE_PLAC = $("#MDE_PLAC").val();
    var MDE_NGUI = $("#MDE_NGUI").val();
    consulta_guias_general_variables(PVD_CODA,MDE_PLAC,MDE_NGUI)
    
    */
   var response ="";
   var response2 ="";
      $.ajax({
            type: "POST",
            url:  "lib/Guias/ajax/datatable-guias-detalle.ajax.php",
            success: function(response) {
             //   $('.tablaProductos').html(response);
             alert("responseeste_"+response);
             response2 =    response;

        
            }
        });
        
    //   alert("response2222_"+response);
       alert("response2_detalle");
       alert("response2_detalle___"+response2);
    
    
    var dataSet = [
    [ "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800" ],
    [ "Garrett Winters", "Accountant", "Tokyo", "8422", "2011/07/25", "$170,750" ],
    [ "Ashton Cox", "Junior Technical Author", "San Francisco", "1562", "2009/01/12", "$86,000" ],
    [ "Cedric Kelly", "Senior Javascript Developer", "Edinburgh", "6224", "2012/03/29", "$433,060" ],
    [ "Airi Satou", "Accountant", "Tokyo", "5407", "2008/11/28", "$162,700" ],
    [ "Brielle Williamson", "Integration Specialist", "New York", "4804", "2012/12/02", "$372,000" ],
    [ "Herrod Chandler", "Sales Assistant", "San Francisco", "9608", "2012/08/06", "$137,500" ],
    [ "Rhona Davidson", "Integration Specialist", "Tokyo", "6200", "2010/10/14", "$327,900" ],
    [ "Colleen Hurst", "Javascript Developer", "San Francisco", "2360", "2009/09/15", "$205,500" ],
    [ "Sonya Frost", "Software Engineer", "Edinburgh", "1667", "2008/12/13", "$103,600" ],
    [ "Jena Gaines", "Office Manager", "London", "3814", "2008/12/19", "$90,560" ],
    [ "Quinn Flynn", "Support Lead", "Edinburgh", "9497", "2013/03/03", "$342,000" ],
    [ "Charde Marshall", "Regional Director", "San Francisco", "6741", "2008/10/16", "$470,600" ],
    [ "Haley Kennedy", "Senior Marketing Designer", "London", "3597", "2012/12/18", "$313,500" ],
    [ "Tatyana Fitzpatrick", "Regional Director", "London", "1965", "2010/03/17", "$385,750" ],
    [ "Michael Silva", "Marketing Designer", "London", "1581", "2012/11/27", "$198,500" ],
    [ "Paul Byrd", "Chief Financial Officer (CFO)", "New York", "3059", "2010/06/09", "$725,000" ],
    [ "Gloria Little", "Systems Administrator", "New York", "1721", "2009/04/10", "$237,500" ],
    [ "Bradley Greer", "Software Engineer", "London", "2558", "2012/10/13", "$132,000" ],
    [ "Dai Rios", "Personnel Lead", "Edinburgh", "2290", "2012/09/26", "$217,500" ],
    [ "Jenette Caldwell", "Development Lead", "New York", "1937", "2011/09/03", "$345,000" ],
    [ "Yuri Berry", "Chief Marketing Officer (CMO)", "New York", "6154", "2009/06/25", "$675,000" ],
    [ "Caesar Vance", "Pre-Sales Support", "New York", "8330", "2011/12/12", "$106,450" ],
    [ "Doris Wilder", "Sales Assistant", "Sydney", "3023", "2010/09/20", "$85,600" ],
    [ "Angelica Ramos", "Chief Executive Officer (CEO)", "London", "5797", "2009/10/09", "$1,200,000" ],
    [ "Gavin Joyce", "Developer", "Edinburgh", "8822", "2010/12/22", "$92,575" ],
    [ "Jennifer Chang", "Regional Director", "Singapore", "9239", "2010/11/14", "$357,650" ],
    [ "Brenden Wagner", "Software Engineer", "San Francisco", "1314", "2011/06/07", "$206,850" ],
    [ "Fiona Green", "Chief Operating Officer (COO)", "San Francisco", "2947", "2010/03/11", "$850,000" ],
    [ "Shou Itou", "Regional Marketing", "Tokyo", "8899", "2011/08/14", "$163,000" ],
    [ "Michelle House", "Integration Specialist", "Sydney", "2769", "2011/06/02", "$95,400" ],
    [ "Suki Burks", "Developer", "London", "6832", "2009/10/22", "$114,500" ],
    [ "Prescott Bartlett", "Technical Author", "London", "3606", "2011/05/07", "$145,000" ],
    [ "Gavin Cortez", "Team Leader", "San Francisco", "2860", "2008/10/26", "$235,500" ],
    [ "Martena Mccray", "Post-Sales support", "Edinburgh", "8240", "2011/03/09", "$324,050" ],
    [ "Unity Butler", "Marketing Designer", "San Francisco", "5384", "2009/12/09", "$85,675" ]
];/*
   $('.tablaProductos').DataTable( {
        data: response,
        columns: [
            { title: "0_Name" },
            { title: "1_Position" },
            { title: "2_Office" },
            { title: "3_Extn." },
            { title: "4_Start date" } 
        ]
    } );
    */
       $('.tablaPro').DataTable( {
        data: response,
        columns: [
            { title: "Name" },
            { title: "Position" },
            { title: "Office" },
            { title: "Extn." } 
        ]
    } );
    
    
    
    
    
   // $('.tablaProductos').DataTable( {});
}


function cargarDatos(){
    var DatosJson = JSON.parse(JSON.stringify(json));
    console.log(DatosJson.alumnoUTP.length);
    $("#Table").append('<tr><td>Nombre</td>'+
    '<td>Apellido paterno</td>' + 
    '<td>Edad</td>');
    for (i = 0; i < DatosJson.alumnoUTP.length; i++){

 $("#Table").append('<tr>' + 
    '<td align="center" style="dislay: none;">' + DatosJson.alumnoUTP[i].nombre + '</td>'+
    '<td align="center" style="dislay: none;">' + DatosJson.alumnoUTP[i].apePaterno + '</td>'+
    '<td align="center" style="dislay: none;">' + DatosJson.alumnoUTP[i].edad + '</td>'+'</tr>');
    }
}
function consulta_guias_dos(){
    
     var nombre_arch ="";
   
	  var retorno;
	  var retu;
    $.ajax({
        type: "JSON",
        url:  "lib/Guias/ajax/datatable-guias.ajax_2.php",
        async: false,
        data: {
             nombre_arch:nombre_arch
          
       
        },
        success: function (retu) {
             var DatosJson = JSON.parse(JSON.stringify(retu));
            $("#Table").append('<tr><td>Nombre</td>'+
    '<td>Apellido paterno</td>' + 
    '<td>Edad</td>');   
     for (i = 0; i < DatosJson.Datos.length; i++){

 $("#Table").append('<tr>' + 
    '<td align="center" style="dislay: none;">' + DatosJson.Datos[i].n0 + '</td>'+
    '<td align="center" style="dislay: none;">' + DatosJson.Datos[i].n1 + '</td>'+
    '<td align="center" style="dislay: none;">' + DatosJson.Datos[i].n2 + '</td>'+'</tr>');
    }



            }

    });
  alert("retorno_2222_"+retorno);
  console.log(retorno);
 /*  
var variable = 33344
   
$('.tablaPro').DataTable( {
    
    columns: [
            { title: "Name" },
            { title: "Position" },
            { title: "Office" },
            { title: "Extn." } 
        ],
        'ajax' : {
            'url' : "lib/Guias/ajax/datatable-guias-detalle.ajax_1.php",
            'data' : { 'variable' : variable },
            'type' : 'post'
        }
         
        
    } );
    */
    /*
   $('.tablaPro').DataTable( {
        data: retorno,
        columns: [
            { title: "Name" },
            { title: "Position" },
            { title: "Office" },
            { title: "Extn." } 
        ]
    } );
    */
}
 

 
function consultaguia_filtros_con_final(){
   //  "ajax": "lib/Guias/ajax/datatable-guias.ajax.php",
   
  
  
  var pvd_coda=$("#PVD_CODA").val();
  var mde_plac=$("#MDE_PLAC").val();  
  var mde_ngui=$("#MDE_NGUI").val();
  
 
  
       var datas;
 
    $.ajax({
        type: "POST",
        url: 'lib/Guias/ajax/datatable-guias.ajax_1.php',
        async: false,
        dataType: 'json',
        data: { 
            pvd_coda: $("#PVD_CODA").val(),
            mde_plac: 'mde_plac',
            mde_ngui: 'mde_ngui' 
        },
        success: function (retu) {
            datas = retu;
        }
    });

  //alert("data_"+datas);
    
   $('#tablaProductos').DataTable({
        data: datas,
        destroy: true,
         language: {

			"sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix":    "",
			"sSearch":         "Buscar:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
			"sFirst":    "Primero",
			"sLast":     "Último",
			"sNext":     "Siguiente",
			"sPrevious": "Anterior"
			},
			"oAria": {
				"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			}

	}
    });
 
       
}

function convinacion(){
   //  "ajax": "lib/Guias/ajax/datatable-guias.ajax.php",
   
  
  
  var pvd_coda=$("#PVD_CODA").val();
  var mde_plac=$("#MDE_PLAC").val();  
  var mde_ngui=$("#MDE_NGUI").val();
  /*
  $this.val().length
  
  $this.val().length <= 0 
  */
  var n_pvd_coda=pvd_coda.length;
  var n_mde_plac=mde_plac.length;
  var n_mde_ngui=mde_ngui.length;
  
  var contador = 0;
  if(n_pvd_coda>0 && n_mde_plac==0 && n_mde_ngui==0){
      contador=1
  }else if(n_pvd_coda>0 && n_mde_plac>0 && n_mde_ngui==0){
      contador=2
  }
  else if(n_pvd_coda>0 && n_mde_plac>0 && n_mde_ngui>0 ){
      contador=3
  }
  else if(n_pvd_coda>0 && n_mde_plac==0 && n_mde_ngui>0 ){
      contador=4
  }
  else if(n_pvd_coda==0 && n_mde_plac>0 && n_mde_ngui==0 ){
      contador=5
  }
  else if(n_pvd_coda==0 && n_mde_plac>0 && n_mde_ngui>0 ){
      contador=6
  }
  else if(n_pvd_coda==0 && n_mde_plac==0 && n_mde_ngui>0 ){
      contador=7
  }
   
  
  
       var datas;
 
    $.ajax({
        type: "POST",
        url: 'lib/Guias/ajax/datatable-guias.ajax_1.php',
        async: false,
        dataType: 'json',
        data: { 
            pvd_coda: $("#PVD_CODA").val(),
            mde_plac: mde_plac,
            mde_ngui: mde_ngui,
            cont_case:  contador
        },
        success: function (retu) {
            datas = retu;
        }
    });

  //alert("data_"+datas);
    
   $('#tablaProductos').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
}







function funcion_noconvinacion_bloque_convinacion(){
   //  "ajax": "lib/Guias/ajax/datatable-guias.ajax.php",
   
  
  var MDE_CONT= $('#PK_MDE_CONT').val();
  
  var valorDeclaradoBloq=$("#valorDeclaradoBloque").val();
  var valorFleteBloq=$("#valorFleteBloque").val();  
  var valorSobrePorteBloq=$("#valorSobrePorteBloque").val();
  /*
  $this.val().length
  
  $this.val().length <= 0 
  */
  var valorDeclaradoBloque=valorDeclaradoBloq.length;
  var valorFleteBloque=valorFleteBloq.length;
  var valorSobrePorteBloque=valorSobrePorteBloq.length;
  
  var contador = 0;
  if(valorDeclaradoBloque>0 && valorFleteBloque==0 && valorSobrePorteBloque==0){
      contador=1;
  }else if(valorDeclaradoBloque>0 && valorFleteBloque>0 && valorSobrePorteBloque==0){
      contador=2;
  }
  else if(valorDeclaradoBloque>0 && valorFleteBloque>0 && valorSobrePorteBloque>0 ){
      contador=3;
  }
  else if(valorDeclaradoBloque>0 && valorFleteBloque==0 && valorSobrePorteBloque>0 ){
      contador=4;
  }
  else if(valorDeclaradoBloque==0 && valorFleteBloque>0 && valorSobrePorteBloque==0 ){
      contador=5;
  }
  else if(valorDeclaradoBloque==0 && valorFleteBloque>0 && valorSobrePorteBloque>0 ){
      contador=6;
  }
  else if(valorDeclaradoBloque==0 && valorFleteBloque==0 && valorSobrePorteBloque>0 ){
      contador=7;
  }
   
   var mensaje;
    var opcion = confirm("Esta a punto de hacer una modificacion en bloque de los registros en detalle de la guia, desea continuar?");
    if (opcion == true) {
        mensaje = "Has clickado OK";
	} else {
	    mensaje = "Has clickado Cancelar";
            return false;
	}
 
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/Guias/controladores/guiascontroller.php',
        async: false,
        data: {
            opcion: "ctrNuevaEdicionEnBloque",
            MDE_CONT: MDE_CONT,
            valorDeclaradoBloque: valorDeclaradoBloq,
            valorFleteBloque: valorFleteBloq,
            valorSobrePorteBloque: valorSobrePorteBloq,
            contador:contador
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

 

  //  console.log(retorno);
 
    if (retorno == 1) {
        alert("Se realizo correctamente la modificacion");
        
        
        
         $('#valorDeclaradoBloque').val(""); 
  $("#valorFleteBloque").val(""); 
  $("#valorSobrePorteBloque").val(""); 
  
  
 $('#valorSobrePorteBloque').prop('readonly', true);
 $('#valorFleteBloque').prop('readonly', true);
 $('#valorDeclaradoBloque').prop('readonly', true);

        
        
        $//("#dialg_crea_TOC").dialog('close');
     //   $("#dialg_crea_TOC").dialog('destroy');
     //   $("#dialg_crea_TOC").html("");
       // ListaTOC();
     //  abrir_guias();
     CierraPopup("modalEditarBloque");
    // llamado_individual_guia(MDE_CONT);
     convinacion_list_detalle(MDE_CONT);
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de ingresar la informacion");
            
    }




  
  
}

function llamado_individual_guia(mde_cont_ind){
    
    	//var idUsuario = $(this).attr("idUsuario");
	//alert("llamado individual");
	  var datos = new FormData();
        
	datos.append("mde_cont_llave", mde_cont_ind);
 
var respuesta="";
	$.ajax({
             
		url:"lib/Guias/ajax/consulta-guia-individual.ajax.php",
		method: "POST",
		 data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
		// alert(1999999999999);
                     //   alert("MDE_CONT "+respuesta["MDE_CONT"]);
                    
                     $("#PlacaIndDet").val(respuesta["PLACA"]);
                    //llave de transportista
                   
                   
                   /* */
                    
                    $("#PK_PVD_CODI").val(respuesta["PK_PVD_CODI"]);
                    $("#PK_DEP_CODD").val(respuesta["PK_DEP_CODD"]);
                    
                   
               
                   
                    $("#CodigoTransportistaIndDet").val(respuesta["CODIGO_TRANS"]);
                    $("#NombreTransportistaIndDet").val(respuesta["NOMBRE_TRANSPORTIS"]);
                    $("#DetalleTransportistaIndDet").val(respuesta["DETALLE_TRANSPORTISTA_NOMBRE"]);
                    
                    
                    $("#PesoIndDet").val(respuesta["PESO"]);
                   
                   $("#ValorDeclaradoIndDet").val(respuesta["VALOR_DECLARADO"]);
                   $("#ValorFleteIndDet").val(respuesta["VALOR_FLETE"]);
                   $("#TarifaFijaIndDet").val(respuesta["TARIFA_FIJA"]);
                    
                    
                    /*
                       $("#contadorregguia").val(respuesta["MDE_CONT"])
			$("#editarNombre").val(respuesta["NUMERO_GUIA"]);
			$("#editarUsuario").val(respuesta["CONTADOR"]);
			$("#editarPerfil").html(respuesta["PLACA"]);
			$("#editarPerfil").val(respuesta["LLAVE_TRANSPORTISTA"]);
			$("#fotoActual").val(respuesta["CODIGO_TRANS"]);
			$("#fotoActual").val(respuesta["TRANSPORTISTA_NAME"]);
			$("#fotoActual").val(respuesta["NOMBRE_TRANSPORTIS"]);
			$("#fotoActual").val(respuesta["PESO"]);
			$("#fotoActual").val(respuesta["VALOR_DECLARADO"]);
			$("#fotoActual").val(respuesta["VALOR_FLETE"]);
			$("#fotoActual").val(respuesta["TARIFA_FIJA"]);
                    */
			 


		}

	});
    
    
}


