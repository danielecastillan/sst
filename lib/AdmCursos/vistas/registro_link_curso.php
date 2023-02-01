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
//  consulta_de_menu_padre();
//  consulta_menu_detalle()
  consulta_list_anexos_docs();
   
	$("#botonInsert").on('click', function() {
	  
	// return false;
	  	var formData = new FormData(form_reg);
        var files = $('#image')[0].files[0];
        formData.append('file',files);
		
		var modval= "modalAgregarUsuarioprueba";
		 var response= "";
		
		var id_consulta_cursos_cmb= $("#id_consulta_cursos_cmb").val();
 
		
		 formData.append('valor_control_usr','insert');
		 formData.append('id_consulta_cursos_cmb',id_consulta_cursos_cmb);
 
		 
		 $.ajax({
            url: 'lib/AdmCursos/controladores/reg.contenido-curso.puente.controlador.full.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
				//lert("response_"+response);
			 
                if (response != 0) {
                    $(".card-img-top").attr("src", response);
					 if (response == 9) {
						 alert("Registro Almacenado");
						 anexo_documento_curso();
						 //registro_the_contenido();
						  //  llamado_usuarios();
	   						//CierraPopup(modval);
						 }
						 if (response == 199) {
							 alert("El curso seleccionado ya cuenta con documento asociado");
							 } 
						 
						 
					
                } else {
                    alert('Formato de imagen incorrecto.');
                }
            }
        });
		 alert("Acontinuacion se cargara el documento, si es muy pesado el archivo espere la alerta de confirmacion de documento adjunto para confirmar el registro del documento al curso");
     //return false;
	  
	 
	 
		 });
	
	
	 
    
});
</script>
 
 
 
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
   Anexar Documento a Curso</h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar de Curso</li>
    
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
<h3>Anexo contenido digital</h3>
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
 
  
     
   
     </div>
</div>
  
       
       
       
       
    
   
   
   
   
   
     <div id="contenedor_consulta">
          <legend>Consulta Detalla De Contenidos</legend>
        <table class="table table-bordered table-striped dt-responsive" width="100%" id="tablet">
         
        <thead>
         
           <tr>
           <th><h4 class="display-3">Acciones</h4></th>
           <th  ><h4 class="display-3">Curso</h4></th>
            <th><h4 class="display-3">Documento</h4></th> 

        </thead>      

       </table>
        
        
        
        </div>
   
   
   
   
   
   
     
     
      </div>

   </section>

    </div>

  

 

<!---Editar prueba adjunto--->




    

 