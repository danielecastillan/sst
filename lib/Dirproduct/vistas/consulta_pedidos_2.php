   <body>
  <style>
.modal-lg {
       max-width: 80%;
}
  </style>
 
 <script>
    $(document).ready(function () {
     
   
 consulta_punto_venta();
  
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
      
      Consulta de productos por Numero y punto de venta</h1>

    <ol class="breadcrumb">
      
      <li> <i class="fa fa-dashboard"></i>       <label for="inputZip">Punto de Venta</label>
         <select name="punto_venta" id="punto_venta" class="form-control  " onChange=" "  >
                                                        <option value="">- Seleccione -</option>
                                                    </select></li>
      
       
    
    </ol>


<div>&nbsp;</div>
  </section>

  <section class="content">
 
   
  
    <div class="box">

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

           
  <div class="box-body">
     <div class="form-row">
  
  
   
    <div class="form-group col-md-9">
  
  <button class="btn btn-primary" onClick="convinacion()" >
           <i class="fa fa-search" aria-hidden="true"></i>
       Consultar

  </button></div>
    <div class="form-group col-md-2">
 <button class="btn btn-primary float-left" onClick="" data-toggle='modal' data-target='#modalagregarcarrito' >
        <i class="fa fa-calculator" aria-hidden="true"></i>
       Calcular

  </button>
 
   
   </div>
   
     </div>
  </div>
  
         <div class="row justify-content-end">
    
   </div> 
    

      <div class="box-body">
       
            <table class="table table-bordered table-striped dt-responsive tablaPro" width="100%" id="Table">
         
       </table>
       
            <table class="table table-bordered table-striped dt-responsive tablaPro" width="100%" id="tablaPros">
         
       </table>
        
       <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%" id="tablaProductos">
         
        <thead>
         
           <tr>
           <th><h3 class="display-3">ACCIONES</h3></th>
           <th><h3 class="display-3">CODIGO PRODUCTO</h3></th>
           <th><h3 class="display-3">NOMBRE PRODUCTO</h3></th>
           <th><h3 class="display-3" align="center" >PRECIO PRDUCTO</h3></th>
           
            <th><h3 class="display-3">CANTIDAD</h3></th>
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

          <h4 class="modal-title">Detalle Lotes y Cantidades</h4>

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
        
        <table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%" id="tablaProductos2">
         
        <thead>
         
           <tr>
           <!--<th>ACCIONES</th>-->
           <th><h3 class="display-3">CODIGO PRODUCTO</h3></th>
           <th><h3 class="display-3">LOTE NUM</h3></th>
           <th><h3 class="display-3">  CANTIDAD</h3></th>
           
           
         </tr> 

        </thead>      

       </table>
        
        </div>
        

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
 
          
         

        </div>

      </form>

     
     
     
    <!---Sub contenedor --></div>

  </div>

</div>

 
<!--=====================================
MODAL EDITAR PRODUCTO
======================================-->
 

<div id="modalagregarcarrito" class="modal fade" role="dialog">
  
  <div class="modal-dialog modal-lg">

    <div class="modal-content">

   

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
<input type="hidden" value="insert" id="valor_control" name="valor_control">
        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Productos Seleccionadossss</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


          

			<!--- ENTRADA DE NOMBRE--><!--- ENTRADA DE CORREO--><!--- ENTRADA DE EXTENCION--><!--- ENTRADA DE CELULAR--><!--- ENTRADA DE Fecha nacimiento--><!--- ENTRADA DE CARGO--><!--- ENTRADA DE AREA--><!--- ENTRADA DE CIUDAD--><!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
               

            
<div id="contenedor_consulta">
      <div id="conten_tabla">           
        <table class="table table-bordered table-striped dt-responsive tablacarrito" width="100%" id="tablacarrito">

        <thead>
         
           <tr>
           <!--<th>ACCIONES</th>-->
            <th><h4 class="display-4">OPC</h4></th>
           <th><h4 class="display-4">CODIGO PRODUCTO</h4></th>
           <th><h4 class="display-4">NOMBRE </h4></th>
            <th><h4 class="display-4" >  PRECIO PRODUCTO</h4></th>
           <th><h4 class="display-4">  CANTIDAD</h4></th>
            <th><h4 class="display-4">  VALOR TOTAL</h4></th>
           
           
         </tr> 

        </thead>      

       </table>
        </div>
           <div class="form-group col-md-3">
              
              <label for="inputState"><h4 class="display-3">Valor Productos Seleccionados </h4></label>
                <input type="text" class="form-control input-lg" id="productos_seleccionados" name="productos_seleccionados" placeholder="productos_seleccionados " >
    
            </div>
            
            
            <div class="row">
             <div class="form-group col-md-3">
              
              <label for="inputState">
              <h4 class="display-3"> </h4></label>
               
                
                
            </div>
            
            </div>
            
            
            
            
            
            
            
                        <!--inicio formulario-->
            
            
            
            
            
            <!--inicio formulario-->
            
            <div id="bloque_formulario_cliente" style="display:bloc">
             <div class="row">
                <div class="box-header with-border">
               <div class="form-group col-md-3">
               <label for="inputZip">Datos Basicos del Cliente</label>   </div></div></div>
 
          <div class="row">
               <div class="box-header with-border">
            <div class="form-group col-md-3">
                     <label for="inputZip"> Cedula</label>     
                    <div class="input-group">
                          
                    <input type="text" class="form-control input-lg" id="cedula_cliente"  placeholder="cedula " onKeyUp="llamado_por_cedula3()">
                    <input type="hidden" id="cod_cliente" value="">
                    </div></div> 

  

               <div class="form-group col-md-3">
                    <label for="inputZip"> Tipo de Documento</label>            

                    <div class="input-group">
  <select name="tipo_identificacion" id="tipo_identificacion" class="form-control  " onChange="valida_digito_verificacion()"  >
   <option value="">- Seleccione -</option>
   <option value="C">Cedula de Ciudadania</option>
   <option value="N">NIT</option>
   <option value="E">Cedula de Extranjeria</option>
      </select>
                   </div>

                </div>




                <div class="form-group col-md-3" id="secc_digito_verificacion" style="display:none">
                    <label for="inputZip"> Digito de Verificacion</label>            

                    <div class="input-group">
  <input type="text" class="form-control input-lg" id="digvercliente" name="digvercliente" placeholder="digito de verificacion" >
 
                    </div>

                </div>

            </div>
            </div>
            
            <div class="row">

              <div class="box-header with-border">




                <div class="form-group col-md-3">
                    <label for="inputZip"> Nombres</label>            

                    <div class="input-group">

  <input type="text" class="form-control input-lg" id="nombrescliente" name="nombrescliente" placeholder="nombre" >

 
                    </div>

                </div>
                  
                    <div class="form-group col-md-3">
                    <label for="inputZip"> Apellidos</label>            

                    <div class="input-group">

  <input type="text" class="form-control input-lg" id="apellidocliente" name="apellidocliente" placeholder="apellidos" >

 
                    </div>

                </div>

            </div>    </div> 
    
    
    <div class="row">

              <div class="box-header with-border">


                   <div class="form-group col-md-8">
                    <label for="inputZip"> Direccion</label>            

                    <div class="input-group col-md-8">

  <input type="text" class="form-control input-lg" id="direccioncliente" name="direccioncliente" placeholder="Direccion" >

 
                    </div>

                </div>

            </div>    </div>
                
            <div class="row">

              <div class="box-header with-border">


                   <div class="form-group  col-md-8">
                    <label for="inputZip"> Telefono</label>            

                    <div class="input-group col-md-8">

  <input type="text" class="form-control input-lg" id="telefonocliente" name="telefonocliente" placeholder="Telefono " >

 
                    </div>

                </div>

            </div>    </div>      
                
                           <div class="row">

              <div class="box-header with-border">


                   <div class="form-group  col-md-8">
                    <label for="inputZip"> Correo</label>            

                    <div class="input-group  col-md-8" >

  <input type="text" class="form-control input-lg" id="correocliente" name="correocliente" placeholder="Telefono " >

 
                    </div>

                </div>

            </div>    </div>      

               </div> 
            
           
            
            
            <!--Fin formulario-->
            
            
            <div id="bloque_formulario_vendedor" style="display:block">
             <div class="row">
                <div class="box-header with-border">
               <div class="form-group col-md-3">
               <label for="inputZip">Datos del Vendedor</label>   </div></div></div>
 
          
               
            <div class="form-group col-md-3">
                     <label for="inputZip"> Cedula</label>     
                    <div class="input-group">
                          
                    <input type="text" class="form-control input-lg" id="cedula_vendedor"  placeholder="cedula " onKeyUp="llamado_cc_vendedor()" >
                    
                    </div></div>

  <div class="row">

            <div class="box-header with-border">




                <div class="form-group col-md-8">
                    <label for="inputZip"> Nombres</label>            

                    <div class="input-group col-md-8">
  <input type="text" class="form-control input-lg" id="nombre_vendedor" name="nombre_vendedor" placeholder="nombre" >
 
                    </div>

                </div>

            </div>
            </div>
            </div>
            
            
            
       
        </div>
            </div>

          </div>

        </div> 
        
        
       
             

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
 
 
 
         <button type="button" class="btn btn-default pull-left" id="button_cliente" onClick="muestra_botones_cliente_vendedor()" >  Cliente/Vendedor</button>
                 <button type="button" class="btn btn-default pull-left" id="ocultar_button_cliente" onClick="oculta_botones_cliente_vendedor()" style="display:none">  Cliente/Vendedor</button>
 
 
 
 
 
 <div id="div_button_guarda_cli_ven" style="display:none">     <button type="button" class="btn btn-default pull-left" id="button_guarda_cli_ven" onClick="registrar_cliente()"  > Guardar  </button></div>
 <div id="div_button_update_cli_ven" style="display:none" >     <button type="button" class="btn btn-default pull-left" id="button_update_cli_ven" onClick="actualizar_cliente()" > Actualizar</button>
 </div>
 
  
 
 
          
          <button type="button" class="btn btn-default pull-right"  onClick="limpiar_tabla();">Limpiar</button>

        </div>

     

     
     
     
    <!---Sub contenedor --></div>

  </div>

</div>
 
 
 
 
 
 
 <!--Detalle consulta-->
 
 
 
 
 
 
 <!--Detalle consulta-->
 
 
 
 <div id="modallistvalores" class="modal fade" role="dialog">
  
  <div class="modal-dialog modal-lg">

    <div class="modal-content">

   

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->
<input type="hidden" value="insert" id="valor_control" name="valor_control">

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Detalle de Valores</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


          

			<!--- ENTRADA DE NOMBRE--><!--- ENTRADA DE CORREO--><!--- ENTRADA DE EXTENCION--><!--- ENTRADA DE CELULAR--><!--- ENTRADA DE Fecha nacimiento--><!--- ENTRADA DE CARGO--><!--- ENTRADA DE AREA--><!--- ENTRADA DE CIUDAD--><!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
               

            
<div id="contenedor_consulta">
      <div id="conten_tabla">           
        <table class="table table-bordered table-striped dt-responsive tablacarrito" width="100%" id="tablavalores">

        <thead>
         
           <tr>
           <!--<th>ACCIONES</th>-->
           
           <th><h4 class="display-4">CODIGO PRODUCTO</h4></th>
           <th><h4 class="display-4">NOMBRE </h4></th>
            <th><h4 class="display-4"> VALOR BASE </h4></th>
           <th><h4 class="display-4"> VALOR IVA</h4></th>
            <th><h4 class="display-4" >  VALOR TOTAL</h4></th>
           
           
         </tr> 

        </thead>      

       </table>
        </div>
           <div class="form-group col-md-3">
              
             
            </div>
       
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