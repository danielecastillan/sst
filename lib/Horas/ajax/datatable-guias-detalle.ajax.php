<?php

require_once "../controladores/guias.controlador.php";
//require_once "../modelos/productos.modelo.php";

//require_once "../controladores/categorias.controlador.php";
//require_once "../modelos/categorias.modelo.php";

 
class TablaGuiasDetalle{

 	/*=============================================
 	 MOSTRAR LA TABLA DE PRODUCTOS
  	=============================================*/ 

	public function mostrarTablaGuiasDetalle(){

            
            
            
            
		$item = null;
    	$valor = null;
    	$orden = "id";

  		$guias = ControladorGuias::ctrMostrarGuiasDetalle($item, $valor, $orden);	

  		if(count($guias) == 0){

  			echo '{"data": []}';

		  	return;
  		}
		
  		$datosJson = '{
		  "data": [';

		  for($i = 0; $i < count($guias); $i++){

		  	 
		  	/*=============================================
 	 		TRAEMOS LAS ACCIONES
  			=============================================*/ 
                       //$botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' idProducto='".$guias[$i]["id"]."' data-toggle='modal' data-target='#nuevomodaledti'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarProducto' idProducto='".$productos[$i]["id"]."'  imagen='".$productos[$i]["imagen"]."' nombre_arch='".$productos[$i]["nombre"]."' ><i class='fa fa-times'></i></button> </div>"; 
  		    $botones =  ""; 

  			 

		 
		  	$datosJson .='[
			      "'.$botones.'",
                                "'.($i+1).'",
			      "'.$guias[$i]["VALOR_DECLARADO"].'",
			      "'.$guias[$i]["VALOR_FLETE"].'",
			      "'.$guias[$i]["SOBRE_PORTE"].'" 
			      
			    ],';

		  }

		  $datosJson = substr($datosJson, 0, -1);

		 $datosJson .=   '] 

		 }';
		
		echo $datosJson;


	}



}

/*=============================================
ACTIVAR TABLA DE GUIAS
=============================================*/ 
$activarGuias = new TablaGuiasDetalle();
$activarGuias -> mostrarTablaGuiasDetalle();

?>