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
      
      Horas En Seven
    
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
======================================--><!--=====================================
MODAL EDITAR PRODUCTO
======================================-->
 


