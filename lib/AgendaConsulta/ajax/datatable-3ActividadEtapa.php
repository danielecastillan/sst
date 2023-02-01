<?php

require_once "../controladores/agent.controlador.php";
//require_once "../modelos/productos.modelo.php";

//require_once "../controladores/categorias.controlador.php";
//require_once "../modelos/categorias.modelo.php";

 /*

  */
//    data: {"PVD_CODA": PVD_CODA,"": MDE_PLAC,"MDE_NGUI": MDE_NGUI},
class TablaGuias{

 	/*=============================================
 	 MOSTRAR LA TABLA DE PRODUCTOS
  	=============================================*/ 

	public function mostrarTablaGuias(){
      //  $PVD_CODA = $_POST["PVD_CODA"];
		$item = null;
    	$valor = null;
    	$orden = "id";
 
 /*
                $numero_producto=$_POST['numero_producto'];
                $nombre_producto=$_POST['nombre_producto'];
                $punto_venta=$_POST['punto_venta'];
                $contador=$_POST['contador'];
                */
             /*
                $HOR_NUME=$_POST['HOR_NUME'];
                $contador=$_POST['cont_case'];
                $empleado=$_POST['nombre_empleado'];
               */ 
                /*
                 *  cont_case:  contador,
            HOR_NUME:HOR_NUME,
            nombre_empleado:nombre_empleado
                 * 
                 */
                
         $fecha=$_POST['fecha'];       
         $contador=$_POST['contador'];       
         $user=$_POST['user'];       
         
        
         
         
         
         
         
  		//$guias = ControladorProd::ctrMostrarProducVari($numero_producto, $nombre_producto, $punto_venta, $contador);	
  		$guias = ControladorAgent::ctrMostrarConsultasConsulActiEtapa($fecha,$contador,$user);	

  		if(count($guias) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';
   $arreglo_retorno = array();
		  for($i = 0; $i < count($guias); $i++){

		  	 
		  	/*=============================================
 	 		TRAEMOS LAS ACCIONES
  			=============================================*/ 
                        //  $concat="'";
  			//' . $concat . $row['NOMBRE_CIENTIFICO'] . $concat . ' 
                          $concat='"';
  			//$aas="sss" . $concat . $row['NOMBRE_CIENTIFICO'] . $concat . "sss";

  		  //$botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' idProducto='".$guias[$i]["MDE_CONT"]."' data-toggle='modal' data-target='#nuevomodaledti'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarProducto' idProducto='".$productos[$i]["id"]."'  imagen='".$productos[$i]["imagen"]."' nombre_arch='".$productos[$i]["nombre"]."' ><i class='fa fa-times'></i></button> </div>"; 
  		 //   $botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarProducto'   onclick='eliminar_registro_perfil(". $concat.$guias[$i]["id_perfil"].$concat .")'  ><i class='fa fa-times'></i></button></div>"; 
  		    // $botones =  "";                                                                                                                                                                                                                                                                                                                                                                                                                                                  
                      
  $consulta_actividad= ControladorAgent::ctrValidaActividad($guias[$i]["ACT_CODI"]);
                $consulta_etapa= ControladorAgent::ctrValidaActividadEtapa($guias[$i]["ETA_CODI"],$guias[$i]["ACT_CODI"]);
                
                  //$detallesr= '';    
                  //$detallesr2= '';    
                          
       $boton_rojo='<div class="alert alert-danger" role="alert" align="center">
   '.$guias[$i]["ACT_CODI"].' 
</div>';
     $boton_verde='<div class="alert alert-success" role="alert" align="center">
   '.$guias[$i]["ACT_CODI"].' 
</div>';
                $entrada="";
                if($consulta_actividad==0){
                    $entrada=$boton_rojo;
                 //  $detallesr= ' <input type="hidden" value="" id="" class="'.$guias[$i]["USUARIO"].'">'  ;       
               $guiass = ControladorAgent::ctrRegistroErroresAgenda($guias[$i]["USU_EJEC"],3,$guias[$i]["USU_NOMB"]);
                }
                else {  
                
                 $entrada=$boton_verde;
                }
                  
                          
        
                
                
           $boton_rojo2='<div class="alert alert-danger" role="alert" align="center">
     '.$guias[$i]["ETA_CODI"].' 
</div>';
     $boton_verde2='<div class="alert alert-success" role="alert" align="center">
   '.$guias[$i]["ETA_CODI"].' 
</div>';
                $entrada2="";
                if($consulta_etapa==0){
                    $entrada2=$boton_rojo2;
                    // $detallesr= ' <input type="hidden" value="" id="" class="'.$guias[$i]["USUARIO"].'">'  ;       
                $guiass = ControladorAgent::ctrRegistroErroresAgenda($guias[$i]["USU_EJEC"],3,$guias[$i]["USU_NOMB"]);
               
                }
                else {  
                
                 $entrada2=$boton_verde2;
                } 
                   
                                    
                
              
                
                
                     
                
  			 
              $palabra_estado="";
              /*
                   if($guias[$i]["HOR_ESTA"]=="A"){
                       $palabra_estado='Aplicado';
                   }
                   else if($guias[$i]["HOR_ESTA"]=="I"){
                       $palabra_estado='Inactivo';
                   }
                   else if($guias[$i]["HOR_ESTA"]=="G"){
                       $palabra_estado='Grabado';
                   }*/
                   
           /*
               $arreglo_interior = array( 8 ,
              7 ,
               6   ,
               5  ,
                 4    , 
                   3   , 
                   1     
                     
                   
                       ); 
                */
                 
                
                        $arreglo_interior = array(  $guias[$i]["USU_EJEC"] ,
                    $guias[$i]["USU_NOMB"]    ,
                    $guias[$i]["age_cont"]    ,
                   $entrada    ,
                    $guias[$i]["ACT_NOMB"]    , 
                    $entrada2   , 
                    $guias[$i]["ETA_NOMB"]      
                     
                   
                       ); 
                  
                 
                 
                 
                  
                array_push($arreglo_retorno, $arreglo_interior);
                   
                        	 

		  }

		  $datosJson = substr($datosJson, 0, -1);

		 $datosJson .=   '] 

		 }';
		 
                 
                 
                 
                 
		   $json = json_encode($arreglo_retorno);

        echo $json;
		//echo $datosJson;


	}



}

/*=============================================
ACTIVAR TABLA DE GUIAS
=============================================*/ 
$activarGuias = new TablaGuias();
$activarGuias -> mostrarTablaGuias();

