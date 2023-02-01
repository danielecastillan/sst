   <body>
 
 
 
 <script>
    $(document).ready(function () {
     
   truncar_insert_nuevo();
 
 //consulta_de_perfiles();
 // consulta_de_menu_padre();
//  consulta_menu_detalle()
  //consulta_list_tiempo();
  
 
 
    });
 
 </script>
 <input type="hidden" value="" id="" class="hola">
 
 <input type="hidden" id="cont_horas_margen" value="6">
 <div class="hola"></div>
<div class="hola"></div>
<div class="hola"></div>
<div class="hola"></div>
<div class="hola"></div>
<div class="hola"></div>

<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Registro de Agendas</h1>

    <ol class="breadcrumb">
      
      <li><a href="Central.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administracion de Perfiles</li>
    
    </ol>

  </section>

  <section class="content">
 
   
  
    <div class="box">



<label>
<h3>
      Consultas Datos de Agendas</h3>
      </label>
      
      
      
       
      <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4">Fecha de consulta
              <input type="text" class="form-control input-lg" id="fecha" name="fecha" placeholder="fecha " >
            </div>
          
          </div>



  
 </div>
 
        
      <div class="box-header with-border">
  
           <div class="form-row">
          
            <div class="form-group col-md-4" align="left"> 
                                              <button class="btn btn-default" data-toggle="modal" data-target="#modalEditarEstado" onClick="value_cont_estandar()">

                                    <i class="fa fa-cog"></i>
                                </button>
            </div>
          
          </div>



  
 </div>
 
 
 
 
                                <script>
                                
                                $(function() {
                                  $('input[name="fecha"]').daterangepicker({
                                   // dateFormat: 'YYYY-MM-DD',
								    singleDatePicker: true,
                                    showDropdowns: true,
					
                                     locale: {
                                  format: 'YYYYMMDD'
                                } ,  
                                         			
                                    minYear: 1901 ,
                                    maxYear: parseInt(moment().format('YYYY'),10) 
                                  });
                                });
                                
                                
                           
                                </script>
          
       <button class="btn btn-primary" onClick="consulta_general()" >
          Consultar
         

        </button>
    
    <p>&nbsp;</p>
      
      
      
      <ul class="nav nav-tabs" id="myTab" role="tablist">
 <!-- <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
  </li>-->
  
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tiempo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Tercero</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#c3" role="tab" aria-controls="ars" aria-selected="false">Actividad Etapa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#c4"   role="tab" aria-controls="daer" aria-selected="false">Consolidado</a>
  </li>
  
  
  
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  
        
  
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"> <table class="table table-bordered table-striped dt-responsive" width="100%" id="tablet_tiempo">
         
        <thead>
         
           <tr>
           <th><h4 class="display-3">Usuario</h4></th>
           <th  ><h4 class="display-3">Nombre </h4></th>
            
            <th><h4 class="display-3">Cantidad de Horas</h4></th>
           
           
         </tr> 

        </thead>      

       </table>
        </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><table class="table table-bordered table-striped dt-responsive" width="100%" id="tablet_tercero">
         
        <thead>
         
           <tr>
           
           <th  ><h4 class="display-3">Usuario </h4></th>
            
            <th><h4 class="display-3">Nombre</h4></th>
           <th><h4 class="display-3">Id_Reunion - Agenda</h4></th>
             <th><h4 class="display-3">Codigo Tercero</h4></th>
             <th><h4 class="display-3">Nombre Tercero</h4></th>
         </tr> 

        </thead>      

       </table></div>
    <div class="tab-pane fade" id="c3" role="tabpanel" aria-labelledby="contact-tab"><table class="table table-bordered table-striped dt-responsive" width="100%" id="tablet_Act_etapa">
         
        <thead>
         
           <tr>
           <th><h4 class="display-3">Usuario</h4></th>
           <th  ><h4 class="display-3">Nombre </h4></th>
            
            <th><h4 class="display-3">Id_reunion</h4></th>
              <th><h4 class="display-3">Codigo Actividad</h4></th>
             <th><h4 class="display-3">Nombre Actividad</h4></th>
             
    <th><h4 class="display-3">Codigo Etapa</h4></th>
             <th><h4 class="display-3">Nombre Etapa</h4></th>          
             
         </tr> 

        </thead>      

       </table></div>
     <div class="tab-pane fade" id="c4" role="tabpanel" aria-labelledby="contact-tab"><table class="table table-bordered table-striped dt-responsive" width="100%" id="tablet_consolidado">
         
        <thead>
         
           <tr>  <th><h4 class="display-3">Nombre </h4></th>
            <th><h4 class="display-3">Usuario</h4></th>
           <th><h4 class="display-3">Numero de Errores</h4></th>
            
          
         
             
             
         </tr> 

        </thead>      

       </table></div>
</div>
      
      
      
      
      
      
      
      
      
      
      
      
       
      
      
      
      
      
      
 
      
      
      
         
      
      
      
      
      
      
      
      
      
      
      
      
      
  
      
      
      
      
      
<div class="box-header with-border">
  
           <div class="form-row">
       
           
 
          
          
            
            
          </div>



  
 </div>

       
  
        
    

      <div class="box-body">
        
        
        <div id="contenedor_consulta">
          <legend> </legend></div>
        
 

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

          <h4 class="modal-title">  Estado de Hora</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
                <label for="inputZip">Cantidad de Horas</label>
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-houzz"></i></span> 
 <select name="cantidad_horas" id="cantidad_horas" class="form-control  " onChange=" "  >
      <option value="">- Seleccione -</option>
      <option value="1"> 1 </option>     
      <option value="2"> 2 </option>     
      <option value="3"> 3 </option>       
      <option value="4"> 4 </option>      
      <option value="5"> 5 </option>      
      <option value="6"> 6 </option>      
      <option value="7"> 7 </option>      
      <option value="8"> 8 </option>      
      <option value="9"> 9 </option>                                            
          </select>
          
          
              </div>

            </div>

      

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="button" onClick="modificacion_horas_estado_argen()" class="btn btn-primary">Modificar </button>


 
        </div>
 
      

    </div>

  </div>

</div>








<!--=====================================
MODAL  
======================================--><!--=====================================
MODAL EDITAR PRODUCTO
======================================-->
 


