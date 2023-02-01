   <body>
 
 
 
 <script>
    $(document).ready(function () {
     
   
     
 //consulta_de_perfiles();
  //consulta_de_menu_padre();
//  consulta_menu_detalle()
  //consulta_list_menu_basica();
  
  consulta_tabla_usuario();
  
  
     
    });
 
 </script>
 
 
  <script>
  
 								 
  
                          
                                $(function() {
                                  $('input[name="fecha_nacimiento"]').daterangepicker({
                                    dateFormat: 'YYYY-MM-DD',
								    singleDatePicker: true,
                                  showDropdowns: true,
					
					
									 changeMonth: true,
									changeYear: true,
									showOn: 'button',
									buttonImageOnly: true,
					   yearRange: '-10:+10' ,
                                     locale: {
                                  format: 'YYYY-MM-DD'
                                } ,  
                                      yearRange: '1950:2012',   			
                                    minYear: 1901 ,
                                    maxYear: parseInt(moment().format('YYYY'),10) 
                                  });
                                });
                                 
                               
                           
                                </script>
       
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Registro de Usuario</h1>

    <ol class="breadcrumb">
      
      <li><a href="Central.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administracion de Usuario</li>
    
    </ol>

  </section>

  <section class="content">
 
   
  
    <div class="box">



<label>
<h3>
      Registro Usuario</h3>
      </label>.
      
      
         <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Tipo identificacion
             <!-- <select name="id_menu_padre" id="id_menu_padre" class="form-control input-lg"    >
                <option value="">- Seleccione -</option>
                 
                
              </select>-->
              
              <select name="tipo_identificacion" id="tipo_identificacion" class="form-control input-lg"    >
                <option value="">- Seleccione -</option>
                <option value="cc">Cedula</option> 
                <option value="ti">Targeta de Identidad</option> 
              </select>
            </div>
          
          </div>

 
  
 </div>      
      
      
      <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Identificacion
              <input type="text" class="form-control input-lg" id="identificacion" name="identificacion" placeholder="Identificacion" >
            </div>
          
          </div>



  
 </div>
      
            <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Nombre Completo
              <input type="text" class="form-control input-lg" id="nombre_completo" name="nombre_completo" placeholder="nombre de completo" >
            </div>
          
          </div>



  
 </div>
      
                 <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Fecha Nacimiento
              <input type="text" class="form-control input-lg" id="fecha_nacimiento" name="fecha_nacimiento"  placeholder="Fecha Nacimiento">
            </div>
          
          </div>



  
 </div> 
         <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Correo
              <input type="text" class="form-control input-lg" id="correo" name="correo"  placeholder="Correo Electronico">
            </div>
          
          </div>



  
 </div>   
      
      
      
      
      
           <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Celular
              <input type="text" class="form-control input-lg" id="celular" name="celular" placeholder="Numero de Celular" >
            </div>
          
          </div>



  
 </div> 
      
          
           <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Usuario
              <input type="text" class="form-control input-lg" id="nombre_usuario" name="nombre_usuario"  placeholder="Nombre de Usuario">
            </div>
          
          </div>



  
 </div> 
          
           <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Clave
              <input type="text" class="form-control input-lg" id="clave_usuario" name="clave_usuario" placeholder="Clave de Usuario" >
            </div>
          
          </div>



  
 </div> 
      
        
       <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Perfil
             <!-- <select name="id_menu_padre" id="id_menu_padre" class="form-control input-lg"    >
                <option value="">- Seleccione -</option>
                 
                
              </select>-->
              
              <select name="id_perfil" id="id_perfil" class="form-control input-lg"    >
                <option value="">- Seleccione -</option>
                <option value="1">Administrador Cursos</option> 
                <option value="2">Estudiantes</option> 
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
  
  
 <button class="btn btn-primary" onClick="registro_adm_usuario()" >
          
         Guardar

        </button>
  
      
   
     </div>
</div>
  
        
    

      <div class="box-body">
        
        
        <div id="contenedor_consulta">
          <legend>Consulta Detalla De Usuario</legend>
        <table class="table table-bordered table-striped dt-responsive" width="100%" id="tablet">
         
        <thead>
         
           <tr>
           <th><h4 class="display-3">Acciones</h4></th>
            <th><h4 class="display-3">Usuario</h4></th>
           <th  ><h4 class="display-3">Tipo Identificacion</h4></th>
           <th  ><h4 class="display-3">Identificacion</h4></th>
            <th><h4 class="display-3">Nombre Completo</h4></th>
            <th><h4 class="display-3">Fecha Nacimiento</h4></th>
            <th><h4 class="display-3">Correo</h4></th>
            <th><h4 class="display-3">Celular</h4></th>
            
              <th><h4 class="display-3">Perfil</h4></th>
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
 


