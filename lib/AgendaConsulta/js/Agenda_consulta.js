 
 function value_cont_estandar(){
        var cont_horas_margen = $("#cont_horas_margen").val();
        $("#cantidad_horas").val(cont_horas_margen);
     
 }
  
function consulta_list_tiempo(){
  
  
   
  
  
  
  
  
  
  var fecha= $("#fecha").val();
  var cont_horas_margen = $("#cont_horas_margen").val();
  
    var user= $("#user").val();
  
     var n_user=user.length;
  
  var contador = 0;
  if(n_user==0 ){
      contador=1;
  }else if(n_user>0){
      contador=2;
  }
 
  
  
 //var NUM_ORDEN = $("#NUM_ORDEN").val();
//alert("registro prueba registro_"+fecha);
 //var NUM_ORDEN=NUM_ORDEN.length;
     var datas;
 
    $.ajax({
        type: "POST",
  //      url: 'lib/AgendaConsulta/ajax/datatable-tiempo.php',
        url: 'lib/AgendaConsulta/ajax/datatable-1tiempos.php',
        async: false,
        dataType: 'json',
        data: { 
        fecha:fecha,
        cont_horas_margen:cont_horas_margen,
       
         user:user,
         contador:contador
         
        },
        success: function (retu) {
            datas = retu;
        }
    });
//alert("datas "+datas);
 
   $('#tablet_tiempo').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
}
 
 function consulta_general(){
     truncar_insert_nuevo();
     consulta_list_tiempo();
     consulta_list_tercero();
     consulta_list_Actividad_etapa();
     //consulta_list_consolidado();
      consulta_list_Actividad_Consolidado_4();
      alert("Ya se realizo la busqueda proceda a visualizar en las pestañas");
 
}
   
