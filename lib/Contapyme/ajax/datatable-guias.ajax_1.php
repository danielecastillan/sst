<?php

require_once "../controladores/guias.controlador.php";
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
    $pvd_coda=$_POST['pvd_coda'];
 
    $mde_plac=$_POST['mde_plac'];
    $mde_ngui=$_POST['mde_ngui'];
    $cont_case=$_POST['cont_case'];
  		$guias = ControladorGuias::ctrMostrarGuiasVari($pvd_coda, $mde_plac, $mde_ngui,$cont_case);	

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
  		   $botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' idProducto='".$guias[$i]["MDE_CONT"]."' onclick='consul_abrir_detalle(". $concat.$guias[$i]["MDE_CONT"].$concat ."," . $concat . $pvd_coda . $concat . "," . $concat . $mde_plac . $concat . "," . $concat . $mde_ngui . $concat . ")'><i class='fa fa-pencil'></i></button></div>"; 
  		 //  $botones =  ""; 

  			 

 /*
    "'.$botones.'",
                                "'.($i+1).'",
			      "'.$guias[$i]["PLACA"].'",
			      "'.$guias[$i]["CODIGO_TRANS"].'",
			      "'.$guias[$i]["TRANSPORTISTA_NAME"].'", 
			      "'.$guias[$i]["PESO"].'",
			      "'.$guias[$i]["VALOR_DECLARADO"].'",
			      "'.$guias[$i]["VALOR_FLETE"].'",
                              "'.$guias[$i]["TARIFA_FIJA"].'" 
			      
  
   */  
                 $arreglo_interior = array($botones,
                    $guias[$i]["MDE_NGUI"], 
                    $guias[$i]["PLACA"],
                    $guias[$i]["CODIGO_TRANS"],
                    $guias[$i]["TRANSPORTISTA_NAME"],
                    $guias[$i]["PESO"],
                    $guias[$i]["VALOR_DECLARADO"],
                    $guias[$i]["VALOR_FLETE"],
                    $guias[$i]["TARIFA_FIJA"]);
                array_push($arreglo_retorno, $arreglo_interior);
                    
		  	$datosJson .='[
			      "'.$botones.'",
                                "'.($i+1).'",
			     
			      "-'.$pvd_coda.'",
			      "'.$guias[$i]["CODIGO_TRANS"].'",
			      "'.$guias[$i]["TRANSPORTISTA_NAME"].'", 
			      "'.$guias[$i]["PESO"].'",
			      "'.$guias[$i]["VALOR_DECLARADO"].'",
			      "'.$guias[$i]["VALOR_FLETE"].'",
                              "'.$guias[$i]["TARIFA_FIJA"].'" 
			      
			    ],';
                        
                        
                        	 

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

