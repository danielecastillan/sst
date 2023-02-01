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
  		$guias = ControladorGuias::ctrMostrarGuiasVari($pvd_coda, $mde_plac, $mde_ngui);	

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

  			 

 /*
 $MDE_PLAC = $_POST["MDE_PLAC"];
 $MDE_NGUI = $_POST["MDE_NGUI"];
  *  "'.$guias[$i]["PLACA"].'",
  
   */  
                    
                    
		  	$datosJson .='[
			      "'.$botones.'",
                                "'.($i+1).'",
			     
			      "n0":"-111111122222.", 
                              "n1":"'.$guias[$i]["CODIGO_TRANS"].'",
			      "n2":"'.$guias[$i]["TRANSPORTISTA_NAME"].'",
			      "n3":"'.$guias[$i]["PESO"].'",
			      "n4":"'.$guias[$i]["VALOR_DECLARADO"].'",
			      "n5":"'.$guias[$i]["VALOR_FLETE"].'",
                              "n6":"'.$guias[$i]["TARIFA_FIJA"].'" 
			      
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
$activarGuias = new TablaGuias();
$activarGuias -> mostrarTablaGuias();

