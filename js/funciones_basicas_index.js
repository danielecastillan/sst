/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function llamado_directorio_producto_externo(){
  //alert("Llmado directorio productos");
            $.ajax({
            type: "POST",
            url: "lib/Dirproduct/vistas/directorio_productos_externo.php",
            success: function(response) {
                $('#contenedor_div_principal').html(response);
            }
        });
}

function llamado_menu_general_det(id_perfil){
    
 
   
    var retorno;
  $.ajax({
      type: "POST",
     url: 'lib/Menu/controladores/menucontroller.php',
      async: false,
      data: {
          opcion: "ctrMuestraMenuDinamico",
          id_perfil:1
        
     
      },
      success: function (retu) {
          retorno = retu;
      }

  });
alert(retorno);
  $("#div_con_menu").html(retorno)
   
}


function llamado_usuarios_menu(){
  //alert("Llmado directorio productos");
            $.ajax({
            type: "POST",
            url: "lib/Usuario/vistas/registro_the_usuario.php",
            success: function(response) {
                $('#contenedor_div_principal').html(response);
            }
        });
}



function llamado_directorio_producto(){
  //alert("Llmado directorio productos");
            $.ajax({
            type: "POST",
            url: "lib/Dirproduct/vistas/directorio_productos.php",
            success: function(response) {
                $('#contenedor_div_principal').html(response);
            }
        });
}


function llamado_personas(){
  
            $.ajax({
            type: "POST",
            url: "lib/Personas/vistas/personas.php",
            success: function(response) {
                $('#contenedor_div_principal').html(response);
            }
        });
}




function consultas_lotes_productos(){
 
            $.ajax({
            type: "POST",
            url: "lib/productos/vistas/consulta_productos.php",
            success: function(response) {
                $('#contenedor_div_principal').html(" ");
                $('#contenedor_div_principal').html(response);
            }
        });
}



function consultas_link_facturas_anticipos(){
 
            $.ajax({
            type: "POST",
            url: "lib/factanti/vistas/consulta_fact_anticipos.php",
            success: function(response) {
                $('#contenedor_div_principal').html(" ");
                $('#contenedor_div_principal').html(response);
            }
        });
}


function consultas_facturas_retornos(){
 
            $.ajax({
            type: "POST",
            url: "lib/factanti/vistas/consulta_fact_retornos.php",
            success: function(response) {
                $('#contenedor_div_principal').html(" ");
                $('#contenedor_div_principal').html(response);
            }
        });
}





function consultas_pedidos(){
		
			
		  $.ajax({
            type: "POST",
            url: "lib/productos/vistas/consulta_pedidos.php",
            success: function(response) {
                $('#contenedor_div_principal').html(" ");
                $('#contenedor_div_principal').html(response);
            }
        });
	}

function consultas_pedidos_pvt(){
		
			
		  $.ajax({
            type: "POST",
            url: "lib/productos/vistas/consulta_pedidos_pvt.php",
            success: function(response) {
                $('#contenedor_div_principal').html(" ");
                $('#contenedor_div_principal').html(response);
            }
        });
	}



function consultadddd(){
    alert("entro a consulta de guia detalle dddddd");
    
}


function ElimRegistroPersonapro(idProducto,nombre_arch,imagen){
    
    
  
     
	  var retorno;
    $.ajax({
        type: "POST",
        url: 'controladores/productos.controlador.full.php',
        async: false,
        data: {
            valor_control: "delete",
            idProducto: idProducto,
            nombre_arch:nombre_arch,
            imagen:imagen
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });
  //alert("retorno_"+retorno);

    //console.log(retorno);

    if (retorno == 1) {
        alert("Se Elimino el registro");
        
       llamado_personas();
    } else if (retorno == 2) {
        alert("Ocurrio un error al tratar de ingresar la informacion");
    }
    else{
        alert("El registro fue eliminado correctamente");
         llamado_personas();
    }
 
	 
	
   
}