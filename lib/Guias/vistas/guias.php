   <body>

 
 <script>
    $(document).ready(function () {
     
   
   
   $('.popover-dismiss').popover({
  trigger: 'focus'
})
      
  
    });
 
 </script>
 
 
<script>
    $(document).ready(function () {
     
   
   
   $("#PVD_CODA").popover({placement: 'right', html: true, trigger: 'clic', title: 'Codigo de la transportista: ', content: '<p>Consulte aqui por el codigo de la transportista</p>'});
      
  
  
    
   $("#MDE_PLAC").popover({placement: 'right', html: true, trigger: 'focus', title: 'Guia despacho de transportadora: ', content: ' Consulte aqui por el codigo de la transportista '});
      
	  
  
   $("#MDE_NGUI").popover({placement: 'right', html: true, trigger: 'clic', title: 'Numero interno de guia: ', content: ' Consulte aqui por el numero interno de la guia en seven '});
      	  
  
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
    
    <h1>
      
      Guias Generadas En Seven
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="Central.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administracion de Guias</li>
    
    </ol>

  </section>

  <section class="content">
 
   
  
    <div class="box">

      <div class="box-header with-border">
  
           <div class="form-row">
            <div class="form-group col-md-3">
                
              <label for="inputCity">CODIGO DE TRANSPORTISTA</label>
                 <input type="text" class="form-control input-lg" id="PVD_CODA" name="PVD_CODA" placeholder="PVD_CODA" >

              
            </div>
            <div class="form-group col-md-3">
              
              <label for="inputState">GUIA(PLACA) </label>
                <input type="text" class="form-control input-lg" id="MDE_PLAC" name="MDE_PLAC" placeholder="MDE_PLAC" >
    
            </div>
            <div class="form-group col-md-3">
              
              <label for="inputZip">NUMERO DE GUIA-SEVEN</label>
           <input type="text" class="form-control input-lg" id="MDE_NGUI" name="MDE_NGUI" placeholder="MDE_NGUI" >

            </div>
          </div>



  
 </div>

           
  <div class="box-body">
     <div class="form-row">
  
  
   
  
  
  <button class="btn btn-primary" onClick="convinacion()" >
           <i class="fa fa-search" aria-hidden="true"></i>
       Consulta Filtros

  </button>
  
  
   
   
 
   
   
   
     </div>
  </div>
  
        
    

      <div class="box-body">
       
            <table class="table table-bordered table-striped dt-responsive tablaPro" width="100%" id="Table">
         
       </table>
       
            <table class="table table-bordered table-striped dt-responsive tablaPro" width="100%" id="tablaPros">
         
       </table>
       
       
       <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%" id="tablaProductos">
         
        <thead>
         
           <tr>
           <th>Acciones</th>
           <th># GUIA</th>
           <th>PLACA</th>
           <th>CODIGO_TRANS</th>
           <th>TRANSPORTISTA_NAME</th>
           <th>PESO</th>
           <th>VALOR_DECLARADO</th>
           <th>VALOR_FLETE</th>
           <th>TARIFA_FIJA</th>
           
           
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

              <p class="help-block">Peso m??ximo de la imagen 2MB</p>

              <center><img src="img/productos/default/anonymous.png" class="img-thumbnail previsualiza" width="300px"></center>

            </div>

          </div>

        </div>
        
        
        <div id="contenedor_consulta">
        
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

              <p class="help-block">Peso m??ximo de la imagen 2MB</p>
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
 


