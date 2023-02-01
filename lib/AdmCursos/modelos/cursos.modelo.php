<?php

//require_once "../../Conexion/conexionseven.php";
require_once "../../Conexion/conexion.php";
//require_once "conexion.php";
//require_once "lib/Conexion/conexion.php";
class ModeloCursos{

	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

    
       static public function mdlRegistrarMenuPerfil($data){
                
              session_start();
              
      
                  
                   $id_config_menu=$data['id_config_menu'];
                   //$hor_cont=18406;
                   $id_perfil=$data['id_perfil'];
                  // $hor_esta="A";
                   $fecha = date("Y-m-d");  
                   
                   
                   
                   
            
                            $stmtaud = Conexion::conectar()->prepare(" 	
                            SELECT max(id_menu_perfil)+1 as valor_id from menu_perfil_base
                            ");

                            $stmtaud -> execute();

                            $stmtaudpre= $stmtaud -> fetch();
                 
                            $valor_id=$stmtaudpre['valor_id'];
                                    
                   
                            
                            
                            
                                                 
                                                 
                                                 $stmtconsultvalanteriores = Conexion::conectar()->prepare("     
                                                                         
                                                                  	   insert into menu_perfil_base 
                                                                            (id_menu_perfil,id_config_menu,id_perfil,estado,fecha) 
                                                                            values 
                                                                            ($valor_id,$id_config_menu,$id_perfil,1,'$fecha')
                                                                                ");
                                                                   //   $stmtconsultvalanteriores -> execute();

                                                           
                                                 
                      
                        
                        
                        
                        
			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			if($stmtconsultvalanteriores->execute()){

                            
                      
                       
                            
                            
                            
			return 1;

		}else{

			return 2;
		
		}

		 

		$stmt -> close();

		$stmt = null;

	}   
        
           static public function mdlRegistrarCurso($data){
                
              session_start();
              
      
                  
                 //  $id_config_menu=$data['id_config_menu'];
                   //$hor_cont=18406;
                 //  $id_perfil=$data['id_perfil'];
                  // $hor_esta="A";
                   $fecha = date("Y-m-d");  
                   
                   
                   
                   
            /*
                            $stmtaud = Conexion::conectar()->prepare(" 	
                            SELECT max(id_menu_perfil)+1 as valor_id from menu_perfil_base
                            ");

                            $stmtaud -> execute();

                            $stmtaudpre= $stmtaud -> fetch();
                  
                            $valor_id=$stmtaudpre['valor_id'];
                          */          
                  
                            /*  nombre_curso:,
           :descripcion_curso */
                   
                   
                   
                   
                   
                   
                            
                            $nombre_curso=$data['nombre_curso'];
                            $descripcion_curso=$data['descripcion_curso'];
                            
                            
                            $stmtconsultvalanteriores = Conexion::conectar()->prepare("     
                                                                                
                                                                               INSERT INTO  cursos (`id_curso`,`nombre_curso`,`descripcion`,`fecha_creacion`,`id_usuario_creo`) VALUES ( NULL,'$nombre_curso','$descripcion_curso',NOW(),'1'); 
 
                                                                              ");
                                                                   //   $stmtconsultvalanteriores -> execute();
 
                        
			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			if($stmtconsultvalanteriores->execute()){

                           
                            
                            
			return 1;

		}else{

			return 2;
		
		}

		 

		$stmt -> close();

		$stmt = null;

	}    
        
             static public function mdlInscripcionUsuarioCurso($data){
                
              session_start();
              
       
                   $fecha = date("Y-m-d");  
                   
                   
                
                            
                            $id_usuario=$data['id_usuario'];
                            $id_curso=$data['id_curso'];
                            
                            
                            $stmtconsultvalanteriores = Conexion::conectar()->prepare("     
                                                                                
                                                                               INSERT INTO `inscripcion_curso`
                                                                    (`id_inscripcion_curso`,`id_usuario`,`id_curso`,`estado`,`fecha`) 
                                                                    VALUES 
                                                                    ( NULL,'$id_usuario','$id_curso','1',NOW());      
                                                                              ");
                                                                   //   $stmtconsultvalanteriores -> execute();
 
                        
			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			if($stmtconsultvalanteriores->execute()){

                           
                            
                            
			return 1;

		}else{

			return 2;
		
		}

		 

		$stmt -> close();

		$stmt = null;

	}   
        
        
        
           static public function mdlCambioClaveUsuario($data){
                
              session_start();
              
       
                   $fecha = date("Y-m-d");  
                   
                   
                
                            
                            $id_usuario=$data['id_usuario'];
                            $clave_nueva=$data['clave_nueva'];
                            
                            
                            $stmtconsultvalanteriores = Conexion::conectar()->prepare("     
                                                                       UPDATE   usuarios SET `password`='$clave_nueva' WHERE `id_usuario`='$id_usuario';          
                                                                          ");
                                                                   //   $stmtconsultvalanteriores -> execute();
 
                        
			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			if($stmtconsultvalanteriores->execute()){

                           
                            
                            
			return 1;

		}else{

			return 2;
		
		}

		 

		$stmt -> close();

		$stmt = null;

	}    
           static public function mdlRegistrarUsuario($data){
                
              session_start();
              
      
                  
                 //  $id_config_menu=$data['id_config_menu'];
                   //$hor_cont=18406;
                 //  $id_perfil=$data['id_perfil'];
                  // $hor_esta="A";
                   $fecha = date("Y-m-d");  
                   
                   
         
                            
                            
                            
                            
                             $tipo_identificacion=$data['tipo_identificacion'];
                             $identificacion=$data['identificacion'];
                             $nombre_completo=$data['nombre_completo'];
                            $fecha_nacimiento=$data['fecha_nacimiento'];
                              $correo=$data['correo'];
                            $celular=$data['celular'];
                            $usuario=$data['usuario'];
                             $passwword=$data['passwword'];
                             $perfil=$data['perfil'];
                             $estado=1;
                             $id_perfil=$data['id_perfil'];
                            
                            
                            
                            
                            
                            
                            
                            
                            $stmtconsultvalanteriores = Conexion::conectar()->prepare("     
                                                                                
                                                                           INSERT INTO `usuarios`
                                                                                (`id_usuario`,
                                                                                `tipo_identificacion`,
                                                                                `identificacion`,
                                                                                `nombre_completo`,
                                                                                `fecha_nacimiento`,
                                                                                `correo`,
                                                                                `celular`,
                                                                                `usuario`,
                                                                                `password`,
                                                                                `perfil`,
                                                                                `estado`,
                                                                                `ultimo_login`,
                                                                                `fecha_creacion`,
                                                                                `id_perfil`

                                                                                ) VALUES 
                                                                                (
                                                                                NULL,
                                                                                '$tipo_identificacion',
                                                                                '$identificacion',
                                                                                '$nombre_completo',
                                                                                '$fecha_nacimiento',
                                                                                '$correo',
                                                                                '$celular',
                                                                                '$usuario',
                                                                                '$passwword',
                                                                                '$perfil',
                                                                                '$estado',
                                                                                NOW(),
                                                                                NOW(),
                                                                                '$id_perfil'

                                                                                ) ;   


                                                                              ");
                                                                   //   $stmtconsultvalanteriores -> execute();
 
                        
			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			if($stmtconsultvalanteriores->execute()){

                           
                            
                            
			return 1;

		}else{

			return 2;
		
		}

		 

		$stmt -> close();

		$stmt = null;

	}   
        
         static public function mdlRegistrarModulo($data){
                
              session_start();
              
      
                  
                 //  $id_config_menu=$data['id_config_menu'];
                   //$hor_cont=18406;
                 //  $id_perfil=$data['id_perfil'];
                  // $hor_esta="A";
                   $fecha = date("Y-m-d");  
                   
                   
                   
                   
            /*
                            $stmtaud = Conexion::conectar()->prepare(" 	
                            SELECT max(id_menu_perfil)+1 as valor_id from menu_perfil_base
                            ");

                            $stmtaud -> execute();

                            $stmtaudpre= $stmtaud -> fetch();
                  
                            $valor_id=$stmtaudpre['valor_id'];
                          */          
                  
                            /*  nombre_curso:,
           :descripcion_curso
                             *  id_curso:id_consulta_cursos_cmb,
           nombre_modulo:nombre_modulo,
           descripcion_modulo_menu:
                             * 
                             *  */
                            $id_curso=$data['id_curso'];
                            $nombre_modulo=$data['nombre_modulo'];
                            $descripcion_curso=$data['descripcion_modulo_menu'];
                            
                            
                            $stmtconsultvalanteriores = Conexion::conectar()->prepare("     
                                                                                
                                                                        INSERT INTO  `modulos`(`id_modulo`,`id_curso`,`nombre_modulo`,`descripcion`,`fecha_creacion`,`id_usuario`) 
                                                                        VALUES ( NULL,'$id_curso','$nombre_modulo','$descripcion_curso',NOW(),'1'); 
                                                                              ");
                                                                   //   $stmtconsultvalanteriores -> execute();
 
                        
			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			if($stmtconsultvalanteriores->execute()){

                           
                            
                            
			return 1;

		}else{

			return 2;
		
		}

		 

		$stmt -> close();

		$stmt = null;

	}    
        
        
            static public function mdlRegistrarLeccion($data,$ruta_video){
                
              session_start();
               
                   $fecha = date("Y-m-d");  
                           $id_curso=$data['id_consulta_cursos_cmb'];
                            $id_modulo=$data['id_consulta_modulos_cmb'];
                             
                            $nombre_leccion=$data['nombre_leccion'];
                            $descripcion_leccion=$data['descripcion_leccion'];
                            $ruta_video=$ruta_video;
                            
                            
                           
                            
                            
                            $stmtconsultvalanteriores = Conexion::conectar()->prepare("     
                                                                        
                                                                        INSERT INTO `leccion_contenido`
                                                                        (`id_contenido_leccion`,`id_curso`,`id_modulo`,`nombre_leccion`,`descripcion`,`ruta_video`) 
                                                                        VALUES 
                                                                        ( NULL,'$id_curso','$id_modulo','$nombre_leccion','$descripcion_leccion','$ruta_video'); 
                                    
                                    
                                                                             ");
                                                                   //   $stmtconsultvalanteriores -> execute();
 
                        
			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			if($stmtconsultvalanteriores->execute()){

                           
                            
                            
			return 9;

		}else{

			return 2;
		
		}

		 

		$stmt -> close();

		$stmt = null;

	}    
        
        
        
        
                    static public function mdlRegistrarAnexoDocumento($data,$ruta_video){
                
              session_start();
               
                   $fecha = date("Y-m-d");  
                           $id_curso=$data['id_consulta_cursos_cmb'];
                            
                            $ruta_video=$ruta_video;
                            
                            
                           
                            $stmt = Conexion::conectar()->prepare("  
                                    SELECT * FROM `link_curso`
                                            WHERE
                                            id_curso=$id_curso
                                            limit 1
                                     ");
                            $stmt->execute();
                            $arr= $stmt->fetch();
                            $id_cursoarr=$arr['id_curso'];
                            if($id_curso==$id_cursoarr){
                                return 199;
                            }
                            
                            
                            
                            $stmtconsultvalanteriores = Conexion::conectar()->prepare("     
                                                                              INSERT INTO  `link_curso`(`id_link_curso`,`id_curso`,`url_curso`,`estado`,`fecha_registro`) VALUES 
                                                                                        ( null,'$id_curso','$ruta_video','1',NOW()); 
 
                                    
                                                                             ");
                            
                            $varia_sql="INSERT INTO  `link_curso`(`id_link_curso`,`id_curso`,`url_curso`,`estado`,`fecha_registro`) VALUES 
                                                                                        ( null,'$id_curso','$ruta_video','1',NOW()); ";
                                                                   //   $stmtconsultvalanteriores -> execute();
 
                        
			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			if($stmtconsultvalanteriores->execute()){

                           
                            
                            
			return 9;

		}else{

			return $varia_sql;
		
		}

		 

		$stmt -> close();

		$stmt = null;

	}    
        
        
        
        
        
           static public function mdlRegistrarPerfilAdm($data){
                
              session_start();
              
      
                  
                 //  $id_config_menu=$data['id_config_menu'];
                   //$hor_cont=18406;
                 //  $id_perfil=$data['id_perfil'];
                  // $hor_esta="A";
                   $fecha = date("Y-m-d");  
                   
                   
                   
                   
            
                            $stmtaud = Conexion::conectar()->prepare(" 	
                            SELECT max(id_perfil)+1 as valor_id from perfiles_base
                            ");

                            $stmtaud -> execute();

                            $stmtaudpre= $stmtaud -> fetch();
                 
                            $valor_id=$stmtaudpre['valor_id'];
                                    
                            $nombre_perfil=$data['nombre_perfil'];
                            $descripcion=$data['descripcion'];
                            
                            
                            
                            $stmtconsultvalanteriores = Conexion::conectar()->prepare("     
                                                                                
                                                                              insert into perfiles_base 
                                                                             (id_perfil,nombre_perfil,descripcion,estado,fecha)
                                                                             values
                                                                             ($valor_id,'$nombre_perfil','$descripcion',1,'$fecha')
                                                                            
                                                                                ");
                                                                   //   $stmtconsultvalanteriores -> execute();

                                                           
                                                 
                      
                        
                        
                        
                        
			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			if($stmtconsultvalanteriores->execute()){

                            
                      
                       
                            
                            
                            
			return 1;

		}else{

			return 2;
		
		}

		 

		$stmt -> close();

		$stmt = null;

	}   
	
	
     static public function mdlEliminarMenuPerfil($data){
                
              session_start();
              
      
                  
                   $id_config_menu=$data['id_menu_perfil'];
                
                   
                   
                                                                      $stmtconsultvalanteriores = Conexion::conectar()->prepare("     
                                                                         
                                                                  	 DELETE FROM menu_perfil_base
                                                                        WHERE id_menu_perfil = $id_config_menu
                                                                                ");
                                                                   //   $stmtconsultvalanteriores -> execute();

                                                           
                                                 
                      
                        
                        
                        
                        
			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			if($stmtconsultvalanteriores->execute()){

                            
                      
                       
                            
                            
                            
			return 1;

		}else{

			return 2;
		
		}

		 

		$stmt -> close();

		$stmt = null;

	}   
    
     static public function mdlEliminarCursos($data){
                
         
          session_start();
               
              
                        $id_curso=$data['id_curso'];
                
                         $stmtconsultinscripciones= Conexion::conectar()->prepare("     
                         
                            SELECT * FROM inscripcion_curso 
                            WHERE
                            id_curso = $id_curso
                         ");
              if($stmtconsultinscripciones->execute()){
              $arrvalinsc=    $stmtconsultinscripciones->fetch();
              $reslt_id_curso_insc=$arrvalinsc['id_curso'];
              if($id_curso==$reslt_id_curso_insc){
                  
                  return 46;
              }else{
              
         
         
             // session_start();
               
              
                        $id_curso=$data['id_curso'];
                
                         $stmtconsultmodulos = Conexion::conectar()->prepare("     
                         SELECT id_curso	FROM modulos WHERE `id_curso`='$id_curso'; 
                         ");
              if($stmtconsultmodulos->execute()){
                  $arrval=    $stmtconsultmodulos->fetch();
              $reslt_id_curso=$arrval['id_curso'];
                  
              if($id_curso==$reslt_id_curso){
                  
                  return 45;
                  
              } 
		else{
                    
                    
                   
                    
              $id_curso=$data['id_curso'];
                
                   
                                                                        $stmtconsultvalanteriores = Conexion::conectar()->prepare("     
                                                                         
                                                                  	 DELETE FROM `consultas`.`cursos` WHERE `id_curso`='$id_curso'; 
                                                                                ");
                                                                   //   $stmtconsultvalanteriores -> execute();
                                                                      $consult=" DELETE FROM `consultas`.`cursos` WHERE `id_curso`='$id_curso'; 
                                                                         " ; 
                               
			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			if($stmtconsultvalanteriores->execute()){
     
			return 1;

		}else{ 
			return 2;
		
		} 
		$stmt -> close();

		$stmt = null;
              
                
                
              }
                }
                
                
                else{ 
			return 2;
		
		} 
              }
              }else{
                  
                  return 2;
              }
                   
                          
                   
                                

	}   
        static public function mdlEliminarCursosBack($data){
                
              session_start();
               
              
                        $id_curso=$data['id_curso'];
                
                         $stmtconsultmodulos = Conexion::conectar()->prepare("     
                         SELECT id_curso	FROM modulos WHERE `id_curso`='$id_curso'; 
                         ");
              if($stmtconsultmodulos->execute()){
                  $arrval=    $stmtconsultmodulos->fetch();
              $reslt_id_curso=$arrval['id_curso'];
                  
              if($id_curso==$reslt_id_curso){
                  
                  return 45;
                  
              } 
		else{
                    
                   
                    
              $id_curso=$data['id_curso'];
                
                   
                                                                        $stmtconsultvalanteriores = Conexion::conectar()->prepare("     
                                                                         
                                                                  	 DELETE FROM `consultas`.`cursos` WHERE `id_curso`='$id_curso'; 
                                                                                ");
                                                                   //   $stmtconsultvalanteriores -> execute();
                                                                      $consult=" DELETE FROM `consultas`.`cursos` WHERE `id_curso`='$id_curso'; 
                                                                         " ; 
                               
			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			if($stmtconsultvalanteriores->execute()){
     
			return 1;

		}else{ 
			return 2;
		
		} 
		$stmt -> close();

		$stmt = null;
              
              }
                }
                
                
                else{ 
			return 2;
		
		} 
              
              
                   
                          
                   
                                

	}     
     static public function mdlEliminarModulos($data){
         
         
          $id_modulo=$data['id_modulo'];
                
                         $stmtconsultmodulos = Conexion::conectar()->prepare("     
                                 SELECT * FROM leccion_contenido
                                WHERE
                                id_modulo=$id_modulo
                         ");
              if($stmtconsultmodulos->execute()){
                  $arrval=    $stmtconsultmodulos->fetch();
              $reslt_id_modulo=$arrval['id_modulo'];
                  
              if($id_modulo==$reslt_id_modulo){
                  
                  return 45;
                  
              } 
		else{
         
         
         /*
          SELECT * FROM leccion_contenido
WHERE
id_modulo=15

          */       
         
         
         
         
              session_start();
               
                   $id_modulo=$data['id_modulo'];
                
                   
                                                                        $stmtconsultvalanteriores = Conexion::conectar()->prepare("     
                                                                          DELETE FROM modulos WHERE `id_modulo`='$id_modulo'; 
                                                                  	       ");
                                                                   //   $stmtconsultvalanteriores -> execute();
                                                                      $consult="    DELETE FROM modulos WHERE `id_modulo`='$id_modulo'; 
                                                                         " ; 
                               
			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
//return $consult;
			if($stmtconsultvalanteriores->execute()){
     
			return 1;

		}else{ 
			return 2;
		
		} 
		$stmt -> close();

		$stmt = null;
                }            
                   
                                
              }  else{ 
			return 2;
		
		} 
	}   
        
        
         static public function mdlEliminarUsuarios($data){
         
         
          $id_usuario=$data['id_usuario'];
                
                         $stmtconsultmodulos = Conexion::conectar()->prepare("     
                            SELECT * FROM inscripcion_curso 
                        WHERE
                        id_usuario = $id_usuario

                         ");
              if($stmtconsultmodulos->execute()){
                  $arrval=    $stmtconsultmodulos->fetch();
              $reslt_id_usuario=$arrval['id_usuario'];
                  
              if($id_usuario==$reslt_id_usuario){
                  
                  return 45;
                  
              } 
		else{
         
         
         /*
          SELECT * FROM leccion_contenido
WHERE
id_modulo=15

          */       
         
         
         
         
              session_start();
               
                   $id_usuario=$data['id_usuario'];
                
                   
                                                                        $stmtconsultvalanteriores = Conexion::conectar()->prepare("     
                                                                       DELETE FROM `consultas`.`usuarios` WHERE `id_usuario`='$id_usuario'; 
                                                                  	       ");
                                                                   //   $stmtconsultvalanteriores -> execute();
                                                                      $consult="     DELETE FROM `consultas`.`usuarios` WHERE `id_usuario`='$id_usuario'; 
                                                                         " ; 
                               
			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
//return $consult;
			if($stmtconsultvalanteriores->execute()){
     
			return 1;

		}else{ 
			return 2;
		
		} 
		$stmt -> close();

		$stmt = null;
                }            
                   
                                
              }  else{ 
			return 2;
		
		} 
	}   
        
         static public function mdlEliminarLeccion($data){
         
         
           
                   $id_leccion=$data['id_leccion'];
                
                   
                                                                        $stmtconsultvalanteriores = Conexion::conectar()->prepare("     
                                                                        DELETE FROM `consultas`.`leccion_contenido` WHERE `id_contenido_leccion`='$id_leccion'; 
                                                                        ");
                                                                   //   $stmtconsultvalanteriores -> execute();
                                                                      $consult="    DELETE FROM `consultas`.`leccion_contenido` WHERE `id_contenido_leccion`='$id_leccion'; 
                                                                        
                                                                         " ; 
                               
			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
//return $consult;
			if($stmtconsultvalanteriores->execute()){
     
			return 1;

		}else{ 
			return 2;
		
		} 
		$stmt -> close();

		$stmt = null;
               
	} 
        
           static public function mdlEliminarAnexoDocs($data){
         
         
           
                   $id_anexo_docs=$data['id_anexo_docs'];
                
                   
                                                                        $stmtconsultvalanteriores = Conexion::conectar()->prepare("     
                                                                       DELETE FROM `consultas`.`link_curso` WHERE `id_link_curso`='$id_anexo_docs'; ");
                                                                   //   $stmtconsultvalanteriores -> execute();
                                                                      $consult="    DELETE FROM `consultas`.`link_curso` WHERE `id_link_curso`='$id_anexo_docs'; 
                                                                        
                                                                         " ; 
                               
			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
//return $consult;
			if($stmtconsultvalanteriores->execute()){
     
			return 1;

		}else{ 
			return 2;
		
		} 
		$stmt -> close();

		$stmt = null;
               
	} 
           static public function mdlEliminarInscripcionCurso($data){
                
              session_start();
               
                   $id_inscripcion_curso=$data['id_inscripcion_curso'];
                                             $stmtconsultvalanteriores = Conexion::conectar()->prepare("     
                                                                         DELETE FROM   inscripcion_curso WHERE  id_inscripcion_curso ='$id_inscripcion_curso'; 
                                                                  	       ");
                                                                   //   $stmtconsultvalanteriores -> execute();
                                                                      $consult="     DELETE FROM   inscripcion_curso WHERE  id_inscripcion_curso ='$id_inscripcion_curso';
                                                                         " ; 
                               
			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
//return $consult;
			if($stmtconsultvalanteriores->execute()){
     
			return 1;

		}else{ 
			return 2;
		
		} 
		$stmt -> close();

		$stmt = null;
                          
                   
                                

	} 
     static public function mdlEliminarMenuBasico($data){
                
              session_start();
              
      
                  
                   $id_config_menu=$data['id_config_menu'];
                
                   
                              $stmtconsultvalida = Conexion::conectar()->prepare("     
                                                                          select  menu_perfil_base.id_config_menu from  menu_perfil_base where id_config_menu=$id_config_menu

                                                                                ");
                      $stmtconsultvalida -> execute();
                  $stmtaudprerr= $stmtconsultvalida ->fetch();
                          $id_config_menu_consul= $stmtaudprerr['id_config_menu'];   
                              
                              if($id_config_menu==$id_config_menu_consul){
                                  
                                  return 3;
                              }
                              else{
                                  
                                                                        $stmtconsultvalanteriores = Conexion::conectar()->prepare("     
                                                                         
                                                                  	 DELETE FROM config_menu_base
                                                                        WHERE id_config_menu = $id_config_menu
                                                                                ");
                                                                   //   $stmtconsultvalanteriores -> execute();
                                                                      $consult="DELETE FROM config_menu
                                                                        WHERE id_config_menu = $id_config_menu " ; 
                               
			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			if($stmtconsultvalanteriores->execute()){
     
			return 1;

		}else{ 
			return 2;
		
		} 
		$stmt -> close();

		$stmt = null;
                              }
                   
                                

	}   
    
         static public function mdlEliminarMPerfil($data){
                
              session_start();
              
      
                  
                   $id_perfil=$data['id_perfil'];
                
                   
                              $stmtconsultvalida = Conexion::conectar()->prepare("     
                                                                          select  menu_perfil_base.id_perfil from  menu_perfil_base where id_perfil=$id_perfil

                                                                                ");
                      $stmtconsultvalida -> execute();
                  $stmtaudprerr= $stmtconsultvalida ->fetch();
                          $id_perfil_consul= $stmtaudprerr['id_perfil'];   
                              
                              if($id_perfil==$id_perfil_consul){
                                  
                                  return 3;
                              }
                              else{
                                  
                                                                        $stmtconsultvalanteriores = Conexion::conectar()->prepare("     
                                                                         
                                                                  	 DELETE FROM perfiles_base
                                                                        WHERE id_perfil = $id_perfil
                                                                                ");
                                                                   //   $stmtconsultvalanteriores -> execute();
                                                                     
                               
			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			if($stmtconsultvalanteriores->execute()){
     
			return 1;

		}else{ 
			return 2;
		
		} 
		$stmt -> close();

		$stmt = null;
                              }
                   
                                

	}   
      static public function mdlconsultamenu($data){
                
                   $id_perfil=$data['id_perfil'];                                     
                   $cadena="";
                   $where="";
                  
                   $constock="";
                   $constock.='<aside class="main-sidebar">';
                   $constock.='<section class="sidebar">';
                   $constock.='<ul class="sidebar-menu">';
                   
                   

	 

		
                   //primera consulta recorrido
                   $consultas_tmt = Conexion::conectar()->prepare("     
                                                                           select config_menu_base.id_config_menu,config_menu_base.nombre,config_menu_base.descripcion_fun,config_menu_base.id_padre_config,config_menu_base.orden,menu_perfil_base.id_perfil from config_menu_base
                                                                            inner join menu_perfil_base on config_menu_base.id_config_menu=menu_perfil_base.id_config_menu

                                                                             where
                                                                             config_menu_base.id_padre_config=0
									    and
									  menu_perfil_base.id_perfil=$id_perfil

                                                                         ");
                  $consultas_tmt -> execute();
                  $stmtaudprerr= $consultas_tmt ->fetchAll();
                   $constockdet="";
                    
                  for($i = 0; $i < count($stmtaudprerr); $i++){
                         
                       $id_config_menu_base=$stmtaudprerr[$i]['id_config_menu'];
                       $nombre=$stmtaudprerr[$i]['nombre'];
                       $descripcion_fun=$stmtaudprerr[$i]['descripcion_fun'];
                       
                       
                  $consultas_tmt22 = Conexion::conectar()->prepare("     
                                                                           select config_menu_base.id_config_menu,config_menu_base.nombre,config_menu_base.descripcion_fun,config_menu_base.id_padre_config,config_menu_base.orden from config_menu_base
									   inner join menu_perfil_base on config_menu_base.id_config_menu=menu_perfil_base.id_config_menu

                                                                            where
                                                                             config_menu_base.id_padre_config=$id_config_menu_base
                                                                              and
                                                                               menu_perfil_base.id_perfil=$id_perfil
                                                                         ");
                       
                  $consultas_tmt22 -> execute();
                  $stmtaudprerr22= $consultas_tmt22 ->fetchAll();
                    $constockdet.='<ul class="treeview-menu">';
                  for($ii = 0; $ii < count($stmtaudprerr22); $ii++){
                    $nombre22=$stmtaudprerr22[$ii]['nombre'];
                    $descripcion_fun22=$stmtaudprerr22[$ii]['descripcion_fun'];
                    
                      $constockdet.='<li>';
                      $constockdet.='<a  onclick="'.$descripcion_fun22.'">';
                      $constockdet.='<i class="fa fa-circle-o"></i>';
                      $constockdet.='<span>'.$nombre22.'</span>';
                      $constockdet.='</a>';
                      $constockdet.='</li>';
                      
                  }      
                      $constockdet.='</ul>';   
                          
                          
                          
                      $constock.='<li class="treeview">';
                     // $constock.='<li class="active">';
                      $constock.= '<a onclick="'.$descripcion_fun.'">';
                      $constock.= '<i class="fa fa-list-ul"></i>';
		      $constock.= '<span>'.$nombre.'</span>';
		      $constock.= '<span class="pull-right-container">';
		      $constock.= '<i class="fa fa-angle-left pull-right"></i>';
		      $constock.= '</span>';
                      $constock.= '</a>';
                      $constock.= $constockdet;
                      
                      $constockdet="";
                      
                      $constock.='</li>';
                       
                   }
                   
                      $constock.='</ul>
                                 </section>
                                      </aside>';
               
                  

			return $constock;
		
		 

		 

		$stmt -> close();

		$stmt = null;

	}   
        
         static public function mdlconsultamenucursos($id_perfil){
                
                   //$id_perfil=$data['id_perfil'];                                     
                   $cadena="";
                   $where="";
                  
                  
                   $constock="";
                    $constock.=' ';
                 //   $constock.='<aside class="main-sidebar">';
                  // $constock.='<section class="sidebar">';
                  // $constock.='<ul class="sidebar-menu">';
                   
                   

	 

		
                   //primera consulta recorrido
                   $consultas_tmt = Conexion::conectar()->prepare("     
                                                                            SELECT config_curso_menu.id_config_curso,config_curso_menu.nombre_curso,config_curso_menu.descripcion_curso,config_curso_menu.id_padre_config_curso,config_curso_menu.orden,config_curso_menu.id_perfil FROM config_curso_menu
                                                                            INNER JOIN `menu_curso_inscrip` ON config_curso_menu.`id_config_curso`=menu_curso_inscrip.`id_config_curso`

                                                                             WHERE
                                                                             config_curso_menu.`id_padre_config_curso`=0
									    AND
									  menu_curso_inscrip.`id_inscripcion_curso`=1								  
									  

                                                                         ");
                  $consultas_tmt -> execute();
                  $stmtaudprerr= $consultas_tmt ->fetchAll();
                   $constockdet="";
                    
                  for($i = 0; $i < count($stmtaudprerr); $i++){
                         
                       $id_config_menu_base=$stmtaudprerr[$i]['id_config_curso'];
                       $nombre=$stmtaudprerr[$i]['nombre_curso'];
                       $descripcion_fun=$stmtaudprerr[$i]['descripcion_curso'];
                       
                       
                  $consultas_tmt22 = Conexion::conectar()->prepare("     
                                                                           
                          
                          
                           SELECT config_curso_menu.id_config_curso,config_curso_menu.nombre_curso,config_curso_menu.descripcion_curso,config_curso_menu.id_padre_config_curso,config_curso_menu.orden,config_curso_menu.id_perfil FROM config_curso_menu
                                                                            INNER JOIN `menu_curso_inscrip` ON config_curso_menu.`id_config_curso`=menu_curso_inscrip.`id_config_curso`

                                                                             WHERE
                                                                             config_curso_menu.`id_padre_config_curso`=$id_config_menu_base
									    AND
									  menu_curso_inscrip.`id_inscripcion_curso`=1
                          
                          
                          
                          
                          
                                                                         ");
                       
                  $consultas_tmt22 -> execute();
                  $stmtaudprerr22= $consultas_tmt22 ->fetchAll();
                    $constockdet.='<ul class="treeview-menu">';
                  for($ii = 0; $ii < count($stmtaudprerr22); $ii++){
                    $nombre22=$stmtaudprerr22[$ii]['nombre_curso'];
                    $descripcion_fun22=$stmtaudprerr22[$ii]['descripcion_curso'];
                    
                      $constockdet.='<li>';
                      $constockdet.='<a  onclick="'.$descripcion_fun22.'">';
                      $constockdet.='<i class="fa fa-circle-o"></i>';
                      $constockdet.='<span>'.$nombre22.'</span>';
                      $constockdet.='</a>';
                      $constockdet.='</li>';
                      
                  }      
                      $constockdet.='</ul>';   
                          
                          
                          
                      $constock.='<li class="treeview"  >';
                     // $constock.='<li class="active">';
                      $constock.= '<a onclick="'.$descripcion_fun.'">';
                      $constock.= '<i class="fa fa-list-ul"></i>';
		      $constock.= '<span>'.$nombre.'</span>';
		      $constock.= '<span class="pull-right-container">';
		      $constock.= '<i class="fa fa-angle-left pull-right"></i>';
		      $constock.= '</span>';
                      $constock.= '</a>';
                      $constock.= $constockdet;
                      
                      $constockdet="";
                      
                      $constock.='</li>';
                       
                   }
                   
                    /*  $constock.='</ul>
                                 </section> 
                                      </aside> ';
               
                  */

			return $constock;
		
		 

		 

		$stmt -> close();

		$stmt = null;

	}   
        
    
	
	     static public function mdlMuestraMenuGeneral($data){
            
                 
                 
              session_start();
              
            $id_usuario_sis=  $_SESSION["id"]  ;
	    $nombre_usuario_sis=$_SESSION["nombre"]  ;
						
                    $cadena="";
                   $where="";
                  
                   $hor_cont=$data['hor_cont'];
                   //$hor_cont=18406;
                   $hor_esta=$data['hor_esta'];
                  // $hor_esta="A";
                   
            
                                
                   $sql=' 
                                update ap_horre set hor_esta="'.$hor_esta.'"
			        where hor_cont="'.$hor_cont.'"
                        ';
                                                 
                                                 
                                                 $stmtconsultvalanteriores = ConexionSeven::conectarSeven()->prepare("     
                                                                         
                                                                  	     select hor_cont, hor_esta from AP_HORRE
                                                                            where hor_cont=$hor_cont
                                                                                ");
                                                                      $stmtconsultvalanteriores -> execute();

                                                                        $stmtavalanteriores= $stmtconsultvalanteriores -> fetch();

                                                                        $gconsul_hor_esta=$stmtavalanteriores['hor_esta'];
                                                                        
                                                 
                                                                         $sqlanterioir='update ap_horre set hor_esta="'.$gconsul_hor_esta.'"
                                                                               where hor_cont="'.$hor_cont.'"

                                                                            ';
			$stmt = ConexionSeven::conectarSeven()->prepare("update ap_horre set hor_esta='$hor_esta'
                                                                        where hor_cont=".$hor_cont);
                        $sql_prepara="update ap_horre set hor_esta='$hor_esta'
                                                                        where hor_cont=".$hor_cont;
                       // return $sql_prepara;
                        
                        
                        
                        
                        
			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			if($stmt->execute()){

                            
                      
                         
                            $stmtaud = Conexion::conectar()->prepare(" 	
                            SELECT max(id_auditoria)+1 as valor_id from auditoria
                            ");

                            $stmtaud -> execute();

                            $stmtaudpre= $stmtaud -> fetch();
                 
                            $valor_id=$stmtaudpre['valor_id'];
                            $stmaudins = Conexion::conectar()->prepare("
                            INSERT INTO auditoria
                            (id_auditoria,id_usuario,nombre_usuario,operacion_query,operacion_anterior,estado,fecha_registro,detalle_programa)
                              VALUES 
                            ($valor_id, $id_usuario_sis,'$nombre_usuario_sis','$sql','$sqlanterioir',1,GETDATE(),'Registro de Horas / Cambio de estado'  );

                             ");
                            $stmaudins -> execute(); 
                            
                            
                            
                            
                            
                            
                            
                            
                            
			return 1;

		}else{

			return $sql;
		
		}

		 

		$stmt -> close();

		$stmt = null;

	}   
        
	
	
	
	
    
    
    static public function mdlMostrarConsultasMenuPerfil(){
                     
 
                                           
                       
                   $cadena="
                       
                    select 
                    config_menu_base.id_config_menu,
                    config_menu_base.nombre,
                    config_menu_base.descripcion_fun,
                    config_menu_base.id_padre_config,
                    menu_perfil_base.estado,
                    menu_perfil_base.id_menu_perfil,
                    perfiles_base.nombre_perfil
                    from
                    config_menu_base
                    inner join menu_perfil_base on config_menu_base.id_config_menu=menu_perfil_base.id_config_menu
                    inner join perfiles_base on menu_perfil_base.id_perfil = perfiles_base.id_perfil

                    order by perfiles_base.nombre_perfil

                    ";
             
			$stmt = Conexion::conectar()->prepare($cadena); 
                        
                    
                        	  

			$stmt -> execute();

			return $stmt -> fetchAll();
		 

		$stmt -> close();

		$stmt = null;

	}
        
        
        
       static public function mdlMostrarConsultasCursos(){
                     
 
                                           
                       
                   $cadena="
                       SELECT id_curso,nombre_curso,descripcion,fecha_creacion FROM cursos
               
                             ";
             
			$stmt = Conexion::conectar()->prepare($cadena); 
                        
                    
                        	  

			$stmt -> execute();

			return $stmt -> fetchAll();
		 

		$stmt -> close();

		$stmt = null;

	}
              static public function mdlMostrarConsultasModulos(){
                   $cadena="
                      select modulos.id_modulo,modulos.`id_curso`,cursos.`nombre_curso`,modulos.`nombre_modulo`,modulos.`descripcion`,modulos.`fecha_creacion` from modulos
    inner join cursos on modulos.`id_curso`=cursos.`id_curso` ";
             
			$stmt = Conexion::conectar()->prepare($cadena); 
                        $stmt -> execute();
                        return $stmt -> fetchAll();
		 

		$stmt -> close();
                $stmt = null;

	}
        
        
             static public function mdlMostrarConsultasCursosInscritos(){
                   $cadena="
                     SELECT inscripcion_curso.`id_inscripcion_curso`,inscripcion_curso.`id_usuario`,usuarios.`nombre_completo`,usuarios.`usuario`,cursos.id_curso,cursos.`nombre_curso` FROM inscripcion_curso
                    INNER JOIN usuarios ON inscripcion_curso.`id_usuario`=usuarios.id_usuario
                    INNER JOIN cursos ON inscripcion_curso.`id_curso`=cursos.`id_curso` ";
             
			$stmt = Conexion::conectar()->prepare($cadena); 
                        $stmt -> execute();
                        return $stmt -> fetchAll();
		 

		$stmt -> close();
                $stmt = null;

	}
        
               static public function mdlMostrarConsultasLecciones(){
                   $cadena="
                      SELECT `leccion_contenido`.`id_contenido_leccion`,cursos.`nombre_curso` AS nombre_curso,modulos.`nombre_modulo` AS nombre_modulo,leccion_contenido.`nombre_leccion` AS nombre_leccion,leccion_contenido.`descripcion` AS descripcion,leccion_contenido.`ruta_video` AS ruta_video FROM leccion_contenido
INNER JOIN cursos ON leccion_contenido.`id_curso`=cursos.`id_curso`
INNER JOIN modulos ON leccion_contenido.`id_modulo`=modulos.`id_modulo` ";
             
			$stmt = Conexion::conectar()->prepare($cadena); 
                        $stmt -> execute();
                        return $stmt -> fetchAll();
		 

		$stmt -> close();
                $stmt = null;

	}
                  static public function mdlMostrarConsultasUsuarios(){
                   $cadena="
                      SELECT `id_usuario`,`tipo_identificacion`,`identificacion`,`nombre_completo`,`fecha_nacimiento`,`correo`,`celular`,`usuario`,`perfil`,`fecha_creacion` FROM usuarios
                             ";
             
			$stmt = Conexion::conectar()->prepare($cadena); 
                        $stmt -> execute();
                        return $stmt -> fetchAll();
		 

		$stmt -> close();
                $stmt = null;

	}
        
                static public function mdlMostrarConsultasanexoDocs(){
                   $cadena="
                         SELECT link_curso.id_link_curso,`cursos`.`nombre_curso`,link_curso.id_curso,link_curso.url_curso,link_curso.estado,link_curso.fecha_registro FROM link_curso
                        INNER JOIN cursos ON  link_curso.`id_curso`=cursos.id_curso  ";
             
			$stmt = Conexion::conectar()->prepare($cadena); 
                        $stmt -> execute();
                        return $stmt -> fetchAll();
		 

		$stmt -> close();
                $stmt = null;

	}
        
    
 static public function mdlMostrarConsultasPerfilConsul(){
                     
 
                                           
                       
                   $cadena="
                         select id_perfil,nombre_perfil,descripcion,estado,fecha from perfiles_base 
               
                        ";
             
			$stmt = Conexion::conectar()->prepare($cadena); 
                        
                    
                        	  

			$stmt -> execute();

			return $stmt -> fetchAll();
		 

		$stmt -> close();

		$stmt = null;

	}
        
            
    static public function mdlMostrarConsultasHoraOM($NUM_ORDEN){
                     
     
    //($numero_producto, $nombre_producto, $punto_venta, $contador)
    /*
     $producto='7707030423870';
        $punto_venta='6';
      $nombre_producto='MULETA';
      */
      
      //$producto=$numero_producto;
      
      
     // $ord_nume=21;
      $ord_nume=$NUM_ORDEN;
      
                                         
                         
                   
                   $cadena="             SELECT
                                         AP_HORRE.HOR_NUME,
                                         AP_HORRE.HOR_NTLA,
                                        AP_EMPLE.EMP_NOMB,
                                        AP_EMPLE.EMP_APEL,
                                         AP_HORRE.HOR_FECH,
                                         AP_HORRE.HOR_FAPL,
                                         AP_HORRE.HOR_OBSE,
                                          AP_HORRE.HOR_ESTA,
                                         AP_HORRE.HOR_CONT,
                                        AP_HORRE.EMP_CONT
                                        FROM AP_HORRE,AP_EMPLE,AM_MAQUI,AM_CENTR,AP_TURNO,GN_TOPER, IN_INSTA,BI_CARGO,GN_TERCE,ap_dreho,ap_ordme

                                        WHERE
					 ap_horre.hor_cont=ap_dreho.hor_cont and ap_dreho.ORD_CONT=AP_ORDME.ORD_CONT and

					 AP_HORRE.EMP_CODI=AP_EMPLE.EMP_CODI AND AP_HORRE.EMP_CONT=AP_EMPLE.EMP_CONT AND
                                        AP_HORRE.EMP_CODI=AM_MAQUI.EMP_CODI AND AP_HORRE.MAQ_CONT=AM_MAQUI.MAQ_CONT AND 
                                        AP_HORRE.EMP_CODI=AM_CENTR.EMP_CODI AND AP_HORRE.CEN_CONT=AM_CENTR.CEN_CONT AND
                                         AP_HORRE.EMP_CODI=AP_TURNO.EMP_CODI AND AP_HORRE.TUR_CONT=AP_TURNO.TUR_CONT AND 
                                         AP_HORRE.EMP_CODI=GN_TOPER.EMP_CODI AND AP_HORRE.TOP_CODI=GN_TOPER.TOP_CODI AND
                                          AP_HORRE.EMP_CODI=IN_INSTA.EMP_CODI AND AP_HORRE.INS_CONT=IN_INSTA.INS_CONT AND
                                           AP_EMPLE.EMP_CODI=BI_CARGO.EMP_CODI AND AP_EMPLE.EMP_CARG=BI_CARGO.CAR_CONT AND 
                                           AP_EMPLE.EMP_CODI=GN_TERCE.EMP_CODI AND AP_EMPLE.TER_CODI=GN_TERCE.TER_CODI 

						and ap_ordme.ord_nume=$ord_nume
                                        AND AP_HORRE.HOR_CONT IN (  SELECT AP_HORRE.HOR_CONT    FROM AP_HORRE    LEFT JOIN AP_DREHO ON (AP_DREHO.EMP_CODI = AP_HORRE.EMP_CODI AND AP_DREHO.HOR_CONT = AP_HORRE.HOR_CONT)    LEFT JOIN AP_ORDME ON (AP_DREHO.EMP_CODI = AP_ORDME.EMP_CODI AND AP_ORDME.ORD_CONT = AP_DREHO.ORD_CONT )    LEFT JOIN GN_RBOUS ON (GN_RBOUS.EMP_CODI = AP_ORDME.EMP_CODI AND GN_RBOUS.BOD_CONT = AP_ORDME.BOD_CONT AND GN_RBOUS.USU_CODI = 'SEVEN' )  WHERE AP_HORRE.EMP_CODI = 631 AND (AP_DREHO.HOR_CONT IS  NULL OR (GN_RBOUS.BOD_CONT = AP_ORDME.BOD_CONT AND AP_DREHO.HOR_CONT IS NOT  NULL ) )        )  AND EXISTS (SELECT GN_USUAR.USU_CODI             FROM GN_USUAR,GN_RGUSU            WHERE GN_USUAR.USU_CODI = 'SEVEN'             AND GN_RGUSU.GRU_CODI = GN_USUAR.GRU_CODI              AND GN_RGUSU.EMP_CODI = IN_INSTA.EMP_CODI            
                                        AND GN_RGUSU.ARB_SUCU = IN_INSTA.SUC_CONT) AND AP_HORRE.EMP_CODI = 631
					  group by   AP_HORRE.HOR_NUME,
                                         AP_HORRE.HOR_NTLA,
                                        AP_EMPLE.EMP_NOMB,
                                        AP_EMPLE.EMP_APEL,
                                         AP_HORRE.HOR_FECH,
                                         AP_HORRE.HOR_FAPL,
                                         AP_HORRE.HOR_OBSE,
                                          AP_HORRE.HOR_ESTA,
                                         AP_HORRE.HOR_CONT,
                                        AP_HORRE.EMP_CONT
                                        ";
             
			$stmt = ConexionSeven::conectarSeven()->prepare($cadena); 
                        
                    
                        $stmt -> execute();

			return $stmt -> fetchAll();
		 

		$stmt -> close();

		$stmt = null;

	}
      
    
    
        
              
    static public function mdlMostraConsultaPersonal(){
               
                                                                    
                    $cadena="";
                   $where="";
                   
                         
                        //consulta con for incluido
                        
                        
                          $consultas_tmt = ConexionSeven::conectarSeven()->prepare("     
                                                                        SELECT EMP_CONT,EMP_CODE,EMP_NOMB, EMP_APEL  FROM AP_EMPLE
                                                                            WHERE 
                                                                            emp_esta='A'
                                                                         AND EMP_CONT <> 0
                                                                        order by EMP_NOMB
                                                                         ");
                        $consultas_tmt -> execute();
                        $stmtaudprerr= $consultas_tmt ->fetchAll();
                    $texto = "";
                  
                  
                            for($i = 0; $i < count($stmtaudprerr); $i++){
                         
                         $EMP_CONT=$stmtaudprerr[$i]['EMP_CONT'];
                         $NOMBRECOM=$stmtaudprerr[$i]['EMP_NOMB']." ".$stmtaudprerr[$i]['EMP_APEL'] ;
                     
                         
                         
                        
                            
                            
                       $texto.='<option value="' . $EMP_CONT . '">' . $NOMBRECOM . '</option>';
     
                        
                  
                   }
                        
                        
                        
                        
                         return $texto;
                        
                        
                        
                        
                        
                        
                       //fin consulta for incluido 

		$stmt -> close();

		$stmt = null;

	}        
        
    
     static public function mdlMostraConsultaPerfiles(){
               
                                                                    
                    $cadena="";
                   $where="";
                   
                         
                        //consulta con for incluido
                        
                        
                          $consultas_tmt = Conexion::conectar()->prepare("     
                                                                       
                                         select id_perfil,nombre_perfil from perfiles_base  where estado=1
                                                                         ");
                        $consultas_tmt -> execute();
                        $stmtaudprerr= $consultas_tmt ->fetchAll();
                    $texto = "";
                  
                  
                            for($i = 0; $i < count($stmtaudprerr); $i++){
                         
                         $id_perfil=$stmtaudprerr[$i]['id_perfil'];
                         $nombre_perfil=$stmtaudprerr[$i]['nombre_perfil'] ;
                     
                         
                         
                        
                            
                            
                       $texto.='<option value="' . $id_perfil . '">' . $nombre_perfil . '</option>';
     
                        
                  
                   }
                        
                        
                        
                        
                         return $texto;
                        
                        
                        
                        
                        
                        
                       //fin consulta for incluido 

		$stmt -> close();

		$stmt = null;

	}     
    
    
        
         
     static public function mdlMostraConsultaMenuPadre(){
               
                                                                    
                    $cadena="";
                   $where="";
                   
                         
                        //consulta con for incluido
                        
                        
                          $consultas_tmt = Conexion::conectar()->prepare("     
                                                                       
                                      	   select id_config_menu,nombre  from config_menu_base where estado=1  and id_padre_config =0          
                                                                         ");
                        $consultas_tmt -> execute();
                        $stmtaudprerr= $consultas_tmt ->fetchAll();
                    $texto = "";
                     $texto.='<option value="0"> Menu Padre </option>';
                  
                            for($i = 0; $i < count($stmtaudprerr); $i++){
                         
                         $id_config_menu=$stmtaudprerr[$i]['id_config_menu'];
                         $nombre=$stmtaudprerr[$i]['nombre'] ;
                     
                         
                         
                        
                            
                            
                       $texto.='<option value="' . $id_config_menu . '">' . $nombre . '</option>';
     
                        
                  
                   }
                        
                        
                        
                        
                         return $texto;
                        
                        
                        
                        
                        
                        
                       //fin consulta for incluido 

		$stmt -> close();

		$stmt = null;

	}     
       
              
     static public function mdlMostraComboCursos(){
               
                                                                    
                    $cadena="";
                   $where="";
                   
                         
                        //consulta con for incluido
                        
                        
                          $consultas_tmt = Conexion::conectar()->prepare("     
                                                                       
                                      	   SELECT id_curso,nombre_curso  FROM cursos      
                                                                         ");
                        $consultas_tmt -> execute();
                        $stmtaudprerr= $consultas_tmt ->fetchAll();
                    $texto = "";
                   //  $texto.='<option value="0"> Menu Padre </option>';
                      for($i = 0; $i < count($stmtaudprerr); $i++){
                          $id_curso=$stmtaudprerr[$i]['id_curso'];
                         $nombre=$stmtaudprerr[$i]['nombre_curso'] ;
                         $texto.='<option value="' . $id_curso . '">' . $nombre . '</option>';
                        }
                        
                        
                        
                        
                         return $texto;
                        
                        
                        
                        
                        
                        
                       //fin consulta for incluido 

		$stmt -> close();

		$stmt = null;

	}   
        static public function mdlMostraComboModulos($data){
               
                       $id_curso=$data['id_consulta_cursos_cmb'];                                             
                    $cadena="";
                   $where="";
                   
                         
                        //consulta con for incluido
                        
                        
                          $consultas_tmt = Conexion::conectar()->prepare("     
                                                                       
                                      	SELECT modulos.`id_modulo`,modulos.`nombre_modulo` FROM modulos
                                    WHERE
                                    modulos.`id_curso`=$id_curso   
                                                                         ");
                        $consultas_tmt -> execute();
                        $stmtaudprerr= $consultas_tmt ->fetchAll();
                    $texto = "";
                   $texto.='<option value=""> Seleccione </option>';
                      for($i = 0; $i < count($stmtaudprerr); $i++){
                          $id_modulo=$stmtaudprerr[$i]['id_modulo'];
                         $nombre_modulo=$stmtaudprerr[$i]['nombre_modulo'] ;
                         $texto.='<option value="' . $id_modulo . '">' . $nombre_modulo . '</option>';
                        }
                        
                        
                        
                        
                         return $texto;
                        
                        
                        
                        
                        
                        
                       //fin consulta for incluido 

		$stmt -> close();

		$stmt = null;

	} 
        
        static public function mdlMostraComboUsuarios($data){
               
                                                           
                    $cadena="";
                   $where="";
                   
                         
                        //consulta con for incluido
                        
                        
                          $consultas_tmt = Conexion::conectar()->prepare("     
                                                                       
                                      	SELECT usuarios.`id_usuario`,usuarios.`nombre_completo`,usuarios.identificacion FROM usuarios 
                                        where id_perfil=2
                                                                         ");
                        $consultas_tmt -> execute();
                        $stmtaudprerr= $consultas_tmt ->fetchAll();
                    $texto = "";
                   $texto.='<option value=""> Seleccione </option>';
                      for($i = 0; $i < count($stmtaudprerr); $i++){
                          $id_usuario=$stmtaudprerr[$i]['id_usuario'];
                         $nombre_completo=$stmtaudprerr[$i]['nombre_completo'] ;
                         $identificacion=$stmtaudprerr[$i]['identificacion'] ;
                         $texto.='<option value="' . $id_usuario . '">'.$identificacion.'-' . $nombre_completo . '</option>';
                        }
                        
                        
                        
                        
                         return $texto;
                        
                        
                        
                        
                        
                        
                       //fin consulta for incluido 

		$stmt -> close();

		$stmt = null;

	} 
        
        
        
          static public function mdlMostraComboCursosInscritos($data){
               
                                                                   
                       $id_usuario=$data['id_usuario'];                                             
                    $cadena="";
                   $where="";
                   
                         
                        //consulta con for incluido
                        
                        
                          $consultas_tmt = Conexion::conectar()->prepare("     
                                                                       
                                      SELECT inscripcion_curso.`id_usuario`,`inscripcion_curso`.`id_curso`,cursos.`nombre_curso` FROM inscripcion_curso
                                        INNER JOIN cursos ON inscripcion_curso.`id_curso`=cursos.`id_curso`
                                        WHERE
                                        `inscripcion_curso`.`id_usuario`=$id_usuario    
                                                                         ");
                        $consultas_tmt -> execute();
                        $stmtaudprerr= $consultas_tmt ->fetchAll();
                    $texto = "";
                   $texto.='<option value=""> Seleccione </option>';
                      for($i = 0; $i < count($stmtaudprerr); $i++){
                          $id_curso=$stmtaudprerr[$i]['id_curso'];
                         $nombre_curso=$stmtaudprerr[$i]['nombre_curso'] ;
                         $texto.='<option value="' . $id_curso . '">' . $nombre_curso . '</option>';
                        }
                        
                        
                        
                        
                         return $texto;
                        
                        
                        
                        
                        
                        
                       //fin consulta for incluido 

		$stmt -> close();

		$stmt = null;

	}  
        
        
        
      static public function mdlMostraConsultaMenuhijodetalle($data){
               
                                                                    
                    $cadena="";
                   $where="";
                   
                         
                        //consulta con for incluido
                       $id_padre_config=$data['id_menu_padre']; 
                 //  $id_padre_config=0;
                   
                   $variable="select id_config_menu,nombre  from config_menu_base where estado=1  and id_padre_config =$id_padre_config ";
                          $consultas_tmt = Conexion::conectar()->prepare("     
                                                                       
                                      	   select id_config_menu,nombre  from config_menu_base where estado=1  and id_padre_config =$id_padre_config          
                                                                         ");
                        $consultas_tmt -> execute();
                        $stmtaudprerr= $consultas_tmt ->fetchAll();
                    $texto = "";
                   $texto.='<option value="0">Seleccione</option>';
                  
                            for($i = 0; $i < count($stmtaudprerr); $i++){
                         
                         $id_config_menu=$stmtaudprerr[$i]['id_config_menu'];
                         $nombre=$stmtaudprerr[$i]['nombre'] ;
                     
                         
                         
                        
                            
                            
                       $texto.='<option value="' . $id_config_menu . '">' . $nombre . '</option>';
     
                        
                  
                   }
                        
                        
                        
                        
                         //return $variable;
                        return $texto;
                        
                        
                        
                        
                        
                        
                       //fin consulta for incluido 

		$stmt -> close();

		$stmt = null;

	}         
        
        
        
        
        
        
          static public function mdlActualizarGuias($data){
                
              session_start();
              
            $id_usuario_sis=  $_SESSION["id"]  ;
	    $nombre_usuario_sis=$_SESSION["nombre"]  ;
						
                    $cadena="";
                   $where="";
                  
                   $MDE_PLAC=$data['MDE_PLAC'];
                   
                   $PVD_CODI=$data['PVD_CODI'];
                   $DEP_CODD=$data['DEP_CODD'];
                   $MDE_PESO=$data['MDE_PESO'];
                   $MDE_VALO=$data['MDE_VALO'];
                   $MDE_FLET=$data['MDE_FLET'];
                   $MDE_TFIJ=$data['MDE_TFIJ'];
                   $MDE_CONT=$data['MDE_CONT'];
                   
                   
                                                                 /*
                                                                    set PE_MDESP.MDE_PLAC='',
								    PE_MDESP.PVD_CODI='7556',
						 			 	   PE_MDESP.DEP_CODD='1',
								 	   PE_MDESP.MDE_PESO='21000',
								 	   PE_MDESP.MDE_VALO='5700',
								    PE_MDESP.MDE_FLET='2900',
									    PE_MDESP.MDE_TFIJ='1'
							 	   where 
								    PE_MDESP.=1
								  and
					 			   PE_MDESP.EMP_CODI=631
                                                                    */
                                                 $sql='  update PE_MDESP 
																		 
								           set PE_MDESP.MDE_PLAC="'.$MDE_PLAC.'",
								           PE_MDESP.PVD_CODI="'.$PVD_CODI.'",
						 		           PE_MDESP.DEP_CODD="'.$DEP_CODD.'",
								 	   PE_MDESP.MDE_PESO="'.$MDE_PESO.'",
								 	   PE_MDESP.MDE_VALO="'.$MDE_VALO.'",
								           PE_MDESP.MDE_FLET="'.$MDE_FLET.'",
									   PE_MDESP.MDE_TFIJ="'.$MDE_TFIJ.'"
							                   where 
							                   PE_MDESP.MDE_CONT="'.$MDE_CONT.'"
								           and
					 			           PE_MDESP.EMP_CODI=631';
                                                 
                                                 
                                                 $stmtconsultvalanteriores = ConexionSeven::conectarSeven()->prepare("     
                                                                         
                                                                  	   select 
										   PE_MDESP.MDE_PLAC,
										    PE_MDESP.PVD_CODI,
											PE_MDESP.DEP_CODD,
											PE_MDESP.MDE_PESO,
											PE_MDESP.MDE_VALO,
											PE_MDESP.MDE_FLET,
											PE_MDESP.MDE_TFIJ
										   from PE_MDESP
										    where 
							                   PE_MDESP.MDE_CONT=$MDE_CONT
                                                                                ");
                                                                      $stmtconsultvalanteriores -> execute();

                                                                        $stmtavalanteriores= $stmtconsultvalanteriores -> fetch();

                                                                        $gconsul_MDE_PLAC=$stmtavalanteriores['MDE_PLAC'];
                                                                        $gconsul_PVD_CODI=$stmtavalanteriores['PVD_CODI'];
                                                                        $gconsul_DEP_CODD=$stmtavalanteriores['DEP_CODD'];
                                                                        $gconsul_MDE_PESO=$stmtavalanteriores['MDE_PESO'];
                                                                        $gconsul_MDE_VALO=$stmtavalanteriores['MDE_VALO'];
                                                                        $gconsul_MDE_FLET=$stmtavalanteriores['MDE_FLET'];
                                                                        $gconsul_MDE_TFIJ=$stmtavalanteriores['MDE_TFIJ'];
                                                 
                                                                         $sqlanterioir='  update PE_MDESP 
																		 
								           set PE_MDESP.MDE_PLAC="'.$gconsul_MDE_PLAC.'",
								           PE_MDESP.PVD_CODI="'.$gconsul_PVD_CODI.'",
						 		           PE_MDESP.DEP_CODD="'.$gconsul_DEP_CODD.'",
								 	   PE_MDESP.MDE_PESO="'.$gconsul_MDE_PESO.'",
								 	   PE_MDESP.MDE_VALO="'.$gconsul_MDE_VALO.'",
								           PE_MDESP.MDE_FLET="'.$gconsul_MDE_FLET.'",
									   PE_MDESP.MDE_TFIJ="'.$gconsul_MDE_TFIJ.'"
							                   where 
							                   PE_MDESP.MDE_CONT="'.$MDE_CONT.'"
								           and
					 			           PE_MDESP.EMP_CODI=631';
			$stmt = ConexionSeven::conectarSeven()->prepare("     
                                                                         
                                                                  	   update PE_MDESP 
																		 
								           set PE_MDESP.MDE_PLAC='$MDE_PLAC',
								           PE_MDESP.PVD_CODI='$PVD_CODI',
						 		           PE_MDESP.DEP_CODD='$DEP_CODD',
								 	   PE_MDESP.MDE_PESO='$MDE_PESO',
								 	   PE_MDESP.MDE_VALO='$MDE_VALO',
								           PE_MDESP.MDE_FLET='$MDE_FLET',
									   PE_MDESP.MDE_TFIJ='$MDE_TFIJ'
							                   where 
							                   PE_MDESP.MDE_CONT='$MDE_CONT'
								           and
					 			           PE_MDESP.EMP_CODI=631
                   
                     							 									 
                                                                        ");

                        
                        
                        
                        
                        
                        
			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			if($stmt->execute()){

                            
                      
                         
                            $stmtaud = Conexion::conectar()->prepare(" 	
                            SELECT max(id_auditoria)+1 as valor_id from auditoria
                            ");

                            $stmtaud -> execute();

                            $stmtaudpre= $stmtaud -> fetch();
                 
                            $valor_id=$stmtaudpre['valor_id'];
                            $stmaudins = Conexion::conectar()->prepare("
                            INSERT INTO auditoria
                            (id_auditoria,id_usuario,nombre_usuario,operacion_query,operacion_anterior,estado,fecha_registro)
                              VALUES 
                            ($valor_id, $id_usuario_sis,'$nombre_usuario_sis','$sql','$sqlanterioir',1,GETDATE()  );

                             ");
                            $stmaudins -> execute(); 
                            
                            
                            
                            
                            
                            
                            
                            
                            
			return 1;

		}else{

			return $sql;
		
		}

		 

		$stmt -> close();

		$stmt = null;

	}   
        
        
           static public function mdlActualizarDetalleIndividuaDeGuia($data){
                
               session_start();  
               
                    $cadena="";
                   $where="";
                  
                    $id_usuario_sis= $_SESSION["id"]  ;
                    $nombre_usuario_sis= $_SESSION["nombre"]   ;
						
                   $DDE_VALO=$data['DDE_VALO'];
                   $DDE_VFLE=$data['DDE_VFLE'];
                   
                   $PED_SPRT=$data['PED_SPRT'];
                   $MDE_CONT=$data['MDE_CONT'];
                   $DDE_CONT=$data['DDE_CONT'];
                   /*
                   $MDE_CONT=155002;
                   $DDE_CONT=1034;
                   */
                   
                   $sqlsrv=" UPDATE PE_PEDIM SET PED_SPRT=$PED_SPRT
                             WHERE PED_CONT IN (SELECT PED_CONT FROM PE_DDESP WHERE MDE_CONT='$MDE_CONT' AND DDE_CONT='$DDE_CONT')";
                   
                   
                   
                        $stmtconsultvalornterior_spr = ConexionSeven::conectarSeven()->prepare(" select PED_SPRT from PE_PEDIM
                                                                        WHERE PED_CONT IN (SELECT PED_CONT FROM PE_DDESP WHERE MDE_CONT='$MDE_CONT' AND DDE_CONT='$DDE_CONT')
                     							 ");                         
                                                 
                        $stmtconsultvalornterior_spr -> execute();

                         $stmtavalanteriores= $stmtconsultvalornterior_spr -> fetch();

                        $gconsul_PED_SPRT=$stmtavalanteriores['PED_SPRT'];
                          
                        
                         $sqlconsulta1SPRT_PRE_insert='   UPDATE PE_PEDIM SET PED_SPRT="'.$gconsul_PED_SPRT.'"   WHERE PED_CONT IN (SELECT PED_CONT FROM PE_DDESP WHERE MDE_CONT="'.$MDE_CONT.'" AND DDE_CONT="'.$DDE_CONT.'")';                        
                                                 
                         $sqlconsulta1SPRT_pos_insert='   UPDATE PE_PEDIM SET PED_SPRT="'.$PED_SPRT.'"  WHERE PED_CONT IN (SELECT PED_CONT FROM PE_DDESP WHERE MDE_CONT="'.$MDE_CONT.'" AND DDE_CONT="'.$DDE_CONT.'")';                         
                                            
                          
                          
                          
                          
			$stmt = ConexionSeven::conectarSeven()->prepare("  UPDATE PE_PEDIM SET PED_SPRT=$PED_SPRT
                                                                        WHERE PED_CONT IN (SELECT PED_CONT FROM PE_DDESP WHERE MDE_CONT='$MDE_CONT' AND DDE_CONT='$DDE_CONT') ");
                      
                                                                
                            $stmtaud = Conexion::conectar()->prepare("SELECT max(id_auditoria)+1 as valor_id from auditoria");

                            $stmtaud -> execute();

                            $stmtaudpre= $stmtaud -> fetch();
                            
                            $valor_id=$stmtaudpre['valor_id'];
                            $stmaudins = Conexion::conectar()->prepare("
                            INSERT INTO auditoria
                            (id_auditoria,id_usuario,nombre_usuario,operacion_query,operacion_anterior,estado,fecha_registro)
                              VALUES 
                            ($valor_id, $id_usuario_sis,'$nombre_usuario_sis','$sqlconsulta1SPRT_pos_insert','$sqlconsulta1SPRT_PRE_insert',1,GETDATE()  );

                             ");
                            $stmaudins -> execute();      

                            
                        
                        
                        
                        /*********************************************/
                        
                        
                        
                             $stmtconsultvalornterior_valo_vfle = ConexionSeven::conectarSeven()->prepare("     
                                                                         
                                                                  	 SELECT DDE_VALO,DDE_VFLE FROM PE_DDESP
									 WHERE MDE_CONT=$MDE_CONT AND DDE_CONT=$DDE_CONT 									 
                                                                        ");                         
                                                 
                        $stmtconsultvalornterior_valo_vfle -> execute();

                         $stmtconsultvalornterior_valo_vfle= $stmtconsultvalornterior_valo_vfle -> fetch();

                        $gconsul_DDE_VALO=$stmtconsultvalornterior_valo_vfle['DDE_VALO'];
                        $gconsul_DDE_VFLE=$stmtconsultvalornterior_valo_vfle['DDE_VFLE'];
                                                                          
                                                 
                          $sqlconsulta1_valovfle_PRE_insert='    UPDATE PE_DDESP 
                                                                          SET 
                                                                          DDE_VALO="'.$gconsul_DDE_VALO.'" ,
                                                                          DDE_VFLE="'.$gconsul_DDE_VFLE.'" 
                                                                        WHERE MDE_CONT= "'.$MDE_CONT.'"   AND DDE_CONT= "'.$DDE_CONT.'"  
                     							 
                                                       ';      
                            $sqlconsulta1__valovfle_pos_insert='    UPDATE PE_DDESP 
                                                                          SET 
                                                                          DDE_VALO="'.$DDE_VALO.'" ,
                                                                          DDE_VFLE="'.$DDE_VFLE.'" 
                                                                        WHERE MDE_CONT="'.$MDE_CONT.'"  AND DDE_CONT="'.$DDE_CONT.'"
                     							 
                                                       ';  
                        
                        /********************************************/
                        
                        	$stmt2 = ConexionSeven::conectarSeven()->prepare("     
                                                                         
                                                                  	  UPDATE PE_DDESP 
                                                                          SET 
                                                                          DDE_VALO='$DDE_VALO',
                                                                          DDE_VFLE='$DDE_VFLE'
                                                                        WHERE MDE_CONT=$MDE_CONT AND DDE_CONT=$DDE_CONT
                     							 									 
                                                                        ");
                      
                                                                        
                            $stmtaudr = Conexion::conectar()->prepare(" 	
                            SELECT max(id_auditoria)+1 as valor_id from auditoria
                            ");

                            $stmtaudr -> execute();

                            $stmtaudpre= $stmtaudr -> fetch();
                            
                           
                            
                            
                            $valor_id=$stmtaudpre['valor_id'];
                            //return "valr id_".$valor_id;
                            
                            $stmaudinsr = Conexion::conectar()->prepare("
                            INSERT INTO auditoria
                            (id_auditoria,id_usuario,nombre_usuario,operacion_query,operacion_anterior,estado,fecha_registro)
                              VALUES 
                            ($valor_id, $id_usuario_sis,'$nombre_usuario_sis','$sqlconsulta1__valovfle_pos_insert','$sqlconsulta1_valovfle_PRE_insert',1,GETDATE()  );

                             ");
                            $stmaudinsr -> execute();      
     

                            
                            

			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			if($stmt->execute()){
                            if($stmt2->execute())
                            {
                                return 1;
                            }
                            else {
                                return 12121;
                            }
			

		}else{

			return $sqlsrv;
		
		}

		 

		$stmt -> close();

		$stmt = null;

	}
        static public function mdlRegistroTheAuditoria($sqlconsulta_pre,$sqlconsulta_pos){
                            session_start();  
                            $id_usuario_sis= $_SESSION["id"]  ;
                            $nombre_usuario_sis= $_SESSION["nombre"]   ;
                            $stmtaudr = Conexion::conectar()->prepare(" 	
                            SELECT max(id_auditoria)+1 as valor_id from auditoria
                            ");
                            $stmtaudr -> execute();
                            $stmtaudpre= $stmtaudr -> fetch();
                            $valor_id=$stmtaudpre['valor_id'];
                            $stmaudinsr = Conexion::conectar()->prepare("
                            INSERT INTO auditoria
                            (id_auditoria,id_usuario,nombre_usuario,operacion_query,operacion_anterior,estado,fecha_registro)
                              VALUES 
                            ($valor_id, $id_usuario_sis,'$nombre_usuario_sis','$sqlconsulta_pre','$sqlconsulta_pos',1,GETDATE()  );
                            ");
                            $stmaudinsr -> execute();      
                            return $valor_id;
                            
            
            
            
        }
        
        
        
        
         static public function mdlActualizarDetalleIndividuaDeGuiaBloque($data){
                
                                                           
                   $cadena="";
                   $where="";
                  
                   $DDE_VALO=$data['DDE_VALO'];
                   $DDE_VFLE=$data['DDE_VFLE'];
                   
                   $PED_SPRT=$data['PED_SPRT'];
                   $PED_SPRTF=$data['PED_SPRT'];
                   $MDE_CONT=$data['MDE_CONT'];
                   $DDE_CONT=$data['DDE_CONT'];
              
                   
                   $consulta="select PE_DDESP.DDE_VALO,PE_DDESP.DDE_VFLE from PE_DDESP  WHERE MDE_CONT=807001";
                   
                   
                   //primera consulta recorrido
                   $consultas_tmt = ConexionSeven::conectarSeven()->prepare("     
                                                                          select PE_DDESP.DDE_VALO,PE_DDESP.DDE_VFLE,PE_DDESP.DDE_CONT			from PE_DDESP
                                                                          WHERE MDE_CONT=$MDE_CONT
                                                                         ");
                  $consultas_tmt -> execute();
                  $stmtaudprerr= $consultas_tmt ->fetchAll();
                   
                  
                  //auditoria de bloque dde_valo 
                  //query para guardar en log auditoria
                  $query_post=' UPDATE PE_DDESP SET DDE_VALO="'.$DDE_VALO.'", DDE_VFLE="'.$DDE_VFLE.'" WHERE MDE_CONT="'.$MDE_CONT.'"';
                   session_start();  
                            $id_usuario_sis= $_SESSION["id"]  ;
                            $nombre_usuario_sis= $_SESSION["nombre"]   ;
                            $stmtaudr = Conexion::conectar()->prepare(" 	
                            SELECT max(id_auditoria)+1 as valor_id from auditoria
                            ");
                            $stmtaudr -> execute();
                            $stmtaudpre= $stmtaudr -> fetch();
                            $valor_id=$stmtaudpre['valor_id'];
                            $stmaudinsr = Conexion::conectar()->prepare("
                            INSERT INTO auditoria
                            (id_auditoria,id_usuario,nombre_usuario,operacion_query,operacion_anterior,estado,fecha_registro)
                              VALUES 
                            ($valor_id, $id_usuario_sis,'$nombre_usuario_sis','$query_post','Query vasio la query se encuentra en la tabla log detalle',1,GETDATE()  );
                            ");
                            $stmaudinsr -> execute();  
                  
                  
                  
                  for($i = 0; $i < count($stmtaudprerr); $i++){
                         
                         $DDE_VALO_F1=$stmtaudprerr[$i]['DDE_VALO'];
                         $DDE_VFLE_F1=$stmtaudprerr[$i]['DDE_VFLE'];
                         $DDE_CONT_F1=$stmtaudprerr[$i]['DDE_CONT'];
                         
                         
                         
                           $query_valo_vfle=' UPDATE PE_DDESP   SET   DDE_VALO="'.$DDE_VALO_F1.'",  DDE_VFLE="'.$DDE_VFLE_F1.'" WHERE MDE_CONT="'.$MDE_CONT.'" and DDE_CONT="'.$DDE_CONT_F1.'"';
                            
                         
                         
                          
                            $id_usuario_sis= $_SESSION["id"]  ;
                            $nombre_usuario_sis= $_SESSION["nombre"]   ;
                            $stmtaudr = Conexion::conectar()->prepare(" 	
                            SELECT max(id_detalle_auditoria)+1 as valor_id_detalle_aud from detalle_auditoria
                            ");
                            $stmtaudr -> execute();
                            $stmtaudpre= $stmtaudr -> fetch();
                            $valor_id_detalle_aud=$stmtaudpre['valor_id_detalle_aud'];
                            $stmaudinsr = Conexion::conectar()->prepare("
                            
                            INSERT INTO detalle_auditoria 
                            (id_detalle_auditoria,id_auditoria,id_usuario,nombre_usuario,operacion,operacion_anterioir,estado,fecha_operacion)
                            VALUES 
                            ($valor_id_detalle_aud, $valor_id,$id_usuario_sis,'$nombre_usuario_sis','query-enbloque1 ','$query_valo_vfle',1,GETDATE()  );        
                             ");
                            $stmaudinsr -> execute();      
                            //return $valor_id;
                         
                         
                        
                  
                   }
                   //fin de recorrido
                 //segunda consulta recorrido  
                   
                   
                            //query anterior
                            $query2pos='  UPDATE PE_PEDIM SET PED_SPRT="'.$PED_SPRT.'" WHERE PED_CONT IN (SELECT PED_CONT FROM PE_DDESP WHERE MDE_CONT="'.$MDE_CONT.'")';
                   
                             $id_usuario_sis= $_SESSION["id"]  ;
                            $nombre_usuario_sis= $_SESSION["nombre"]   ;
                            $stmtaudr2 = Conexion::conectar()->prepare(" 	
                            SELECT max(id_auditoria)+1 as valor_id from auditoria
                            ");
                            $stmtaudr2 -> execute();
                            $stmtaudpre2= $stmtaudr2 -> fetch();
                            $valor_id2=$stmtaudpre2['valor_id'];
                            $stmaudinsr2 = Conexion::conectar()->prepare("
                            INSERT INTO auditoria
                            (id_auditoria,id_usuario,nombre_usuario,operacion_query,operacion_anterior,estado,fecha_registro)
                              VALUES 
                            ($valor_id2, $id_usuario_sis,'$nombre_usuario_sis','$query2pos','Query vasio la query se encuentra en la tabla log detalle',1,GETDATE()  );
                            ");
                            $stmaudinsr2 -> execute();  
                   
                   
                    
                 $consultas_tmt2 = ConexionSeven::conectarSeven()->prepare(" select PE_PEDIM.PED_SPRT as PED_SPRT,PE_DDESP.DDE_CONT as DDE_CONT from PE_PEDIM 
											  inner join PE_DDESP on PE_PEDIM.PED_CONT=PE_DDESP.PED_CONT
											  WHERE PE_DDESP.MDE_CONT=$MDE_CONT    ");
                 
                 
                 $consultas_tmt2 -> execute();
                 $stmtaudpre2= $consultas_tmt2 ->fetchAll();
                 for($i = 0; $i < count($stmtaudpre2); $i++){
                 $PED_SPRT=$stmtaudpre2[$i]['PED_SPRT'];
                 $DDE_CONT=$stmtaudpre2[$i]['DDE_CONT'];     
                 
                 $sqlquery2det2='UPDATE PE_PEDIM SET PED_SPRT="'.$PED_SPRT.'" WHERE PED_CONT IN (SELECT PED_CONT FROM PE_DDESP WHERE MDE_CONT="'.$MDE_CONT.'" AND DDE_CONT="'.$DDE_CONT.'")';
                 
                 
                       
                            $id_usuario_sis= $_SESSION["id"]  ;
                            $nombre_usuario_sis= $_SESSION["nombre"]   ;
                            $stmtaudr = Conexion::conectar()->prepare(" 	
                            SELECT max(id_detalle_auditoria)+1 as valor_id_detalle_aud from detalle_auditoria
                            ");
                            $stmtaudr -> execute();
                            $stmtaudpre= $stmtaudr -> fetch();
                            $valor_id_detalle_aud=$stmtaudpre['valor_id_detalle_aud'];
                            $stmaudinsr = Conexion::conectar()->prepare("
                            
                            INSERT INTO detalle_auditoria 
                            (id_detalle_auditoria,id_auditoria,id_usuario,nombre_usuario,operacion,operacion_anterioir,estado,fecha_operacion)
                            VALUES 
                            ($valor_id_detalle_aud, $valor_id2,$id_usuario_sis,'$nombre_usuario_sis','query-enbloque2 ','$sqlquery2det2',1,GETDATE()  );        
                             ");
                            $stmaudinsr -> execute();      
                            //return $valor_id;
                         
                         
                 
                 
                 }
                  
                 //fin de recorrido
                
                    
                                $stmt = ConexionSeven::conectarSeven()->prepare("     
                                                                         
                                                                  	 UPDATE PE_PEDIM SET PED_SPRT=$PED_SPRTF
                                                                        WHERE PED_CONT IN (SELECT PED_CONT FROM PE_DDESP WHERE MDE_CONT='$MDE_CONT'  )
                   
                     							 									 
                                                                        ");
                      
                        	$stmt2 = ConexionSeven::conectarSeven()->prepare("     
                                                                         
                                                                  	  UPDATE PE_DDESP 
                                                                          SET 
                                                                          DDE_VALO='$DDE_VALO',
                                                                          DDE_VFLE='$DDE_VFLE'
                                                                        WHERE MDE_CONT=$MDE_CONT  
                     							 									 
                                                                        ");
                      
                        
                        

			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

                                
                       $sql=" UPDATE PE_PEDIM SET PED_SPRT=$PED_SPRTF
                              WHERE PED_CONT IN (SELECT PED_CONT FROM PE_DDESP WHERE MDE_CONT='$MDE_CONT'  )";         
                                
                                
			if($stmt->execute()){
                            if($stmt2->execute())
                            {
                               //   return $sql;
                            return 1;
                            }
                            else {
                                return 12121;
                            }
			

		}else{

			return $sqlsrv;
		
		}

		 

		$stmt -> close();

		$stmt = null;

	}   
        
        
        
        static public function mdlMostrarGuiaIndividual($mde_cont_llave){
               
                                                                    
                    $cadena="";
                   $where="";
                   
                                                 
                   
			$stmt = ConexionSeven::conectarSeven()->prepare(" 
                                                                       SELECT top 1000   
					 		
                             
                                                                            

                                                                        PE_MDESP.PVD_CODI as  PK_PVD_CODI,
                                                                        PE_MDESP.DEP_CODD as PK_DEP_CODD,
                                                                        PE_MDESP.MDE_CONT as MDE_CONT,
                                                                        PE_MDESP.MDE_NGUI as NUMERO_GUIA,
                                                                            PE_MDESP.MDE_CONT as CONTADOR,
                                                                             PE_MDESP.MDE_PLAC as PLACA,
                                                                          PO_PVDOR.PVD_CODI as LLAVE_TRANSPORTISTA,
									  PE_MDESP.DEP_CODD as LLAVE_DETALLE_TRANSPORTISTA,
									 PO_DEPRO.DEP_NOMB as DETALLE_TRANSPORTISTA_NOMBRE,
                                                                              PO_PVDOR.PVD_CODA as CODIGO_TRANS,
                                                                             PO_PVDOR.PVR_NOCO as TRANSPORTISTA_NAME,
                                                                            PO_PVDOR.PVD_NOMB as NOMBRE_TRANSPORTIS,
                                                                             PE_MDESP.MDE_PESO as PESO,
                                                                             PE_MDESP.MDE_VALO as VALOR_DECLARADO,
                                                                             PE_MDESP.MDE_FLET as VALOR_FLETE,
                                                                             PE_MDESP.MDE_TFIJ as TARIFA_FIJA  FROM PE_MDESP 
                                                                           INNER JOIN PO_PVDOR ON PE_MDESP.PVD_CODI=PO_PVDOR.PVD_CODI and PO_PVDOR.EMP_CODI=PE_MDESP.EMP_CODI
							                   INNER JOIN PO_DEPRO ON PO_DEPRO.EMP_CODI = PO_PVDOR.EMP_CODI AND PO_DEPRO.PVD_CODI = PE_MDESP.PVD_CODI  AND PO_DEPRO.DEP_CODD =PE_MDESP.DEP_CODD
																		
																			WHERE
																		PE_MDESP.MDE_CONT =$mde_cont_llave
																		and 
																		PE_MDESP.EMP_CODI=631

                                                                        ");

			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		 

		$stmt -> close();

		$stmt = null;

	}
        
        
        
        
        
        
static public function mdlMostrarGuiasVariTable($pvd_coda, $mde_plac, $mde_ngui){

		 

			$stmt = ConexionSeven::conectarSeven()->prepare("  SELECT TOP 1000
                                                                            PE_MDESP.MDE_CONT as CONTADOR,
                                                                             PE_MDESP.MDE_PLAC as PLACA,
                                                                             PO_PVDOR.PVD_CODI as LLAVE_TRANSPORTISTA,
                                                                             PO_PVDOR.PVD_CODA as CODIGO_TRANS,
                                                                            PO_PVDOR.PVR_NOCO as TRANSPORTISTA_NAME,
                                                                            PO_PVDOR.PVD_NOMB as NOMBRE_TRANSPORTIS,
                                                                             PE_MDESP.MDE_PESO as PESO,
                                                                             PE_MDESP.MDE_VALO as VALOR_DECLARADO,
                                                                             PE_MDESP.MDE_FLET as VALOR_FLETE,
                                                                             PE_MDESP.MDE_TFIJ as TARIFA_FIJA,
                                                                              * FROM PE_MDESP 
                                                                              INNER JOIN PO_PVDOR ON PO_PVDOR.PVD_CODI=PO_PVDOR.PVD_CODI
                                                                            WHERE PE_MDESP.PVD_CODI=(SELECT PVD_CODI FROM PO_PVDOR WHERE PVD_CODA='860512330')

                                                                            ");

			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

		 

		$stmt -> close();

		$stmt = null;

	}
       
        static public function mdlMostrarDetalleGuias($tabla, $item, $valor, $orden){
              
            $item=1;
            
		if($item != null){

			$stmt = ConexionSeven::conectarSeven()->prepare("   
                                                                            SELECT 
                                                                            PE_DDESP.DDE_VALO AS VALOR_DECLARADO,
                                                                            PE_DDESP.DDE_VFLE AS VALOR_FLETE,
                                                                            PE_PEDIM.PED_SPRT AS SOBRE_PORTE 
                                                                            FROM PE_DDESP
                                                                            INNER JOIN PE_PEDIM on PE_DDESP.PED_CONT=PE_PEDIM.PED_CONT

                                                                            WHERE PE_DDESP.MDE_CONT=4875001

                                                                    

                                                                            ");

			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			 $stmt = ConexionSeven::conectarSeven()->prepare("   
                                                                            SELECT 
                                                                            PE_DDESP.DDE_VALO AS VALOR_DECLARADO,
                                                                            PE_DDESP.DDE_VFLE AS VALOR_FLETE,
                                                                            PE_PEDIM.PED_SPRT AS SOBRE_PORTE 
                                                                            FROM PE_DDESP
                                                                            INNER JOIN PE_PEDIM on PE_DDESP.PED_CONT=PE_PEDIM.PED_CONT

                                                                            WHERE PE_DDESP.MDE_CONT=4875001

                                                                    

                                                                            ");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}
        
        
        
        
        
        
        
        
        
	/*=============================================
	REGISTRO DE PRODUCTO
	=============================================*/
	static public function mdlIngresarProducto($tabla, $datos){
 /*
		$stmt = Conexion::conectar()->prepare("
                         INSERT INTO 
                                 $tabla
                                 (
                                 imagen,
                                 fecha,
                                 nombre,
                                 email,
                                 extencion,
                                 celular,
                                 fecha_nacimiento,
                                 cargo,
                                 `area`,
                                 ciudad
                                 ) 
                                 VALUES 
                                 ( 
                                 :imagen,
                                 CURRENT_TIMESTAMP,
                                 ':nombre',
                                 ':email',
                                 ':extencion',
                                 ':celular',
                                 ':fecha_nacimiento',
                                 ':cargo',
                                 ':area',
                                 ':ciudad'); 
                        ");
                 */
            
            $imagen=$datos["imagen"];
            $nombre=$datos["nombre"];
            $email=$datos["email"];
            $extencion=$datos["extencion"];
            $celular=$datos["celular"];
            $fecha_nacimiento=$datos["fecha_nacimiento"];
            $cargo=$datos["cargo"];
            $departamento=$datos["departamento"];
            $ciudad=$datos["ciudad"];
            
      
            
            
		 $stmt = Conexion::conectar()->prepare("
                          INSERT INTO 
                         productos
                         (
                         imagen,
                         fecha, 
                         nombre,
                         email,
                         extencion,
                         celular,
                         fecha_nacimiento,
                         cargo,
                         departamento,
                         ciudad
                         ) 
                         VALUES 
                         ( 
                         '$imagen',
                         CURRENT_TIMESTAMP,
                         '$nombre',
                         '$email',
                         '$extencion',
                         '$celular',
                         '$fecha_nacimiento',
                         '$cargo',
                         '$departamento',
                         '$ciudad'); 
                        ");
                        
	 
		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	EDITAR PRODUCTO
	=============================================*/
	static public function mdlEditarProducto($tabla, $datos){

		//$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET id_categoria = :id_categoria, descripcion = :descripcion, imagen = :imagen, stock = :stock, precio_compra = :precio_compra, precio_venta = :precio_venta WHERE codigo = :codigo");

            $imagen=$datos["imagen"];
            $id=$datos["codico_persona_pk"];
            $nombre=$datos["nombre"];
            $email=$datos["email"];
            $extencion=$datos["extencion"];
            $celular=$datos["celular"];
            $fecha_nacimiento=$datos["fecha_nacimiento"];
            $cargo=$datos["cargo"];
            $departamento=$datos["departamento"];
            $ciudad=$datos["ciudad"];
             
        
			if (empty($productos[$i]["imagen"])) 
			{
		      $stmt = Conexion::conectar()->prepare("    
                              UPDATE productos SET 
                        nombre='$nombre',
                        email='$email',
                        extencion='$extencion',
                        celular='$celular',
                        fecha_nacimiento='$fecha_nacimiento',
                        cargo='$cargo',
                        departamento='$departamento',
                        ciudad='$ciudad' 
                        WHERE `id`='$id'  ");
			}
			else{
		       $stmt = Conexion::conectar()->prepare("   
                               UPDATE 
                        productos SET imagen='$imagen',
                        nombre='$nombre',
                        email='$email',
                        extencion='$extencion',
                        celular='$celular',
                        fecha_nacimiento='$fecha_nacimiento',
                        cargo='$cargo',
                        departamento='$departamento',
                        ciudad='$ciudad' 
                        WHERE `id`='$id'  ");
			}
 
/*
		$stmt->bindParam(":id_categoria", $datos["id_categoria"], PDO::PARAM_INT);
		$stmt->bindParam(":codigo", 145, PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
		$stmt->bindParam(":stock", $datos["stock"], PDO::PARAM_STR);
		$stmt->bindParam(":precio_compra", $datos["precio_compra"], PDO::PARAM_STR);
		$stmt->bindParam(":precio_venta", $datos["precio_venta"], PDO::PARAM_STR);
  */              
                
                
                
                
		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	BORRAR PRODUCTO
	=============================================*/

	static public function mdlEliminarProducto($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	ACTUALIZAR PRODUCTO
	=============================================*/

	static public function mdlActualizarProducto($tabla, $item1, $valor1, $valor){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE id = :id");

		$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		$stmt -> bindParam(":id", $valor, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	MOSTRAR SUMA VENTAS
	=============================================*/	

	static public function mdlMostrarSumaVentas($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT SUM(ventas) as total FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;
	}


}