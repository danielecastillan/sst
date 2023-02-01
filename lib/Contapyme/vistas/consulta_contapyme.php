   <body>
 
<script>

 
$( document ).ready(function() {
 
 
consulta_list_contapyme();
 

});
</script>

 

 

 
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Consulta Operaciones Contapyme Lh Sas 2015</h1>

    <ol class="breadcrumb">
      
      <li><a href="Central.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administracion de Contapyme</li>
    
    </ol>

  </section>

  <section class="content">
 
   
  
    <div class="box">



<label><h3>
      Filtros Consultados</h3>
      </label>
<div class="box-header with-border">
  
           <div class="form-row">
            <div class="form-group col-md-3">
                
              <label for="inputCity">CONSULTA: DETALLE / OBSERVACION / CEDULA</label>
                 <input type="text" class="form-control input-lg" id="vari_consulta" name="vari_consulta" placeholder="Detalle / Observacion / Cedula" >

              
            </div>
       
        </div>



  
 </div>

 
<div class="box-header with-border">
  
   
  
  </div>
<div class="box-body">
  <div class="form-row">
  
  
 
  
   <button class="btn btn-primary" onClick="consulta_list_contapyme()" >
          
         Consultar

        </button>
     
     </div>
</div>
  
        
    

      <div class="box-body">
        
        
        <div id="contenedor_consulta">
          <legend>Consulta Detalla De Guia</legend>
        <table class="table table-bordered table-striped dt-responsive tablaDetalle" id="table_contapyme" width="100%">
         
        <thead>
         
           <tr>
          <!-- <th>Acciones</th>-->
           <th >FSOPORT</th>
           <th>ITDSOP</th>
           <th>SNUMSOP</th>
           <th>IUSUARIO</th> 
            <th>TDETALLE</th>
            <th>IDENIT</th>
            <th>SOBSERV</th>
         </tr> 

        </thead>      

       </table>
        
        </div>
        

       <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">

      </div>

    </div>

  </section>
  </div>
</div>  

<!---Editar prueba adjunto---><!--=====================================
MODAL AGREGAR PRODUCTO
======================================-->











<!--=====================================
MODAL AGREGAR PRODUCTO
======================================--><!--=====================================
MODAL EDITAR PRODUCTO
======================================-->
 


