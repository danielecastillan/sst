<?php

require_once "../controladores/balance.controlador.php";
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
    $tipo_busqueda=$_POST['tipo_busqueda'];
    $valor_busqueda=$_POST['valor_busqueda'];
 
     
  		 $guias = ControladorBalance::ctrMostrarConCuentas($tipo_busqueda,$valor_busqueda);	
  		// $guias = ControladorGuias::ctrMostrarGuiasVari($pvd_coda, $mde_plac, $mde_ngui,$cont_case);	
               // $guias = ControladorGuias::ctrMostrarGuiasDetalle($item, $valor, $orden);
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

  			 

  		    //$botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' idProducto='".$guias[$i]["id"]."' data-toggle='modal' data-target='#nuevomodaledti'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarProducto' idProducto='".$productos[$i]["id"]."'  imagen='".$productos[$i]["imagen"]."' nombre_arch='".$productos[$i]["nombre"]."' ><i class='fa fa-times'></i></button> </div>"; 
  		   $botones =  ""; 
                    $concat='"';
  			//$aas="sss" . $concat . $row['NOMBRE_CIENTIFICO'] . $concat . "sss";

  		  //$botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' idProducto='".$guias[$i]["MDE_CONT"]."' data-toggle='modal' data-target='#nuevomodaledti'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarProducto' idProducto='".$productos[$i]["id"]."'  imagen='".$productos[$i]["imagen"]."' nombre_arch='".$productos[$i]["nombre"]."' ><i class='fa fa-times'></i></button> </div>"; 
  		  $botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' onclick='traspaso_variables_cuenta_final(". $concat.$guias[$i]["CUE_CODI"].$concat ."," . $concat . $guias[$i]["CUE_NOMB"] . $concat . ")'><i class='fa fa-hand-o-up'></i></button></div>"; 
  		 // $botones =  "<div class='btn-group'><button class='btn btn-warning' onclick='traspaso(". $concat.$guias[$i]["PVD_CODI"].$concat ."," . $concat . $guias[$i]["DEP_CODD"] . $concat . ")'><i class='fa fa-pencil'></i></button></div>"; 
  		//  $botones =  "<button ></button>"; 
          
                   
                   /*
                    * select GN_ARBOL.EMP_CODI,GN_ARBOL.,GN_ARBOL.,GN_ARBOL. from GN_ARBOL
                    */
  
                 $arreglo_interior = array($botones,
                   // ($i+1),
                  //  $guias[$i]["ARB_CONT"],
                    $guias[$i]["CUE_CODI"],
                    $guias[$i]["CUE_NOMB"] 
                     );
                array_push($arreglo_retorno, $arreglo_interior);
              
                        	 

		  }

		  
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

