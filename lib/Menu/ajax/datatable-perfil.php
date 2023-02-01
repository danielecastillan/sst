<?php

require_once "../controladores/menu.controlador.php";
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
                
                
                
  		//$guias = ControladorProd::ctrMostrarProducVari($numero_producto, $nombre_producto, $punto_venta, $contador);	
  		$guias = ControladorMenu::ctrMostrarConsultasPerfil();	

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
  		    $botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarProducto'   onclick='eliminar_registro_perfil(". $concat.$guias[$i]["id_perfil"].$concat .")'  ><i class='fa fa-times'></i></button></div>"; 
  		    // $botones =  "";                                                                                                                                                                                                                                                                                                                                                                                                                                                  
                      

  			 
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
                   
           
                 $arreglo_interior = array($botones,
                    $guias[$i]["nombre_perfil"]    , 
                   $guias[$i]["descripcion"]    
                   
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

