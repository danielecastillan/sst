  <?php 
 
 
  $id_curso_det=$_POST['id_curso_det'];
   $url_curso_det=$_POST['url_curso_det'];
  
  
                
  ?>
  
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
				
			 
                if (response != 0) {
                    $(".card-img-top").attr("src", response);
					 if (response == 9) {
						 alert("Registro Almacenado");
						 
						 //registro_the_contenido();
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
      
   Lecciones del Curso</h1>

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
     
         <input type="hidden" id="valor_control_usr" name="valor_control_usr" value="insert">    
    
 
      
      
          <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-4"> 
          <label>
<h4><b>Link descarga de Contenido Curso:</b><link>

<a href="<?php echo $url_curso_det;?>" title="Documento" download="DescargaContenidoCurso"> Descarga Documento</a> 
</h4>
      </label>
            </div>
          
          </div>
 
  
 </div> 
 
  <center><object data="<?php echo $url_curso_det;?>" type="application/pdf" width="900px" height="900px">

<p>Tu navegador no tiene el plugin para previsualizar documentos pdf.</p>
<p>Puedes descargarte el archivo desde <a href="myfile.pdf">aquí</a></p>

</object> </center>
      <div class="box-header with-border">
      
      
        <div class="form-row">
         
      
        
       </div>
      </div>
  <div class="box-header with-border">
  
           <div class="form-row">
             
            <div class="form-group col-md-6"> 
           <!-- <video src="974.mp4" width="640" height="480" controls></video>-->
 
          <!--   <video src="974.mp4" width="640" height="480" poster="img/usuario.png" controls></video>
            <video src="974.mp4" width="640" height="480"></video>
            <video src="<?php echo $ruta_video;?>" width="640" height="480"></video>
            -->
          
            </div>
          
          </div>
 
  
 </div> 
      
      
       
 
 
 
 </div>
 
       
  
     
      </div>

   </section>

    </div>

  

 

<!---Editar prueba adjunto--->




    

 