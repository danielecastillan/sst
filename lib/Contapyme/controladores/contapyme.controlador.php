<?php
require_once '../modelos/contapyme.modelo.php';
class ControladorContapyme{

	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

	static public function ctrMostrarConsultasContapyme($vari_consulta){

		$tabla = "productos";

		$respuesta = ModeloContapyme::mdlMostrarConContapyme($vari_consulta);

		return $respuesta;

	}
        
        
        
        
       	static public function ctrMostrarGuiasVari($pvd_coda, $mde_plac, $mde_ngui,$cont_case){

		$tabla = "productos";

		$respuesta = ModeloGuias::mdlMostrarGuiasVari($pvd_coda, $mde_plac, $mde_ngui,$cont_case);

		return $respuesta;

	} 
       	static public function ctrMostrarGuiasVariDetalle($mde_cont){

		$tabla = "productos";

		$respuesta = ModeloGuias::mdlMostrarGuiasVariDetalle($mde_cont);

		return $respuesta;

	}
        static public function ctrMostrarTransportadoraGuias($cod_cont_transport){

		$tabla = "productos";

		$respuesta = ModeloGuias::mdlMostrarTransportadoraGuias($cod_cont_transport);

		return $respuesta;

	}
        
        
        
        
        
        
          	static public function ctrMostrarGuiaIndividual($mde_cont_llave){

		$tabla = "productos";

		$respuesta = ModeloGuias::mdlMostrarGuiaIndividual($mde_cont_llave);

		return $respuesta;

	} 
        
        
        
        
        
        static public function ctrMostrarGuiasDetalle($item, $valor, $orden){

		$tabla = "productos";

		$respuesta = ModeloGuias::mdlMostrarDetalleGuias($tabla, $item, $valor, $orden);

		return $respuesta;

	}
        
        
        
        

	/*=============================================
	CREAR PRODUCTO 
	=============================================*/

