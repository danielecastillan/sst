<?php $mde_cont = $_POST['mde_cont']?> 
<script>

 
    $( document ).ready(function() {
 
 
 llamado_individual_guia(<?php echo $mde_cont; ?>);
   convinacion_list_detalle(<?php echo $mde_cont; ?>);

        //consulta_guias_detalle();
    });
</script>

<!--
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

-->


<div class="content-wrapper">

    <section class="content-header">

        <h1>

            Guia Individual  (Encabezado &amp; Detalle) En Seven

        </h1>

        <ol class="breadcrumb">

            <li><a href="Central.php"><i class="fa fa-dashboard"></i> Inicio</a></li>

            <li class="active">Administracion de Guias</li>

        </ol>

    </section>

    <section class="content">



        <div class="box">

            <button class="btn btn-default btn-lg" onClick="abrir_guias()" id="buttone1"  >
                <i class="fa fa-reply-all" aria-hidden="true"></i> Regresar a consulta
            </button>

            <div class="box-header with-border">
                <div class="form-group col-md-3">
                    <div class="input-group">


                    </div>
                </div>
            </div>



            <label><h3>
                    Filtros Consultados</h3>
            </label>


            <!--Seccion boton-->







            <!--fin seccion boton-->


            <div class="box-header with-border">

                <div class="form-row">
                    <div class="form-group col-md-3">

                        <label for="inputCity">CODIGO DE TRANSPORTISTA</label>
                        <input type="text" class="form-control input-lg" id="PVD_CODA_CONSUL" name="PVD_CODA_CONSUL" placeholder="PVD_CODA" readonly>


                    </div>
                    <div class="form-group col-md-3">

                        <label for="inputState">PLACA </label>
                        <input type="text" class="form-control input-lg" id="MDE_PLAC_CONSUL" name="MDE_PLAC_CONSUL" placeholder="MDE_PLAC" readonly>

                    </div>
                    <div class="form-group col-md-3">

                        <label for="inputZip">NUMERO DE GUIA</label>
                        <input type="text" class="form-control input-lg" id="MDE_NGUI_CONSUL" name="MDE_NGUI_CONSUL" placeholder="MDE_NGUI" readonly>

                    </div>
                </div>




            </div>

            <label><h3>
                    Encabezado</h3>
            </label>

            <div class="box-header with-border">




                <div class="form-group col-md-3">
                    <label for="inputZip">Guia Transportadora (Placa)</label>            

                    <div class="input-group">




                        <span class="input-group-addon">
                            <div>
                                <button class="btn btn-default" onClick="bloqueo('buttoneguiablock','buttoneguiadesblock','PlacaIndDet')" id="buttoneguiablock" style="display:none">
 <i class="fa fa-unlock"></i> 
                                  
                                </button>

                                <button class="btn btn-default" onClick="desbloqueo('buttoneguiablock','buttoneguiadesblock','PlacaIndDet')" id="buttoneguiadesblock" >

                                    <i class="fa fa-lock"></i>
                                </button>
                            </div>




                        </span> 



                        <input type="text" class="form-control input-lg" id="PlacaIndDet" name="PlacaIndDet" placeholder="Placa" readonly>




                    </div>

                </div>

            </div>





            <div class="box-header with-border">



