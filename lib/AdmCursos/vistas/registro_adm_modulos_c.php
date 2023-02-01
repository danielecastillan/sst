   <body>
 
 
 
 <script>
    $(document).ready(function () {
     
   
 
 //consulta_de_perfiles();
  consulta_combo_cursos();
//  consulta_menu_detalle()
  consulta_list_modulos();
    });
 
 </script>
 
 
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Registro de Modulos</h1>

    <ol class="breadcrumb">
      
      <li><a href="Central.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administracion de Modulos</li>
    
    </ol>

  </section>

  <section class="content">
 
   
  
    <div class="box">


      
<label>
<h3>
      Registro Modulos</h3>
      </label>
      
           <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Seleccione Curso
              <select name="id_consulta_cursos_cmb" id="id_consulta_cursos_cmb" class="form-control input-lg"    >
                <option value="">- Seleccione -</option>
                 
                
              </select>
            </div>
          
          </div>

 
  
 </div>      
      
      <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Nombre del Modulo
              <input type="text" class="form-control input-lg" id="nombre_modulo" name="nombre_modulo" placeholder="nombre del modulo" >
            </div>
          
          </div>



  
 </div>
      
      
      
      
      
      
      <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4"> </div>
          
          </div>

 
  
 </div>      
      
      
      
      
      
      
      
      
      
      
        <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Descripcion del Modulo 
                
               <textarea class="form-control input-lg" id="descripcion_modulo_menu" name="descripcion_modulo_menu" rows="3"></textarea>
               
            </div>
          
          </div>

 
  
 </div>       
      
      
      
      
      
      
<div class="box-header with-border">
  
           <div class="form-row">
       
           
 
          
          
            
            
          </div>



  
 </div>

      <div class="box-body">
        <div class="form-row">
  
  
 <button class="btn btn-primary" onClick="registro_adm_modulo_c()" >
          
         Guardar

        </button>
  
      
   
     </div>
</div>
  
     
   

      <div class="box-body">
        
        
        <div id="contenedor_consulta">
          <legend>Consulta Detalla De Modulos</legend>
        <table class="table table-bordered table-striped dt-responsive" width="100%" id="tablet">
         
        <thead>
         
           <tr>
           <th><h4 class="display-3">Acciones</h4></th>
            <th  ><h4 class="display-3"> Curso</h4></th>
           <th  ><h4 class="display-3">Modulo</h4></th>
            <th><h4 class="display-3">Descripcion</h4></th>
         <th><h4 class="display-3">Fecha Creacion</h4></th>
           
           
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
 


