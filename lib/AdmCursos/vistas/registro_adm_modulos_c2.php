    <body>

 <script>$("#botone").click(function(){
      CargarArchivoPredio();
	 //CargueDocumentoDatos();
	 alert("entro a o botone");
	 
  });</script>
  
  <script>
$(document).ready(function() {
	
   $(".image").change(function(){

	var imagen = this.files[0];
	
	/*=============================================
  	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
  	=============================================*/

  	if(imagen["type"] != "image/jpeg" && imagen["type"] != "video/mp4"){

  		$(".image").val("");

  		 swal({
		      title: "Error al subir la imagen",
		      text: "¡La imagen debe estar en formato JPG o PNGWWW!",
		      type: "error",
		      confirmButtonText: "¡Cerrar!"
		    });

  	}else if(imagen["size"] > 20000000){

  		$(".image").val("");

  		 swal({
		      title: "Error al subir la imagen",
		      text: "¡La imagen no debe pesar más de 2MB!",
		      type: "error",
		      confirmButtonText: "¡Cerrar!"
		    });

  	}else{

  		var datosImagen = new FileReader;
  		datosImagen.readAsDataURL(imagen);

  		$(datosImagen).on("load", function(event){

  			var rutaImagen = event.target.result;

  			$(".card-img-top").attr("src", rutaImagen);

  		})

  	}
})
	/*
	
	 
	
	*/
	
	$("#botonInsert").on('click', function() {
	 	alert("Entro boton insert");
	 
	  	var formData = new FormData(form_reg);
        var files = $('#image')[0].files[0];
        formData.append('file',files);
		
		var modval= "modalAgregarUsuarioprueba";
		 var response= "";
		
		var passwordIns= $("#passwordIns").val();
		var nuevoUsuarioIns= $("#nuevoUsuarioIns").val();
		var nombreIns= $("#nombreIns").val();
		var perfilesIns= $("#perfilesIns").val();
		
		 formData.append('valor_control_usr','insert');
		 formData.append('insPerfil',perfilesIns);
		 formData.append('insUsuario',nuevoUsuarioIns);
		 formData.append('insPassword',passwordIns);
		 formData.append('insNombre',nombreIns);
		 
		 $.ajax({
            url: 'lib/AdmCursos/controladores/usuarios.puente.controlador.full.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
				
				alert("response_"+response);
                if (response != 0) {
                    $(".card-img-top").attr("src", response);
					 if (response == 9) {
						 alert("Registro Almacenado");
						    llamado_usuarios();
	   						CierraPopup(modval);
						 }
					
                } else {
                    alert('Formato de imagen incorrecto.');
                }
            }
        });
		alert("Documento Cargado_"+response);
     return false;
	  
	 
	 
		 });
	
	
	
	
	
	
	
	
	
		$("#botonUpdate").on('click', function() {
	// 	alert("Entro boton update");
	 
	  	var formData = new FormData(form_update);
        var files = $('#editarFoto')[0].files[0];
        formData.append('editarFoto',files);
		
		var modval= "modalEditarUsuario";
		 var response= "";
		
		var editarPassword= $("#editarPassword").val();
		var editarUsuario= $("#editarUsuario").val();
		var editarNombre= $("#editarNombre").val();
		var editarPerfil= $("#editarPerfil").val();
		var fotoActual= $("#fotoActual").val();
		var passwordActual= $("#passwordActual").val();
		
		 formData.append('valor_control_usr','new_update');
		 formData.append('editarPassword',editarPassword);
		 formData.append('editarUsuario',editarUsuario);
		 formData.append('editarNombre',editarNombre);
		 formData.append('editarPerfil',editarPerfil);
		 formData.append('fotoActual',fotoActual);
		 formData.append('passwordActual',passwordActual);
		 $.ajax({
            url: 'controladores/usuarios.puente.controlador.full.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
				
				//alert("response_"+response);
                if (response != 0) {
                    $(".card-img-top").attr("src", response);
					 if (response == 9) {
						 alert("Registro Almacenado");
						    llamado_usuarios();
	   						CierraPopup(modval);
						 }
					
                } else {
                    alert('Formato de imagen incorrecto.');
                }
            }
        });
	//	alert("Documento Cargado_"+response);
     return false;
	  
	 
	 
		 });
	
	
	
	
	
	
	
	
	
	
	
	
	
    $(".upload").on('click', function() {
        var formData = new FormData();
        var files = $('#image')[0].files[0];
        formData.append('file',files);
		
		//var response= "";
		
		var passwordIns= $("#passwordIns").val();
		var nuevoUsuarioIns= $("#nuevoUsuarioIns").val();
		var nombreIns= $("#nombreIns").val();
		var perfilesIns= $("#perfilesIns").val();
		
		 formData.append('valor_control_usr','upload');
		 formData.append('editarPerfil',perfilesIns);
		 formData.append('editarUsuario',nuevoUsuarioIns);
		 formData.append('nuevoPassword',passwordIns);
		 formData.append('editarNombre',nombreIns);
        $.ajax({
            url: 'controladores/usuarios.puente.controlador.full.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
				
				alert("response_"+response);
                if (response != 0) {
                    $(".card-img-top").attr("src", response);
					 if (response == 9) {
						 alert("Registro Almacenado");
						    llamado_usuarios();
	   CierraPopup();
						 }
					
                } else {
                    alert('Formato de imagen incorrecto.');
                }
            }
        });
		alert("Documento Cargado_"+response);
     return false;
	  
	
    });
});
</script>
 <script>
