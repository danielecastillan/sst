   <body>
  <style>
.modal-lg {
       max-width: 80%;
}
  </style>
  
 <script>
    $(document).ready(function () {
 
 consulta_directorio_productos_externo();
 
 
   
   
  $(".image").change(function(){

	var imagen = this.files[0];
	
	/*=============================================
  	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
  	=============================================*/

  	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

  		$(".image").val("");

  		 swal({
		      title: "Error al subir la imagen",
		      text: "¡La imagen debe estar en formato JPG o PNG!",
		      type: "error",
		      confirmButtonText: "¡Cerrar!"
		    });

  	}else if(imagen["size"] > 10000000){

  		$(".image").val("");

  		 swal({
		      title: "Error al subir la imagen",
		      text: "¡La imagen no debe pesar más de 10MB!",
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
   
   
  $(".file").change(function(){

	var imagen = this.files[0];
	
	/*=============================================
  	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
  	=============================================*/

  	if(imagen["type"] != "application/pdf" && imagen["type"] != "application/pdf"){

  		$(".file").val("");

  		 swal({
		      title: "Error al subir el pdf",
		      text: "¡La archivo debe estar en formato PDF!",
		      type: "error",
		      confirmButtonText: "¡Cerrar!"
		    });

  	}else if(imagen["size"] > 10000000){

  		$(".file").val("");

  		 swal({
		      title: "Error al subir la imagen",
		      text: "¡La imagen no debe pesar más de 10MB!",
		      type: "error",
		      confirmButtonText: "¡Cerrar!"
		    });

  	}else{

  		var datosImagen = new FileReader;
  		datosImagen.readAsDataURL(imagen);

  		$(datosImagen).on("load", function(event){

  			var rutaImagen = '../directorio_archivos/default/file_pdf.png';

  			$(".card-img-top2").attr("src", rutaImagen);

  		})

  	}
})   
   
   
   
   $("#guardar_frm_dir_prod").on('click', function() {
	  
	//  alert("Entro a boton guardar");
	// return false;
	  	var formData = new FormData(form_reg);
        var image = $('#image')[0].files[0];
        formData.append('img',image);
		
		var file = $('#ficha')[0].files[0];
		formData.append('file',file);
		
		//var modval= "modalAgregarUsuarioprueba";
		 var response= "";
		
		var cod_codi_producto= $("#cod_codi_producto").val();
		var cod_cod_proveedor= $("#cod_cod_proveedor").val();
		var nombre_marca= $("#nombre_marca").val();
		var nota_producto= $("#nota_producto").val();
		
		
 
 
 
		
		 formData.append('valor_control_usr','insert');
		 formData.append('cod_codi_producto',cod_codi_producto);
		 formData.append('cod_cod_proveedor',cod_cod_proveedor);
		 formData.append('nombre_marca',nombre_marca);
		 formData.append('nota_producto',nota_producto);
		 
		 $.ajax({
            url: 'lib/Dirproduct/controladores/reg.directorio_prod.puente.controlador.full.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
				//alert("respuesta_"+response);
			 
                if (response != 0) {
                    $(".card-img-top").attr("src", response);
					 if (response == 9) {
						 alert("Registro Almacenado");
						 
						 llamado_directorio_producto();
						  //  llamado_usuarios();
	   						//CierraPopup(modval);
						 }
					
                } else {
                    alert('Formato de imagen incorrecto.');
                }
            }
        });
		 alert("Acontinuacion se cargara el video, si es muy pesado el video espere la alerta de confirmacion de documento adjunto para confirmar el registro de la leccion");
     //return false;
	  
	 
	 
		 });
   
   
   
   
   
   
   
   
 
    });
 
 </script>
 
 
 
<!--
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>



<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
 
-->
 
 
 
   
 
<div class="content-wrapper">

  <section class="content-header">
    
    
 
 
 



 
  </section>

  <section class="content">
 
    
   
  
    <div class="box">

    <div class="box-header with-border">
  
    
  
           <div class="form-row">
            <div class="form-group col-md-3">   
              <button class="btn btn-primary"   id="guardar_frm_dir_prod" style="display:none;">
           <i class="fa fa-floppy-o" aria-hidden="true"></i>
       Guardar
             </button>
             
             </div></div></div>
             
             
             
             <!-- 

      <div class="box-header with-border">
   
           <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputCity">
              <h3 class="display-3">Codigo del Producto</h3></label>
                 <input type="hidden" value="0" id="valor_productos" name="valor_productos">
                 <input type="text" class="form-control input-lg" id="numero_producto" name="numero_producto" placeholder="Numero " >
            </div>
            <div class="form-group col-md-3">
              
              <label for="inputState"><h3 class="display-3">Nombre del Producto </h3></label>
                <input type="text" class="form-control input-lg" id="nombre_producto" name="nombre_producto" placeholder="Nombre " >
    
            </div>
       
          </div>
 
 </div>

          --> 
   
  
             <div class="row justify-content-end">
    
   </div> 
    

      <div class="box-body">
       
            <table class="table table-bordered table-striped dt-responsive tablaPro" width="100%" id="Table">
         
       </table>
       
            <table class="table table-bordered table-striped dt-responsive tablaPro" width="100%" id="tablaPros">
         
       </table>
        
       <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%" id="tablaDirectorioProductos">
         
        <thead>
         
           <tr>
           <th><h4 class="display-3">ACCIONES</h4></th>
            <th><h4 class="display-3">IMAGEN</h4></th>
           <th><h4 class="display-3">CODIGO PRODUCTO</h4></th>
           <th><h4 class="display-3">NOMBRE PRODUCTO</h4></th>
           <th><h4 class="display-3" >CODIGO PROVEEDOR</h4></th>
            <th><h4 class="display-3" >NOMBRE PROVEEDOR</h4></th>
            <th><h4 class="display-3">MARCA</h4></th>
            <th><h4 class="display-3">NOTAS</h4></th>
            <th><h4 class="display-3">FECHA REGISTRO</h4></th>
             <th><h4 class="display-3">FICHA</h4></th>
         </tr> 

        </thead>      

       </table>

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

 <div id="modalConsultaIndividualDirPro" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

    

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Consulta Individual De Producto</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


              
              
              
              <legend>Codigo Producto<!--- ENTRADA DE CODIGO PRODUCTO-->
               
		
 			</legend><div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="CodigoProductoCon" name="CodigoProductoCon" placeholder="Codigo del producto" readonly>

              </div>

            </div>
			<!--- ENTRADA DE CORREO EDT-->
		<legend>Nombre Producto</legend>
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="NombreProductoCon" name="NombreProductoCon" placeholder="Nombre Producto" readonly>

              </div>

            </div>

	<!--- ENTRADA DE EXTENCION EDT-->
		<legend>Codigo Proveedor</legend>
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="CodigoProverdorCon" name="CodigoProverdorCon" placeholder="Codigo Proveedor" readonly>

              </div>

            </div>

	<!--- ENTRADA DE CELULAR EDT-->
		<legend>Nombre Proveedor</legend>
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="NombreProveedorCon" name="NombreProveedorCon" placeholder="Nombre Proveedor " readonly>

              </div>

            </div>
            
            <!--- ENTRADA DE CELULAR EDT-->
		<legend>Marca</legend>
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="marcaCon" name="marcaCon" placeholder="Carca Producto" readonly>

              </div>

            </div>
            
            
                       <!--- ENTRADA DE CELULAR EDT-->
		<legend>Notas</legend>
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

              <textarea class="form-control input-lg" id="notaCon" name="notaCon" rows="5" readonly></textarea>
              </div>

            </div>
            
                       
                       <!--- ENTRADA DE CELULAR EDT-->
		<legend>Fecha Registro</legend>
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="FechaRegistroCon" name="FechaRegistroCon" placeholder="Fecha Registro" readonly>

              </div>

            </div>  
            
            
      
		   
            <!-- ENTRADA PARA SUBIR FOTO -->
<legend>Imagen del Producto</legend>
             <div class="form-group">
              
              
              <center><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="300px"  id="img_produc_consult" ></center>

              <input type="hidden" name="imagenActual" id="imagenActual" >

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

           

        </div>

             

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR PRODUCTO
======================================-->
 

 <div id="modalAdmProveerdor" class="modal fade bd-example-modal-lg" role="dialog">
  
  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Proveedor</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            
            
            
            <div class="box-header with-border">

 
 
                <div class="form-group col-md-3">
                    <label for="inputZip">Parametro de Busqueda</label>      

                    <div class="input-group">




                        


                        <select name="cmb_parametro_proveedor" id="cmb_parametro_proveedor" class="form-control  input-lg" onChange=" "  >
      <option value="">- Seleccione -</option>
      <option value="1"> Codigo Proveedor </option>     
      <option value="2"> Nombre Proveedor </option>     
                                              
          </select>

 


                    </div>

                </div>





                <div class="form-group col-md-3">
                    <label for="inputZip">Instruccion</label>            

                    <div class="input-group">




                       



                        <input type="text" class="form-control input-lg" id="val_parametro_proveedor" name="val_parametro_proveedor" placeholder="Nombre Proveedor"   >



 
                    </div>

                </div>
               


 
            </div>
            
            
            
            
             
 <button type="button" class="btn btn-primary" name="botonConsultaTras" id="botonConsultaTras" onClick="consulta_proveedor_adm()" >Consultar</button>
           

          </div>

        </div>




<table class="table table-bordered table-striped dt-responsive tablaTransportadora" width="100%" id="tablaAdmProveedor">

                        <thead>

                            <tr>
                                <th>Acciones</th>
                                
                                <th>Codigo Proveedor</th>
                                <th>Nombre Proveedor</th> 


                            </tr> 

                        </thead>      

                    </table>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

         
 

        </div>
 
      
    </div>

  </div>

</div>
 
 
 
 
 
 
 
 
 <!--Detalle consulta-->
 
 
 
 
 
 
 <!--Detalle consulta-->
 
 
 
 