function consulta_list_tercero(){
  
  var fecha= $("#fecha").val();
  var user= $("#user").val();
 //var NUM_ORDEN = $("#NUM_ORDEN").val();
//alert("registro prueba registro_"+fecha);
 //var NUM_ORDEN=NUM_ORDEN.length;
 
 
   var n_user=user.length;
  
  var contador = 0;
  if(n_user==0 ){
      contador=1;
  }else if(n_user>0){
      contador=2;
  }
 
 
     var datas;
 
    $.ajax({
        type: "POST",
  //      url: 'lib/AgendaConsulta/ajax/datatable-tiempo.php',
        url: 'lib/AgendaConsulta/ajax/datatable-2Terceros.php',
        async: false,
        dataType: 'json',
        data: { 
        fecha:fecha,
         user:user,
         contador:contador
        },
        success: function (retu) {
            datas = retu;
        }
    });
//alert("datas "+datas);
 
   $('#tablet_tercero').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
}
 
 function consultval(){
       var divs = document.getElementsByClassName("Docampo").length;
alert("Hay " + divs + " elementos");
 }
 function consulta_cantidad_errores(nom_usuario){
       var divs = document.getElementsByClassName("Docampo").length;
 //alert("Hay " + divs + " elementos");

return divs;
 }
 
 
 function truncar_insert_nuevo(){
    
     
    
    
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/AgendaConsulta/controladores/agentcontroller.php',
        async: false,
        data: {
            opcion: "ctrTrunqInsert" 
           
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
   
    if (retorno == 1) {
       // alert("Se trunco la tabla y se inserto el primer registro");
        
 //consulta_list_menu_perfil();
     
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de ingresar la informacion");
            
    }
} 
 
 
 
 function consulta_list_Actividad_etapa(){
  
  var fecha= $("#fecha").val();
 //var NUM_ORDEN = $("#NUM_ORDEN").val();
//alert("registro prueba registro_"+fecha);
 //var NUM_ORDEN=NUM_ORDEN.length;
    
    
    


  var user= $("#user").val();
 
   var n_user=user.length;
  
  var contador = 0;
  if(n_user==0 ){
      contador=1;
  }else if(n_user>0){
      contador=2;
  }

    
    
    
    
    
    var datas;
 
    $.ajax({
        type: "POST",
  //      url: 'lib/AgendaConsulta/ajax/datatable-tiempo.php',
        url: 'lib/AgendaConsulta/ajax/datatable-3ActividadEtapa.php',
        async: false,
        dataType: 'json',
        data: { 
        fecha:fecha,
        contador:contador,
        user:user 
        
        },
        success: function (retu) {
            datas = retu;
        }
    });
//alert("datas "+datas);
 
   $('#tablet_Act_etapa').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
}


 function consulta_list_Actividad_Consolidado_4(){
  
  var fecha= $("#fecha").val()
 //var NUM_ORDEN = $("#NUM_ORDEN").val();
//alert("registro prueba registro_"+fecha);
 //var NUM_ORDEN=NUM_ORDEN.length;
 
 
 
 
  var user= $("#user").val();
 
   var n_user=user.length;
  
  var contador = 0;
  if(n_user==0 ){
      contador=1;
  }else if(n_user>0){
      contador=2;
  }

 
 
     var datas;
 
    $.ajax({
        type: "POST",
  //      url: 'lib/AgendaConsulta/ajax/datatable-tiempo.php',
        url: 'lib/AgendaConsulta/ajax/datatable-44consolidado.php',
        async: false,
        dataType: 'json',
        data: { 
        fecha:fecha,
        user:user,
        contador:contador
        },
        success: function (retu) {
            datas = retu;
        }
    });
//alert("datas "+datas);
 
 
 
  $('#tablet_consolidado').DataTable({
        data: datas,
        destroy: true,
         "sort": true, 
 "order" : [[1,"desc"]],
 "columnDefs": [ {
        "targets": 0,
        "orderable": false
        } ]
    });
  
  
}





function modificacion_horas_estado_argen(){
   
 
    
  
  
  
      var opcion = confirm("Esta a punto de hacer una modificacion en la hora de referencia, desea continuar?");
    if (opcion == true) {
        mensaje = "Has clickado OK";
	} else {
	    mensaje = "Has clickado Cancelar";
            return false;
	}
  
  
  
  
   var cantidad_horas = $("#cantidad_horas").val();
  
   $("#cont_horas_margen").val(cantidad_horas);
   
    CierraPopupver('modalEditarEstado');
   
   
}
function CierraPopupver(modalmod) {
    $("#"+modalmod).modal('hide');//ocultamos el modal
  $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
    $('.modal-backdrop').remove();//eliminamos el backdrop del modal
}




 function consulta_list_consolidado(){
  //alert("entro consolidado")
  var fecha= $("#fecha").val()
 //var NUM_ORDEN = $("#NUM_ORDEN").val();
//alert("registro prueba registro_"+fecha);
 //var NUM_ORDEN=NUM_ORDEN.length;
     var datas;
 var a="";
 var appent
  appent ='<tbody>';
    $.ajax({
        type: "POST",
  //      url: 'lib/AgendaConsulta/ajax/datatable-tiempo.php',
        url: 'lib/AgendaConsulta/ajax/datatable-4Consolidado.php',
        async: false,
        dataType: 'json',
        data: { 
       // fecha:fecha
         
        },
        	success: function(respuesta){
			 
			 
			 
	  	$.each(respuesta, function(i,item){
		//	 alert(1);
		//	 alert("<br>"+i+" - "+respuesta[i].usuario+" - "+respuesta[i].nombre_usuario );
		//  a =consulta_cantidad_errores(respuesta[i].USU_EJEC);
		 //  a =consulta_cantidad_errores('Docampo');
		//  a =2;
           
            appent +='<tr>';
            appent +='<td>'+respuesta[i].usuario+ '</td>';
             appent +='<td>'+respuesta[i].nombre_usuario+ '</td>';
            appent +='<td>'+respuesta[i].cantidad+ '</td>';
           
            appent +='</tr>';
        }) 
	 appent +='</tbody>'		 
		$("#tablet_consolidado").append(appent);	  
			 
	   $('#tablet_consolidado').DataTable({});
		 

		} 
    });
//alert("datas "+datas);
  
  
  
}
 
 
  
function consulta_list_menu_perfil(){
  
 //var NUM_ORDEN = $("#NUM_ORDEN").val();

 //var NUM_ORDEN=NUM_ORDEN.length;
     var datas;
 
    $.ajax({
        type: "POST",
        url: 'lib/Menu/ajax/datatable-menu-perfil.ajax_1.php',
        async: false,
        dataType: 'json',
        data: { 
        
         
        },
        success: function (retu) {
            datas = retu;
        }
    });

 
   $('#tablet').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
}
