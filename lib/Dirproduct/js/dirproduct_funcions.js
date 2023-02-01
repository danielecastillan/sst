 function validarImagen(valor_adj,valor_ima){
     
    
  //  var uploadFile =  $('#image')[0].files[0];
    var uploadFile =  $('#'+valor_adj)[0].files[0];

    if (!window.FileReader) {
        alert('El navegador no soporta la lectura de archivos');
        return;
    }

    if (!(/\.(jpg|png|gif)$/i).test(uploadFile.name)) {
        alert('El archivo a adjuntar no es una imagen');
    }
    else {
        var img = new Image();
        img.onload = function () {
            
        
       
           
           
           
           
            
            if (this.width.toFixed(0) > 5675 || this.height.toFixed(0) > 5675) {
                alert('La imagen adjuntada debe tener una resolucion inferior a 5675 pixeles');
                $("#"+valor_adj).val("");
               // $(".card-img-top0").attr("src", "../directorio_archivos/default/product.png");
                $("#"+valor_ima).attr("src", "../directorio_archivos/default/product.png");
                return false;
            }/*
            else if (uploadFile.size > 20000)
            {
                alert('El peso de la imagen no puede exceder los 200kb')
            }*/
            else {
               // alert('Imagen correcta :)')                
            }
        };
        img.src = URL.createObjectURL(uploadFile);
    }                 
}

 function eliminar_registro_producto(cod_directorio_product){
    
     
      var opcion = confirm("Esta a punto de eliminar registro de producto, desea continuar ?");
    if (opcion == true) {
  
	} else {
	   return false;
	}
    
   //alert("id_"+id);
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/Dirproduct/controladores/dirprodcontroller.php',
 
        async: false,
        data: {
            opcion: "ctrEliminarProductoDir",
           cod_directorio_product:cod_directorio_product 
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });
  
   console.log(retorno);
   
    if (retorno == 1) {
        alert("El registro se elimino correctamente");
        
 consulta_directorio_productos();
     //   CierraPopup("modalEditarEstado");
        $//("#dialg_crea_TOC").dialog('close');
     //   $("#dialg_crea_TOC").dialog('destroy');
     //   $("#dialg_crea_TOC").html("");
       // ListaTOC();
       //abrir_guias();
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de ingresar la informacion");
            
    }
}

function mostrar_registro_dir_prod(){
	 
	 $("#contenedor_seccion_producto").css('display','block');
         $("#btn_agregar_form_reg").css('display','none');
         $("#btn_coultar_form_reg").css('display','block');
         
         $("#guardar_frm_dir_prod").css('display','block');
	 
	 }
         
         
         
function ocultar_registro_dir_prod(){
    
     $("#contenedor_seccion_producto").css('display','none');
    
      $("#btn_agregar_form_reg").css('display','block');
      $("#btn_coultar_form_reg").css('display','none');
    
    
     $("#guardar_frm_dir_prod").css('display','none');
}   


function consulta_productos_adm(){
   //  "ajax": "lib/Guias/ajax/datatable-guias.ajax.php",
   
   var cmb_parametro_prod = $("#cmb_parametro_prod").val();
   var val_parametro_prod = $("#val_parametro_prod").val();
  //alert("mde_cont este _"+mde_cont);
     var datas;
     $.ajax({
        type: "POST",
        url: 'lib/Dirproduct/ajax/datatable-busc-productos.ajax.php',
        async: false,
        dataType: 'json',
        data: { 
            tipo_busqueda:  cmb_parametro_prod,
            valor_busqueda:val_parametro_prod
        },
        success: function (retu) {
            datas = retu;
        }
    });
 
   $('#tablaListAdmProduc').DataTable({
        data: datas,
        destroy: true
    }); 
}


function consulta_proveedor_adm(){
   //  "ajax": "lib/Guias/ajax/datatable-guias.ajax.php",
   
   var cmb_parametro_provee = $("#cmb_parametro_proveedor").val();
   var val_parametro_provee = $("#val_parametro_proveedor").val();
  //alert("mde_cont este _"+mde_cont);
     var datas;
     $.ajax({
        type: "POST",
        url: 'lib/Dirproduct/ajax/datatable-busc-proveedor.ajax.php',
        async: false,
        dataType: 'json',
        data: { 
            tipo_busqueda:  cmb_parametro_provee,
            valor_busqueda:val_parametro_provee
        },
        success: function (retu) {
            datas = retu;
        }
    });
 
   $('#tablaAdmProveedor').DataTable({
        data: datas,
        destroy: true
    }); 
}



