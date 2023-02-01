<?php

 //require_once "../modelos/usuarios.modelo.php";
 //require_once "../extensiones/vendor/autoload.php";
 require_once '../modelos/cursos.modelo.php';
 require_once "../../../extensiones/vendor/autoload.php";

 $valor_control = $_POST["valor_control_usr"];
 
 if($valor_control=='insert')
     {
      // 	if(isset($_POST["nuevoUsuario"])){

			 

			   	/*=============================================
				VALIDAR IMAGEN
				=============================================*/

				$ruta = "";
                                $rutabd= "";
				//if(isset($_FILES["file"]["tmp_name"])){
                                     
                                         if($_FILES["file"]["type"] == 'application/pdf'){

         
        
         
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
                                            
                                             $rutacarp = '/consulta_base/docs/'.$_POST["id_consulta_cursos_cmb"];
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
                                                $ruta = '/consulta_base/docs/'.$_POST["id_consulta_cursos_cmb"].'/'.$aleatorio.'.pdf';
                                                
						//$origen = imagecreatefrompng($_FILES["nuevaImagenes"]["tmp_name"]);						

						//$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						//imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                                                $fileTmpPath = $_FILES['file']['tmp_name'];
                                               //$fichero = 
						move_uploaded_file($fileTmpPath, $_SERVER['DOCUMENT_ROOT'].$ruta);
                                               // $rutabd = "img/productos/aaabbbccc/".$aleatorio.".mp4";
                                                
                                             //   echo $rutabd;

                                                
                                                
                                   
                                     $obj_menu = new ModeloCursos();
                                     $retorno = $obj_menu->mdlRegistrarAnexoDocumento($_POST,$ruta);
                                     echo $retorno;
					}
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    

					 
 
			//}

		 

         
     }                          