<?php

 require_once "../modelos/productos.modelo.php";
 require_once "../../../extensiones/vendor/autoload.php";

 $valor_control = $_POST["valor_control"];
 
 if($valor_control=='insert')
     {
     
      if(isset($_POST["nuevoNombreC"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombreC"])){

		   		/*=============================================
				VALIDAR IMAGEN
				=============================================*/

			   	$ruta = "img/productos/default/anonymous.png";
                                $rutabd = "img/productos/default/anonymous.png";
			   	if(isset($_FILES["nuevaImagenes"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["nuevaImagenes"]["tmp_name"]);

					$nuevoAncho = 900;
					$nuevoAlto = 1200;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/

					$directorio = "../../../img/productos/".$_POST["nuevoNombreC"];
                                       echo "directorio_".$directorio;
					mkdir($directorio, 0755);

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["nuevaImagenes"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "../../../img/productos/".$_POST["nuevoNombreC"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["nuevaImagenes"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);
                                                $rutabd = "img/productos/".$_POST["nuevoNombreC"]."/".$aleatorio.".jpg";

                                                

					}

					if($_FILES["nuevaImagenes"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "../../../img/productos/".$_POST["nuevoNombreC"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["nuevaImagenes"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);
                                                $rutabd="img/productos/".$_POST["nuevoNombreC"]."/".$aleatorio.".png";

					}

				}

				$tabla = "productos";

                                
                                
                                /*
                                 *                                  * 
                                 * 

                                 */
				$datos = array( 
							   "imagen" => $rutabd,
                                                            "nombre" => $_POST["nuevoNombreC"],
							   "email" => $_POST["nuevoCorreo"],
							   "extencion" => $_POST["nuevoExtencion"],
							   "celular" => $_POST["nuevoCelular"],
                                                           "fecha_nacimiento" => $_POST["nuevoFechaNacimiento"],
							   "cargo" => $_POST["nuevoCargo"],
							   "departamento" => $_POST["nuevoDepartamento"],
							   "ciudad" => $_POST["nuevoCiudad"]
                                    );

				$respuesta = ModeloProductos::mdlIngresarProducto($tabla, $datos);

				if($respuesta == "ok"){
                                    echo 'Registro Almacenado';
/*
                                echo'<script>

					 alert("Registro Almacenamiento");
                                         window.location = "../index2.php"
			  	</script>';
  */                                                  

						 

				}


			}else{

				echo'<script>

					 alert("Error en el Almacenamiento");
			  	</script>';
			}
		}
}
	if($valor_control=='update')
     {
       
            if(isset($_POST["nuevoNombreCEDT"])){
                    //comienzo de condicion    
                    	     if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombreCEDT"])){

				/*=============================================
				VALIDAR IMAGEN
				=============================================*/

				$ruta = $_POST["imagenActual"];
                                $rutabd = "";

				if(isset($_FILES["editarImagen"]["tmp_name"]) && !empty($_FILES["editarImagen"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["editarImagen"]["tmp_name"]);

					$nuevoAncho = 900;
					$nuevoAlto = 1200;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/
                                    //    ECHO "IMAGENACTUAL__".$_POST["imagenActual"];     
					$directorio = "../../../img/productos/".$_POST["nuevoNombreCEDT"];
                                         mkdir($directorio, 0755);
                                          
                                        $imagenActuals=  "../../../".$_POST["imagenActual"];
					/*=============================================
					PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
					=============================================*/
                                     
					if(!empty($_POST["imagenActual"])){

						unlink($imagenActuals);
                                             

					}else{

						mkdir($directorio, 0755);

					}	
   
					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["editarImagen"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);
                                               
						$ruta = "../../../img/productos/".$_POST["nuevoNombreCEDT"]."/".$aleatorio.".jpg";
						$rutabd = "img/productos/".$_POST["nuevoNombreCEDT"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["editarImagen"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}

					if($_FILES["editarImagen"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "../../../img/productos/".$_POST["nuevoNombreCEDT"]."/".$aleatorio.".png";
						$rutabd = "img/productos/".$_POST["nuevoNombreCEDT"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["editarImagen"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}

				}

				     
				$tabla = "productos";

				$datos = array( 
							   "imagen" => $rutabd,
                                                           "codico_persona_pk" => $_POST["codico_persona_pk"],
                                                           "nombre" => $_POST["nuevoNombreCEDT"],
							   "email" => $_POST["nuevoCorreoEDT"],
							   "extencion" => $_POST["nuevoExtencionEDT"],
							   "celular" => $_POST["nuevoCelularEDT"],
                                                           "fecha_nacimiento" => $_POST["nuevoFechaNacimientoEDT"],
							   "cargo" => $_POST["nuevoCargoEDT"],
							   "departamento" => $_POST["nuevoDepartamentoEDT"],
							   "ciudad" => $_POST["nuevoCiudadEDT"]
                                                            );

				$respuesta = ModeloProductos::mdlEditarProducto($tabla, $datos);

				if($respuesta == "ok"){
                                    
                                  echo 'codigo_pk_'.$rutabd;
                                    /*
				       echo'<script>

					 alert("Registro Modificado");
                                         window.location = "../index2.php"
			  	        </script>'; 
                                              
*/
				}


			}
                        
                    
                    
                    
                    //fin de condicion 
		 
		}

            
     }
     if($valor_control=='delete'){
         
          $valor_control = $_POST["valor_control"];
          
         if(isset($_POST["idProducto"])){

			$tabla ="productos";
			$datos = $_POST["idProducto"];

			if($_POST["imagen"] != "" && $_POST["imagen"] != "vistas/img/productos/default/anonymous.png"){
                                
                                $vari_num="../".$_POST["imagen"];
                            
				unlink($vari_num);
                                
				rmdir('../vistas/img/productos/'.$_POST["nombre_arch"]);

			}

			$respuesta = ModeloProductos::mdlEliminarProducto($tabla, $datos);

			if($respuesta == "ok"){

				echo 1;

			}		
		}
         
     }