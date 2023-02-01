   <body>
 
 
 
 <script>
    $(document).ready(function () {
     
   
 
 //consulta_de_perfiles();
  list_selec_compuesta_general_ciiu();
//  consulta_menu_detalle() 
    });
 
 </script>
 
 
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Registro de Reteica CIIU</h1>

    <ol class="breadcrumb">
      
      <li><a href="Central.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administracion de CIIU</li>
    
    </ol>

  </section>

  <section class="content">
 
   
  
    <div class="box">



<label>
<h3>&nbsp;
      </h3>
      </label>
      
      
      
      
      
      
      
      
                <div class="box-header with-border">


 
<input type="hidden" value="" id="HD_ARB_CONT" />
 

                <div class="form-group col-md-3">
                    <label for="inputZip">Codigo Sucursal</label>      

                    <div class="input-group">




                        <span class="input-group-addon">
                            <div>
                            

                                <button class="btn btn-default"   id="buttone2" >

                                    <i class="fa fa-arrows"></i>
                                </button>
                            </div>




                        </span> 



                        <input type="text" class="form-control input-lg" id="CodigoSucursal" name="CodigoSucursal" placeholder="Codigo Sucursal"  readonly>




                    </div>

                </div>





                <div class="form-group col-md-3">
                    <label for="inputZip">Nombre Sucursal</label>            

                    <div class="input-group">




                        <span class="input-group-addon">
                            <div>
                               
  
            <button class="btn btn-default"   id="buttone2" >

                                    <i class="fa fa-arrows"></i>
                                </button>
                            </div>




                        </span> 



                        <input type="text" class="form-control input-lg" id="NombreSucursal" name="NombreSucursal" placeholder="Nombre Sucursal"  readonly>




                    </div>

                </div>
              



                <div class="form-group col-md-1">
                    <label for="inputZip">Cambiar</label>            

                    <div class="input-group">




                        <span class="input-group-addon">
                            <div>
                                <button class="btn btn-default"   id="btnCambiarTras" data-toggle="modal" data-target="#modalCambioSucursal" > 

                                    <i class="fa fa-undo" aria-hidden="true"></i>
                                </button>
                            </div>


                        </span> 


                    </div>

                </div>











            </div>


      
      
      
      
      
      <div class="box-header with-border">


 

                <div class="form-group col-md-3">
                    <label for="inputZip">Codigo Ciiu</label>      

                    <div class="input-group">




                        <span class="input-group-addon">
                            <div>
                            

                                <button class="btn btn-default"   id="buttone2" >

                                    <i class="fa fa-arrows"></i>
                                </button>
                            </div>




                        </span> 



                        <input type="text" class="form-control input-lg" id="codigociiu" name="codigociiu" placeholder="Codigo Ciiu"  readonly>




                    </div>

                </div>





                <div class="form-group col-md-3">
                    <label for="inputZip">Nombre Ciiu</label>

                    <div class="input-group">




                        <span class="input-group-addon">
                            <div>
                               
  
            <button class="btn btn-default"   id="buttone2" >

                                    <i class="fa fa-arrows"></i>
                                </button>
                            </div>




                        </span> 



                        <input type="text" class="form-control input-lg" id="nombreciiu" name="nombreciiu" placeholder="Nombre Ciiu"  readonly>




                    </div>

                </div>
              


                <div class="form-group col-md-1">
                    <label for="inputZip">Cambiar</label>            

                    <div class="input-group">




                        <span class="input-group-addon">
                            <div>
                                <button class="btn btn-default"   id="btnCambiarTras" data-toggle="modal" data-target="#modalCambiociiu" > 

                                    <i class="fa fa-undo" aria-hidden="true"></i>
                                </button>
                            </div>


                        </span> 


                    </div>

                </div>











            </div>
      
      
      
      
      
      <div class="box-header with-border">



 

                <div class="form-group col-md-3">
                    <label for="inputZip">Digite Tarifa</label>

                    <div class="input-group">




                        <span class="input-group-addon">
                            <div>
                            

                                <button class="btn btn-default"   id="buttone2" >

                                    <i class="fa fa-arrows"></i>
                                </button>
                            </div>




                        </span> 



                        <input type="text" class="form-control input-lg" id="tarifa" name="tarifa" placeholder="Tarifa"   >




                    </div>

                </div>




 
              
 











            </div>
      
      
        <div class="box-header with-border">


 
                <div class="form-group col-md-3">
                    <label for="inputZip">Codigo de Alcaldia</label>

                    <div class="input-group">




                        <span class="input-group-addon">
                            <div>
                            

                                <button class="btn btn-default"   id="buttone2" >

                                    <i class="fa fa-arrows"></i>
                                </button>
                            </div>




                        </span> 



                        <input type="text" class="form-control input-lg" id="codigoalcaldia" name="codigoalcaldia" placeholder="Codigo Alcaldia"   >




                    </div>

                </div>




 
              
 











            </div>
      
      
      
      
      
      
      
      
      <div class="box-header with-border">


 

                <div class="form-group col-md-3">
                    <label for="inputZip">Codigo Tesoreria</label>

                    <div class="input-group">




                        <span class="input-group-addon">
                            <div>
                            

                                <button class="btn btn-default"   id="buttone2" >

                                    <i class="fa fa-arrows"></i>
                                </button>
                            </div>




                        </span> 



                        <input type="text" class="form-control input-lg" id="codigotesoreria" name="codigotesoreria" placeholder="Codigo Tesoreria"  readonly>




                    </div>

                </div>





                <div class="form-group col-md-3">
                    <label for="inputZip">Nombre </label>

                    <div class="input-group">




                        <span class="input-group-addon">
                            <div>
                               
  
            <button class="btn btn-default"   id="buttone2" >

                                    <i class="fa fa-arrows"></i>
                                </button>
                            </div>




                        </span> 



                        <input type="text" class="form-control input-lg" id="nombretesoreria" name="nombretesoreria" placeholder="Nombre"  readonly>




                    </div>

                </div>
              


                <div class="form-group col-md-1">
                    <label for="inputZip">Cambiar</label>            

                    <div class="input-group">




                        <span class="input-group-addon">
                            <div>
                                <button class="btn btn-default"   id="btnCambiarTras" data-toggle="modal" data-target="#modalCambiotesoreria" > 

                                    <i class="fa fa-undo" aria-hidden="true"></i>
                                </button>
                            </div>


                        </span> 


                    </div>

                </div>











            </div>
      
      
      
      
      
      
      
       
      
      
      
      
      
      
            
      
      
      
      
      
      
      
      
      
      
               
      
      
      
      
      
      
      <div class="box-header with-border">
  
           <div class="form-row">
       
           
 
          
          
            
            
          </div>



  
 </div>

      <div class="box-body">
        <div class="form-row">
  
  
 <button class="btn btn-primary" onClick="registro_r_ciiu_det()" >
          
         Registro

        </button>
  
      
   
     </div>
