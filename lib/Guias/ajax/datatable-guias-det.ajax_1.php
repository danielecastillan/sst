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
    $mde_cont=$_POST['mde_cont'];
 
     
  		 $guias = ControladorGuias::ctrMostrarGuiasVariDetalle($mde_cont);	
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
  		  //  $botones =  ""; 
                    $concat='"';
  			//$aas="sss" . $concat . $row['NOMBRE_CIENTIFICO'] . $concat . "sss";MDE_CONT

  		  //$botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' idProducto='".$guias[$i]["MDE_CONT"]."' data-toggle='modal' data-target='#nuevomodaledti'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarProducto' idProducto='".$productos[$i]["id"]."'  imagen='".$productos[$i]["imagen"]."' nombre_arch='".$productos[$i]["nombre"]."' ><i class='fa fa-times'></i></button> </div>"; 
  		   $botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' data-toggle='modal' data-target='#modalEditarDetalle' idProducto='".$guias[$i]["PK_DDE_CONT"]."' onclick='consul_abrir_detalle_deldetalle(". $concat.$guias[$i]["MDE_CONT"].$concat .",". $concat.$guias[$i]["PK_DDE_CONT"].$concat ."," . $concat . $guias[$i]["VALOR_DECLARADO"] . $concat . "," . $concat . $guias[$i]["VALOR_FLETE"] . $concat . "," . $concat . $guias[$i]["SOBRE_PORTE"] . $concat . ")'><i class='fa fa-pencil'></i></button></div>"; 
  		
                                                                                                                                                                                                             
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
			      
        "'.$guias[$i][""].'",
			      "'.$guias[$i][""].'",
			      "'.$guias[$i][""].'"
  * 
  *       SELECT 
                                                                            PE_DDESP.DDE_VALO AS VALOR_DECLARADO,
                                                                            PE_DDESP.DDE_VFLE AS VALOR_FLETE,
                                                                            PE_PEDIM.PED_SPRT AS SOBRE_PORTE 
                                                                            FROM PE_DDESP
                                                                            INNER JOIN PE_PEDIM on PE_DDESP.PED_CONT=PE_PEDIM.PED_CONT

                                                                            WHERE PE_DDESP.MDE_CONT=4875001
   */  
                 $arreglo_interior = array($botones,
                   
                    $guias[$i]["PEDIDO"],
                    $guias[$i]["FECHA"],
                    $guias[$i]["CLIENTE"],
                    $guias[$i]["VALOR_DECLARADO"],
                    $guias[$i]["VALOR_FLETE"],
                    $guias[$i]["SOBRE_PORTE"] );
                 
                 
                 
                array_push($arreglo_retorno, $arreglo_interior);
                    /*
                     * 
                     * 
                     *  PE_DDESP.DDE_CONT as PK_DDE_CONT,
                                                                          PE_PEDIM.PED_NUME AS PEDIDO,
                                                                          PE_PEDIM.PED_FECH AS FECHA,
                                                                          FA_DCLIE.DCL_NOMB AS CLIENTE,
                                                                          PE_DDESP.DDE_VALO AS VALOR_DECLARADO,
                                                                         PE_DDESP.DDE_VFLE AS VALOR_FLETE,
                                                                           PE_PEDIM.PED_SPRT AS SOBRE_PORTE
                     * 
                     * 
                     * 
                     * 
                     * 
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
                        */
                        
                        	 

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