function traspaso_variables_producto(codigo_producto,nombre_producto){
 
  
 
 $('#ProCodiTxbx').val(codigo_producto); 
 $('#cod_codi_producto').val(codigo_producto); 
 $('#ProNombTxBox').val(nombre_producto);  
 
 
 
CierraPopup("modalAdmProducto");
  
}

function CierraPopup(modalmod) {
    $("#"+modalmod).modal('hide');//ocultamos el modal
  $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
    $('.modal-backdrop').remove();//eliminamos el backdrop del modal
}

function traspaso_variables_proveedor(codigo_proveedor,nombre_proveedor){
 
  
 
 $('#CodProveeTbox').val(codigo_proveedor); 
  $('#cod_cod_proveedor').val(codigo_proveedor); 
 $('#NomProveTbx').val(nombre_proveedor);  
 
 
 
CierraPopup("modalAdmProveerdor");
  
}


function consulta_tab_cod_productos(){
     var ProCodiTxbx = $("#ProCodiTxbx").val();
  
           var retorno="";
	 $.ajax({
        type: "POST",
        url: 'lib/Dirproduct/controladores/dirprodcontroller.php',
        data: {
            opcion: 'consulta_tab_cod_producto',
            ProCodiTxbx:ProCodiTxbx
        },
        async: false,
        success: function(data) {
            retorno += data;

        }
    });
    
    if(retorno==0){
        alert("No se encontro producto");
         $("#ProNombTxBox").val("");
         $("#cod_codi_producto").val("");
    }
    else{
        $("#ProNombTxBox").val(retorno);
        $("#cod_codi_producto").val(ProCodiTxbx);
     }
  
   
}


function consulta_tab_cod_proveedor(){
     var CodProveeTbox = $("#CodProveeTbox").val();
  
           var retorno="";
	 $.ajax({
        type: "POST",
        url: 'lib/Dirproduct/controladores/dirprodcontroller.php',
        data: {
            opcion: 'consulta_tab_cod_proveedor',
            CodProveeTbox:CodProveeTbox
        },
        async: false,
        success: function(data) {
            retorno += data;

        }
    });
    
    if(retorno==0){
        alert("No se encontro proveedor");
         $("#NomProveTbx").val("");
         $("#cod_cod_proveedor").val("");
    }
    else{
        $("#NomProveTbx").val(retorno);
        $("#cod_cod_proveedor").val(CodProveeTbox);
     }
  
   
}

function validador_codigos_vasios_iguales(){
    
          var NunCuenFin = $("#NunCuenFin").val(); 
      var cod_cuenta_final = $("#cod_cuenta_final").val(); 
            if(NunCuenFin=='' || NunCuenFin==' '){
           alert("El numero de la cuenta final se encuentra vacio");
           
              $( "#NunCuenFin" ).focus();
              $( "#NunCuenFin" ).css("background-color", "#FFFFCC");
              $("#contenedor_consulta").html('');
           return false;
       }
         if(cod_cuenta_final!=NunCuenFin){
           alert("El numero de la cuenta final no se encuentra vinculado al sistema");
           $( "#NunCuenFin" ).focus();
           $( "#NunCuenFin" ).css("background-color", "#FFFFCC");
           $("#contenedor_consulta").html('');
           
           return false;
       }
       
    
}


function consulta_directorio_productos(){
   //  "ajax": "lib/Guias/ajax/datatable-guias.ajax.php",
   
  // var cmb_parametro_provee = $("#cmb_parametro_proveedor").val();
  // var val_parametro_provee = $("#val_parametro_proveedor").val();
  //alert("mde_cont este _"+mde_cont);
     var datas;
     $.ajax({
        type: "POST",
        url: 'lib/Dirproduct/ajax/datatable-directorio-productos.ajax.php',
        async: false,
        dataType: 'json',
        data: { 
            
        },
        success: function (retu) {
            datas = retu;
        }
    });
 
   $('#tablaDirectorioProductos').DataTable({
        data: datas,
        destroy: true
    }); 
}

function consulta_directorio_productos_update(){
   //  "ajax": "lib/Guias/ajax/datatable-guias.ajax.php",
//   alert("Registro actualizado");
  // var cmb_parametro_provee = $("#cmb_parametro_proveedor").val();
  // var val_parametro_provee = $("#val_parametro_proveedor").val();
  //alert("mde_cont este _"+mde_cont);
     var datas;
     $.ajax({
        type: "POST",
        url: 'lib/Dirproduct/ajax/datatable-directorio-productos.ajax.php',
        async: false,
        dataType: 'json',
        data: { 
            
        },
        success: function (retu) {
            datas = retu;
        }
    });
 
   $('#tablaDirectorioProductos').DataTable({
        data: datas,
        destroy: true
    }); 
}