</div>
  
        
    

      <div class="box-body">
        
        
        <div id="contenedor_consulta">
          <legend>Consulta Detalla De CIIU</legend>
        <table class="table table-bordered table-striped dt-responsive" width="100%" id="tabla_compuesta_ciiu">
         
        <thead>
         
           <tr>
           <th><h4 class="display-3">ACCIONES</h4></th>
           <th  ><h4 class="display-3">ARB_CONT</h4></th>
            <th><h4 class="display-3">ARB_CODI</h4></th>
            <th><h4 class="display-3">ARB_NOMB</h4></th>
            <th><h4 class="display-3">COD_CIIU</h4></th>
            <th><h4 class="display-3">NOMBRE_CODIGO_CIIU</h4></th> <th><h4 class="display-3">TARIFA</h4></th>
 <th><h4 class="display-3">CODIGO_ALCALDIA</h4></th>  <th><h4 class="display-3">DTS_CODI</h4></th>          
      <th><h4 class="display-3">DST_NOMB</h4></th>               
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


<div id="modalCambioSucursal" class="modal fade bd-example-modal-lg" role="dialog">
  
  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Seleccion de Sucursal</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
                <label for="inputZip">Codigo -Nombre Sucursal</label>
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-houzz"></i></span> 
<input type="hidden" id="PK_DDE_CONT" value="">
                <input type="text" class="form-control input-lg" id="cod_name_suc" name="cod_name_suc" value=""  >

              </div>

            </div>
 <button type="button" class="btn btn-primary" name="botonConsultaTras" id="botonConsultaTras" onclick="convinacion_list_selec_sucursal()" >Consultar</button>
           

          </div>

        </div>




<table class="table table-bordered table-striped dt-responsive tablaTransportadora" width="100%" id="tablaSucursal">

                        <thead>

                            <tr>
                                <th>Acciones</th>
                                <th  >Codigo Sucursal</th>
                                <th>Sucursal</th>
                              



                            </tr> 

                        </thead>      

                    </table>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

         

<button type="button" class="btn btn-primary" name="botone" id="botonUpdate">Guardar Cambios</button>

        </div>
 
      
    </div>

  </div>

</div>








<div id="modalCambiociiu" class="modal fade bd-example-modal-lg" role="dialog">
  
  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Seleccion de Ciiu</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
                <label for="inputZip">Codigo CIIU </label>
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-houzz"></i></span> 
<input type="hidden" id="PK_DDE_CONT" value="">
                <input type="text" class="form-control input-lg" id="cod_ciiu" name="cod_ciiu" value=""  >

              </div>

            </div>
 <button type="button" class="btn btn-primary" name="botonConsultaTras" id="botonConsultaTras" onclick="convinacion_list_selec_ciiu()" >Consultar</button>
           

          </div>

        </div>




<table class="table table-bordered table-striped dt-responsive tablaTransportadora" width="100%" id="tablaciiu">

                        <thead>

                            <tr>
                                <th>Acciones</th>
                                
                                <th>Codigo CIIU</th>
                                <th>Nombre Actividad CIIU</th> 

                            </tr> 

                        </thead>      

                    </table>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

         

<button type="button" class="btn btn-primary" name="botone" id="botonUpdate">Guardar Cambios</button>

        </div>
 
      
    </div>

  </div>

</div>




<div id="modalCambiotesoreria" class="modal fade bd-example-modal-lg" role="dialog">
  
  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Seleccion de Tesoreria</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
                <label for="inputZip">Codigo Tesoreria </label>
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-houzz"></i></span> 
<input type="hidden" id="PK_DDE_CONT" value="">
                <input type="text" class="form-control input-lg" id="cod_tesoreria" name="cod_tesoreria" value=""  >

              </div>

            </div>
 <button type="button" class="btn btn-primary" name="botonConsultaTras" id="botonConsultaTras" onclick="convinacion_list_selec_tesoreria()" >Consultar</button>
           

          </div>

        </div>




<table class="table table-bordered table-striped dt-responsive tablaTransportadora" width="100%" id="tablatesoreria">

                        <thead>

                            <tr>
                                <th>Acciones</th>
                                
                                <th>Codigo </th>
                                <th>Nombre Tesoreria</th> 

                            </tr> 

                        </thead>      

                    </table>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

         

<button type="button" class="btn btn-primary" name="botone" id="botonUpdate">Guardar Cambios</button>

        </div>
 
      
    </div>

  </div>

</div>



<!--=====================================
MODAL  
======================================--><!--=====================================
MODAL EDITAR PRODUCTO
======================================-->
 


