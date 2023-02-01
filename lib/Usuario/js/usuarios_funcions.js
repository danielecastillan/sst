 
 

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

function registro_the_usuario(){
    
    
  // alert("Entro");
    
    var nombre = $("#nombre_usuario").val();
    var usuario = $("#usuario").val();
    var passwor = $("#clave_user").val();
    var id_perfil = $("#id_perfil").val();
    
    
     
                            
 
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/Usuario/controladores/UsersController.php',
        async: false,
        data: {
            opcion: "ctrRegistrarUsuario",
           nombre:nombre,
           usuario:usuario,
           passwor:passwor,
       id_perfil:id_perfil
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
  // alert("retorno "+retorno);
    if (retorno == 1) {
        alert("Se realizo correctamente la insercion");
      nombre = $("#nombre_usuario").val(" ");
      usuario = $("#usuario").val(" ");
      passwor = $("#clave_user").val(" ");
     id_perfil = $("#id_perfil").val("");
    
    usuarios_adm();
    
    /*
 consulta_list_menu_basica();
   consulta_de_menu_padre();
   */
   
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
  
 
 
 
 function eliminar_registro_usuario(id_usuario){
    
     
    var mensaje;
    var opcion = confirm("Esta a punto de eliminar un usuario, desea continuar?");
    if (opcion == true) {
        mensaje = "Has clickado OK";
	} else {
	    mensaje = "Has clickado Cancelar";
            return false;
	}
 
     
     
    
    // alert("id_usuario "+id_usuario);
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/Usuario/controladores/Userscontroller.php',
        async: false,
        data: {
            opcion: "ctrEliminarRUsuario",
           id_usuario:id_usuario 
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
   // alert("retorno "+retorno);
    if (retorno == 1) {
        alert("El registro se elimino correctamente");
        
 consulta_list_users();
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
 

function consulta_de_perfiles_user() {
    
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
    $("#id_perfil").append(retorno);
//$("#departamento_contacto").append(retorno);

} 

 
 
 

  
function consulta_list_users(){
  
 //var NUM_ORDEN = $("#NUM_ORDEN").val();
//alert("Entro en consulta");
 
 //var NUM_ORDEN=NUM_ORDEN.length;
     var datas;
 
    $.ajax({
        type: "POST",
        url: 'lib/Usuario/ajax/datatable-list-users.php',
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
 
 
 
 