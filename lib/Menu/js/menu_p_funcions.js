 
 

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

function registro_menu_basico(){
    
    
   
    
    var num_nombre = $("#num_nombre").val();
    var id_menu_padre = $("#id_menu_padre").val();
    
    var des_nom_fun = $("#des_nom_fun").val();
    
 
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/Menu/controladores/menucontroller.php',
        async: false,
        data: {
            opcion: "ctrRegistrarMenuBasico",
           nombre_cmenu:num_nombre,
           detalle_funcion:des_nom_fun,
           padre_config_menu:id_menu_padre
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
   
    if (retorno == 1) {
        alert("Se realizo correctamente la modificacion");
        $("#id_menu_padre").val("");
        $("#num_nombre").val(" ");
        $("#des_nom_fun").val(" ");
 consulta_list_menu_basica();
   consulta_de_menu_padre();
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
 
 function registro_the_perfil(){
    
    
   
    
    var nombre_perfil = $("#nombre_perfil").val();
    var descripcion_perfil = $("#descripcion_perfil").val();
    
   
    
 
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/Menu/controladores/menucontroller.php',
        async: false,
        data: {
            opcion: "ctrRegistrarPerfilAdm",
           nombre_perfil:nombre_perfil,
           descripcion:descripcion_perfil 
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
   
    if (retorno == 1) {
        alert("Se realizo correctamente la insercion");
        $("#nombre_perfil").val(" ");
        $("#descripcion_perfil").val(" ");
         
      
 consulta_list_perfil();
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
  


function registro_menu_perfil(){
    
    
   
    
    var id_perfil = $("#perfil").val();
   
    
    var id_menu_detalle = $("#id_menu_detalle").val();
    
 
    
    if(id_menu_detalle==0){
         
       // id_config_menu=$("#id_menu_detalle").val();
         var id_config_menu = $("#id_menu_padre").val();
       
      
    }else{
         var id_config_menu = $("#id_menu_detalle").val();
    }
    // alert("id_config_menu "+id_config_menu);
     
    
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/Menu/controladores/menucontroller.php',
        async: false,
        data: {
            opcion: "ctrRegistrarMenuPerfil",
           id_perfil:id_perfil,
           id_config_menu:id_config_menu
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
   
    if (retorno == 1) {
        alert("Se realizo correctamente la modificacion");
      conf_menu_perfil();  
 consulta_list_menu_perfil();
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
 
 
 
 function eliminar_registro_menu_perfil(id_menu_perfil){
    
     
    
    
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/Menu/controladores/menucontroller.php',
        async: false,
        data: {
            opcion: "ctrEliminarMenuPerfil",
           id_menu_perfil:id_menu_perfil 
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
   
    if (retorno == 1) {
        alert("El registro se realizo correctamente");
        
 consulta_list_menu_perfil();
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
 
 function eliminar_registro_menu_basico(id_config_menu){
    
     
    
   // alert("id_config_menu "+id_config_menu);
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/Menu/controladores/menucontroller.php',
        async: false,
        data: {
            opcion: "ctrEliminarMenuBasico",
           id_config_menu:id_config_menu 
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
  // alert("retorno "+retorno);
    if (retorno == 1) {
        alert("El registro se elimino correctamente");
        
 consulta_list_menu_basica();
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
 
 
 function eliminar_registro_perfil(id_perfil){
    
     
    
  //  alert("id_perfil "+id_perfil);
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/Menu/controladores/menucontroller.php',
        async: false,
        data: {
            opcion: "ctrEliminarMperfil",
           id_perfil:id_perfil 
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
 //  alert("retorno "+retorno);
    if (retorno == 1) {
        alert("El registro se elimino correctamente");
        
 consulta_list_perfil();
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
 

function consulta_de_perfiles() {
    
    var retorno = "";
    //retorno += '<option value="'+cod_depto+'">'+nom_depto+'</option> ';
// alert("entrada")
    $.ajax({
        type: "POST",
         url: "lib/Menu/controladores/menucontroller.php",
        data: {
            opcion: 'consulta_de_perfiles'
        },
        async: false,
        success: function(data) {
            retorno += data;

        }
    });
     
 //   alert("retorno_"+retorno)  
    $("#perfil").append(retorno);
//$("#departamento_contacto").append(retorno);

} 

function consulta_de_menu_padre() {
    var retorno = "";
    //retorno += '<option value="'+cod_depto+'">'+nom_depto+'</option> ';
// alert("entrada")
    $.ajax({
        type: "POST",
        url: "lib/Menu/controladores/menucontroller.php",
        data: {
            opcion: 'consulta_de_MenuPadre'
        },
        async: false,
        success: function(data) {
            retorno += data;

        }
    });
     
 //   alert("retorno_"+retorno)  
    $("#id_menu_padre").append(retorno);
//$("#departamento_contacto").append(retorno);

} 
 
 function consulta_menu_detalle() {
    var retorno = "";
    
    var id_menu_padre =$("#id_menu_padre").val();
    //retorno += '<option value="'+cod_depto+'">'+nom_depto+'</option> ';
 // alert("id_menu_padre "+id_menu_padre);
    $.ajax({
        type: "POST",
        url: "lib/Menu/controladores/menucontroller.php",
        data: {
            opcion: 'consulta_de_hijodetalle',
            id_menu_padre:id_menu_padre
        },
        async: false,
        success: function(data) {
            retorno += data;

        }
    });
     
  //  alert("retorno_"+retorno)  
    $("#id_menu_detalle").html(retorno);
//$("#departamento_contacto").append(retorno);

} 
 
 
 
 
 
  
function consulta_list_menu_basica(){
  
 //var NUM_ORDEN = $("#NUM_ORDEN").val();

 //var NUM_ORDEN=NUM_ORDEN.length;
     var datas;
 
    $.ajax({
        type: "POST",
        url: 'lib/Menu/ajax/datatable-menu-basico.ajax_1.php',
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

  
function consulta_list_perfil(){
  
 //var NUM_ORDEN = $("#NUM_ORDEN").val();

 //var NUM_ORDEN=NUM_ORDEN.length;
     var datas;
 
    $.ajax({
        type: "POST",
        url: 'lib/Menu/ajax/datatable-perfil.php',
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


