<?php

require_once "../controladores/dirprod.controlador.php";
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
    
     
  		 $guias = ControladorDirProd::ctrMostrarDirectorioProductos();	
  		// $guias = ControladorGuias::ctrMostrarGuiasVari($pvd_coda, $mde_plac, $mde_ngui,$cont_case);	
               // $guias = ControladorGuias::ctrMostrarGuiasDetalle($item, $valor, $orden);
  		 
		
  		 
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
  		    $botones =  "<div class='btn-group'><button class='btn btn-primary btnEditarProducto' onclick='consultaIndividualProducto(". $concat.$guias[$i]["COD_DPRO"].$concat .")' data-toggle='modal' data-target='#modalConsultaIndividualDirPro'> <i class='fa fa-search' aria-hidden='true'></i></button></div>"; 
  		 $imagen =  '<img src="../'.$guias[$i]["URL_DIMA"].'"  class="card-img-top"  width="100px">';
                  
                  $ficha=  "<div class='btn-group'><button class='btn btn-light btnEditarProducto' ><a href ='../".$guias[$i]["URL_DFIC"]."' target='_blank'><i class='fa fa-download' aria-hidden='true'></i></a></button></div>"; 
  		// $botones =  "<div class='btn-group'><button class='btn btn-warning' onclick='traspaso(". $concat.$guias[$i]["PVD_CODI"].$concat ."," . $concat . $guias[$i]["DEP_CODD"] . $concat . ")'><i class='fa fa-pencil'></i></button></div>"; 
  		//  $botones =  "<button ></button>"; 
          
                   
                   /*
                    * select GN_ARBOL.EMP_CODI,GN_ARBOL.,GN_ARBOL.,GN_ARBOL. from GN_ARBOL
                    */
  
                 $arreglo_interior = array($botones,
                   $imagen,
                  $guias[$i]["PRO_CODI"],
                    $guias[$i]["PRO_NOMB"],
                    $guias[$i]["PVD_CODA"], 
                 
                    $guias[$i]["PVR_NOCO"], 
                    $guias[$i]["NOM_MARC"], 
                    $guias[$i]["NOT_DPRO"], 
                    $guias[$i]["FECH_ACTU"], 
                     $ficha
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

