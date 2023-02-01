<?php

 //require_once "../modelos/usuarios.modelo.php";
 //require_once "../extensiones/vendor/autoload.php";
 require_once '../modelos/dirprod.modelo.php';
 require_once "../../../extensiones/vendor/autoload.php";

 $valor_control = $_POST["valor_control_usr"];
 $cod_codi_producto = $_POST["cod_codi_producto"];
 
 if($valor_control=='insert')
     {
    
			 

			   
				$ruta = "";
                                $rutabd= "";
				
                                 $rutaimg="";
                                 if(isset($_FILES["img"]["tmp_name"])){
                                
                                
                                	if($_FILES["img"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/
                                          $rutacarp = '/directorio_archivos/imagenes/';
                                         // $rutacarp = '/directorio_archivos/imagenes/'.$_POST["cod_codi_producto"];
                                          //   $rutacarp = '/consulta_base/img/video_lecciones/reg';
                                            $path = $_SERVER['DOCUMENT_ROOT'].$rutacarp;
                                                if (!file_exists($path)) {
                                                    mkdir($path, 0777, true);
                                                }
                                            
                                            
                                            
                                            
                                         	list($ancho, $alto) = getimagesize($_FILES["img"]["tmp_name"]);

					        $nuevoAncho = 500;
					        $nuevoAlto = 500;
                                            
                                            
						$aleatorio = mt_rand(100,999);

						$ruta = $_SERVER['DOCUMENT_ROOT']."/directorio_archivos/imagenes/".$cod_codi_producto.".jpg";

						$origen = imagecreatefromjpeg($_FILES["img"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);
                                                $rutaimg = "/directorio_archivos/imagenes/".$cod_codi_producto.".jpg";
                                                //$rutabd = "vistas/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".jpg";

                                                //echo $ruta; 
					}
                                        	if($_FILES["img"]["type"] == "image/png"){

						
                                               $rutacarp = '/directorio_archivos/imagenes/';
                                               $path = $_SERVER['DOCUMENT_ROOT'].$rutacarp;
                                                if (!file_exists($path)) {
                                                    mkdir($path, 0777, true);
                                                }
                                            
                                                    
                                                    
                                                    
                                               /*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/
                                                list($ancho, $alto) = getimagesize($_FILES["img"]["tmp_name"]);

					        $nuevoAncho = 500;
					        $nuevoAlto = 500;
                                            
						$aleatorio = mt_rand(100,999);

						$ruta = $_SERVER['DOCUMENT_ROOT']."/directorio_archivos/imagenes/".$cod_codi_producto.".jpg";

						$origen = imagecreatefrompng($_FILES["img"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);
                                                $rutaimg = "/directorio_archivos/imagenes/".$cod_codi_producto.".jpg";
                                               // echo $ruta;
					}
                                       } 
                                          $rutaficha="";
                                      if(isset($_FILES["file"]["tmp_name"])){
                                          
                                          
                                          
                                          
                                         if($_FILES["file"]["type"] == "application/pdf"){

         
        
         
						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

                                             /*
                                        formData.append('valor_control_usr','insert');
                                     formData.append('id_consulta_cursos_cmb',id_consulta_cursos_cmb);
                                     formData.append('id_consulta_modulos_cmb',id_consulta_modulos_cmb);
                                     formData.append('nombre_leccion',nombre_leccion);
                                     formData.append('descripcion_leccion',descripcion_leccion);
                                              */
                                             
                                           //  $directorio = "../vistas/img/usuarios/".$_POST["nuevoUsuario"];
                                            
                                             ///$rutacarp = '/consulta_base/img/video_lecciones/'.$_POST["id_consulta_cursos_cmb"];
                                             
                                             $rutacarp = '/directorio_archivos/fichas/';
                                             
                                          //   $rutacarp = '/consulta_base/img/video_lecciones/reg';
                                            $path = $_SERVER['DOCUMENT_ROOT'].$rutacarp;
                                                if (!file_exists($path)) {
                                                    mkdir($path, 0777, true);
                                                }
                                           
                                             //   mkdir($rutacarp, 0755);
                                             
                                            
                                             
						$aleatorio = mt_rand(100,999);
                                                
						//$ruta = "../vistas/img/productos/".$_POST["nuevoNombreC"]."/".$aleatorio.".mp4";
						//$ruta = "img/productos/aaabbbccc/".$aleatorio.".mp4";
						
                                                //$rutacarp = '/consulta_base/img/video_lecciones/'.$_POST["id_consulta_cursos_cmb"].'/'.$aleatorio.'.mp4';
                                                //$ruta = '/consulta_base/img/'.$aleatorio.".mp4";
                                                $ruta = '/directorio_archivos/fichas/'.$cod_codi_producto.'.pdf';
                                                $rutaficha = '/directorio_archivos/fichas/'.$cod_codi_producto.'.pdf';
                                                
						//$origen = imagecreatefrompng($_FILES["nuevaImagenes"]["tmp_name"]);						

						//$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						//imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                                                $fileTmpPath = $_FILES['file']['tmp_name'];
                                               //$fichero = 
						move_uploaded_file($fileTmpPath, $_SERVER['DOCUMENT_ROOT'].$ruta);
                                               // $rutabd = "img/productos/aaabbbccc/".$aleatorio.".mp4";
                                                
                                                

                                                
                                                
                                   
                            
					}
                                    
                                      }
                                    
                                    
                            
                                    
                                    
                                    
                                    

					 
 
			

		         $obj_menu = new ModeloDirProd();
                                   $retorno = $obj_menu->mdlRegistrarProductoEnDirectorio($_POST,$rutaimg,$rutaficha);
                                   echo $retorno;
                                    

         
     }   
     
      if($valor_control=='update')
     {
                                $ruta = "";
                                $rutabd= "";
				
                                 $rutaimg="";
                                 if(isset($_FILES["img"]["tmp_name"])){
                                
                                
                                	if($_FILES["img"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/
                                          $rutacarp = '/directorio_archivos/imagenes/';
                                         // $rutacarp = '/directorio_archivos/imagenes/'.$_POST["cod_codi_producto"];
                                          //   $rutacarp = '/consulta_base/img/video_lecciones/reg';
                                            $path = $_SERVER['DOCUMENT_ROOT'].$rutacarp;
                                                if (!file_exists($path)) {
                                                    mkdir($path, 0777, true);
                                                }
                                            
                                            
                                            
                                            
                                         	list($ancho, $alto) = getimagesize($_FILES["img"]["tmp_name"]);

					        $nuevoAncho = 500;
					        $nuevoAlto = 500;
                                            
                                            
						$aleatorio = mt_rand(100,999);

						$ruta = $_SERVER['DOCUMENT_ROOT']."/directorio_archivos/imagenes/".$cod_codi_producto.".jpg";

						$origen = imagecreatefromjpeg($_FILES["img"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);
                                                $rutaimg = "/directorio_archivos/imagenes/".$cod_codi_producto.".jpg";
                                                //$rutabd = "vistas/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".jpg";

                                                //echo $ruta; 
					}
                                        	if($_FILES["img"]["type"] == "image/png"){

						
                                               $rutacarp = '/directorio_archivos/imagenes/';
                                               $path = $_SERVER['DOCUMENT_ROOT'].$rutacarp;
                                                if (!file_exists($path)) {
                                                    mkdir($path, 0777, true);
                                                }
                                            
                                                    
                                                    
                                                    
                                               /*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/
                                                list($ancho, $alto) = getimagesize($_FILES["img"]["tmp_name"]);

					        $nuevoAncho = 500;
					        $nuevoAlto = 500;
                                            
						$aleatorio = mt_rand(100,999);

						$ruta = $_SERVER['DOCUMENT_ROOT']."/directorio_archivos/imagenes/".$cod_codi_producto.".jpg";

						$origen = imagecreatefrompng($_FILES["img"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);
                                                $rutaimg = "/directorio_archivos/imagenes/".$cod_codi_producto.".jpg";
                                               // echo $ruta;
					}
                                       } 
                                          $rutaficha="";
                                      if(isset($_FILES["file"]["tmp_name"])){
                                          
                                          
                                          
                                          
                                         if($_FILES["file"]["type"] == "application/pdf"){

         
        
         
						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

                                             /*
                                        formData.append('valor_control_usr','insert');
                                     formData.append('id_consulta_cursos_cmb',id_consulta_cursos_cmb);
                                     formData.append('id_consulta_modulos_cmb',id_consulta_modulos_cmb);
                                     formData.append('nombre_leccion',nombre_leccion);
                                     formData.append('descripcion_leccion',descripcion_leccion);
                                              */
                                             
                                           //  $directorio = "../vistas/img/usuarios/".$_POST["nuevoUsuario"];
                                            
                                             ///$rutacarp = '/consulta_base/img/video_lecciones/'.$_POST["id_consulta_cursos_cmb"];
                                             
                                             $rutacarp = '/directorio_archivos/fichas/';
                                             
                                          //   $rutacarp = '/consulta_base/img/video_lecciones/reg';
                                            $path = $_SERVER['DOCUMENT_ROOT'].$rutacarp;
                                                if (!file_exists($path)) {
                                                    mkdir($path, 0777, true);
                                                }
                                           
                                             //   mkdir($rutacarp, 0755);
                                             
                                            
                                             
						$aleatorio = mt_rand(100,999);

						//$ruta = "../vistas/img/productos/".$_POST["nuevoNombreC"]."/".$aleatorio.".mp4";
						//$ruta = "img/productos/aaabbbccc/".$aleatorio.".mp4";
						
                                                //$rutacarp = '/consulta_base/img/video_lecciones/'.$_POST["id_consulta_cursos_cmb"].'/'.$aleatorio.'.mp4';
                                                //$ruta = '/consulta_base/img/'.$aleatorio.".mp4";
                                                $ruta = '/directorio_archivos/fichas/'.$cod_codi_producto.'.pdf';
                                                $rutaficha = '/directorio_archivos/fichas/'.$cod_codi_producto.'.pdf';
                                                
						//$origen = imagecreatefrompng($_FILES["nuevaImagenes"]["tmp_name"]);						

						//$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						//imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                                                $fileTmpPath = $_FILES['file']['tmp_name'];
                                               //$fichero = 
						move_uploaded_file($fileTmpPath, $_SERVER['DOCUMENT_ROOT'].$ruta);
                                               // $rutabd = "img/productos/aaabbbccc/".$aleatorio.".mp4";
                                                
                                                

                                                
                                                
                                   
                            
					}
                                    
                                      }
                                    
                                    
                            
                                    
                                    
                                    
                                    

					 
 
			

		         $obj_menu = new ModeloDirProd();
                                   $retorno = $obj_menu->mdlActualizarProductoEnDirectorio($_POST,$rutaimg,$rutaficha);
                                   echo $retorno;
                                    

         
     }    