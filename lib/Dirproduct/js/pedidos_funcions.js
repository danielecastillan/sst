 function consulta_central(){
     
   consulta_pedidos_i();
   consulta_pedidos_facturados_f();
     
 }
 
  function consulta_central_PTV(id_punto_venta){
     
   consulta_pedidos_i_PVT(id_punto_venta);
   consulta_pedidos_facturados_f_PTV(id_punto_venta);
     
 }
 function ingreso(){
     alert("ingreso");
 }
 function humanizeNumber() {
     var num= $("#productos_seleccionados").val();
     
	    if (!num || num == 'NaN') return '-';
    if (num == 'Infinity') return '&#x221e;';
    num = num.toString().replace(/\$|\,/g, '');
    if (isNaN(num))
        num = "0";
    sign = (num == (num = Math.abs(num)));
    num = Math.floor(num * 100 + 0.50000000001);
    cents = num % 100;
    num = Math.floor(num / 100).toString();
    if (cents < 10)
        cents = "0" + cents;
    for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3) ; i++)
        num = num.substring(0, num.length - (4 * i + 3)) + '.' + num.substring(num.length - (4 * i + 3));
   // var a= (((sign) ? '' : '-') + num + ',' + cents);
    var a= (((sign) ? '' : '-') + num );
    alert("a_"+a);
}
 
 
  function conversion_cifras_numeros(valor_etiqueta,codigo_etiqueta) {
     var num= $("#"+valor_etiqueta+codigo_etiqueta).val();
     
	    if (!num || num == 'NaN') return '-';
    if (num == 'Infinity') return '&#x221e;';
    num = num.toString().replace(/\$|\,/g, '');
    if (isNaN(num))
        num = "0";
    sign = (num == (num = Math.abs(num)));
    num = Math.floor(num * 100 + 0.50000000001);
    cents = num % 100;
    num = Math.floor(num / 100).toString();
    if (cents < 10)
        cents = "0" + cents;
    for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3) ; i++)
        num = num.substring(0, num.length - (4 * i + 3)) + '.' + num.substring(num.length - (4 * i + 3));
   // var a= (((sign) ? '' : '-') + num + ',' + cents);
    var a= (((sign) ? '' : '-') + num );
   // alert("a_"+a);
    
    $("#"+valor_etiqueta+codigo_etiqueta).val(a);
    
    
}
 
 
 function conversion_cifras_numeros_scont(valor_etiqueta) {
     var num= $("#"+valor_etiqueta).val();
     
	    if (!num || num == 'NaN') return '-';
    if (num == 'Infinity') return '&#x221e;';
    num = num.toString().replace(/\$|\,/g, '');
    if (isNaN(num))
        num = "0";
    sign = (num == (num = Math.abs(num)));
    num = Math.floor(num * 100 + 0.50000000001);
    cents = num % 100;
    num = Math.floor(num / 100).toString();
    if (cents < 10)
        cents = "0" + cents;
    for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3) ; i++)
        num = num.substring(0, num.length - (4 * i + 3)) + '.' + num.substring(num.length - (4 * i + 3));
   // var a= (((sign) ? '' : '-') + num + ',' + cents);
    var a= (((sign) ? '' : '-') + num );
   // alert("a_"+a);
    
    $("#"+valor_etiqueta).val(a);
    
    
}
 
 
 
 
 
 function dinamicnumber(prd_cont) {
  //   var num= $("#productos_seleccionados").val();
     
     var num=  $('#valor_por_unidad_'+prd_cont).val();
     
	    if (!num || num == 'NaN') return '-';
    if (num == 'Infinity') return '&#x221e;';
    num = num.toString().replace(/\$|\,/g, '');
    if (isNaN(num))
        num = "0";
    sign = (num == (num = Math.abs(num)));
    num = Math.floor(num * 100 + 0.50000000001);
    cents = num % 100;
    num = Math.floor(num / 100).toString();
    if (cents < 10)
        cents = "0" + cents;
    for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3) ; i++)
        num = num.substring(0, num.length - (4 * i + 3)) + '.' + num.substring(num.length - (4 * i + 3));
   // var a= (((sign) ? '' : '-') + num + ',' + cents);
    var a= (((sign) ? '' : '-') + num );
    alert("a_"+a);
     $('#valor_por_unidad_'+prd_cont).val(a);
}
 
 function consulta_pedidos_facturados_f(){
     
          var datas;
 
    $.ajax({
        type: "POST",
  //      url: 'lib/AgendaConsulta/ajax/datatable-tiempo.php',
        url: 'lib/productos/ajax/datatable-pedidos_fac.php',
        async: false,
        dataType: 'json',
        data: { 
      
         
        },
        success: function (retu) {
            datas = retu;
        }
    });
 //alert("datas "+datas);
 
   $('#tabla_pedidos_fact').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
     
 }
  function consulta_pedidos_facturados_f_PTV(id_punto_venta){
     
          var datas;
 
    $.ajax({
        type: "POST",
  //      url: 'lib/AgendaConsulta/ajax/datatable-tiempo.php',
        url: 'lib/productos/ajax/datatable-pedidos_fac_ptv.php',
        async: false,
        dataType: 'json',
        data: { 
      id_punto_venta:id_punto_venta
         
        },
        success: function (retu) {
            datas = retu;
        }
    });
 //alert("datas "+datas);
 
   $('#tabla_pedidos_fact').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
     
 }
  function consulta_pedidos_i_PVT(id_punto_venta){
 
  //alert("consulta");
 //var NUM_ORDEN = $("#NUM_ORDEN").val();
//alert("registro prueba registro_"+fecha);
 //var NUM_ORDEN=NUM_ORDEN.length;
     var datas;
 
    $.ajax({
        type: "POST",
  //      url: 'lib/AgendaConsulta/ajax/datatable-tiempo.php',
        url: 'lib/productos/ajax/datatable-pedidos_i_ptv.php',
        async: false,
        dataType: 'json',
        data: { 
      id_punto_venta:id_punto_venta
         
        },
        success: function (retu) {
            datas = retu;
        }
    });
 
 
   $('#tablet_consolidado_i').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
}
 
 
 function consulta_pedidos_i(){
 
  //alert("consulta");
 //var NUM_ORDEN = $("#NUM_ORDEN").val();
//alert("registro prueba registro_"+fecha);
 //var NUM_ORDEN=NUM_ORDEN.length;
     var datas;
 
    $.ajax({
        type: "POST",
  //      url: 'lib/AgendaConsulta/ajax/datatable-tiempo.php',
        url: 'lib/productos/ajax/datatable-pedidos_i.php',
        async: false,
        dataType: 'json',
        data: { 
      
         
        },
        success: function (retu) {
            datas = retu;
        }
    });
 //alert("datas "+datas);
 
   $('#tablet_consolidado_i').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
}
 
 
 function facturaformon(){
     $("#fac_on").css("display","none");
       $("#fac_off").css("display","block");
        $("#bloque_formulario_factura").css("display","block");
        $("#bot_fac_on").css("display","block");
 }
   function facturaformoff(){
     $("#fac_on").css("display","block");
     $("#fac_off").css("display","none");
         $("#bloque_formulario_factura").css("display","none");
          $("#bot_fac_on").css("display","none");
  }
  

  
  function consulta_encabezado_detalle_pedido(tra_cont){
   
   //var tra_cont = $("#tra_cont").val();
 //  var tra_cont = 5;
   
     var datas;
 var a="";
 var appent
 
    $.ajax({
        type: "POST",
  
        url: 'lib/productos/ajax/consulta-individual-pedidos-ajax.php',
        async: false,
        dataType: 'json',
        data: { 
       // fecha:fecha
         tra_cont:tra_cont
        },
        	success: function(respuesta){
             //$("#codico_persona_pk").val(respuesta["nombres"]);
            
          //     $("#cedula_cliente").val(respuesta["cedula"]);
           //   $("#cod_cliente").val();
           //  alert("NOMBRE_CLIENTE_"+respuesta["NOMBRE_CLIENTE"]);
            
            
            
            
            $("#numero_pedido").val(respuesta["TRA_CONT"]);
            $("#fecha_pedido").val(respuesta["TRA_FECH"]);
            $("#valor_pedido").val(respuesta["TRA_VTOT"]);
            $("#identificacion_cliente").val(respuesta["CLI_CODA"]);
            $("#nombre_cliente").val(respuesta["NOMBRE_CLIENTE"]);
            $("#identificacion_vendedor").val(respuesta["VEN_CODU"]);
            $("#nombre_vendedor").val(respuesta["NOMBRE_VENDEDOR"]);
            
            
            $("#forma_pago").val(respuesta["TFO_NOMB"]);
            $("#forma_entrega").val(respuesta["TRA_FENT"]);
            $("#notas").val(respuesta["TFO_NOTA"]);
            $("#punto_venta_pedido").val(respuesta["PTV_NOMB_PEDIDO"]);
            
            
            if(respuesta["TRA_FELE"]=='SI'){
                 $("#check_fac_electronica").prop("checked", true);  
                
            } else {  
             $("#check_fac_electronica").prop("checked", false);  
             }
            //  $("#tipo_identificacion").val(respuesta["tipo_identificacion"]);
             /*
              $("#digvercliente").val(respuesta["digito_verificacion"]);
              $("#nombrescliente").val(respuesta["nombres"]);
              $("#apellidocliente").val(respuesta["apellido"]);
              $("#direccioncliente").val(respuesta["direccion"]);
              $("#telefonocliente").val(respuesta["telefono"]);
              $("#correocliente").val(respuesta["correo"]);
               */
         
consulta_detalle_the_pedidos(respuesta["TRA_CONT"]);
		} 
    });
    
    conversion_cifras_numeros_scont('valor_pedido');
    
  }
  
  function consulta_encabezado_detalle_pedido_facturados(tra_cont){
   
   //var tra_cont = $("#tra_cont").val();
 //  var tra_cont = 5;
   
     var datas;
 var a="";
 var appent
 
    $.ajax({
        type: "POST",
  
        url: 'lib/productos/ajax/consulta-individual-pedidos-ajax.php',
        async: false,
        dataType: 'json',
        data: { 
       // fecha:fecha
         tra_cont:tra_cont
        },
        	success: function(respuesta){
             //$("#codico_persona_pk").val(respuesta["nombres"]);
            
          //     $("#cedula_cliente").val(respuesta["cedula"]);
           //   $("#cod_cliente").val();
           //  alert("NOMBRE_CLIENTE_"+respuesta["NOMBRE_CLIENTE"]);
            
            
            
            
            $("#numero_pedido_fac").val(respuesta["TRA_CONT"]);
            $("#fecha_pedido_fac").val(respuesta["TRA_FECH"]);
            $("#valor_pedido_fac").val(respuesta["TRA_VTOT"]);
            $("#identificacion_cliente_fac").val(respuesta["CLI_CODA"]);
            $("#nombre_cliente_fac").val(respuesta["NOMBRE_CLIENTE"]);
            $("#identificacion_vendedor_fac").val(respuesta["VEN_CODU"]);
            $("#nombre_vendedor_fac").val(respuesta["NOMBRE_VENDEDOR"]);
            
            
            
            $("#punto_venta_fac").val(respuesta["PTV_CONT"]);
            $("#prefijo_fac").val(respuesta["TRA_PREF"]);
            $("#numero_factura_fac").val(respuesta["TRA_DIAN"]);
            
            
            $("#forma_pago_fac").val(respuesta["TFO_NOMB"]);
            $("#forma_entrega_fac").val(respuesta["TRA_FENT"]);
            $("#notas_facturadas").val(respuesta["TFO_NOTA"]);
            
            $("#punto_venta_pedido_fac").val(respuesta["PTV_NOMB_PEDIDO"]);
            if(respuesta["TRA_FELE"]=='SI'){
                 $("#check_fac_electronica_fac").prop("checked", true);  
                
            } else {  
             $("#check_fac_electronica_fac").prop("checked", false);  
             }
            
            
            //  $("#tipo_identificacion").val(respuesta["tipo_identificacion"]);
             /*
              $("#digvercliente").val(respuesta["digito_verificacion"]);
              $("#nombrescliente").val(respuesta["nombres"]);
              $("#apellidocliente").val(respuesta["apellido"]);
              $("#direccioncliente").val(respuesta["direccion"]);
              $("#telefonocliente").val(respuesta["telefono"]);
              $("#correocliente").val(respuesta["correo"]);
               */
         
consulta_detalle_the_pedidos_fac(respuesta["TRA_CONT"]);
		} 
    });
    
    conversion_cifras_numeros_scont('valor_pedido_fac');
  }
    function consulta_detalle_the_pedidos_fac(tra_cont){
 
  //alert("tra_cont_"+tra_cont);
 //var NUM_ORDEN = $("#NUM_ORDEN").val();
//alert("registro prueba registro_"+fecha);
 //var NUM_ORDEN=NUM_ORDEN.length;
     var datas;
 
    $.ajax({
        type: "POST",
  //      url: 'lib/AgendaConsulta/ajax/datatable-tiempo.php',
        url: 'lib/productos/ajax/datatable-detalle-pedidos_iind.php',
        async: false,
        dataType: 'json',
        data: { 
      tra_cont:tra_cont
         
        },
        success: function (retu) {
            datas = retu;
        }
    });
// alert("datas DETALLE "+datas);
 
   $('#tabladetalle_fac').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
} 
   function consulta_detalle_the_pedidos(tra_cont){
 
  //alert("tra_cont_"+tra_cont);
 //var NUM_ORDEN = $("#NUM_ORDEN").val();
//alert("registro prueba registro_"+fecha);
 //var NUM_ORDEN=NUM_ORDEN.length;
     var datas;
 
    $.ajax({
        type: "POST",
  //      url: 'lib/AgendaConsulta/ajax/datatable-tiempo.php',
        url: 'lib/productos/ajax/datatable-detalle-pedidos_iind.php',
        async: false,
        dataType: 'json',
        data: { 
      tra_cont:tra_cont
         
        },
        success: function (retu) {
            datas = retu;
        }
    });
// alert("datas DETALLE "+datas);
 
   $('#tabladetalle').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
}
 function consulta_punto_venta_pedido() {
    var retorno = "";
    //retorno += '<option value="'+cod_depto+'">'+nom_depto+'</option> ';
 
    $.ajax({
        type: "POST",
        url: "lib/productos/controladores/prodcontroller.php",
        data: {
            opcion: 'consulta_punto_de_venta'
        },
        async: false,
        success: function(data) {
            retorno += data;

        }
    });
   //  alert("retorno PUNTO DE VENTA_"+retorno);
    $("#punto_venta").append(retorno);
//$("#departamento_contacto").append(retorno);

}


