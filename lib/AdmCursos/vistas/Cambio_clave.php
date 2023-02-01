   <body>
 
  <?php
 
 session_start();
$id =$_SESSION["id"];
$usuario =$_SESSION["usuario"];
 
 
 ?>
 
 
 <script>
    $(document).ready(function () {
     
   
 
 //consulta_de_perfiles();
  consulta_combo_usuarios();
   consulta_combo_cursos();
//  consulta_menu_detalle()
  consulta_list_inscripcion_cursos();
    });
 
 </script>
 <div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Cambio Contraseña</h1>

    <ol class="breadcrumb">
      
      <li><a href="Central.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administracion de Usuario</li>
    
    </ol>

  </section>

  <section class="content">
 
   
  
    <div class="box">


 
      
         <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Usuario
          <input type="text" class="form-control input-lg" id="usuario_sistema" name="usuario_sistema" value="<?php echo $usuario;?>" readonly >
          
        <input type="hidden" id="id_usuario" value="<?php echo $id;?>">
            </div>
          
          </div>

 
  
 </div>      
      
      
        <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Contraseña Nueva
                <input type="password" class="form-control input-lg" id="clave_nueva" name="clave_nueva"  >
            </div>
          
          </div>

 
  
 </div>      
     <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Confirmacion de Contraseña Nueva
                <input type="password" class="form-control input-lg" id="confirma_clave" name="confirma_clave"  >
            </div>
          
          </div>

 
  
 </div>     
      
      
   
       
         

   
      
      
      
       
      
          
       
          
          
        
      
      
      
      
      
      
      
      
      
      
        
      
      
      
      
      
<div class="box-header with-border">
  
           <div class="form-row">
       
           
 
          
          
            
            
          </div>



  
 </div>

      <div class="box-body">
        <div class="form-row">
  
  
 <button class="btn btn-primary" onClick="registro_cambio_clave()" >
          
      Guardar

        </button>
  
      
   
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
 


