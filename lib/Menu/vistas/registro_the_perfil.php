   <body>
 
 
 
 <script>
    $(document).ready(function () {
     
   
 
 //consulta_de_perfiles();
 // consulta_de_menu_padre();
//  consulta_menu_detalle()
  consulta_list_perfil();
    });
 
 </script>
 
 
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Registro de Perfiles</h1>

    <ol class="breadcrumb">
      
      <li><a href="Central.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administracion de Perfiles</li>
    
    </ol>

  </section>

  <section class="content">
 
   
  
    <div class="box">



<label>
<h3>
      Registro Menu</h3>
      </label>
      <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Nombre del Perfil
              <input type="text" class="form-control input-lg" id="nombre_perfil" name="nombre_perfil" placeholder="nombre de perfil" >
            </div>
          
          </div>



  
 </div>
      
      
      
      
        <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Descripcion del Perfil
              <input type="text" class="form-control input-lg" id="descripcion_perfil" name="descripcion_perfil" placeholder="nombre de perfil" >
            </div>
          
          </div>



  
 </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
  
      
      
      
      
      
<div class="box-header with-border">
  
           <div class="form-row">
       
           
 
          
          
            
            
          </div>



  
 </div>

      <div class="box-body">
        <div class="form-row">
  
  
 <button class="btn btn-primary" onClick="registro_the_perfil()" >
          Registro
         

        </button>
  
      
   
     </div>
</div>
  
        
    

      <div class="box-body">
        
        
        <div id="contenedor_consulta">
          <legend>Consulta Detalla De Menu</legend>
        <table class="table table-bordered table-striped dt-responsive" width="100%" id="tablet">
         
        <thead>
         
           <tr>
           <th><h4 class="display-3">Acciones</h4></th>
           <th  ><h4 class="display-3">Nombre </h4></th>
            
            <th><h4 class="display-3">Descripcion</h4></th>
           
           
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
 