$(document).ready(function(){
  
});
 </script>
 
<script>

 
$( document ).ready(function() {
 

$.ajax({

	url: "ajax/datatable-usuarios.ajax.php",
	success:function(respuesta){
		
		console.log("respuesta", respuesta);

	}

})

var perfilOculto = "Administrador";

$('.tablaUsuarios').DataTable( {
    "ajax": "ajax/datatable-usuarios.ajax.ch.php?perfilOculto="+perfilOculto,
    "deferRender": true,
	"retrieve": true,
	"processing": true,
	 "language": {

			"sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix":    "",
			"sSearch":         "Buscar:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
			"sFirst":    "Primero",
			"sLast":     "Último",
			"sNext":     "Siguiente",
			"sPrevious": "Anterior"
			},
			"oAria": {
				"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			}

	}

} );



$(".tablaUsuarios").on("click", ".btnEditarUsuario", function(){

	var idUsuario = $(this).attr("idUsuario");
 
	var datos = new FormData();
	datos.append("idUsuario", idUsuario);

	$.ajax({

		url:"ajax/usuarios.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			 
			$("#editarNombre").val(respuesta["nombre"]);
			$("#editarUsuario").val(respuesta["usuario"]);
		//	$("#editarPerfil").html(respuesta["perfil"]);
			$("#editarPerfil").val(respuesta["perfil"]);
			$("#fotoActual").val(respuesta["foto"]);

			$("#passwordActual").val(respuesta["password"]);

			if(respuesta["foto"] != ""){

				$(".previsualizarEditar").attr("src", respuesta["foto"]);

			}else{

				$(".previsualizarEditar").attr("src", "vistas/img/usuarios/default/anonymous.png");

			}

		}

	});

})





 

$(".tablaUsuarios tbody").on("click", "button.btnEliminarProducto", function(){

	var idUsuario = $(this).attr("idUsuario");
	var usuario = $(this).attr("usuario");
	var fotoUsuario = $(this).attr("fotoUsuario");
	
	 
	swal({

		title: '¿Está seguro de borrar el registro de usuario?',
		text: "¡Si no lo está puede cancelar la accíón!",
		type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar registro!'
        }).then(function(result) {
        if (result.value) {

        ElimRegistroUsuariopro(idUsuario,usuario,fotoUsuario);

        }


	})

})




/*

 $('#frm_add_persona').validate({
            rules: {
                nuevoNombreC: {required: true},
                nuevoCorreo: {required: true},
                nuevoExtencion: {required: true},
                nuevoCelular: {required: true},
                nuevoCorreo: {required: true},
                nuevoExtencion: {required: true},
                nuevoCelular: {required: true},
                nuevoFechaNacimiento: {required: true},
                nuevoCargo: {required: true},
                nuevoDepartamento: {required: true},
                nuevoCiudad: {required: true}

            },
            messages: {
                nuevoNombreC: {required: 'Describa el nombre del empleado'},
                nuevoCorreo: {required: 'Describa el correo del empleado'},
                nuevoExtencion: {required: 'Describa la extencion del empleado'},
                nuevoCelular: {required: 'Describa el celular del empleado'},
                nuevoCorreo: {required: 'Describa el correo electronico del empleado'},
                nuevoExtencion: {required: 'Describa la extencion telefonica del empleado'},
                nuevoCelular: {required: 'Numero de celular'},
                nuevoFechaNacimiento: {required: 'Seleccione la fecha de nacimiento'},
                nuevoCargo: {required: 'Describa el cargo al cual pertenece'},
                nuevoDepartamento: {required: 'Describa a que departamento de la empresa pertenece'},
                nuevoCiudad: {required: 'Describa a que ciudad corresponde'}

            },
            debug: true,
            invalidHandler: function () {
                alert('Hay información en el formulario sin diligenciar por favor completarla');
                return false;
            },
            submitHandler: function (form) {
              
            
			registrar_persona();
			}
        });
*/



});
</script>
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administracion de personas
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar personas</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
    <!--    <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
          
          Agregar Usuario

        </button>
 -->
 <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuarioprueba">
          
     Agregar Usuario
        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablaUsuarios" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th>Usuario</th>
           <th>Foto</th>
           <th>Perfil</th>
           <th>Estado</th>
           <th>Ultimo Login</th>
     
           <th>Acciones</th>
           
         </tr> 

        </thead>      

       </table>

       <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">

      </div>

    </div>

  </section>

</div>

<!---Editar prueba adjunto--->


