 
 

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

function registro_adm_curso(){
    
    
   
    
    var nombre_curso = $("#nombre_curso").val();
    var descripcion_curso = $("#descripcion_curso").val();
    
    
 
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/AdmCursos/controladores/admcursoscontroller.php',
        async: false,
        data: {
            opcion: "ctrRegistrarCurso",
           nombre_curso:nombre_curso,
           descripcion_curso:descripcion_curso 
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
  // alert("retorno_"+retorno);
    if (retorno == 1) {
        alert("Se guardo correctamente el registro");
        
        $("#nombre_curso").val(" ");
        $("#descripcion_curso").val(" ");
    
    
    
        consulta_list_curso();
      //  consulta_de_menu_padre();
     
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de ingresar la informacion");
            
    }
} 
 
 function registro_adm_modulo_c(){
    
    
   
    
    var id_consulta_cursos_cmb = $("#id_consulta_cursos_cmb").val();
    var nombre_modulo = $("#nombre_modulo").val();
    var descripcion_modulo_menu = $("#descripcion_modulo_menu").val();
    
    
 /*
   $id_curso=$data['id_curso'];
                            $nombre_modulo=$data[''];
                            $descripcion_curso=$data['descripcion_curso'];
  **/
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/AdmCursos/controladores/admcursoscontroller.php',
        async: false,
        data: {
            opcion: "ctrRegistrarModulo",
           id_curso:id_consulta_cursos_cmb,
           nombre_modulo:nombre_modulo,
           descripcion_modulo_menu:descripcion_modulo_menu
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
  //alert("retorno_"+retorno);
    if (retorno == 1) {
        alert("Se realizo correctamente el registro");
        
        $("#id_consulta_cursos_cmb").val("");
        $("#nombre_modulo").val(" ");
        $("#descripcion_modulo_menu").val(" ");
    
    
    
        consulta_list_modulos();
      //  consulta_de_menu_padre();
     
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de ingresar la informacion");
            
    }
} 
 function registro_adm_usuario(){
    
    
   
    
    var tipo_identificacion = $("#tipo_identificacion").val();
    var identificacion = $("#identificacion").val();
    var nombre_completo = $("#nombre_completo").val();
    var fecha_nacimiento = $("#fecha_nacimiento").val();
    var correo = $("#correo").val();
    var celular = $("#celular").val();
    var nombre_usuario = $("#nombre_usuario").val();
    var clave_usuario = $("#clave_usuario").val();
    
    var id_perfil = $("#id_perfil").val();
    var nombre_perfil = "";
 
 if(id_perfil==1){
     nombre_perfil='Administrador';
 }
 else{
     nombre_perfil='Estudiante';
 }
    
    
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/AdmCursos/controladores/admcursoscontroller.php',
        async: false,
        data: {
            opcion: "ctrRegistrarUsuario",
           tipo_identificacion:tipo_identificacion,
           identificacion:identificacion,
           nombre_completo:nombre_completo,
           fecha_nacimiento:fecha_nacimiento,
           correo:correo,
           celular:celular,
           usuario:nombre_usuario,
           passwword:clave_usuario,
           id_perfil:id_perfil,
           perfil:nombre_perfil
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
  // alert("retorno_"+retorno);
    if (retorno == 1) {
        alert("Se realizo correctamente el registro");
        
      registro_the_usuario();
    
      //  consulta_list_curso();
      //  consulta_de_menu_padre();
     
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de ingresar la informacion");
            
    }
} 
 
 
 function registro_inscripcion_usuario_curso(){
    
    
   
    
    var id_usuario_combo = $("#id_usuario_combo").val();
    var id_consulta_cursos_cmb = $("#id_consulta_cursos_cmb").val();
    
    
 
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/AdmCursos/controladores/admcursoscontroller.php',
        async: false,
        data: {
            opcion: "ctrInscripcionUsuarioCurso",
           id_usuario:id_usuario_combo,
           id_curso:id_consulta_cursos_cmb 
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
  // alert("retorno_"+retorno);
    if (retorno == 1) {
        alert("Se realizo correctamente el registro");
        
       
    Incripcion_the_curso();
    
      
      //  consulta_de_menu_padre();
     
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de ingresar la informacion");
            
    }
} 
 
 
 
 
  
 function registro_cambio_clave(){
    
    
   
    
    var id_usuario = $("#id_usuario").val();
    var clave_nueva = $("#clave_nueva").val();
    var confirma_clave = $("#confirma_clave").val();
    
    
    
   // alert("id_usuario_"+id_usuario);
    
    if(clave_nueva!=confirma_clave){
        alert('Señor usuario las contraseñas registradas no coinciden');
        return false;
    }
 
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/AdmCursos/controladores/admcursoscontroller.php',
        async: false,
        data: {
            opcion: "ctrCambioClaveUsuario",
           id_usuario:id_usuario,
           clave_nueva:clave_nueva 
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
  // alert("retorno_"+retorno);
    if (retorno == 1) {
        alert("Se realizo correctamente el cambio de contra");
        
      location.reload(); 
    //Incripcion_the_curso();
    //cambio_clave();
      
      //  consulta_de_menu_padre();
     
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de ingresar la informacion");
            
    }
} 
 
 
function registro_adm_leccion_mod_curs(){
    
    //alert("Entro contenido curso");
    alert("212121");
    
    var id_consulta_cursos_cmb = $("#id_consulta_cursos_cmb").val();
    var id_consulta_modulos_cmb = $("#id_consulta_modulos_cmb").val();
    var nombre_leccion = $("#nombre_leccion").val();
    var descripcion_leccion = $("#descripcion_leccion").val();
    
    
 /*
   $id_curso=$data['id_curso'];
                            $nombre_modulo=$data[''];
                            $descripcion_curso=$data['descripcion_curso'];
  **/
 
 //llamado de funcion de adjuntar video
 
    
 var formData = new FormData();
 	var video = $("#adjuntarVideo")[0].files[0];
       
	//  var files = $('#image')[0].files[0];
	/*=============================================
  	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
  	=============================================*/
/*
  	if(video["type"] != "image/jpeg" && video["type"] != "image/png"){

  		//$(".image").val("");

alert("entro a tipo de imagen");
  		 swal({
		      title: "Error al subir la imagen",
		      text: "¡La imagen debe estar en formato JPG o PNGWWW!",
		      type: "error",
		      confirmButtonText: "¡Cerrar!"
		    });

  	} else{

  		var datosImagen = new FileReader;
  		datosImagen.readAsDataURL(video);

  		$(datosImagen).on("load", function(event){

  			var rutaImagen = event.target.result;

  			$(".card-img-top").attr("src", rutaImagen);

  		})

  	}
 
 
 */
 
 
 
 
 
 //fin de llamado funcion de adjuntar video
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 /*
  *
    var id_consulta_cursos_cmb = $("#id_consulta_cursos_cmb").val();
    var id_consulta_modulos_cmb = $("#id_consulta_modulos_cmb").val();
    var nombre_leccion = $("#nombre_leccion").val();
    var descripcion_leccion = $("#descripcion_leccion").val();
    
  **/
 
 
  
         formData.append('opcion','ctrRegistrarLecciones');
         formData.append('video',video);
 //alert("formData_"+formData);
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/AdmCursos/controladores/admcursoscontroller.php',
        async: false,
        data: formData,
        /*{
            
         opcion: "ctrRegistrarLecciones", 
           id_curso:id_consulta_cursos_cmb,
           id_modulo:id_consulta_modulos_cmb,
           nombre_leccion:nombre_leccion,
           descripcion_leccion:descripcion_leccion, 
         video:video 
        }*/
        success: function (retu) {
            retorno = retu;
         
        }

    });
 
  // console.log(retorno);
  /*
    if (retorno == 1) {
        alert("Se realizo correctamente la modificacion");
        
        $("#id_consulta_cursos_cmb").val("");
        $("#nombre_modulo").val(" ");
        $("#descripcion_modulo_menu").val(" ");
    
    
    
        consulta_list_modulos();
   
     
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de ingresar la informacion");
            
    }*/
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
 
 function eliminar_registro_cursos(id_curso){
    
     
    
   // alert("id_config_menu "+id_config_menu);
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/AdmCursos/controladores/admcursoscontroller.php',
        async: false,
        data: {
            opcion: "ctrEliminarCursos",
           id_curso:id_curso 
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
  alert("retorno "+retorno);
    if (retorno == 1) {
        alert("El registro se elimino correctamente");
        
 consulta_list_curso();
     //   CierraPopup("modalEditarEstado");
        $//("#dialg_crea_TOC").dialog('close');
     //   $("#dialg_crea_TOC").dialog('destroy');
     //   $("#dialg_crea_TOC").html("");
       // ListaTOC();
       //abrir_guias();
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de ingresar la informacion");
            
    }
    else if (retorno == 45) {
        alert("El registro no pudo ser eliminado, elmine primero los modulos de este pefil");
            
    }
    else if (retorno == 46){
        
        alert("El registro no pudo ser eliminado, elmine primero las incripciones de usuarios a este curso");
      
    }
        else if (retorno ==123) {
        alert("El  xsssss");
            
    }
} 


function eliminar_registro_modulos(id_modulo){
    
     
    
  // alert("id_modulo "+id_modulo);
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/AdmCursos/controladores/admcursoscontroller.php',
        async: false,
        data: {
            opcion: "ctrEliminarModulos",
           id_modulo:id_modulo 
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
   //alert("retorno "+retorno);
    if (retorno == 1) {
        alert("El registro se elimino correctamente");
        
 consulta_list_modulos();
     //   CierraPopup("modalEditarEstado");
        $//("#dialg_crea_TOC").dialog('close');
     //   $("#dialg_crea_TOC").dialog('destroy');
     //   $("#dialg_crea_TOC").html("");
       // ListaTOC();
       //abrir_guias();
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de eliminar la informacion");
            
    }
    else if (retorno == 3) {
        alert("El registro no pudo ser eliminado, elmine primero la relacion que tiene con el modulo de menu perfil");
            
    }
       else if (retorno == 45) {
        alert("El modulo no pudo ser eliminado, elmine primero las lecciones asociadas al modulo");
            
    }
} 

function eliminar_registro_usuarios(id_usuario){
    
     
    
 //  alert("id_usuario "+id_usuario);
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/AdmCursos/controladores/admcursoscontroller.php',
        async: false,
        data: {
            opcion: "ctrEliminarUsuarios",
           id_usuario:id_usuario 
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
   //alert("retorno "+retorno);
    if (retorno == 1) {
        alert("El registro se elimino correctamente");
        
 consulta_tabla_usuario();
     //   CierraPopup("modalEditarEstado");
        $//("#dialg_crea_TOC").dialog('close');
     //   $("#dialg_crea_TOC").dialog('destroy');
     //   $("#dialg_crea_TOC").html("");
       // ListaTOC();
       //abrir_guias();
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de eliminar la informacion");
            
    }
    else if (retorno == 3) {
        alert("El registro no pudo ser eliminado, elmine primero la relacion que tiene con el modulo de menu perfil");
            
    }
       else if (retorno == 45) {
        alert("El usuario no pudo ser eliminado, elmine primero las inscripciones a cursos hechas a este usuario");
            
    }
} 


function eliminar_registro_leccion(id_leccion){
     
    
  // alert("id_modulo "+id_modulo);
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/AdmCursos/controladores/admcursoscontroller.php',
        async: false,
        data: {
            opcion: "ctrEliminarLecciones",
           id_leccion:id_leccion 
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
   //alert("retorno "+retorno);
    if (retorno == 1) {
        alert("El registro se elimino correctamente");
        
consulta_list_contenidos();
     //   CierraPopup("modalEditarEstado");
        $//("#dialg_crea_TOC").dialog('close');
     //   $("#dialg_crea_TOC").dialog('destroy');
     //   $("#dialg_crea_TOC").html("");
       // ListaTOC();
       //abrir_guias();
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de eliminar la informacion");
            
    }
    else if (retorno == 3) {
        alert("El registro no pudo ser eliminado, elmine primero la relacion que tiene con el modulo de menu perfil");
            
    }
       else if (retorno == 45) {
        alert("El modulo no pudo ser eliminado, elmine primero las lecciones asociadas al modulo");
            
    }
} 


function eliminar_registro_Anexo_docx(id_anexo_docs){
     
    
  //alert("id_anexo_docs "+id_anexo_docs);
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/AdmCursos/controladores/admcursoscontroller.php',
        async: false,
        data: {
            opcion: "ctrEliminarAnexoDocs",
           id_anexo_docs:id_anexo_docs 
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
   //alert("retorno "+retorno);
    if (retorno == 1) {
        alert("El registro se elimino correctamente");
        
consulta_list_anexos_docs();
     //   CierraPopup("modalEditarEstado");
        $//("#dialg_crea_TOC").dialog('close');
     //   $("#dialg_crea_TOC").dialog('destroy');
     //   $("#dialg_crea_TOC").html("");
       // ListaTOC();
       //abrir_guias();
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de eliminar la informacion");
            
    }
    else if (retorno == 3) {
        alert("El registro no pudo ser eliminado, elmine primero la relacion que tiene con el modulo de menu perfil");
            
    }
       else if (retorno == 45) {
        alert("El modulo no pudo ser eliminado, elmine primero las lecciones asociadas al modulo");
            
    }
} 


function eliminar_registro_inscripciones(id_inscripcion_curso){
    
     
    
  // alert("id_modulo "+id_modulo);
    var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/AdmCursos/controladores/admcursoscontroller.php',
        async: false,
        data: {
            opcion: "ctrEliminarInscripcionCurso",
          id_inscripcion_curso:id_inscripcion_curso 
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });

   console.log(retorno);
   //alert("retorno "+retorno);
    if (retorno == 1) {
        alert("El registro se elimino correctamente");
        
 consulta_list_inscripcion_cursos();
     //   CierraPopup("modalEditarEstado");
        $//("#dialg_crea_TOC").dialog('close');
     //   $("#dialg_crea_TOC").dialog('destroy');
     //   $("#dialg_crea_TOC").html("");
       // ListaTOC();
       //abrir_guias();
    } else if (retorno == 0) {
        alert("Ocurrio un error al tratar de eliminar la informacion");
            
    }
    else if (retorno == 3) {
        alert("El registro no pudo ser eliminado, elmine primero la relacion que tiene con el modulo de menu perfil");
            
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
 
 function consulta_combo_cursos() {
    var retorno = "";
    //retorno += '<option value="'+cod_depto+'">'+nom_depto+'</option> ';
// alert("entrada")
    $.ajax({
        type: "POST",
        url: "lib/AdmCursos/controladores/admcursoscontroller.php",
        data: {
            opcion: 'consulta_cursos_combo'
        },
        async: false,
        success: function(data) {
            retorno += data;

        }
    });
     
 //   alert("retorno_"+retorno)  
    $("#id_consulta_cursos_cmb").append(retorno);
//$("#departamento_contacto").append(retorno);

} 
  function consulta_combo_modulos() {
    var retorno = "";
    //retorno += '<option value="'+cod_depto+'">'+nom_depto+'</option> ';
// 
var id_consulta_cursos_cmb= $("#id_consulta_cursos_cmb").val();
//alert("id_consulta_cursos_cmb "+id_consulta_cursos_cmb);
    $.ajax({
        type: "POST",
        url: "lib/AdmCursos/controladores/admcursoscontroller.php",
        data: {
            opcion: 'consulta_modulos_cur_combo',
            id_consulta_cursos_cmb:id_consulta_cursos_cmb
        },
        async: false,
        success: function(data) {
            retorno += data;

        }
    });
     
  // alert("retorno_"+retorno)  
    $("#id_consulta_modulos_cmb").html(retorno);
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
 
 
 
 
 
  
function consulta_list_curso(){
  
 //var NUM_ORDEN = $("#NUM_ORDEN").val();

 //var NUM_ORDEN=NUM_ORDEN.length;
     var datas;
 
    $.ajax({
        type: "POST",
        url: 'lib/AdmCursos/ajax/datatable-lista-cursos.ajax_1.php',
        async: false,
        dataType: 'json',
        data: { 
        
         
        },
        success: function (retu) {
            datas = retu;
        }
    });

// alert("datas_"+datas);
   $('#tablet').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
}
 
function consulta_list_modulos(){
  
 //var NUM_ORDEN = $("#NUM_ORDEN").val();

 //var NUM_ORDEN=NUM_ORDEN.length;
     var datas;
 
    $.ajax({
        type: "POST",
        url: 'lib/AdmCursos/ajax/datatable-lista-modulos.ajax_1.php',
        async: false,
        dataType: 'json',
        data: { 
        
         
        },
        success: function (retu) {
            datas = retu;
        }
    });

// alert("datas_"+datas);
   $('#tablet').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
}
  
  function consulta_list_contenidos(){
  
 //var NUM_ORDEN = $("#NUM_ORDEN").val();

 //var NUM_ORDEN=NUM_ORDEN.length;
     var datas;
 
    $.ajax({
        type: "POST",
        url: 'lib/AdmCursos/ajax/datatable-lista-lecciones.ajax_1.php',
        async: false,
        dataType: 'json',
        data: { 
        
         
        },
        success: function (retu) {
            datas = retu;
        }
    });

// alert("datas_"+datas);
   $('#tablet').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
}

 
function consulta_list_inscripcion_cursos(){
  
 //var NUM_ORDEN = $("#NUM_ORDEN").val();

 //var NUM_ORDEN=NUM_ORDEN.length;
     var datas;
 
    $.ajax({
        type: "POST",
        url: 'lib/AdmCursos/ajax/datatable-lista-inscripcion-cursos.ajax_1.php',
        async: false,
        dataType: 'json',
        data: { 
        
         
        },
        success: function (retu) {
            datas = retu;
        }
    });

 // alert("datas_"+datas);
   $('#tablet').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
}


  function consulta_tabla_usuario(){
  
 //var NUM_ORDEN = $("#NUM_ORDEN").val();

 //var NUM_ORDEN=NUM_ORDEN.length;
     var datas;
 
    $.ajax({
        type: "POST",
        url: 'lib/AdmCursos/ajax/datatable-lista-usuario.ajax_1.php',
        async: false,
        dataType: 'json',
        data: { 
        
         
        },
        success: function (retu) {
            datas = retu;
        }
    });

// alert("datas_"+datas);
   $('#tablet').DataTable({
        data: datas,
        destroy: true
    });
 
  
  
}
  
   function consulta_list_anexos_docs(){
  
 //var NUM_ORDEN = $("#NUM_ORDEN").val();

 //var NUM_ORDEN=NUM_ORDEN.length;
     var datas;
 
    $.ajax({
        type: "POST",
        url: 'lib/AdmCursos/ajax/datatable-lista-doc-curso.ajax_1.php',
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

 function consulta_combo_usuarios() {
    var retorno = "";
    //retorno += '<option value="'+cod_depto+'">'+nom_depto+'</option> ';
// 
//var id_consulta_cursos_cmb= $("#id_consulta_cursos_cmb").val();
//alert("id_consulta_cursos_cmb "+id_consulta_cursos_cmb);
    $.ajax({
        type: "POST",
        url: "lib/AdmCursos/controladores/admcursoscontroller.php",
        data: {
            opcion: 'consulta_usuarios_combo' 
        },
        async: false,
        success: function(data) {
            retorno += data;

        }
    });
     
  // alert("retorno_"+retorno)  
    $("#id_usuario_combo").html(retorno);
//$("#departamento_contacto").append(retorno);

} 