<input type="hidden" value="<?php echo $mde_cont; ?>" id="PK_MDE_CONT" />
<input type="hidden" value="" id="PK_PVD_CODI" />
<input type="hidden" value="" id="PK_DEP_CODD" />

                <div class="form-group col-md-3">
                    <label for="inputZip">Codigo Transportista</label>      

                    <div class="input-group">




                        <span class="input-group-addon">
                            <div>
                            

                                <button class="btn btn-default"   id="buttone2" >

                                    <i class="fa fa-arrows"></i>
                                </button>
                            </div>




                        </span> 



                        <input type="text" class="form-control input-lg" id="CodigoTransportistaIndDet" name="CodigoTransportistaIndDet" placeholder="Codigo Transportista"  readonly>




                    </div>

                </div>





                <div class="form-group col-md-3">
                    <label for="inputZip">Nombre Transportista</label>            

                    <div class="input-group">




                        <span class="input-group-addon">
                            <div>
                               
  
            <button class="btn btn-default"   id="buttone2" >

                                    <i class="fa fa-arrows"></i>
                                </button>
                            </div>




                        </span> 



                        <input type="text" class="form-control input-lg" id="NombreTransportistaIndDet" name="NombreTransportistaIndDet" placeholder="Nombre Transportista"  readonly>




                    </div>

                </div>
                <div class="form-group col-md-3">
                    <label for="inputZip">Detalle Transportista</label>            

                    <div class="input-group">




                        <span class="input-group-addon">
                            <div>
                                            <button class="btn btn-default"   id="buttone2" >

                                    <i class="fa fa-arrows"></i>
                                </button>
                            </div>




                        </span> 



                        <input type="text" class="form-control input-lg" id="DetalleTransportistaIndDet" name="DetalleTransportistaIndDet" placeholder="Detalle Transportista"  readonly>




                    </div>

                </div>



                <div class="form-group col-md-1">
                    <label for="inputZip">Cambiar</label>            

                    <div class="input-group">




                        <span class="input-group-addon">
                            <div>
                                <button class="btn btn-default"   id="btnCambiarTras" data-toggle="modal" data-target="#modalCambioTransportadora" > 

                                    <i class="fa fa-undo" aria-hidden="true"></i>
                                </button>
                            </div>


                        </span> 


                    </div>

                </div>











            </div>





            <div class="box-header with-border">







                <div class="form-group col-md-3">
                    <label for="inputZip">Peso</label>            
                    <div class="input-group">




                        <span class="input-group-addon">
                            <div>
               <button class="btn btn-default" onClick="bloqueo('buttonpesoblock','buttonpesdesoblock','PesoIndDet')" id="buttonpesoblock" style="display:none">

                          <i class="fa fa-unlock"></i>       
                                </button>

               <button class="btn btn-default" onClick="desbloqueo('buttonpesoblock','buttonpesdesoblock','PesoIndDet')" id="buttonpesdesoblock" >
   <i class="fa fa-lock"></i>
                                    
                                </button>
                            </div>




                        </span> 



                        <input type="text" class="form-control input-lg" id="PesoIndDet" name="PesoIndDet" placeholder="Peso"  readonly>




                    </div>

                </div>

            </div>








            <!--- seccion cifras -->


            <div class="box-header with-border">







                <div class="form-group col-md-3">
                    <label for="inputZip">  Valor Declarado</label>

                    <div class="input-group">




                        <span class="input-group-addon">
                        <div>
               <button class="btn btn-default" onClick="bloqueo('buttonvalordeclaradoblock','buttonvalordeclaradodesblock','ValorDeclaradoIndDet')" id="buttonvalordeclaradoblock" style="display:none">

                               <i class="fa fa-unlock"></i>   
                                </button>

               <button class="btn btn-default" onClick="desbloqueo('buttonvalordeclaradoblock','buttonvalordeclaradodesblock','ValorDeclaradoIndDet')" id="buttonvalordeclaradodesblock" >
  <i class="fa fa-lock"></i>
                                    
                                </button>
                            </div>



                        </span> 



                        <input type="text" class="form-control input-lg" id="ValorDeclaradoIndDet" name="ValorDeclaradoIndDet" placeholder="Valor Declarado" readonly >




                    </div>

                </div>





                <div class="form-group col-md-3">
                    <label for="inputZip">Valor Flete</label>            

                    <div class="input-group">




                        <span class="input-group-addon">
                            <div>
               <button class="btn btn-default" onClick="bloqueo('buttonvalorfleteblock','buttonvalorfletedesblock','ValorFleteIndDet')" id="buttonvalorfleteblock" style="display:none">
