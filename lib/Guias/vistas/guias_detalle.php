   <body>
<script src="lib/Guias/js/guias_funcions.js"></script>
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

	url: "lib/Guias/ajax/datatable-personas.ajax.php",
	success:function(respuesta){
		
		console.log("respuesta", respuesta);

	}

})

var perfilOculto = "Administrador";


//consulta_guias_general();
//consulta_detalle_guias();



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

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>



 

 
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Guia Individual  (Encabezado &amp; Detalle) En Seven
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="Central.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administracion de Guias</li>
    
    </ol>

  </section>

  <section class="content">
 
   
  
    <div class="box">



<label><h3>
      Filtros Consultados</h3>
      </label>
<div class="box-header with-border">
  
           <div class="form-row">
            <div class="form-group col-md-3">
                
              <label for="inputCity">CODIGO DE TRANSPORTISTA</label>
                 <input type="text" class="form-control input-lg" id="PVD_CODA" name="PVD_CODA" placeholder="PVD_CODA" >

              
            </div>
            <div class="form-group col-md-3">
              
              <label for="inputState">PLACA </label>
                <input type="text" class="form-control input-lg" id="MDE_PLAC" name="MDE_PLAC" placeholder="MDE_PLAC" >
    
            </div>
            <div class="form-group col-md-3">
              
              <label for="inputZip">NUMERO DE GUIA</label>
           <input type="text" class="form-control input-lg" id="MDE_NGUI" name="MDE_NGUI" placeholder="MDE_NGUI" >

            </div>
          </div>



  
 </div>

<label><h3>
      Encabezado</h3>
      </label>

<div class="box-header with-border">
  
  
  
   
  
  
  
           <div class="form-group col-md-3">
       <label for="inputZip">Placa</label>            
       B
       <div class="input-group">
         


 
  <span class="input-group-addon">
  <div>
     <button class="btn btn-default" onClick="bloqueo()" id="buttone1" style="display:none">
   
   <i class="fa fa-lock"></i>
</button>

  <button class="btn btn-default" onClick="desbloqueo()" id="buttone2" >
   
   <i class="fa fa-unlock"></i>
</button>
 </div>
 
 
 
 
 </span> 
 
 

                <input type="text" class="form-control input-lg" id="nuevoExtencion" name="nuevoExtencion" placeholder="Extencion Telefonica"  >

 


              </div>

            </div>
  
  </div>





      <div class="box-header with-border">
  
  
  
   
  
  
  
           <div class="form-group col-md-3">Codigo Transportista
             <div class="input-group">
               
               
               
               
               <span class="input-group-addon">
               <div>
     <button class="btn btn-default" onClick="bloqueo()" id="buttone1" style="display:none">
   
   <i class="fa fa-lock"></i>
</button>

  <button class="btn btn-default" onClick="desbloqueo()" id="buttone2" >
   
   <i class="fa fa-unlock"></i>
</button>
 </div>
 
 
 
 
 </span> 
 
 

                <input type="text" class="form-control input-lg" id="nuevoExtencion" name="nuevoExtencion" placeholder="Extencion Telefonica"  >

 


            </div>

            </div>
  
  
  
  
     
  <div class="form-group col-md-3">
       <label for="inputZip">Nombre Transportista</label>            
     
       <div class="input-group">
         


 
  <span class="input-group-addon">
  <div>
     <button class="btn btn-default" onClick="bloqueo()" id="buttone1" style="display:none">
   
   <i class="fa fa-lock"></i>
</button>

  <button class="btn btn-default" onClick="desbloqueo()" id="buttone2" >
   
   <i class="fa fa-unlock"></i>
</button>
 </div>
 
 
 
 
 </span> 
 
 

                <input type="text" class="form-control input-lg" id="nuevoExtencion" name="nuevoExtencion" placeholder="Extencion Telefonica"  >

 


          </div>

        </div>
   <div class="form-group col-md-3">
       <label for="inputZip">Detalle Transportista</label>            
      
       <div class="input-group">
         


 
  <span class="input-group-addon">
  <div>
     <button class="btn btn-default" onClick="bloqueo()" id="buttone1" style="display:none">
   
   <i class="fa fa-lock"></i>
</button>

  <button class="btn btn-default" onClick="desbloqueo()" id="buttone2" >
   
   <i class="fa fa-unlock"></i>
</button>
 </div>
 
 
 
 
 </span> 
 
 

                <input type="text" class="form-control input-lg" id="nuevoExtencion" name="nuevoExtencion" placeholder="Extencion Telefonica"  >

 


          </div>

        </div>
  
  
   
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
      


  
 </div>







  <div class="box-header with-border">
  
  
  
   
  
  
  
           <div class="form-group col-md-3">
       <label for="inputZip">Placa</label>            
 <div class="input-group">
         


 
  <span class="input-group-addon">
  <div>
     <button class="btn btn-default" onClick="bloqueo()" id="buttone1" style="display:none">
   
   <i class="fa fa-lock"></i>
</button>

  <button class="btn btn-default" onClick="desbloqueo()" id="buttone2" >
   
   <i class="fa fa-unlock"></i>
</button>
 </div>
 
 
 
 
 </span> 
 
 

                <input type="text" class="form-control input-lg" id="nuevoExtencion" name="nuevoExtencion" placeholder="Extencion Telefonica"  >

 


              </div>

            </div>
  
  </div>
  





           
  <div class="box-body">
     <div class="form-row">
  
  
  
   <button class="btn btn-primary" onClick="prueba()" >
          
         Con

        </button>
  
   <button class="btn btn-primary" onClick="consulta_the_guia()" >
          
         Consultar

        </button>
      
      <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
          
          Agregar Persona

        </button>
     </div>
  </div>
  
        
    

      <div class="box-body">
        
        
        <div id="contenedor_consulta">
          <legend>Consulta Detalla De Guia</legend>
        <table class="table table-bordered table-striped dt-responsive tablaDetalle" width="100%">
         
        <thead>
         
           <tr>
           <th>Acciones</th>
           <th style="width:10px">#</th>
           <th>VALOR_DECLARADO</th>
           <th>VALOR_FLETE</th>
           <th>SOBRE_PORTE</th> 
           
           
         </tr> 

        </thead>      

       </table>
        
        </div>
        

       <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">

      </div>

    </div>

  </section>
  </div>
</div>  

<!---Editar prueba adjunto---><!--=====================================
MODAL AGREGAR PRODUCTO
======================================-->











<!--=====================================
MODAL AGREGAR PRODUCTO
======================================-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">
  
  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      <form id="frm_add_persona" name="frm_add_persona" method="post" enctype="multipart/form-data" action="lib/Personas/controladores/productos.controlador.full.php">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
<input type="hidden" value="insert" id="valor_control" name="valor_control">
        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar persona 1</h4>

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
          
          
          <button class="btn btn-primary" data-toggle="modal" data-target="#nuevomodaledti">
          
          Agregar Segundo Modal

        </button>

        </div>

      </form>

     
     
     
     <!---Sub contenedor -->
     
     
     
     
     
     
     <div id="nuevomodaledti" class="modal fade" role="dialog">
  
   <div class="modal-dialog">
   <div class="modal-content">
   
         

   
   <input type="hidden" value="update" id="valor_control" name="valor_control">
   
    <div class="modal-header" style="background:#3c8dbc; color:white">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">Editar persona este 2</h4>

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

    

    </div>

  </div>

</div>
     
     
     
     
     
     
     
     

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR PRODUCTO
======================================-->
 