function consulta_directorio_productos_externo(){
   //  "ajax": "lib/Guias/ajax/datatable-guias.ajax.php",
   
  // var cmb_parametro_provee = $("#cmb_parametro_proveedor").val();
  // var val_parametro_provee = $("#val_parametro_proveedor").val();
  //alert("mde_cont este _"+mde_cont);
     var datas;
     $.ajax({
        type: "POST",
        url: 'lib/Dirproduct/ajax/datatable-directorio-productos-externo.ajax.php',
        async: false,
        dataType: 'json',
        data: { 
            
        },
        success: function (retu) {
            datas = retu;
        }
    });
 
   $('#tablaDirectorioProductos').DataTable({
        data: datas,
        destroy: true
    }); 
}


function consultaIndividualProducto(id_prod_cont){
 //   var id_prod_cont=5;
    	// alert(12312312
        
         var d = new Date(); 
         var dd=d.getTime()
         
         var datos = new FormData();
	datos.append("identificacion_reg_prod", id_prod_cont);
         
        $.ajax({
                url: 'lib/Dirproduct/ajax/productos-individual.ajax.php',
                 method: "POST",
		 data:  datos,
		cache: false,
		contentType: false,
		processData: false,
		 dataType: "json",
		success: function(respuesta){
			// alert("respuesta_"+respuesta);
			// alert("respuestarrrr_"+respuesta["PRO_CODI"]);
                          
                          
			$("#CodigoProductoCon").val(respuesta["PRO_CODI"]);
			$("#NombreProductoCon").val(respuesta["PRO_NOMB"]);
		 	$("#CodigoProverdorCon").val(respuesta["PVD_CODA"]);
			$("#NombreProveedorCon").val(respuesta["PVR_NOCO"]);
			$("#marcaCon").val(respuesta["NOM_MARC"]);
			$("#notaCon").val(respuesta["NOT_DPRO"]);
			//$("#img_produc_consult").attr("src", respuesta["URL_DIMA"]);
			$("#img_produc_consult").attr("src", "../"+respuesta["URL_DIMA"]+"?ver=" + d.getTime());
			 
                        
                     //   ("#img_produc_consult").src="imagen.jpg?ver=" + d.getTime();
                   //    ?ver=" + d.getTime()  

		}

	});
    
    
}


function consultaIndividualProductoEdit(id_prod_cont){
 //   var id_prod_cont=5;
     var d = new Date(); 
     
         var datos = new FormData();
	datos.append("identificacion_reg_prod", id_prod_cont);
         
        $.ajax({
                url: 'lib/Dirproduct/ajax/productos-individual.ajax.php',
                 method: "POST",
		 data:  datos,
		cache: false,
		contentType: false,
		processData: false,
		 dataType: "json",
		success: function(respuesta){
			// alert("respuesta_"+respuesta);
			// alert("respuestarrrr_"+respuesta["PRO_CODI"]);
                          
                          
			$("#CodigoProductoConEdt").val(respuesta["PRO_CODI"]);
			$("#NombreProductoConEdt").val(respuesta["PRO_NOMB"]);
		 	$("#CodigoProverdorConEdt").val(respuesta["PVD_CODA"]);
			$("#NombreProveedorConEdt").val(respuesta["PVR_NOCO"]);
			$("#marcaConEdt").val(respuesta["NOM_MARC"]);
			$("#notaConEdt").val(respuesta["NOT_DPRO"]);
			$("#FechaRegistroConEdt").val(respuesta["FECH_ACTU"]);
			
                     var a= "<div class='btn-group'> <a href ='../"+respuesta["URL_DFIC"]+"' target='_blank'><i class='fa fa-download  fa-2x' aria-hidden='true'></i></a> </div>"; 
  		 
                    //    alert(a);
                        
                        $("#div_ficha_edt").html(a);
                       // alert("DireccionImagen_"+respuesta["URL_DIMA"]);
                       $("#img_produc_consult_edt").attr("src", "../"+respuesta["URL_DIMA"]+"?ver=" + d.getTime());
			
                        
                        
                
 
                        
                        
                       // $("#img_produc_consult_edt").attr("src", respuesta["URL_DIMA"]);
                        $("#hdn_img_produc_pre").val(respuesta["URL_DIMA"]);
                        $("#hdn_fich_produc_pre").val(respuesta["URL_DFIC"]);
                        
                        /*
                        var asd = $("#hdn_img_produc_pre").val();
                        var fgh =$("#hdn_fich_produc_pre").val();
                        alert("asd_"+asd);
                        alert("fgh_"+fgh);*/
                        
                        $("#codigo_dir_pro").val(respuesta["COD_DPRO"]);
			
                         

		}

	});
    
    
}

