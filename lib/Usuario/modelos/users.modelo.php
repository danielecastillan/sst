<?php

require_once "../../Conexion/conexionseven.php";
require_once "../../Conexion/conexion.php";
//require_once "conexion.php";

class ModeloUsers{

	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

        
 static public function mdlMostrarUsers(){
                     
 
                                           
                       
                   $cadena="
                   select usuarios.id,usuarios.nombre,usuarios.usuario,usuarios.passwor,usuarios.perfil,usuarios.foto,usuarios.estado,usuarios.ultimo_login,usuarios.fecha,usuarios.id_perfil,perfiles_base.nombre_perfil from  usuarios 
                         inner join perfiles_base on usuarios.id_perfil=perfiles_base.id_perfil
                       where usuarios.estado=1
                        ";
             
			$stmt = Conexion::conectar()->prepare($cadena); 
                        
                    
                        	  

			$stmt -> execute();

			return $stmt -> fetchAll();
		 

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
                   
                   
                   
                   
            
                            $stmtaud = Conexion::conectar()->prepare(" 	
                            SELECT max(id)+1 as valor_id from usuarios
                            ");

                            $stmtaud -> execute();

                            $stmtaudpre= $stmtaud -> fetch();
                 
                            $valor_id=$stmtaudpre['valor_id'];
                                    
                            $nombre=$data['nombre'];
                            $usuario=$data['usuario'];
                            $passwor=$data['passwor'];
                            $id_perfil=$data['id_perfil'];
                           
                             
                            
                            $stmtconsultvalanteriores = Conexion::conectar()->prepare("     
                                                                                 insert into usuarios (id,nombre,usuario,passwor,perfil,estado,fecha,id_perfil) values
                                                                                ($valor_id,'$nombre','$usuario','$passwor',3,1,'$fecha',$id_perfil)
                                    
                                                                                     ");
                                                                   //   $stmtconsultvalanteriores -> execute();

                                                          $notas=" insert into usuarios (id,nombre,usuario,passwor,perfil,estado,fecha,id_perfil) values
                                                                                ($valor_id,'$nombre','$usuario','$passwor',3,1,$fecha',$id_perfil)
                                    "; 
                                                 
                      
                        
                        
                        
                        
			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			if($stmtconsultvalanteriores->execute()){

                            
                      
                       
                            
                            
                            
			return 1;

		}else{

			return $notas;
		
		}

		 

		$stmt -> close();

		$stmt = null;

	}    
         
         
 
         static public function mdlEliminarRUsuario($data){
                
              session_start();
              
      
                  
                   $id_usuario=$data['id_usuario'];
                
                   
                      
                              
                      
                                                                        $stmtconsultvalanteriores = Conexion::conectar()->prepare("     
                                                                         
                                                                  	 DELETE FROM usuarios
                                                                        WHERE id  = $id_usuario
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
         
        
 
}       
     