<div id="modalAgregarUsuarioprueba" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

    
<input type="hidden" id="valor_control_usr" name="valor_control_usr" value="upload">
        <!--=====================================
        CABEZA DEL MODAL
        action="controladores/usuarios.puente.controlador.full.php" 
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar usuario</h4>

        </div>
        <input type="hidden" id="valor_control_usr" name="valor_control_usr" value="insert">

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">
         

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <form method="post" id="form_reg" action="#" enctype="multipart/form-data" >
            
            
        
        
        
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" id="nombreIns" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL USUARIO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar usuario" id="nuevoUsuarioIns" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONTRASEÑA -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" id="passwordIns" required>

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-users"></i></span> 

                <select class="form-control input-lg" name="nuevoPerfil" id="perfilesIns">
                  
                  <option value="">Selecionar perfil</option>

                  <option value="Administrador">Administrador</option>

                  <option value="Estandar">Estandar</option>

 
                </select>

              </div>

            </div>
        
            
            
            
    <div class="card" style="width: 18rem;">
        
        <div class="card-body">
            <h5 class="card-title">Sube una foto</h5>
            <p class="card-text">Sube una imagen...</p>
            <div class="form-group">
                <label for="image">Nueva imagen</label>
                <input type="file" class="form-control-file image" name="image" id="image">
                
                 <p class="help-block">Peso máximo de la foto 2MB</p>

              <img src="vistas/img/usuarios/default/anonymous.png"  class="card-img-top"  width="100px">
                
            </div>
            <input type="hidden" value="upload" id="valor_control_usr" name="valor_control_usr">
            <input type="button" class="btn btn-primary upload" value="Subir">
        </div>
    </div>
</form>

            <!-- ENTRADA PARA EL USUARIO -->
</form>
 
        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

         
  <button type="button" class="btn btn-primary" name="botone" id="botonInsert">Guardar</button>
        </div>

      

      

    </div>             

            <!-- ENTRADA PARA LA CONTRASEÑA -->

             

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

             

            <!-- ENTRADA PARA SUBIR FOTO -->

              </div></div> </div></div>

        </div>

<!--=====================================
MODAL AGREGAR USUARIO
======================================-->

<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data" id="form_VistaAdjuntos" name="form_VistaAdjuntos">
<input type="hidden" id="valor_control_usr" name="valor_control_usr" value="upload">
        <!--=====================================
        CABEZA DEL MODAL
        action="controladores/usuarios.puente.controlador.full.php" 
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar usuario standar</h4>

        </div>
        <input type="hidden" id="valor_control_usr" name="valor_control_usr" value="insert">

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL USUARIO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar usuario" id="nuevoUsuario" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONTRASEÑA -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" required>

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-users"></i></span> 

                <select class="form-control input-lg" name="nuevoPerfil">
                  
                  <option value="">Selecionar perfil</option>

                  <option value="Administrador">Administrador</option>

                  <option value="Estandar">Estandar</option>

 
                </select>

              </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR FOTO</div>

              <input type="file" class="nuevaFoto" name="nuevaFoto"  id="nuevaFoto">

              <p class="help-block">Peso máximo de la foto 2MB</p>

              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar usuario</button>
  <button type="button" class="btn btn-primary" name="botone" id="botone">Guardar usuario 2 botone</button>
        </div>

      

      </form>

    </div>

  </div>

</div>





<div id="modalEditarUsuario" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" id="form_update" enctype="multipart/form-data" action="" >

        <!--=====================================controladores/usuarios.puente.controlador.full.php
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar usuario</h4>

        </div>
<input type="hidden" id="valor_control_usr" name="valor_control_usr" value="update">
        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" value="" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL USUARIO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" id="editarUsuario" name="editarUsuario" value="" readonly>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONTRASEÑA -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="password" class="form-control input-lg" name="editarPassword" id="editarPassword" placeholder="Escriba la nueva contraseña" required>

                <input type="hidden" id="passwordActual" name="passwordActual">

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-users"></i></span> 

                <select class="form-control input-lg" name="editarPerfil" id="editarPerfil">
                  
                  <option value="" id="editarPerfil"></option>

                  <option value="Administrador">Administrador</option>

                  <option value="Especial">Especial</option>

                  

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR FOTO</div>

              <input type="file" class="nuevaFoto" name="editarFoto" id="editarFoto">

              <p class="help-block">Peso máximo de la foto 2MB</p>

              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizarEditar" width="100px">

              <input type="hidden" name="fotoActual" id="fotoActual">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
<!--
          <button type="submit" class="btn btn-primary">Modificar usuario</button>
    -->      
          
  <button type="button" class="btn btn-primary" name="botone" id="botonUpdate">Guardar Cambios</button>
        </div>
 
      </form>

    </div>

  </div>

</div>


<!--=====================================
MODAL AGREGAR PRODUCTO
======================================-->




<div id="nuevomodaledti" class="modal fade" role="dialog">
   <div class="modal-dialog">
   <div class="modal-content"></div>

  </div>

</div>






<!--=====================================
MODAL AGREGAR PRODUCTO
======================================-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content"></div>

  </div>

</div>

<!--=====================================
MODAL EDITAR PRODUCTO
======================================-->
 