<i class="fa fa-unlock"></i>
                                    
                                </button>

               <button class="btn btn-default" onClick="desbloqueo('buttonvalorfleteblock','buttonvalorfletedesblock','ValorFleteIndDet')" id="buttonvalorfletedesblock" >

                                    <i class="fa fa-lock"></i>
                                </button>
                            </div>




                        </span> 



                        <input type="text" class="form-control input-lg" id="ValorFleteIndDet" name="ValorFleteIndDet" placeholder="Valor Flete"  readonly>




                    </div>

                </div>
                <div class="form-group col-md-3">
                    <label for="inputZip">Tarifa Fija</label>            

                    <div class="input-group">




                        <span class="input-group-addon">
                                   <div>
               <button class="btn btn-default" onClick="bloqueo('buttontarifafijablock','buttontarifafijadesblock','TarifaFijaIndDet')" id="buttontarifafijablock" style="display:none">

                                    <i class="fa fa-unlock"></i>  
                                </button>

               <button class="btn btn-default" onClick="desbloqueo('buttontarifafijablock','buttontarifafijadesblock','TarifaFijaIndDet')" id="buttontarifafijadesblock" >
<i class="fa fa-lock"></i>
                                  
                                </button>
                            </div>




                        </span> 



                        <input type="text" class="form-control input-lg" id="TarifaFijaIndDet" name="TarifaFijaIndDet" placeholder="Tarifa Fija"  readonly>




                    </div>

                </div>


            </div>




            <!-- Fin seccion cifras--->






            <div class="box-body">
                <div class="form-row">


                 

                  
                    <button class="btn btn-primary" onclick="ActualizarguiaEncabezado()" >
    
    
    
    
          
   Aplicar Cambios
        </button>  
                    
                 
                    
                </div>
            </div>




            <div class="box-body">


                <div id="contenedor_consulta">
                    <legend>Consulta Detalla De Guia</legend>
                    <table class="table table-bordered table-striped dt-responsive tablaProductos223" width="100%" id="tablaProductos223">

                        <thead>

                            <tr>
                                <th>Acciones</th>
                                
                                <th>PEDIDO</th>
                                <th>FECHA</th>
                                <th>CLIENTE</th>
                                
                                <th>VALOR_DECLARADO</th>
                                <th>VALOR_FLETE</th>
                                <th>SOBRE_PORTE</th>



                            </tr> 

                        </thead>      

                    </table>


      <button class="btn btn-primary" data-toggle="modal" data-target="#modalEditarBloque">
          
       Edicion en Bloque
        </button>   
                </div>


                <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">

            </div>

        </div>

    </section>
</div>
</div>  








<div id="modalCambioTransportadora" class="modal fade bd-example-modal-lg" role="dialog">
  
  <div class="modal-dialog modal-lg">

    <div class="modal-content">

      

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Cambio de Transportadora (Nombre & Detalle) </h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
                <label for="inputZip">Codigo - Nit de la Transportadora</label>
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-houzz"></i></span> 
<input type="hidden" id="PK_DDE_CONT" value="">
                <input type="text" class="form-control input-lg" id="cod_nit_transport" name="cod_nit_transport" value=""  >

              </div>

            </div>
 <button type="button" class="btn btn-primary" name="botonConsultaTras" id="botonConsultaTras" onclick="convinacion_list_Nom_transportadora()" >Consultar</button>
           

          </div>

        </div>




<table class="table table-bordered table-striped dt-responsive tablaTransportadora" width="100%" id="tablaTransportadora">

                        <thead>

                            <tr>
                                <th>Acciones</th>
                                <th style="width:10px">#</th>
                                <th>Codigo Transportadora</th>
                                <th>Nombre Transportadora</th><th>Codigo - Detalle de Transportadora</th>
                                <th>Detalle de Transportadora</th>



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







<div id="modalEditarDetalle" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      
        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Detalle</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
                <label for="inputZip">Valor Declarado</label>
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-houzz"></i></span> 
<input type="hidden" id="PK_DDE_CONT" value="">
<input type="hidden" id="PKPK_MDE_CONT" value="">
                <input type="text" class="form-control input-lg" id="VALOR_DECLARADO_EDT" name="VALOR_DECLARADO_EDT" value=""  >

              </div>

            </div>

            <!-- ENTRADA PARA EL USUARIO -->

             <div class="form-group">
                <label for="inputZip">Valor Flete</label>
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-houzz"></i></span> 

                <input type="text" class="form-control input-lg" id="VALOR_FLETE_EDT" name="VALOR_FLETE_EDT" value=""  >

              </div>

            </div>


 <!-- ENTRADA PARA EL USUARIO -->

             <div class="form-group">
                <label for="inputZip">Sobre Porte</label>
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-houzz"></i></span> 

                <input type="text" class="form-control input-lg" id="SOBRE_PORTE_EDT" name="SOBRE_PORTE_EDT" value=""  >

              </div>

            </div>

 
           

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="button" onclick="ActualizarDetallesDeGuiaIndividual()" class="btn btn-primary">Modificar Detalle</button>


 
        </div>
 
      

    </div>

  </div>

