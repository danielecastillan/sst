   <body>
 
 
 
 <script>
    $(document).ready(function () {
     
   
 
 //consulta_de_perfiles();
 // consulta_de_menu_padre();
//  consulta_menu_detalle()
consulta_de_perfiles_user();
  consulta_list_users();
    });
 
 </script>
 
 
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Registro de Trabajador</h1>

    <ol class="breadcrumb">
      
      <li><a href="Central.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administracion de Trabajador</li>
    
    </ol>

  </section>

  <section class="content">
 
   
  
    <div class="box">


 
 <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Nombre del Trabajador
              <input type="text" class="form-control input-lg" id="nombre_usuario" name="nombre_usuario" placeholder=" " >
            </div>
          
          </div>



  
 </div>
 <div class="box-header with-border">
  
  <div class="form-row">
    
   <div class="form-group col-md-4">Tipo Identificacion
     <select name="tipo_identificacion" id="tipo_identificacion" class="form-control input-lg"    >
       <option value="">- Seleccione -</option>
       <option value="CC">- CC -</option>
       <option value="TI">- TI -</option>
       <option value="CE">- CE -</option>
     </select>
   </div>
 
 </div>

</div>      
<div class="box-header with-border">
  
  <div class="form-row">
    
   <div class="form-group col-md-4">Identificacion
     <input type="text" class="form-control input-lg" id="id_identificacion" name="id_identificacion" placeholder=" " >
   </div>
 
 </div>




</div>
      
      
<div class="box-header with-border">
  
  <div class="form-row">
    
   <div class="form-group col-md-4">Fecha Nacimiento
     <input type="text" class="form-control input-lg" id="fecha_nacimiento" name="fecha_nacimiento" placeholder=" " >
   </div>
 
 </div>




</div>  
      
      
      
        <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Empresa
              <input type="text" class="form-control input-lg" id="usuario" name="usuario" placeholder=" " >
            </div>
          
          </div>
 
 </div>
 <div class="box-header with-border">
  
  <div class="form-row">
    
   <div class="form-group col-md-4">Correo
     <input type="text" class="form-control input-lg" id="correo" name="correo" placeholder=" " >
   </div>
 
 </div>

</div>

      
      
      
      
        <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Telefono/Celular
              <input type="text" class="form-control input-lg" id="clave_user" name="clave_user" placeholder="  " >
            </div>
          
          </div>
 
 </div>
      
      
      
  <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Cargo
              <select name="id_perfil" id="id_perfil" class="form-control input-lg"    >
                <option value="">- Seleccione -</option>
                <option value="Administrador">- Tecnico -</option>
                <option value="Administrador">- Operativo -</option>
                <option value="Administrador">- Administrativo -</option>
              </select>
            </div>
          
          </div>
 
 </div>      
      

      
      
      
  
      
      
      
      
      
<div class="box-header with-border">
  
           <div class="form-row">
       
           
 
          
          
            
            
          </div>



  
 </div>

      <div class="box-body">
        <div class="form-row">
  
  
 <button class="btn btn-primary" onClick="SaveUsuarios()" >
          Guardar
         

        </button>
  
      
   
     </div>
</div>
  
        
    

      <div class="box-body">
        
        
        <div id="contenedor_consulta">
          <legend>Consulta  De Usuarios          </legend>
          <table class="table table-bordered table-striped dt-responsive" width="100%" id="tablet">
         
        <thead>
         
           <tr>
           <th><h4 class="display-3">Acciones</h4></th>
           <th  ><h4 class="display-3">Nombre de Trabajador </h4></th>
            
            <th><h4 class="display-3">Cargo</h4></th>
           
            <th><h4 class="display-3">Empresa</h4></th>
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

          <h4 class="modal-title">Editar Estado de Hora-Usuario</h4>

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
 


