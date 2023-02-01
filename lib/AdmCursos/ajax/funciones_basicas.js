/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function cambio_clase(){
	document.getElementById("menu_li").className = "treeview menu-open";
	}
function llamar_menu_segun_perfil(){}
function llamado_menu_general(id_perfil){
    
 
   
      var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/Menu/controladores/menucontroller.php',
        async: false,
        data: {
            opcion: "ctrMuestraMenuDinamico",
            id_perfil:id_perfil
          
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });
  
    $("#div_con_menu").html(retorno)
     
}
function llamado_menu_generalcurso(id_perfil){
    
 
   alert("id_perfil_ww"+id_perfil);
      var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/Menu/controladores/menucontroller.php',
        async: false,
        data: {
            opcion: "ctrMuestraMenuDinamicoCursos",
            id_perfil:id_perfil
          
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });
      alert("retorno "+retorno);
    $("#div_con_menu").html(retorno)
     
}
function llamado_menu_generalcursoDet(id_perfil){
    
 	$.ajax({
  method: "POST",
   url: 'lib/Menu/controladores/menucontroller.php',
  data: {
            opcion: "ctrMuestraMenuDinamicoCursos",
            id_perfil:id_perfil
          
       
        }
})
  .done(function( msg ) {
    alert( "Data Saved: " + msg );
  });
  
  
   alert("id_perfil_"+id_perfil);
      var retorno;
    $.ajax({
        type: "POST",
       url: 'lib/Menu/controladores/menucontroller.php',
        async: false,
        data: {
            opcion: "ctrMuestraMenuDinamicoCursos",
            id_perfil:id_perfil
          
       
        },
        success: function (retu) {
            retorno = retu;
        }

    });
      alert("retorno "+retorno);
    $("#div_con_menu_div").html(retorno)
     
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



function llamado_consulta_central(){
    alert(12345);
    window.location.href = 'Central11234.php';
}

function inicio(){
 
window.location = "Central.php";
 
 
}


function usuarios_adm(){
 
            $.ajax({
            type: "POST",
            url: "lib/Usuario/vistas/registro_the_usuario.php",
            success: function(response) {
                $('#contenedor_div_principal').html(" ");
                $('#contenedor_div_principal').html(response);
            }
        });
}




function registro_the_cursos(){
 
            $.ajax({
            type: "POST",
            url: "lib/AdmCursos/vistas/registro_adm_curso.php",
            success: function(response) {
                $('#contenedor_div_principal').html(" ");
                $('#contenedor_div_principal').html(response);
            }
        });
}
function registro_the_modulo(){
 
            $.ajax({
            type: "POST",
            url: "lib/AdmCursos/vistas/registro_adm_modulos_c.php",
            success: function(response) {
                $('#contenedor_div_principal').html(" ");
                $('#contenedor_div_principal').html(response);
            }
        });
}

function registro_the_contenido(){
 
            $.ajax({
            type: "POST",
            //url: "lib/AdmCursos/vistas/registro_adm_contenidos_c.php",
			url: "lib/AdmCursos/vistas/registro_adm_contenidos_c_v2.php",
            success: function(response) {
                $('#contenedor_div_principal').html(" ");
                $('#contenedor_div_principal').html(response);
            }
        });
}

function registro_the_usuario(){
 
            $.ajax({
            type: "POST",
            url: "lib/AdmCursos/vistas/registro_usuarios.php",
            success: function(response) {
                $('#contenedor_div_principal').html(" ");
                $('#contenedor_div_principal').html(response);
            }
        });
}

function anexo_documento_curso(){
 
            $.ajax({
            type: "POST",
            url: "lib/AdmCursos/vistas/registro_link_curso.php",
            success: function(response) {
                $('#contenedor_div_principal').html(" ");
                $('#contenedor_div_principal').html(response);
            }
        });
}

function Incripcion_the_curso(){
 
            $.ajax({
            type: "POST",
            url: "lib/AdmCursos/vistas/inscripcion_curso.php",
            success: function(response) {
                $('#contenedor_div_principal').html(" ");
                $('#contenedor_div_principal').html(response);
            }
        });
}


function Consultas_agenda(){
 
            $.ajax({
            type: "POST",
            url: "lib/AgendaConsulta/vistas/ConsultasAgenda.php",
            success: function(response) {
                $('#contenedor_div_principal').html(" ");
                $('#contenedor_div_principal').html(response);
            }
        });
}




function guias_generadas(){
 
            $.ajax({
            type: "POST",
            url: "lib/Guias/vistas/guias.php",
            success: function(response) {
                $('#contenedor_div_principal').html(" ");
                $('#contenedor_div_principal').html(response);
            }
        });
}

function consul_ciiu(){
 
            $.ajax({
            type: "POST",
            url: "lib/Codigciiu/vistas/consultas_ciiu.php",
            success: function(response) {
                $('#contenedor_div_principal').html(" ");
                $('#contenedor_div_principal').html(response);
            }
        });
}


function conf_ciiu(){
 
            $.ajax({
            type: "POST",
            url: "lib/Codigciiu/vistas/registro_ciiu.php",
            success: function(response) {
                $('#contenedor_div_principal').html(" ");
                $('#contenedor_div_principal').html(response);
            }
        });
}





function conf_menu_perfil(){
 
            $.ajax({
            type: "POST",
            url: "lib/Menu/vistas/menu_perfil_detalle.php",
            success: function(response) {
                $('#contenedor_div_principal').html(" ");
                $('#contenedor_div_principal').html(response);
            }
        });
}

function conf_registro_menu(){
 
            $.ajax({
            type: "POST",
            url: "lib/Menu/vistas/registro_opc_menu.php",
            success: function(response) {
                $('#contenedor_div_principal').html(" ");
                $('#contenedor_div_principal').html(response);
            }
        });
}


function llamado_perfiles(){
 
            $.ajax({
            type: "POST",
            url: "lib/Menu/vistas/registro_the_perfil.php",
            success: function(response) {
                $('#contenedor_div_principal').html(" ");
                $('#contenedor_div_principal').html(response);
            }
        });
}


function guias_generadas(){
 
            $.ajax({
            type: "POST",
            url: "lib/Guias/vistas/guias.php",
            success: function(response) {
                $('#contenedor_div_principal').html(" ");
                $('#contenedor_div_principal').html(response);
            }
        });
}

function edicion_horas(){
 
            $.ajax({
            type: "POST",
            url: "lib/Horas/vistas/horas_detalle.php",
            success: function(response) {
                $('#contenedor_div_principal').html(" ");
                $('#contenedor_div_principal').html(response);
            }
        });
}


function consulta_contapyme(){
 
            $.ajax({
            type: "POST",
            url: "lib/Contapyme/vistas/consulta_contapyme.php",
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