<?php

require_once "../controladores/prod.controlador.php";
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
 
 
                $numero_producto=$_POST['numero_producto'];
                $nombre_producto=$_POST['nombre_producto'];
                $punto_venta=$_POST['punto_venta'];
                $contador=$_POST['contador'];
                
             $comentario=$_POST['comentario'];
                
                
  		//$guias = ControladorProd::ctrMostrarProducVari($numero_producto, $nombre_producto, $punto_venta, $contador);	
  		//$guias = ControladorProd::ctrMostrarProducVari($numero_producto,$nombre_producto,$punto_venta,$contador);	
  		$guias = ControladorProd::ctrMostrarProducVariMejorado($numero_producto,$nombre_producto,$punto_venta,$contador,$comentario);	
  		//$guias = ControladorProd::ctrMostrarProducVariMejorado($numero_producto,$nombre_producto,$punto_venta,$contador);	
              
  	 
		
  		 
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
  		    
                          
                    //$botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' idProducto='".$guias[$i]["PRD_CONT"]."' onclick='convinacion_dos(". $concat.$guias[$i]["CODIGO_PRODUCTO"].$concat ."," . $concat . $punto_venta . $concat . ")' data-toggle='modal' data-target='#modalAgregarProducto'><i class='fa fa-search'></i></button><button class='btn btn-primary btnEditarProducto' idProducto='".$guias[$i]["PRD_CONT"]."' onclick='agregar_carrito(". $concat.$guias[$i]["PRD_CONT"].$concat .",". $concat.$guias[$i]["CODIGO_PRODUCTO"].$concat ."," . $concat . $guias[$i]["NOMBRE_PRODUCTO"] . $concat . "," . $concat . $guias[$i]["PRECIO_TOTAL33"]. $concat . ")' data-toggle='modal' data-target='#modalagregarcarrito'><i class='fa fa-hand-o-up'></i></button><button class='btn btn-success btnEditarProducto' idProducto='".$guias[$i]["PRD_CONT"]."' onclick='agregar_lis_valores(". $concat.$guias[$i]["PRD_CONT"].$concat .",". $concat.$guias[$i]["CODIGO_PRODUCTO"].$concat ."," . $concat . $guias[$i]["NOMBRE_PRODUCTO"] . $concat . "," . $concat . number_format($guias[$i]["PRECIO_TOTAL33"]). $concat . "," . $concat . number_format($guias[$i]["BASE"]). $concat . "," . $concat . number_format($guias[$i]["PORC_IVA"]). $concat . "," . $concat . number_format($guias[$i]["PRECIO_TOTAL"]). $concat . ")' data-toggle='modal' data-target='#modallistvalores'><i class='fa'>$</i></button></div>"; 
  		     $botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' idProducto='".$guias[$i]["PRD_CONT"]."' onclick='convinacion_dos(". $concat.$guias[$i]["CODIGO_PRODUCTO"].$concat ."," . $concat . $punto_venta . $concat . ")' data-toggle='modal' data-target='#modalAgregarProducto'><i class='fa fa-search'></i></button><button class='btn btn-primary btnEditarProducto' idProducto='".$guias[$i]["PRD_CONT"]."' onclick='agregar_carrito(". $concat.$guias[$i]["PRD_CONT"].$concat .",". $concat.$guias[$i]["CODIGO_PRODUCTO"].$concat ."," . $concat . str_replace('"', " ", $guias[$i]["NOMBRE_PRODUCTO"]) . $concat . "," . $concat . $guias[$i]["PRECIO_TOTAL"]. $concat . ")' data-toggle='modal' data-target='#modalagregarcarrito'><i class='fa fa-hand-o-up'></i></button><button class='btn btn-success btnEditarProducto' idProducto='".$guias[$i]["PRD_CONT"]."' onclick='agregar_lis_valores(". $concat.$guias[$i]["PRD_CONT"].$concat .",". $concat.$guias[$i]["CODIGO_PRODUCTO"].$concat ."," . $concat . $guias[$i]["NOMBRE_PRODUCTO"] . $concat . "," . $concat . number_format($guias[$i]["PRECIO_TOTAL33"]). $concat . "," . $concat . number_format($guias[$i]["BASE"]). $concat . "," . $concat . number_format($guias[$i]["VALOR_IVA"]). $concat . "," . $concat . number_format($guias[$i]["PRECIO_TOTAL"]). $concat . ")' data-toggle='modal' data-target='#modallistvalores'><i class='fa'>$</i></button></div>"; 
  		   // $botones =  "";                                                                                                                                                                                                                                                                                                                                                                                                                                                  
                      

  			 
//
          // $dato = ControladorProd::ctrMostrarCantidadProducto($guias[$i]["CODIGO_PRODUCTO"],$punto_venta);	
                $dato = 1;	
    
                    
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
                $boton_rojo='<div class="alert alert-danger" role="alert" align="center">
  <h3 class="display-3">0</h3>
</div>';
                $boton_verde='<div class="alert alert-success" role="alert" align="center">
  <h3 class="display-3">'.number_format($guias[$i]["CANTIDADES"]).'</h3>
</div>';
                $entrada="";
                $cantid=  $guias[$i]["CANTIDADES"];        
                
                if($cantid==null || $cantid=="" ||$cantid==" " || $cantid==0){
                     $entrada=$boton_rojo;
                }
                else { $entrada=$boton_verde;}
                
                
      
                   // $entradaf= number_format($entrada);
                //CODIGO_PRODUCTO
                 /*
                 $arreglo_interior = array($botones,
                    '<h3 class="display-3">'.$guias[$i]["CODIGO_PRODUCTO"].' </h3>', 
                     '<h3 class="display-3">'.$guias[$i]["NOMBRE_PRODUCTO"].' </h3>',
                     '<h3 class="display-3" align="center">$'.number_format($guias[$i]["PRECIO_TOTAL"]).' </h3>' ,
                       '<h3 class="display-3">'.$guias[$i]["CANTIDAD"].' </h3>'  );
               */
                
                   $arreglo_interior = array($botones,
                    '<h3 class="display-3">'.$guias[$i]["CODIGO_PRODUCTO"].'</h3>', 
                     '<h3 class="display-3">'.$guias[$i]["NOMBRE_PRODUCTO"].' </h3>',
                     '<h3 class="display-3" align="center">$'.number_format($guias[$i]["PRECIO_TOTAL"]).' </h3>' ,
                     //  '<h3 class="display-3">'.$guias[$i]["PRECIO_TOTAL"].' </h3>'  );
                       '<h3 class="display-3">'.$entrada.' </h3>'  );
                  
                 
                array_push($arreglo_retorno, $arreglo_interior);
                    /*
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

