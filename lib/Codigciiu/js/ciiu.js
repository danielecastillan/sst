 
 
 function convinacion_list_selec_sucursal(){
   //  "ajax": "lib/Guias/ajax/datatable-guias.ajax.php",
   
   var cod_name_suc = $("#cod_name_suc").val();
  
     var datas;
 
    $.ajax({
        type: "POST",
        url: 'lib/Codigciiu/ajax/datatable-ciiu-sucursal.php',
        async: false,
        dataType: 'json',
        data: { 
            cod_name_suc:  cod_name_suc
        },
        success: function (retu) {
            datas = retu;
        }
    });

    
    
   $('#tablaSucursal').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
}

 
 
 
function traspaso_variables_sucursal(ARB_CONT,ARB_CODI,ARB_NOMB){
 
  
 $('#HD_ARB_CONT').val(ARB_CONT); 
 $('#CodigoSucursal').val(ARB_CODI); 
 $('#NombreSucursal').val(ARB_NOMB);  
 
CierraPopup("modalCambioSucursal");
  
}
 
  
function traspaso_variables_ciiu(codigociiu,nombreciiu){
 
  
 $('#codigociiu').val(codigociiu); 
 $('#nombreciiu').val(nombreciiu);  
 
CierraPopup("modalCambiociiu");
  
}
 
   
function traspaso_variables_tesoreria(codigotesoreria,nombretesoreria){
 
  
 $('#codigotesoreria').val(codigotesoreria); 
 $('#nombretesoreria').val(nombretesoreria);  
 
CierraPopup("modalCambiotesoreria");
  
}
 
  
 function convinacion_list_selec_ciiu(){
   //  "ajax": "lib/Guias/ajax/datatable-guias.ajax.php",
   
   var cod_ciiu = $("#cod_ciiu").val();
  
     var datas;
 
    $.ajax({
        type: "POST",
        url: 'lib/Codigciiu/ajax/datatable-ciiu-ciiu.php',
        async: false,
        dataType: 'json',
        data: { 
            cod_ciiu:  cod_ciiu
        },
        success: function (retu) {
            datas = retu;
        }
    });

    
    
   $('#tablaciiu').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
}
 
   function convinacion_list_selec_tesoreria(){
   //  "ajax": "lib/Guias/ajax/datatable-guias.ajax.php",
   
   var var_tesoreria = $("#cod_tesoreria").val();
  
     var datas;
 
    $.ajax({
        type: "POST",
        url: 'lib/Codigciiu/ajax/datatable-ciiu-tesoreria.php',
        async: false,
        dataType: 'json',
        data: { 
            var_tesoreria:  var_tesoreria
        },
        success: function (retu) {
            datas = retu;
        }
    });

    
    
   $('#tablatesoreria').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
}
 
 
 
    function list_selec_compuesta_general_ciiu(){
   //  "ajax": "lib/Guias/ajax/datatable-guias.ajax.php",
   
   
  
     var datas;
 
    $.ajax({
        type: "POST",
        url: 'lib/Codigciiu/ajax/datatable-ciiu-general-compuesto.php',
        async: false,
        dataType: 'json',
        data: { 
            
        },
        success: function (retu) {
            datas = retu;
        }
    });

    
   
   $('#tabla_compuesta_ciiu').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
}
   function list_sl_compuesta_general_ciiu_basica(){
   //  "ajax": "lib/Guias/ajax/datatable-guias.ajax.php",
   
   
  
     var datas;
 
    $.ajax({
        type: "POST",
        url: 'lib/Codigciiu/ajax/datatable-ciiu-general-compuesto-basica.php',
        async: false,
        dataType: 'json',
        data: { 
            
        },
        success: function (retu) {
            datas = retu;
        }
    });

   // alert("datas "+datas);
   
   $('#tabla_compuesta_ciiu').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
}
 
  function eliminar_registro_com_ciiu(COD_RCIIU){
     
    var opcion = confirm("Esta a punto de eliminar este registro, desea continuar?");
    if (opcion == true) {
        mensaje = "Has clickado OK";
	} else {
	    mensaje = "Has clickado Cancelar";
            return false;
	}
 
   
    
  //  alert("id_perfil "+id_perfil);
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/Codigciiu/controladores/ciiucontroller.php',
        async: false,
        data: {
            opcion: "ctrEliminarCiiu",
           COD_RCIIU:COD_RCIIU 
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
 //  alert("retorno "+retorno);
    if (retorno == 1) {
        alert("El registro se elimino correctamente");
        
conf_ciiu();
     //   CierraPopup("modalEditarEstado");
        $//("#dialg_crea_TOC").dialog('close');
     //   $("#dialg_crea_TOC").dialog('destroy');
     //   $("#dialg_crea_TOC").html("");
       // ListaTOC();
       //abrir_guias();
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de ingresar la informacion");
            
    }
    else if (retorno == 3) {
        alert("El registro no pudo ser eliminado, elmine primero la relacion que tiene con el modulo de menu perfil");
            
    }
     
} 
 
 function edicion_registro_ciiu(COD_RCIIU,ARB_CONT,ARB_CODI,ARB_NOMB,COD_CIIU,nombre_codigo,TARIFA,CODIGO_ALCALDIA,DTS_CODI,DST_NOMB){
 
       
    // $('#contenedor_div_principal').html("");
          $.ajax({
            type: "POST",
               url: "lib/Codigciiu/vistas/editar_ciiu.php",
             data: { 
            COD_RCIIU: COD_RCIIU 
        },
            async: false,
            success: function(response) {
                $('#contenedor_div_principal').html(response);
            }
        });
   
   
 
 
   
 $('#COD_RCIIU').val(COD_RCIIU); 
 $('#HD_ARB_CONT').val(ARB_CONT); 
 $('#CodigoSucursal').val(ARB_CODI); 
 $('#NombreSucursal').val(ARB_NOMB); 
$('#codigociiu').val(COD_CIIU); 
$("#nombreciiu").val(nombre_codigo); 
$("#tarifa").val(TARIFA); 
$("#codigoalcaldia").val(CODIGO_ALCALDIA); 
$("#codigotesoreria").val(DTS_CODI); 
$("#nombretesoreria").val(DST_NOMB); 

        
        
        
        
}

 
 
 
  function registro_r_ciiu_det(){
    
    
    
    
    
    var ARB_CONT= $("#HD_ARB_CONT").val();
    var ARB_CODI= $("#CodigoSucursal").val();
    var COD_CIIU= $("#codigociiu").val();
    var TARIFA= $("#tarifa").val();
    var CODIGO_ALCALDIA= $("#codigoalcaldia").val();
    var DTS_CODI= $("#codigotesoreria").val();
    
    
              
    
    
 
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/Codigciiu/controladores/ciiucontroller.php',
        async: false,
        data: {
            opcion: "ctrRegistrarconfigciiu", 
            ARB_CONT:ARB_CONT,
            ARB_CODI:ARB_CODI,
            COD_CIIU:COD_CIIU,
            TARIFA:TARIFA,
            CODIGO_ALCALDIA:CODIGO_ALCALDIA,
            DTS_CODI:DTS_CODI
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
   
    if (retorno == 1) {
        alert("Se realizo correctamente la modificacion");
 
 conf_ciiu();
 
     //   CierraPopup("modalEditarEstado");
         //("#dialg_crea_TOC").dialog('close');
     //   $("#dialg_crea_TOC").dialog('destroy');
     //   $("#dialg_crea_TOC").html("");
       // ListaTOC();
       //abrir_guias();
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de ingresar la informacion");
            
    }
} 
 
 
  function edicion_r_ciiu_det(){
    
    
    
    
    var COD_RCIIU =$("#COD_RCIIU").val();
    var ARB_CONT= $("#HD_ARB_CONT").val();
    var ARB_CODI= $("#CodigoSucursal").val();
    var COD_CIIU= $("#codigociiu").val();
    var TARIFA= $("#tarifa").val();
    var CODIGO_ALCALDIA= $("#codigoalcaldia").val();
    var DTS_CODI= $("#codigotesoreria").val();
    
    
              
    
    
 
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/Codigciiu/controladores/ciiucontroller.php',
        async: false,
        data: {
            opcion: "ctrEditarconfigciiu", 
            COD_RCIIU:COD_RCIIU,
            ARB_CONT:ARB_CONT,
            ARB_CODI:ARB_CODI,
            COD_CIIU:COD_CIIU,
            TARIFA:TARIFA,
            CODIGO_ALCALDIA:CODIGO_ALCALDIA,
            DTS_CODI:DTS_CODI
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
   
    if (retorno == 1) {
        alert("Se realizo la modificacion correctamente");
 
 conf_ciiu();
 
     //   CierraPopup("modalEditarEstado");
         //("#dialg_crea_TOC").dialog('close');
     //   $("#dialg_crea_TOC").dialog('destroy');
     //   $("#dialg_crea_TOC").html("");
       // ListaTOC();
       //abrir_guias();
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de ingresar la informacion");
            
    }
} 
 
 
 
 