	static public function ctrCrearProducto(){

		if(isset($_POST["nuevoNombreC"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombreC"])){

		   		/*=============================================
				VALIDAR IMAGEN
				=============================================*/

			   	$ruta = "vistas/img/productos/default/anonymous.png";

			   	if(isset($_FILES["nuevaImagenes"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["nuevaImagenes"]["tmp_name"]);

					$nuevoAncho = 900;
					$nuevoAlto = 1200;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/

					$directorio = "vistas/img/productos/".$_POST["nuevoNombreC"];

					mkdir($directorio, 0755);

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/

					if($_FILES["nuevaImagen"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/productos/".$_POST["nuevoNombreC"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["nuevaImagen"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}

					if($_FILES["nuevaImagen"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/productos/".$_POST["nuevoNombreC"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["nuevaImagen"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}

				}

				$tabla = "productos";

                                
                                
                                /*
                                 *                                  * 
                                 * 

                                 */
				$datos = array("id_categoria" => $_POST["nuevaCategoria"],
							   "codigo" => $_POST["nuevoCodigo"],
							   "descripcion" => $_POST["nuevaDescripcion"],
							   "stock" => $_POST["nuevoStock"],
							   "precio_compra" => $_POST["nuevoPrecioCompra"],
							   "precio_venta" => $_POST["nuevoPrecioVenta"],
							   "imagen" => $ruta,
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

					echo'<script>

						swal({
							  type: "success",
							  title: "El registro de persona ha sido guardado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "index.php";

										}
									})

						</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El registro de persona no puede ir con los campos vacíos o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "index.php";

							}
						})

			  	</script>';
			}
		}

	}

	/*=============================================
	EDITAR PRODUCTO
	=============================================*/

	static public function ctrEditarProducto(){

		if(isset($_POST["nuevoNombreCEDT"])){
                    //comienzo de condicion    
                    	     if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombreCEDT"])){

				/*=============================================
				VALIDAR IMAGEN
				=============================================*/

				$ruta = $_POST["imagenActual"];

				if(isset($_FILES["editarImagen"]["tmp_name"]) && !empty($_FILES["editarImagen"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["editarImagen"]["tmp_name"]);

					$nuevoAncho = 900;
					$nuevoAlto = 1200;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/

					$directorio = "vistas/img/productos/".$_POST["nuevoNombreCEDT"];

					/*=============================================
					PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
					=============================================*/

					if(!empty($_POST["imagenActual"])){

						unlink($_POST["imagenActual"]);

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

						$ruta = "vistas/img/productos/".$_POST["nuevoNombreCEDT"]."/".$aleatorio.".jpg";

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

						$ruta = "vistas/img/productos/".$_POST["nuevoNombreCEDT"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["editarImagen"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}

				}

				     
				$tabla = "productos";

				$datos = array( 
							   "imagen" => $ruta,
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

					echo'<script>

						swal({
							  type: "success",
							  title: "El registro de persona ha sido editado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "index.php";

										}
									})

						</script>';

				}


			}
                        
                    
                    
                    
                    //fin de condicion 
		 
		}

	}

        /*=============================================
	EDITAR PRODUCTO BK
	=============================================*/
        static public function ctrEditarProductobk(){

		if(isset($_POST["nuevoNombreCEDT"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombreCEDT"])  
			    ){

		   		/*=============================================
				VALIDAR IMAGEN
				=============================================*/

			   	$ruta = $_POST["imagenActual"];

			   	if(isset($_FILES["editarImagen"]["tmp_name"]) && !empty($_FILES["editarImagen"]["tmp_name"])){

					list($ancho, $alto) = getimagesize($_FILES["editarImagen"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

					/*=============================================
					CREAMOS EL DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
					=============================================*/

					$directorio = "vistas/img/productos/".$_POST["nuevoNombreCEDT"];

					/*=============================================
					PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
					=============================================*/

					if(!empty($_POST["imagenActual"]) && $_POST["imagenActual"] != "vistas/img/productos/default/anonymous.png"){

						unlink($_POST["imagenActual"]);

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

						$ruta = "vistas/img/productos/".$_POST["nuevoNombreCEDT"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["nuevoNombreCEDT"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}
                                        
                                        
                                        /*
					if($_FILES["editarImagen"]["type"] == "image/jpeg"){

						
						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/productos/".$_POST["nuevoNombreCEDT"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["nuevoNombreCEDT"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}*/

					if($_FILES["editarImagen"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/productos/".$_POST["nuevoNombreCEDT"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["editarImagen"]["tmp_name"]);						
                                                 						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}

				}
                                 
                              
                                
				$tabla = "productos";

				$datos = array( 
							   "imagen" => $ruta,
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

					echo'<script>

						swal({
							  type: "success",
							  title: "El registro de persona ha sido editado correctamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
										if (result.value) {

										window.location = "index.php";

										}
									})

						</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El registro de persona no puede ir con los campos vacíos o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "index.php";

							}
						})

			  	</script>';
			}
		}

	}
	/*=============================================
	BORRAR PRODUCTO
	=============================================*/
	static public function ctrEliminarProducto(){

		if(isset($_GET["idProducto"])){

			$tabla ="productos";
			$datos = $_GET["idProducto"];

			if($_GET["imagen"] != "" && $_GET["imagen"] != "vistas/img/productos/default/anonymous.png"){

				unlink($_GET["imagen"]);
				rmdir('vistas/img/productos/'.$_GET["codigo"]);

			}

			$respuesta = ModeloProductos::mdlEliminarProducto($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El registro de persona ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "index.php";

								}
							})

				</script>';

			}		
		}


	}

	/*=============================================
	MOSTRAR SUMA VENTAS
	=============================================*/

	static public function ctrMostrarSumaVentas(){

		$tabla = "productos";

		$respuesta = ModeloProductos::mdlMostrarSumaVentas($tabla);

		return $respuesta;

	}


}