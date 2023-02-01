   <body>

 <script>
    $(document).ready(function () {
     
        $('#frm_add_ciudadano').validate({
            rules: {
                nombres: {required: true},
                apellidos: {required: true},
                noIdentificacion: {required: true},
                celular: {required: true},
                correo: {required: true},
                nombre_usuario: {required: true},
                clave: {required: true},
                vul_clave: {required: true},
                slc_tipo_usuario: {required: true}

            },
            messages: {
                nombres: {required: 'Ingrese los nombres'},
                apellidos: {required: 'Ingrese los apellidos'},
                noIdentificacion: {required: 'Ingrese el número de identificación'},
                celular: {required: 'Ingrese el numero de su celular'},
                correo: {required: 'Ingrese el correo'},
                nombre_usuario: {required: 'Ingrese el nombre de usuario'},
                clave: {required: 'Ingrese la clave'},
                vul_clave: {required: 'reeingrese la clave'},
                slc_tipo_usuario: {required: 'Seleccione tipo usuario'}

            },
            debug: true,
            invalidHandler: function () {
                alert('Hay información en el formulario sin diligenciar por favor completarla');
                return false;
            },
            submitHandler: function (form) {
                AlmacenarUsuario();
            }
        });
   
  
    });
 
 </script>
 
<script>

 
$( document ).ready(function() {
 

$.ajax({

	url: "lib/Personas/ajax/datatable-personas.ajax.php",
	success:function(respuesta){
		
		console.log("respuesta", respuesta);

	}

})

var perfilOculto = "Administrador";

$('.tablaProductos').DataTable( {
    "ajax": "lib/Personas/ajax/datatable-personas.ajax.php?perfilOculto="+perfilOculto,
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


$(".tablaProductos tbody").on("click", "button.btnEditarProducto", function(){

	var idProducto = $(this).attr("idProducto");
	
	var datos = new FormData();
    datos.append("idProducto", idProducto);

     $.ajax({

      url:"lib/Personas/ajax/personas.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
          
         // var datosCategoria = new FormData();
      //    datosCategoria.append("idCategoria",respuesta["id_categoria"]);
        
        /*
           $.ajax({

              url:"ajax/categorias.ajax.php",
              method: "POST",
              data: datosCategoria,
              cache: false,
              contentType: false,
              processData: false,
              dataType:"json",
              success:function(respuesta){
                  
                  $("#editarCategoria").val(respuesta["id"]);
                  $("#editarCategoria").html(respuesta["categoria"]);

              }

          })
          */

           $("#codico_persona_pk").val(respuesta["id"]);
           $("#nuevoNombreCEDT").val(respuesta["nombre"]);

           $("#nuevoCorreoEDT").val(respuesta["email"]);

           $("#nuevoExtencionEDT").val(respuesta["extencion"]);

           $("#nuevoCelularEDT").val(respuesta["celular"]);

           $("#nuevoFechaNacimientoEDT").val(respuesta["fecha_nacimiento"]);
           $("#nuevoCargoEDT").val(respuesta["cargo"]);
           $("#nuevoDepartamentoEDT").val(respuesta["departamento"]);
           $("#nuevoCiudadEDT").val(respuesta["ciudad"]);
           

           if(respuesta["imagen"] != ""){

           	$("#imagenActual").val(respuesta["imagen"]);

           	$(".previsualizar").attr("src",  respuesta["imagen"]);

           }else{
			   $(".previsualizar").attr("src",  " url(img/productos/default/anonymous.png)");
			   }

      }

  })

})


$(".tablaProductos tbody").on("click", "button.btnEliminarProducto", function(){

	var idProducto = $(this).attr("idProducto");
	var nombre_arch = $(this).attr("nombre_arch");
	var imagen = $(this).attr("imagen");
	
	 
	swal({

		title: '¿Está seguro de borrar el registro de persona?',
		text: "¡Si no lo está puede cancelar la accíón!",
		type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar registro!'
        }).then(function(result) {
        if (result.value) {

        ElimRegistroPersonapro(idProducto,nombre_arch,imagen);

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
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
          
          Agregar Persona

        </button>
 


      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Imagen</th>
           <th>Nombre</th>
           <th>Correo</th>
           <th>Extencion</th>
           <th>Telefono</th>
           <th>Area</th>
           <th>Cargo</th>
           <th>Ciudad</th>
           <th>Acciones</th>
           
         </tr> 

        </thead>      

       </table>

       <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">

      </div>

    </div>

  </section>

</div>

<!---Editar prueba adjunto---><!--=====================================
MODAL AGREGAR PRODUCTO
======================================-->




<div id="nuevomodaledti" class="modal fade" role="dialog">
   <div class="modal-dialog">
   <div class="modal-content">
   
         <form id="frm_add_persona" name="frm_add_persona" method="post" enctype="multipart/form-data" action="lib/Personas/controladores/productos.controlador.full.php">

   
   <input type="hidden" value="update" id="valor_control" name="valor_control">
   
    <div class="modal-header" style="background:#3c8dbc; color:white">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">Editar persona este</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->
<div class="modal-body">

          <div class="box-body">

 				<!--- ENTRADA DE NOMBRE EDT-->
                <input type="hidden" id="codico_persona_pk" name="codico_persona_pk">
		
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoNombreCEDT" name="nuevoNombreCEDT" placeholder="Ingresar Nombre Completo" >

              </div>

            </div>
			<!--- ENTRADA DE CORREO EDT-->
		
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoCorreoEDT" name="nuevoCorreoEDT" placeholder="Correo Electronico Corporativo" >

              </div>

            </div>

	<!--- ENTRADA DE EXTENCION EDT-->
		
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoExtencionEDT" name="nuevoExtencionEDT" placeholder="Extencion Telefonica" >

              </div>

            </div>

	<!--- ENTRADA DE CELULAR EDT-->
		
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoCelularEDT" name="nuevoCelularEDT" placeholder="Numero Celular" >

              </div>

            </div>
            
            
            
     	<!--- ENTRADA DE Fecha nacimiento EDT-->
		
            
            
            <div class="form-group">
              
              <div class="input-group">
              
                   <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>
                                <input type="text" id="nuevoFechaNacimientoEDT" name="nuevoFechaNacimientoEDT" class="form-control input-lg" placeholder="Fecha Nacimiento"  data-date-format='DD-MM-YYYY'  />

                <script>
                                
                                $(function() {
                                  $('input[name="nuevoFechaNacimientoEDT"]').daterangepicker({
                                   // dateFormat: 'YYYY-MM-DD',
								    singleDatePicker: true,
                                    showDropdowns: true,
					
                                     locale: {
                                  format: 'YYYY-MM-DD'
                                } ,  
                                         			
                                    minYear: 1901 ,
                                    maxYear: parseInt(moment().format('YYYY'),10) 
                                  });
                                });
                                
                                
                           
                                </script>
              </div>

            </div>
            
            
            
            
            
            
            
                   
                      
     	<!--- ENTRADA DE CARGO EDT-->
		
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoCargoEDT" name="nuevoCargoEDT" placeholder="Nombre del Cargo" >

              </div>

            </div>
            
                <!--- ENTRADA DE AREA EDT-->
		
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoDepartamentoEDT" name="nuevoDepartamentoEDT" placeholder="Nombre del Area" >

              </div>

            </div>   
            
            
                <!--- ENTRADA DE CIUDAD EDT-->
		
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoCiudadEDT" name="nuevoCiudadEDT" placeholder="Nombre de Ciudad" >

              </div>

            </div>   
            
         
         
           
 
            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR IMAGEN</div>

              <input type="file" class="nuevaImagen" name="editarImagen" >

              <p class="help-block">Peso máximo de la imagen 2MB</p>
<center>
              <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="300px" >
</center>
              <input type="hidden" name="imagenActual" id="imagenActual">
 
            </div>

          </div>
          
          
 <!-- entrada foto dos-->
       
       
       
        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
 
 
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
        <p>&nbsp;</p>
      </div>

     </form>

    </div>

  </div>

</div>






<!--=====================================
MODAL AGREGAR PRODUCTO
======================================-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form id="frm_add_persona" name="frm_add_persona" method="post" enctype="multipart/form-data" action="lib/Personas/controladores/productos.controlador.full.php">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
<input type="hidden" value="insert" id="valor_control" name="valor_control">
        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar persona</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


          

			<!--- ENTRADA DE NOMBRE-->
		
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoNombreC" name="nuevoNombreC" placeholder="Ingresar Nombre Completo"  required>

              </div>

            </div>
			<!--- ENTRADA DE CORREO-->
		
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoCorreo" name="nuevoCorreo" placeholder="Correo Electronico Corporativo" required>

              </div>

            </div>

	<!--- ENTRADA DE EXTENCION-->
		
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoExtencion" name="nuevoExtencion" placeholder="Extencion Telefonica"  >

              </div>

            </div>

	<!--- ENTRADA DE CELULAR-->
		
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoCelular" name="nuevoCelular" placeholder="Numero Celular"  >

              </div>

            </div>
            
            
            
     	<!--- ENTRADA DE Fecha nacimiento-->
		
 		 
            
                    
            <div class="form-group">
              
              <div class="input-group">
              
                   <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>
                                <input type="text" id="nuevoFechaNacimiento" name="nuevoFechaNacimiento" class="form-control input-lg" placeholder="Fecha Nacimiento"    value="1989-08-01"  />

                                <script>
                                
                                $(function() {
                                  $('input[name="nuevoFechaNacimiento"]').daterangepicker({
                                   // dateFormat: 'YYYY-MM-DD',
								    singleDatePicker: true,
                                    showDropdowns: true,
					
                                     locale: {
                                  format: 'YYYY-MM-DD'
                                } ,  
                                         			
                                    minYear: 1901 ,
                                    maxYear: parseInt(moment().format('YYYY'),10) 
                                  });
                                });
                                
                                
                           
                                </script>
              </div>

            </div>
            
                      
     	<!--- ENTRADA DE CARGO-->
		
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoCargo" name="nuevoCargo" placeholder="Nombre del Cargo" required>

              </div>

            </div>
            
                <!--- ENTRADA DE AREA-->
		
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoDepartamento" name="nuevoDepartamento" placeholder="Nombre del Area" required>

              </div>

            </div>   
            
            
                <!--- ENTRADA DE CIUDAD-->
		
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoCiudad" name="nuevoCiudad" placeholder="Nombre de Ciudad" required>

              </div>

            </div>   
            

         

             
          

           

              
 

                 
            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel">SUBIR IMAGEN</div>

              <input type="file" class="nuevaImagen" name="nuevaImagenes">

              <p class="help-block">Peso máximo de la imagen 2MB</p>

              <center><img src="img/productos/default/anonymous.png" class="img-thumbnail previsualiza" width="300px"></center>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar persona</button>

        </div>

      </form>

     

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR PRODUCTO
======================================-->
 


