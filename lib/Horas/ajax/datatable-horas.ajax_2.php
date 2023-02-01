<?php

require_once "../controladores/horas.controlador.php";
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
             
                $NUM_ORDEN=$_POST['NUM_ORDEN'];
              
                
                /*
                 *  cont_case:  contador,
            HOR_NUME:HOR_NUME,
            nombre_empleado:nombre_empleado
                 * 
                 */
                
                
                
  		//$guias = ControladorProd::ctrMostrarProducVari($numero_producto, $nombre_producto, $punto_venta, $contador);	
  		$guias = ControladorHoras::ctrMostrarConsultasHorasOM($NUM_ORDEN);	

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
  		    $botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarProducto'   onclick='modal_edicion_horas(". $concat.$guias[$i]["HOR_CONT"].$concat .")' data-toggle='modal' data-target='#modalEditarEstado'><i class='fa fa-search'></i></button></div>"; 
  		     //$botones =  "";                                                                                                                                                                                                                                                                                                                                                                                                                                                  
                      

  			 
              $palabra_estado="";
                   if($guias[$i]["HOR_ESTA"]=="A"){
                       $palabra_estado='Aplicado';
                   }
                   else if($guias[$i]["HOR_ESTA"]=="I"){
                       $palabra_estado='Inactivo';
                   }
                   else if($guias[$i]["HOR_ESTA"]=="G"){
                       $palabra_estado='Grabado';
                   }
                   
                   
                
                 $arreglo_interior = array($botones,
                    '<h4 class="display-3">'.$guias[$i]["HOR_NUME"].' </h4>'  , 
                    '<h4 class="display-3">'.$guias[$i]["HOR_NTLA"].' </h4>', 
                    '<h4 class="display-3">'.$guias[$i]["EMP_NOMB"].' '.$guias[$i]["EMP_APEL"].' </h4>',
                     '<h4 class="display-3" align="center">'.$guias[$i]["HOR_FECH"].' </h4>' ,
                     '<h4 class="display-3" align="center">'.$guias[$i]["HOR_FAPL"].' </h4>' ,
                     '<h4 class="display-3" align="center">'.$guias[$i]["HOR_OBSE"].' </h4>' ,
                     '<h4 class="display-3" align="center">'.$palabra_estado.' </h4>'    );
               
                 
              
                 
                 
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

