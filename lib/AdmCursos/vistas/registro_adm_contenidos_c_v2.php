    <body>

 <script>$("#botone").click(function(){
      CargarArchivoPredio();
	 //CargueDocumentoDatos();
	 alert("entro a o botone");
	 
  });</script>
  
  <script>
$(document).ready(function() {
	 consulta_combo_cursos();
 
 //consulta_de_perfiles();
  consulta_de_menu_padre();
//  consulta_menu_detalle()
  consulta_list_contenidos();
   
	$("#botonInsert").on('click', function() {
	  
	// return false;
	  	var formData = new FormData(form_reg);
        var files = $('#image')[0].files[0];
        formData.append('file',files);
		
		var modval= "modalAgregarUsuarioprueba";
		 var response= "";
		
		var id_consulta_cursos_cmb= $("#id_consulta_cursos_cmb").val();
		var id_consulta_modulos_cmb= $("#id_consulta_modulos_cmb").val();
		var nombre_leccion= $("#nombre_leccion").val();
		var descripcion_leccion= $("#descripcion_leccion").val();
		
		 formData.append('valor_control_usr','insert');
		 formData.append('id_consulta_cursos_cmb',id_consulta_cursos_cmb);
		 formData.append('id_consulta_modulos_cmb',id_consulta_modulos_cmb);
		 formData.append('nombre_leccion',nombre_leccion);
		 formData.append('descripcion_leccion',descripcion_leccion);
		 
		 $.ajax({
            url: 'lib/AdmCursos/controladores/reg.lesiones.puente.controlador.full.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
				
			 
                if (response != 0) {
                    $(".card-img-top").attr("src", response);
					 if (response == 9) {
						 alert("Registro Almacenado");
						 
						 registro_the_contenido();
						// consulta_list_contenidos();
						// registro_the_contenido();
						  //  llamado_usuarios();
	   						//CierraPopup(modval);
						 }
					
                } else {
                    alert('Formato de imagen incorrecto.');
                }
            }
        });
		 alert("Acontinuacion se cargara el video, si es muy pesado el video espere la alerta de confirmacion de documento adjunto para confirmar el registro de la leccion");
     //return false;
	  
	 
	 
		 });
	
	
	 
    
});
</script>
 
 
 
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
   Registro de Contenido
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar de Contenido</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">
 
  
    <!--    <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
          
          Agregar Usuario

        </button>

 <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuarioprueba">
          
     Agregar Usuario
        </button>

    -->
   
   
    <div class="box">
      <form method="post" id="form_reg" action="#" enctype="multipart/form-data" >
         <input type="hidden" id="valor_control_usr" name="valor_control_usr" value="insert">    
    
<label>
<h3>
      Registro Contenido</h3>
      </label>
      
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

 
    </form>
 </div>
 
       
        <div class="box-body">
        <div class="form-row">
  
   <button type="button" class="btn btn-primary" name="botone" id="botonInsert">Guardar</button>
   
   
   <!--
 <button class="btn btn-primary" onClick="registro_adm_leccion_mod_curs()" >
          
         Guardar Contenido

        </button>
  
       <button id="guarda" class="btn btn-primary"  >
          
         Guardar rrr

        </button>-->
   
     </div>
</div>
  
       
       
       
       
    
   
   
   
   
   
     <div id="contenedor_consulta">
          <legend>Consulta Detalla De Contenidos</legend>
        <table class="table table-bordered table-striped dt-responsive" width="100%" id="tablet">
         
        <thead>
         
           <tr>
           <th><h4 class="display-3">Acciones</h4></th>
           <th  ><h4 class="display-3">Curso</h4></th>
            <th><h4 class="display-3">Modulo</h4></th>
          <th><h4 class="display-3">Leccion</h4></th>
           <th><h4 class="display-3">Descripcion</h4></th>
            <th><h4 class="display-3">Descargas</h4></th>
         </tr> 

        </thead>      

       </table>
        
        
        
        </div>
   
   
   
   
   
   
     
     
      </div>

   </section>

    </div>

  

 

<!---Editar prueba adjunto--->




    

 