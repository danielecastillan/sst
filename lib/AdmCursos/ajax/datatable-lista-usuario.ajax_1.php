<?php

require_once "../controladores/curso.controlador.php";
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
  	 	$guias = ControladorCurso::ctrMostrarConsultasUsuarios();	

  	/*	if(count($guias) == 0){

  			echo '{"data": []}';

		  	return;
  		}*/
		
  		 
   $arreglo_retorno = array();
		  for($i = 0; $i < count($guias); $i++){
		//  for($i = 0; $i < 5; $i++){

		  	 
		  	/*=============================================
 	 		TRAEMOS LAS ACCIONES
  			=============================================*/ 
                        //  $concat="'";
  			//' . $concat . $row['NOMBRE_CIENTIFICO'] . $concat . ' 
                          $concat='"';
  			//$aas="sss" . $concat . $row['NOMBRE_CIENTIFICO'] . $concat . "sss";

  		  //$botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarProducto' idProducto='".$guias[$i]["MDE_CONT"]."' data-toggle='modal' data-target='#nuevomodaledti'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarProducto' idProducto='".$productos[$i]["id"]."'  imagen='".$productos[$i]["imagen"]."' nombre_arch='".$productos[$i]["nombre"]."' ><i class='fa fa-times'></i></button> </div>"; 
  		    $botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarProducto'   onclick='eliminar_registro_usuarios(". $concat.$guias[$i]["id_usuario"].$concat .")'  ><i class='fa fa-times'></i></button></div>"; 
  		    //$imagen = '<img src="'.$guias[$i]["ruta_video"].'" class="img-thumbnail previsualizar" width="100px">'; 
  		 //   $imagen = '<a href="'.utf8_decode($guias[$i]["ruta_video"]).'" title="video adjunto" target="_blank">'.$guias[$i]["ruta_video"].'</a>'; 
  		  //  $imagen = '<a href="objetos/misojos.swf" target="video">Ver video</a>'; 
  		  //  $botones =  "";                                                                                                                                                                                                                                                                                                                                                                                                                                                  
                      /*
                       
    select modulos.id_modulo,modulos.`id_curso`,cursos.`nombre_curso`,modulos.`nombre_modulo`,modulos.`descripcion`,modulos.`fecha_creacion` from modulos
inner join cursos on modulos.`id_curso`=cursos.`id_curso`
                        
                       */

  			 
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
            SELECT `leccion_contenido`.``,cursos.`nombre_curso` AS ,modulos.`nombre_modulo` AS ,leccion_contenido.`nombre_leccion` AS ,leccion_contenido.`descripcion` AS ,leccion_contenido.`ruta_video` AS  FROM leccion_contenido
INNER JOIN cursos ON leccion_contenido.`id_curso`=cursos.`id_curso`
INNER JOIN modulos ON leccion_contenido.`id_modulo`=modulos.`id_modulo`
             
             
            
            */
  
              
              
                 $arreglo_interior = array($botones,
                        $guias[$i]["usuario"],
                   $guias[$i]["tipo_identificacion"], 
                   $guias[$i]["identificacion"]  , 
                   $guias[$i]["nombre_completo"] ,
                   $guias[$i]["fecha_nacimiento"],
                   $guias[$i]["correo"],
                   $guias[$i]["celular"],
                
                   $guias[$i]["perfil"]
                  
                     
                       ); 
            
                /*    
                 $arreglo_interior = array(1,
                  1   , 
                   1  , 
                   1
                       ); 
                 */
                 
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