</div>







<div id="modalEditarBloque" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

    

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Modificacion en Bloque</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
                <label for="inputZip">Valor Declarado</label>
              <div class="input-group">
              
                
                
                
                
                
                
                
                  <span class="input-group-addon">
                            <div>
                                <button class="btn btn-default" onClick="bloqueo('buttonevalordeclaradobloqueblock','buttonevalordeclaradodesblock','valorDeclaradoBloque')" id="buttonevalordeclaradobloqueblock" style="display:none">

                                    <i class="fa fa-unlock"></i>
                                </button>

                                <button class="btn btn-default" onClick="desbloqueo('buttonevalordeclaradobloqueblock','buttonevalordeclaradodesblock','valorDeclaradoBloque')" id="buttonevalordeclaradodesblock" >
<i class="fa fa-lock"></i>
                                    
                                </button>
                            </div>

    </span> 

                
                
                
                
                
                
                

                <input type="text" class="form-control input-lg" id="valorDeclaradoBloque" name="editarNombre" value=""  readonly>

              </div>

            </div>

            <!-- ENTRADA PARA EL USUARIO -->

             <div class="form-group">
                <label for="inputZip">Valor Flete</label>
              <div class="input-group">
              
                
                  <span class="input-group-addon">
                            <div>
                                <button class="btn btn-default" onClick="bloqueo('buttonevalorfletebloqueblock','buttonevalorfletedesblock','valorFleteBloque')" id="buttonevalorfletebloqueblock" style="display:none">
<i class="fa fa-unlock"></i>
                                   
                                </button>

                                <button class="btn btn-default" onClick="desbloqueo('buttonevalorfletebloqueblock','buttonevalorfletedesblock','valorFleteBloque')" id="buttonevalorfletedesblock" >

                               <i class="fa fa-lock"></i>      
                                </button>
                            </div>

    </span> 

                <input type="text" class="form-control input-lg" id="valorFleteBloque" name="editarUsuario" value=""  readonly>

              </div>

            </div>


 <!-- ENTRADA PARA EL USUARIO -->

             <div class="form-group">
               
                <label for="inputZip">Sobre Porte</label>
              
              
              
              
              
              <div class="input-group">
              
                 <span class="input-group-addon">
                            <div>
                                <button class="btn btn-default" onClick="bloqueo('buttone_valorsobreporte_bloqueblock','buttone_valorsobreporte_desblock','valorSobrePorteBloque')" id="buttone_valorsobreporte_bloqueblock" style="display:none">

                                    <i class="fa fa-unlock"></i>
                                </button>

                                <button class="btn btn-default" onClick="desbloqueo('buttone_valorsobreporte_bloqueblock','buttone_valorsobreporte_desblock','valorSobrePorteBloque')" id="buttone_valorsobreporte_desblock" >
 <i class="fa fa-lock"></i>
                                   
                                </button>
                            </div>

    </span> 

                <input type="text" class="form-control input-lg" id="valorSobrePorteBloque" name="editarUsuario" value=""  readonly>

              </div>

            </div>

 
           

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

         

<!--
<button type="button" class="btn btn-primary" name="botone" id="botonUpdate" onclick="ActualizarDetallesDeGuiaBloque()">Guardar Cambios</button>-->
<button type="button" class="btn btn-primary" name="botone" id="botonUpdate" onclick="funcion_noconvinacion_bloque_convinacion()">Guardar Cambios </button>
        </div>
 
       

    </div>

  </div>

</div>













 