function consulta_nombre_punto_venta(id_punto_venta) {
    var retorno = "";
    //retorno += '<option value="'+cod_depto+'">'+nom_depto+'</option> ';
 
    $.ajax({
        type: "POST",
        url: "lib/productos/controladores/prodcontroller.php",
        data: {
            opcion: 'consulta_nombre_punto_de_venta',
            id_punto_venta:id_punto_venta
        },
        async: false,
        success: function(data) {
            retorno += data;

        }
    });
   //  alert("retorno PUNTO DE VENTA_"+retorno);
    $("#div_pnt_vent").html(retorno);
//$("#departamento_contacto").append(retorno);

}



 function consulta_punto_venta_pedido_facturado() {
    var retorno = "";
    //retorno += '<option value="'+cod_depto+'">'+nom_depto+'</option> ';
 
    $.ajax({
        type: "POST",
        url: "lib/productos/controladores/prodcontroller.php",
        data: {
            opcion: 'consulta_punto_de_venta'
        },
        async: false,
        success: function(data) {
            retorno += data;

        }
    });
   //  alert("retorno PUNTO DE VENTA_"+retorno);
    $("#punto_venta_fac").append(retorno);
//$("#departamento_contacto").append(retorno);

}
 function consulta_punto_venta_global(txbz_punto_venta) {
    var retorno = "";
    //retorno += '<option value="'+cod_depto+'">'+nom_depto+'</option> ';
 
    $.ajax({
        type: "POST",
        url: "lib/productos/controladores/prodcontroller.php",
        data: {
            opcion: 'consulta_punto_de_venta'
        },
        async: false,
        success: function(data) {
            retorno += data;

        }
    });
   //  alert("retorno PUNTO DE VENTA_"+retorno);
    $("#"+txbz_punto_venta).append(retorno);
//$("#departamento_contacto").append(retorno);

}

 function modificar_adicion_factura_pedido(){
    
    
    
    
  var numero_pedido=  $("#numero_pedido").val();
  var punto_venta=  $("#punto_venta").val();
  var prefijo=  $("#prefijo").val();
  var numero_factura=  $("#numero_factura").val();
    
    
    if(punto_venta=="" || prefijo=="" || numero_factura==""){
        alert("Favor especificar los datos de factura");
        return false;
    }
 
    
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/productos/controladores/prodcontroller.php',
        async: false,
        data: {
            opcion: "ctrUpdateFacturaEncabezadoPedido",
            
          numero_pedido:numero_pedido,
          punto_venta:punto_venta,
          prefijo:prefijo,
          numero_factura:numero_factura
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
    //alert("retorno encabezado _"+retorno);
    if (retorno == 1) {
        alert("Se realizo correctamente la adicion de factura");
        
        $("#punto_venta").val("");
        $("#prefijo").val("");
        $("#numero_factura").val("");
        
          CierraPopup("modaladescripcionpedido");
        consulta_central();
   
    } else if (retorno == 0) {
       alert("Ocurrio un error al tratar de ingresar la informacion");
            
    }
    
  
 
 
     
    
   
} 
 function modificar_adicion_factura_pedido_pvt(id_punto_venta){
    
    
    
    
  var numero_pedido=  $("#numero_pedido").val();
  var punto_venta=  $("#punto_venta").val();
  var prefijo=  $("#prefijo").val();
  var numero_factura=  $("#numero_factura").val();
    
    
    if(punto_venta=="" || prefijo=="" || numero_factura==""){
        alert("Favor especificar los datos de factura");
        return false;
    }
 
    
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/productos/controladores/prodcontroller.php',
        async: false,
        data: {
            opcion: "ctrUpdateFacturaEncabezadoPedido",
            
          numero_pedido:numero_pedido,
          punto_venta:punto_venta,
          prefijo:prefijo,
          numero_factura:numero_factura
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
    //alert("retorno encabezado _"+retorno);
    if (retorno == 1) {
        alert("Se realizo correctamente la adicion de factura");
        
        $("#punto_venta").val("");
        $("#prefijo").val("");
        $("#numero_factura").val("");
        
          CierraPopup("modaladescripcionpedido");
        consulta_central_PTV(id_punto_venta);
   
    } else if (retorno == 0) {
       alert("Ocurrio un error al tratar de ingresar la informacion");
            
    }
    
  
 
 
     
    
   
} 
function generar_pdf_factura_tiket(){
   var  tra_cont_vari= $("#numero_pedido_fac").val();
   // alert("tra_cont_vari_"+tra_cont_vari);
//var codigoVenta= 6;
	window.open("extensiones/tcpdf/pdf/factura_tic_contac.php?tra_cont_vari="+tra_cont_vari, "_blank"); 


}

function generar_pdf_factura_tiket_ped(){
   var  tra_cont_vari= $("#numero_pedido").val();
   // alert("tra_cont_vari_"+tra_cont_vari);
//var codigoVenta= 6;
	window.open("extensiones/tcpdf/pdf/factura_tic_contac-pedido.php?tra_cont_vari="+tra_cont_vari, "_blank"); 


}

function generar_pdf_factura_factura(){
   var  tra_cont_vari= $("#numero_pedido_fac").val();
   // alert("tra_cont_vari_"+tra_cont_vari);
//var codigoVenta= 6;
	window.open("extensiones/tcpdf/pdf/factura_compl_formt.php?tra_cont_vari="+tra_cont_vari, "_blank"); 


}
function generar_pdf_factura_factura_ped(){
   var  tra_cont_vari= $("#numero_pedido").val();
   // alert("tra_cont_vari_"+tra_cont_vari);
//var codigoVenta= 6;
	window.open("extensiones/tcpdf/pdf/factura_compl_formt-pedido.php?tra_cont_vari="+tra_cont_vari, "_blank"); 


}