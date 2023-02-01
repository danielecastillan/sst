   <body>
 
 
 
 <script>
    $(document).ready(function () {
     
   
 consulta_de_personal();
 
 
  $("#numero_registrohoras_div").css("display","none");
  $("#numero_registroempleado_div").css("display","none"); 
  $("#num_orden_div").css("display","none"); 
  
    });
 
 </script>
 
 
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
             
            <div class="form-group col-md-4">Filtro de busqueda
              <select name="filtro_busqueda" id="filtro_busqueda" class="form-control input-lg" onChange="filtros_busqueda_horas()"  >
                <option value="">- Seleccione -</option>
                 <option value="1">- Numero Registro de Horas / Empleados -</option>
                 <option value="2">- Numero de Orden OM -</option>
                
              </select>
            </div>
          
          </div>



  
 </div>
      
      
      
<div class="box-header with-border">
  
           <div class="form-row">
            <div class="form-group col-md-3" id="numero_registrohoras_div">
                
              <label for="inputCity">NUMERO DE REGISTRO DE HORAS</label>
                 <input type="text" class="form-control input-lg" id="HOR_NUME" name="HOR_NUME" placeholder="HOR_NUME" >

              
            </div>
            <div class="form-group col-md-4" id="numero_registroempleado_div">EMPLEADO
              <select name="nombre_empleado" id="nombre_empleado" class="form-control input-lg" onChange=" "  >
                <option value="">- Seleccione -</option>
              </select>
            </div>
            
           
            
            <div class="form-group col-md-3" id="num_orden_div"  >
                      <label for="inputCity">NUMERO DE ORDEN</label>
                 <input type="text" class="form-control input-lg" id="NUM_ORDEN" name="NUM_ORDEN" placeholder="NUM_ORDEN" >
          </div>
          
          
            
            
          </div>



  
 </div>

      <div class="box-body">
        <div class="form-row">
  
  
 
  
   <button class="btn btn-primary" onClick="valida_consulta()" >
          
         Consultar

        </button>
      
   
     </div>
</div>
  
        
    

      <div class="box-body">
        
        
        <div id="contenedor_consulta">
          <legend>Consulta Detalla De Guia</legend>
        <table class="table table-bordered table-striped dt-responsive" width="100%" id="tablet">
         
        <thead>
         
           <tr>
           <th><h4 class="display-3">Acciones</h4></th>
           <th  ><h4 class="display-3">Numero</h4></th>
            <th><h4 class="display-3">Numero tikete</h4></th>
           <th><h4 class="display-3">Nombre</h4></th>
           <th><h4 class="display-3">Fecha</h4></th> 
           
           <th><h4 class="display-3">Fecha Aplicacion</h4></th>
             <th><h4 class="display-3">Observaciones</h4></th>
           <th><h4 class="display-3">Estado</h4></th>
           
           
         </tr> 

        </thead>      

       </table>
        
        
        
        </div>
        
 

      </div>

    </div>

  </section>
  </div>
</div>  

<!---Editar prueba adjunto---><!--=====================================
MODAL Estado Horas
======================================-->


<div id="modalEditarEstado" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      
        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Estado de Hora</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
                <label for="inputZip">Estado</label>
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-houzz"></i></span> 
 <select name="estado_hora" id="estado_hora" class="form-control  " onChange=" "  >
      <option value="">- Seleccione -</option>
      <option value="G"> Grabado </option>     
      <option value="A"> Aplicado </option>     
      <option value="I"> Inactiva </option>                                             
          </select>
          
          <input type="hidden" id="id_hord_cont" value="">
              </div>

            </div>

      

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="button" onClick="ActualizarEstadoHora()" class="btn btn-primary">Modificar Estado</button>


 
        </div>
 
      

    </div>

  </div>

</div>








<!--=====================================
MODAL  
======================================--><!--=====================================
MODAL EDITAR PRODUCTO
======================================-->
 


