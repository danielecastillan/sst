   <body>
  <style>
.modal-lg {
       max-width: 80%;
}
  </style>
  
 <script>
    $(document).ready(function () {
 
 consulta_directorio_productos();
	 $('body').on('keydown', '#ProCodiTxbx', function(e) {
    if (e.which == 9) {
         e.preventDefault();
        // do your code
		consulta_tab_cod_productos();
    }
});
  	 $('body').on('keydown', '#CodProveeTbox', function(e) {
    if (e.which == 9) {
         e.preventDefault();
        // do your code
		consulta_tab_cod_proveedor();
    }
});
   
   
   
  $("#image").change(function(){
	  
	  
 //validarImagen();
 validarImagen('image','img_produc_consult_insert');
   
	var imagen = this.files[0];
	
	/*=============================================
  	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
  	=============================================*/

  	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

  		$("#image").val("");

  		 swal({
		      title: "Error al subir la imagen",
		      text: "¡La imagen debe estar en formato JPG o PNG!",
		      type: "error",
		      confirmButtonText: "¡Cerrar!"
		    });

  	}else if(imagen["size"] > 2000000){

  		$("#image").val("");

  		 swal({
		      title: "Error al subir la imagen",
		      text: "¡La imagen no debe pesar más de 2MB!",
		      type: "error",
		      confirmButtonText: "¡Cerrar!"
		    });

  	}else{

 
/*

*/




//ValidarTama();









  		var datosImagen = new FileReader;
  		datosImagen.readAsDataURL(imagen);

  		$(datosImagen).on("load", function(event){

  			var rutaImagen = event.target.result;

  			$("#img_produc_consult_insert").attr("src", rutaImagen);

  		})

  	}
})
   
  $("#imageedt").change(function(){
 validarImagen('imageedt','img_produc_consult_edt');
	var imagen = this.files[0];
	
	/*=============================================
  	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
  	=============================================*/

  	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

  		("#imageedt").val("");

  		 swal({
		      title: "Error al subir la imagen",
		      text: "¡La imagen debe estar en formato JPG o PNG!",
		      type: "error",
		      confirmButtonText: "¡Cerrar!"
		    });
	 
  	}else if(imagen["size"] > 2000000){

  		("#imageedt").val("");

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

  			$("#img_produc_consult_edt").attr("src", rutaImagen);

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
    
  	}else if(imagen["size"] > 2000000){

  		$(".file").val("");

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

  			var rutaImagen = '../directorio_archivos/default/file_pdf.png';

  			$(".card-img-top2").attr("src", rutaImagen);

  		})

  	}
})   
   
   
   
   
   
  $("#fichaedt").change(function(){

	var imagen = this.files[0];
	
	/*=============================================
  	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
  	=============================================*/

  	if(imagen["type"] != "application/pdf" && imagen["type"] != "application/pdf"){

  		$("#fichaedt").val("");

  		 swal({
		      title: "Error al subir el pdf",
		      text: "¡La archivo debe estar en formato PDF!",
		      type: "error",
		      confirmButtonText: "¡Cerrar!"
		    });
 
  	}else if(imagen["size"] > 2000000){

  		$("#fichaedt").val("");

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

  			var rutaImagen = '../directorio_archivos/default/file_pdf.png';
                        
  			$("#imagen_pdf_edt").attr("src", rutaImagen);

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
		
		
 //validacion producto y proveedor
 
  var ProCodiTxbx = $("#ProCodiTxbx").val(); 
      var cod_codi_producto = $("#cod_codi_producto").val(); 
            if(ProCodiTxbx=='' || ProCodiTxbx==' '){
           alert("El codigo de producto se encuentra vacio");
           
              $( "#ProCodiTxbx" ).focus();
              $( "#ProCodiTxbx" ).css("background-color", "#FFFFCC");
              
           return false;
       }
         if(cod_codi_producto!=ProCodiTxbx){
           alert("El codigo del producto no se encuentra vinculado al sistema");
           $( "#ProCodiTxbx" ).focus();
           $( "#ProCodiTxbx" ).css("background-color", "#FFFFCC");
         // $("#contenedor_consulta").html('');
           
           return false;
       }
 
 
 
   var CodProveeTbox = $("#CodProveeTbox").val(); 
      var cod_cod_proveedor = $("#cod_cod_proveedor").val(); 
            if(CodProveeTbox=='' || CodProveeTbox==' '){
           alert("El codigo del proveedor se encuentra vacio");
           
              $( "#CodProveeTbox" ).focus();
              $( "#CodProveeTbox" ).css("background-color", "#FFFFCC");
              
           return false;
       }
         if(cod_cod_proveedor!=CodProveeTbox){
           alert("El codigo del proveedor no se encuentra vinculado al sistema");
           $( "#CodProveeTbox" ).focus();
           $( "#CodProveeTbox" ).css("background-color", "#FFFFCC");
         // $("#contenedor_consulta").html('');
           
           return false;
       }
 
 
 
 
 
 
 
 
 var cadena=nota_producto;

//Cadena sin saltos de linea
var sin_salto = cadena.split("\n").join("");
		
		 formData.append('valor_control_usr','insert');
		 formData.append('cod_codi_producto',cod_codi_producto);
		 formData.append('cod_cod_proveedor',cod_cod_proveedor);
		 formData.append('nombre_marca',nombre_marca);
		 formData.append('nota_producto',sin_salto);
		 
		 $.ajax({
            url: 'lib/Dirproduct/controladores/reg.directorio_prod.puente.controlador.full.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
				// alert("respuesta_"+response);
			 
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
		 alert("Acontinuacion se cargara los archivos, si son muy pesados los archivos espere la alerta de confirmacion de documento adjunto para confirmar el registro del producto");
     //return false;
	  
	 
	 
		 });
   
   
    
   
   
      $("#update_frm_dir_prod").on('click', function() {
	  
	  // alert("Entro a boton actualizar");
	// return false;
	  	var formData = new FormData(form_edt);
                var image = $('#imageedt')[0].files[0];
				
			
				
				
                formData.append('img',image);
		
		var file = $('#fichaedt')[0].files[0];
		formData.append('file',file);
		
		//var modval= "modalAgregarUsuarioprueba";
		 var response= "";
		
		var cod_codi_producto= $("#CodigoProductoConEdt").val();
		var cod_cod_proveedor= $("#CodigoProverdorConEdt").val();
		var nombre_marca= $("#marcaConEdt").val();
		var nota_producto= $("#notaConEdt").val();
		var codigo_dir_pro = $("#codigo_dir_pro").val();
		
		
        var ruta_img_ant=  $("#hdn_img_produc_pre").val();
        var ruta_ficha_ant=  $("#hdn_fich_produc_pre").val();
 
 /*
		alert("ruta_img_ant_"+ruta_img_ant);
		alert("ruta_ficha_ant_"+ruta_ficha_ant);
	*/	
		
		 formData.append('valor_control_usr','update');
		 formData.append('cod_codi_producto',cod_codi_producto);
		 formData.append('cod_cod_proveedor',cod_cod_proveedor);
		 formData.append('nombre_marca',nombre_marca);
		 formData.append('nota_producto',nota_producto);
		 
		 formData.append('ruta_img_ant',ruta_img_ant);
		 formData.append('ruta_ficha_ant',ruta_ficha_ant);
		 formData.append('codigo_dir_pro',codigo_dir_pro);
		 
		// alert("codigo_dir_pro_"+codigo_dir_pro);
		 $.ajax({
            url: 'lib/Dirproduct/controladores/reg.directorio_prod.puente.controlador.full.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
				// alert("respuesta_"+response);
			 
                if (response != 0) {
                   // $(".card-img-top").attr("src", response);
					 if (response == 9) {
						  
						  alert("Registro Actualizado");
						  
						 CierraPopup("modalConsulIndDirProEdt");
			 		consulta_directorio_productos_update();
					/*
					var datosImagen = new FileReader;
			 		var imagen2 = $('#imageedt')[0].files[0];
  					datosImagen.readAsDataURL(imagen2);
		
		var rutaImagen = event.target.result;
*/
  			//$(".card-img-top0").attr("src", rutaImagen);
		
		
		/*
		var imagen2 = $('#imageedt')[0].files[0];
		
			var datosImagen = new FileReader;
  		datosImagen.readAsDataURL(imagen2);

  		$(datosImagen).on("load", function(event){

  			var rutaImagen = event.target.result;        
  	 
		  $("#"+codigo_dir_pro).attr("src", rutaImagen);

  		})
		*/
		
		
		
		
		
		 	
					
						 //llamado_directorio_producto();
						 //llamado_directorio_producto();
						  //  llamado_usuarios();
	   						//CierraPopup(modval);
						 }
					
                } else {
                    alert('Formato de imagen incorrecto.');
                }
            }
        });
		 alert("Acontinuacion se cargara los archivos, si son muy pesados los archivos espere la alerta de confirmacion de documento adjunto para confirmar el registro del producto");
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
 
    <div class="form-group col-md-9">
 
  <button class="btn btn-primary" onClick="mostrar_registro_dir_prod()" id="btn_agregar_form_reg" >
          <i class="fa fa-plus-square" aria-hidden="true"></i>
       Agregar Producto a Directorio

  </button>
   
   
     <button class="btn btn-primary" onClick="ocultar_registro_dir_prod()" id="btn_coultar_form_reg" style="display:none;">
          <i class="fa fa-plus-square" aria-hidden="true"></i>
     Ocultar Formulario

  </button>
   
   
 
  </div>
 </div>


<div id="contenedor_seccion_producto" style="display:block;">
              
       
    
 
 
 
 
 
 <!-- Contenidos Add producto-->
 
 
 
 <div class="box-header with-border">

 

<input type="hidden" value="" id="cod_codi_producto" /> 
 
<div class="form-group col-md-3">
                    <label for="inputZip">Codigo Producto  
                    
 
                    
                    </label>
                    <div class="input-group">




                        


                        <input type="text" class="form-control input-lg" id="ProCodiTxbx" name="ProCodiTxbx" placeholder="Codigo Del Producto"    >

 


                    </div>

                </div>






                <div class="form-group col-md-6">
                    <label for="inputZip">Nombre Producto</label>

                    <div class="input-group">




                        


                        <input type="text" class="form-control input-lg" id="ProNombTxBox" name="ProNombTxBox" placeholder="Nombre Del Producto"   readonly>

<span class="input-group-addon">
    <button class='btn btn-default btnCantCiru'    onclick='' data-toggle='modal' data-target='#modalAdmProducto'><i class="fa fa-search" aria-hidden="true"></i></button>
      
    </span>


                    </div>

                </div>
                
                
                
              
                

</div>
 
 
 <div class="box-header with-border">

 

<input type="hidden" value="" id="cod_cod_proveedor" />
 
 
<div class="form-group col-md-3">
                    <label for="inputZip">Codigo Proveedor</label>
                    <div class="input-group">




                        


                        <input type="text" class="form-control input-lg" id="CodProveeTbox" name="CodProveeTbox" placeholder="Codigo del Proveedor"    >

 


                    </div>

                </div>






                <div class="form-group col-md-6">
                    <label for="inputZip">Nombre Proveedor</label>

                    <div class="input-group">




                        


                        <input type="text" class="form-control input-lg" id="NomProveTbx" name="NomProveTbx" placeholder="Nombre Del Proveedor"   readonly>

<span class="input-group-addon">
    <button class='btn btn-default btnCantCiru'    onclick='' data-toggle='modal' data-target='#modalAdmProveerdor'><i class="fa fa-search" aria-hidden="true"></i></button>
      
    </span>


                    </div>

                </div>
                
                
                
              
                

</div>
 
 <!--Fin-->
 
 
 
 
 
 
 
 
    
      <form method="post" id="form_reg" action="#" enctype="multipart/form-data" >
         <input type="hidden" id="valor_control_usr" name="valor_control_usr" value="insert"> 
      <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Marca
              <input type="text" class="form-control input-lg" id="nombre_marca" name="nombre_marca" placeholder="Marca del Producto" >
            </div>
          
          </div>



  
 </div> 
      
       
       
   <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Nota:
              <textarea class="form-control input-lg" id="nota_producto" name="nota_producto" rows="5"></textarea>
            </div>
          
          </div>

 
  
 </div>      
 
  

 
 
   <div class="box-header with-border">
   			<div class="form-row">
            <div class="form-group col-md-4">
               <label for="image">Adjuntar Ficha del Producto</label>
                <input type="file" class="form-control-file file" name="ficha" id="ficha">
                   
            
            
             <p class="help-block">Peso máximo del archivo 10MB</p>
             <img src="../directorio_archivos/default/file_images.png"  class="card-img-top2"  width="100px"></div>
            </div>
            </div>

 
 <div class="box-header with-border">
   			<div class="form-row">
            <div class="form-group col-md-4">
               <label for="image">Adjuntar Imagen del Producto</label>
               <input type="file" class="form-control-file image" name="image" id="image">
              
              
              
    <p class="help-block">Peso máximo de la foto 2MB</p>

              <img src="../directorio_archivos/default/product.png"  class="card-img-top0" id="img_produc_consult_insert"  width="100px">                  
            </div>
            </div>
            </div>
 
 
    </form>          
              
              </div>
             
             
             
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
  <div class="box-body">
     <div class="form-row">
  
  
   
    <div class="form-group col-md-9">
  
  <button class="btn btn-primary" onClick="convinacion()"  style="display:none;">
           <i class="fa fa-search" aria-hidden="true"></i>
       Consultar

  </button></div>
 
     </div>
  </div>
  
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
           <th width="100px"><h4 class="display-3" >ACCIONES</h4></th>
            <th><h4 class="display-3">IMAGEN</h4></th>
           <th><h4 class="display-3">CODIGO PRODUCTO</h4></th>
           <th><h4 class="display-3">NOMBRE PRODUCTO</h4></th>
           <th><h4 class="display-3" >CODIGO PROVEEDOR</h4></th>
            <th><h4 class="display-3" >NOMBRE PROVEEDOR</h4></th>
            <th><h4 class="display-3">MARCA</h4></th>
            <th><h4 class="display-3">NOTAS</h4></th>
        <!--    <th><h4 class="display-3">FECHA REGISTRO</h4></th>-->
             <th><h4 class="display-3">FICHA TECNICA</h4></th>
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






<div id="modalConsulIndDirProEdt" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

    

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Edicion De Producto </h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


              
              <input type="hidden" name="codigo_dir_pro" id="codigo_dir_pro" >
              
              <legend>Codigo Producto<!--- ENTRADA DE CODIGO PRODUCTO-->
               
		
 			</legend><div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="CodigoProductoConEdt" name="CodigoProductoConEdt" placeholder="Codigo del producto" readonly>

              </div>

            </div>
			<!--- ENTRADA DE CORREO EDT-->
		<legend>Nombre Producto</legend>
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="NombreProductoConEdt" name="NombreProductoConEdt" placeholder="Nombre Producto" readonly>

              </div>

            </div>

	<!--- ENTRADA DE EXTENCION EDT-->
		<legend>Codigo Proveedor</legend>
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="CodigoProverdorConEdt" name="CodigoProverdorConEdt" placeholder="Codigo Proveedor" readonly>

              </div>

            </div>

	<!--- ENTRADA DE CELULAR EDT-->
		<legend>Nombre Proveedor</legend>
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="NombreProveedorConEdt" name="NombreProveedorConEdt" placeholder="Nombre Proveedor " readonly>

              </div>

            </div>
            
            <!--- ENTRADA DE CELULAR EDT-->
		<legend>Marca</legend>
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="marcaConEdt" name="marcaConEdt" placeholder="Carca Producto" readonly>

              </div>

            </div>
            
            
                       <!--- ENTRADA DE CELULAR EDT-->
		<legend>Notas</legend>
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

              <textarea class="form-control input-lg" id="notaConEdt" name="notaConEdt" rows="5" readonly></textarea>
              </div>

            </div>
            
                       
                       <!--- ENTRADA DE CELULAR EDT-->
		<legend>Fecha Registro</legend>
 			<div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="FechaRegistroConEdt" name="FechaRegistroConEdt" placeholder="Fecha Registro" readonly>

              </div>

            </div>  
            
          
          <form method="post" id="form_edt" action="#" enctype="multipart/form-data" >
         <input type="hidden" id="valor_control_usr" name="valor_control_usr" value="update"> 
           
         <input type="hidden" id="hdn_img_produc_pre" name="hdn_img_produc_pre" value=""> 
        <input type="hidden" id="hdn_fich_produc_pre" name="hdn_fich_produc_pre" value=""> 
         
         
            
      <legend>Ficha</legend>
 			
            
            <div class="form-group">
              
              <div class="input-group">
               <input type="file" class="form-control-file file" name="fichaedt" id="fichaedt">
               
               
               
               <img src="../directorio_archivos/default/product.png"   id="imagen_pdf_edt" width="100px">
               
               
             
 <div class='btn-group' id="div_ficha_edt"> </div>
             
              </div>

            </div>
            
		   
            <!-- ENTRADA PARA SUBIR FOTO -->
<legend>Imagen del Producto</legend>

<label for="image">Adjuntar Imagen del Producto</label>
               <input type="file" class="form-control-file image" name="imageedt" id="imageedt">



             <div class="form-group">
              
              
              <center><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="300px"  id="img_produc_consult_edt" ></center>

              <input type="hidden" name="imagenActual" id="imagenActual" >

            </div>
</form>

 <div class="form-group">
              
             <button class="btn btn-primary"   id="update_frm_dir_prod"  >
           <i class="fa fa-floppy-o" aria-hidden="true"></i>
       Actualizar
             </button>  
       
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
MODAL AGREGAR PRODUCTO
======================================-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">
  
  <div class="modal-dialog modal-lg">

    <div class="modal-content">
 

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
<input type="hidden" value="insert" id="valor_control" name="valor_control">
        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Registro de Productos</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


          

			<!--- ENTRADA DE NOMBRE--><!--- ENTRADA DE CORREO--><!--- ENTRADA DE EXTENCION--><!--- ENTRADA DE CELULAR--><!--- ENTRADA DE Fecha nacimiento--><!--- ENTRADA DE CARGO--><!--- ENTRADA DE AREA--><!--- ENTRADA DE CIUDAD--><!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
               

            

            </div>

          </div>

        </div>
        
        
        <div id="contenedor_consulta">
        
 
 
 
 
      <input type="hidden" id="valor_control_usr" name="valor_control_usr" value="insert">    
    
 
      
         <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Seleccione Curso
              <select name="id_consulta_cursos_cmb" id="id_consulta_cursos_cmb" class="form-control input-lg" onChange="consulta_combo_modulos()"   >
                <option value="">- Seleccione -</option>
                 
                
              </select>
            </div>
          
          </div>

 
  
 </div>     
        <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Seleccione Modulo
              <select name="id_consulta_modulos_cmb" id="id_consulta_modulos_cmb" class="form-control input-lg"    >
                <option value="">- Seleccione -</option>
                 
                
              </select>
            </div>
          
          </div>

 
  
 </div>  
      
      <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Nombre de la Leccion
              <input type="text" class="form-control input-lg" id="nombre_leccion" name="nombre_leccion" placeholder="nombre de leccion" >
            </div>
          
          </div>



  
 </div> 
      
       
       
   <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Descripcion de la Leccion 
           <textarea class="form-control input-lg" id="descripcion_leccion" name="descripcion_leccion" rows="3"></textarea>
            </div>
          
          </div>

 
  
 </div>      
 
  <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">
            
            
                <label for="image">Nueva imagen</label>
                <input type="file" class="form-control-file image" name="image" id="image">
                
                 <p class="help-block">Peso máximo de la foto 2GB</p>

           
            </div>
            
            </div>
          
          </div>
 
 
 
 
 
 
        
        </div>
        

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
 
          
         

        </div>

     
     
     
     
    <!---Sub contenedor --></div>

  </div>
</div>
 
<div id="modalAdmProducto" class="modal fade" role="dialog">
  
  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Consulta Producto</h4>

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




                        


      <select name="cmb_parametro_prod" id="cmb_parametro_prod" class="form-control  input-lg" onChange=" "  >
      <option value="">- Seleccione -</option>
      <option value="1"> Codigo Producto </option>     
      <option value="2"> Nombre Producto </option>     
  	  </select>

 


                    </div>

                </div>





                <div class="form-group col-md-3">
                    <label for="inputZip">Instruccion</label>            

                    <div class="input-group">




                       



                        <input type="text" class="form-control input-lg" id="val_parametro_prod" name="val_parametro_prod" placeholder="Parametro Producto"   >



 
                    </div>

                </div>
               


 
            </div>
            
            
            
            
             
 <button type="button" class="btn btn-primary" name="botonConsultaTras" id="botonConsultaTras" onClick="consulta_productos_adm()" >Consultar</button>
           

          </div>

        </div>




<table class="table table-bordered table-striped dt-responsive tablaTransportadora" width="100%" id="tablaListAdmProduc">

                        <thead>

                            <tr>
                                <th>Acciones</th>
                                
                                <th>Codigo Producto</th>
                                <th>Nombre Producto</th> 


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
 
 
 
 