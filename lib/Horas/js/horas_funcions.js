function  valida_consulta(){
    
    var filtro_busqueda = $("#filtro_busqueda").val();
    
    if(filtro_busqueda==1){
        consulta_list_horas();
    }
    else if(filtro_busqueda==2){
        consulta_numero_om();
    }
}
  
function  consulta_numero_om(){
    NUM_ORDEN = $("#NUM_ORDEN").val();
     var datas;
 
    $.ajax({
        type: "POST",
        url: 'lib/Horas/ajax/datatable-horas.ajax_2.php',
        async: false,
        dataType: 'json',
        data: { 
        
            NUM_ORDEN:  NUM_ORDEN 
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
  
function consulta_list_horas(){
   
 
 
  var contador = 0;
  
  
  var HOR_NUME = $("#HOR_NUME").val();
  var nombre_empleado = $("#nombre_empleado").val();
 
 //var NUM_ORDEN = $("#NUM_ORDEN").val();
  
 
  var n_HOR_NUME=HOR_NUME.length;
  var n_nombre_empleado=nombre_empleado.length;
 
 //var NUM_ORDEN=NUM_ORDEN.length;
    
  if(n_HOR_NUME>0 && n_nombre_empleado==0  ){
      contador=1
  }else if(n_HOR_NUME>0 && n_nombre_empleado>0  ){
      contador=2
  }
  else if(n_HOR_NUME==0 && n_nombre_empleado>0  ){
      contador=3
  } 
   
   
    
  
  
       var datas;
 
    $.ajax({
        type: "POST",
        url: 'lib/Horas/ajax/datatable-horas.ajax_1.php',
        async: false,
        dataType: 'json',
        data: { 
        
            cont_case:  contador,
            HOR_NUME:HOR_NUME,
            nombre_empleado:nombre_empleado
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



function ActualizarEstadoHora()
{
  
    var mensaje;
    var opcion = confirm("Esta a punto de hacer un cambio de estado, desea continuar?");
    if (opcion == true) {
        mensaje = "Has clickado OK";
	} else {
	    mensaje = "Has clickado Cancelar";
            return false;
	}
 
   
  
 var hor_esta= $("#estado_hora").val();
 var id_hord_cont= $("#id_hord_cont").val();
 
 /*
  alert("hor_esta_"+hor_esta);
  alert("id_hord_cont_"+id_hord_cont);
  */
 
 
 
 
 
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/Horas/controladores/horascontroller.php',
        async: false,
        data: {
            opcion: "ctrActualizarEstadoAud",
           hor_cont:id_hord_cont,
           hor_esta:hor_esta
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

 

   console.log(retorno);
 //alert("retorno_"+retorno);
    if (retorno == 1) {
        alert("Se realizo correctamente la modificacion");
        
        valida_consulta();
        CierraPopup("modalEditarEstado");
        $//("#dialg_crea_TOC").dialog('close');
     //   $("#dialg_crea_TOC").dialog('destroy');
     //   $("#dialg_crea_TOC").html("");
       // ListaTOC();
       //abrir_guias();
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de ingresar la informacion");
            
    }

}

function modal_edicion_horas(hort_cont){
    
    $("#id_hord_cont").val(hort_cont)
    
    var id =$("#id_hord_cont").val()
    
   // alert("id "+id);
}


function consulta_de_personal() {
    var retorno = "";
    //retorno += '<option value="'+cod_depto+'">'+nom_depto+'</option> ';
// alert("entrada")
    $.ajax({
        type: "POST",
        url: "lib/Horas/controladores/horascontroller.php",
        data: {
            opcion: 'consulta_de_personal'
        },
        async: false,
        success: function(data) {
            retorno += data;

        }
    });
     
 //   alert("retorno_"+retorno)  
    $("#nombre_empleado").append(retorno);
//$("#departamento_contacto").append(retorno);

}
function filtros_busqueda_horas(){
    var filtro_busqueda=$("#filtro_busqueda").val();
    if(filtro_busqueda==1){
        $("#numero_registrohoras_div").css("display","block");
        $("#numero_registroempleado_div").css("display","block"); 
        
        $("#num_orden_div").css("display","none"); 
    }
    else if(filtro_busqueda==2){
        $("#num_orden_div").css("display","block"); 
        $("#numero_registrohoras_div").css("display","none");
        $("#numero_registroempleado_div").css("display","none"); 
    }
    
}