<?php

require_once "../../Conexion/conexionseven.php";
require_once "../../Conexion/conexion.php";
//require_once "conexion.php";

class ModeloAgent{

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
        
           static public function mdlRegistrarMenuBasico($data){
                
              session_start();
              
      
                  
                 //  $id_config_menu=$data['id_config_menu'];
                   //$hor_cont=18406;
                 //  $id_perfil=$data['id_perfil'];
                  // $hor_esta="A";
                   $fecha = date("Y-m-d");  
                   
                   
                   
                   
            
                            $stmtaud = Conexion::conectar()->prepare(" 	
                            SELECT max(id_menu_perfil)+1 as valor_id from menu_perfil_base
                            ");

                            $stmtaud -> execute();

                            $stmtaudpre= $stmtaud -> fetch();
                 
                            $valor_id=$stmtaudpre['valor_id'];
                                    
                   
                            $nombre_cmenu=$data['nombre_cmenu'];
                            $detalle_funcion=$data['detalle_funcion'];
                            $padre_config_menu=$data['padre_config_menu'];
                            
                            $stmtconsultvalanteriores = Conexion::conectar()->prepare("     
                                                                                
                                                                             insert into config_menu_base 
                                                                              (id_config_menu,nombre,descripcion_fun,id_padre_config,orden,estado,fecha_registro)
                                                                              values
                                                                              ($valor_id,'$nombre_cmenu','$detalle_funcion',$padre_config_menu,3,1,'$fecha') 
                                         
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
        
        
        
       static public function mdlMostrarConsultasMenuBasico(){
                     
 
                                           
                       
                   $cadena="
                       
               
                          select 
                          config_menu_base.id_config_menu,
                          config_menu_base.nombre,
                          config_menu_base.descripcion_fun,
                          config_menu_base.id_padre_config,
                          config_padre.nombre as nombre_menu_padre


                          from config_menu_base
                          left join config_menu_base as config_padre on config_menu_base.id_padre_config=config_padre.id_config_menu
                    ";
             
			$stmt = Conexion::conectar()->prepare($cadena); 
                        
                    
                        	  

			$stmt -> execute();

			return $stmt -> fetchAll();
		 

		$stmt -> close();

		$stmt = null;

	}
        
    
        
          static public function mdlTrunqInsert(){
                     
  $stmtaud = Conexion::conectar()->prepare(" 	
                            truncate table errores_consulta_agenda
                            ");

                            $stmtaud -> execute();

                           // $stmtaudpre= $stmtaud -> fetch();
                 
                           // $valor_id=$stmtaudpre['valor_id'];
                           // $usuario='cusuar';
                           // $npestania='3';
                            $stmaudins = Conexion::conectar()->prepare("
                           
                             insert into errores_consulta_agenda 
                            (id_errores_consulta_agenda,usuario,tipo,pestana)
                            values
                            (1,'cusuar','error','3')
     
                               
                             ");
                           
                            
        
                            
       	if($stmaudins -> execute()){

                            
                      
                              
                            
                            
			return 1;

		}else {

			return $sql;
		
		}                     
                            
                       
                  

		$stmt -> close();

		$stmt = null;

	}
             
            static public function mdlMostrarConsolidado($fecha,$user,$contador){
                      
                                 switch ($contador) {
                            case 1 : //A
                                   $cadena="
                                               select errores_consulta_agenda.usuario as usuario,count(*) as cantidad,errores_consulta_agenda.nombre_usuario as nombre_usuario from errores_consulta_agenda
                            where id_errores_consulta_agenda <> 1
                            group by  errores_consulta_agenda.usuario,errores_consulta_agenda.nombre_usuario 
                           -- order by cantidad desc
                                            ";

                                      $stmt = Conexion::conectar()->prepare($cadena); 
                                      $stmt -> execute();

                                break;
                            case 2 : //AB
                               
                                     $cadena="
                                     
                                     select errores_consulta_agenda.usuario as usuario,count(*) as cantidad,errores_consulta_agenda.nombre_usuario as nombre_usuario from errores_consulta_agenda
                            where id_errores_consulta_agenda <> 1
                          and
			errores_consulta_agenda.usuario like '%$user%'
                            group by  errores_consulta_agenda.usuario,errores_consulta_agenda.nombre_usuario 
                         
                                
                                
                                
                                
                                        ";

                                  $stmt = Conexion::conectar()->prepare($cadena); 
                                  $stmt -> execute();

                                break;
                        
                        
                        }        
                            
                            
               return $stmt-> fetchall();
                 
                            
                 
		$stmt -> close();

		$stmt = null;

	}
        
        
          static public function mdlRegistroErroresAgenda($usuario,$npestania,$usr_nom){
                     
  $stmtaud = Conexion::conectar()->prepare(" 	
                            SELECT max(id_errores_consulta_agenda)+1 as valor_id from errores_consulta_agenda
                            ");

                            $stmtaud -> execute();

                            $stmtaudpre= $stmtaud -> fetch();
                 
                            $valor_id=$stmtaudpre['valor_id'];
                           // $usuario='cusuar';
                           // $npestania='3';
                            $stmaudins = Conexion::conectar()->prepare("
                           
                            insert into errores_consulta_agenda 
                            (id_errores_consulta_agenda,usuario,tipo,pestana,nombre_usuario)
                            values
                            ($valor_id,'$usuario','error','$npestania','$usr_nom')        
                               
                             ");
                           
                            
        
                            
       	if($stmaudins -> execute()){

                            
                      
                              
                            
                            
			return 1;

		}else {

			return $sql;
		
		}                     
                            
                       
                  

		$stmt -> close();

		$stmt = null;

	}
             
        
        
 static public function mdlMostrarConsultasConsulTiempo($fecha,$user,$contador){
                     
 //falta case
                // $fecha  ='20201127';                        
                         
                     switch ($contador) {
                            case 1 : //A
                                   $cadena="
                                             SELECT USU_EJEC AS USUARIO,GN_USUAR.USU_NOMB as USU_NOMB,
                        CONVERT (numeric ,  SUM(  (DATEPART(HOUR,AGE_TIEM)*60) + (DATEPART(MINUTE,AGE_TIEM)) )   ) / 60 AS HORAS_DIA
                        FROM CR_AGEND
                        inner join GN_USUAR on CR_AGEND.USU_EJEC=GN_USUAR.USU_CODI
                        WHERE --USU_EJEC='HFRANCO'
                        /*AND*/ AGE_NINI='$fecha'
                        GROUP BY USU_EJEC,GN_USUAR.USU_NOMB
                                            ";

                                      $stmt = ConexionSeven::conectarSeven()->prepare($cadena); 
                                      $stmt -> execute();

                                break;
                            case 2 : //AB
                               
                                     $cadena="
                                      SELECT USU_EJEC AS USUARIO,GN_USUAR.USU_NOMB as USU_NOMB,
                                        CONVERT (numeric ,  SUM(  (DATEPART(HOUR,AGE_TIEM)*60) + (DATEPART(MINUTE,AGE_TIEM)) )   ) / 60 AS HORAS_DIA
                                        FROM CR_AGEND
                                        inner join GN_USUAR on CR_AGEND.USU_EJEC=GN_USUAR.USU_CODI
                                        WHERE
						 USU_EJEC='$user'
                                       AND  AGE_NINI='$fecha'
                                            GROUP BY USU_EJEC,GN_USUAR.USU_NOMB

                                        ";

                                  $stmt = ConexionSeven::conectarSeven()->prepare($cadena); 
                                  $stmt -> execute();

                                break;
                        
                        
                        }        
                        
                        
                        
                        
                        
                        
                        
		return $stmt -> fetchAll();
		 

		$stmt -> close();

		$stmt = null;

                
                
                
                
                
                
                
                
                
	}
        
        
        
         static public function mdlMostrarConsultasConsulTerceros($fecha,$user,$contador){
                     
 
          
                        switch ($contador) {
                            case 1 : //A
                                   $cadena="
                                        select CR_AGEND.USU_EJEC,GN_USUAR.USU_NOMB,CR_AGEND.ter_codi,CR_AGEND.age_cont,GN_TERCE.TER_NOCO from CR_AGEND
                                        inner join GN_USUAR on CR_AGEND.USU_EJEC=GN_USUAR.USU_CODI
                                        inner join GN_TERCE on CR_AGEND.ter_codi=GN_TERCE.TER_CODI and CR_AGEND.EMP_CODI =GN_TERCE.EMP_CODI       
                                        where
                                        CR_AGEND.AGE_NINI='$fecha'
                                            ";

                                      $stmt = ConexionSeven::conectarSeven()->prepare($cadena); 
                                      $stmt -> execute();

                                break;
                            case 2 : //AB
                               
                                     $cadena="
                                    select CR_AGEND.USU_EJEC,GN_USUAR.USU_NOMB,CR_AGEND.ter_codi,CR_AGEND.age_cont,GN_TERCE.TER_NOCO from CR_AGEND
                                    inner join GN_USUAR on CR_AGEND.USU_EJEC=GN_USUAR.USU_CODI
                                    inner join GN_TERCE on CR_AGEND.ter_codi=GN_TERCE.TER_CODI and CR_AGEND.EMP_CODI =GN_TERCE.EMP_CODI       
                                    where
                                    CR_AGEND.AGE_NINI='$fecha'
                                    and
				    CR_AGEND.USU_EJEC like '%$user%'
                                        ";

                                  $stmt = ConexionSeven::conectarSeven()->prepare($cadena); 
                                  $stmt -> execute();

                                break;
                        
                        
                        }
                  
                        		return $stmt -> fetchAll();
		 

		$stmt -> close();

		$stmt = null;
                
                
                        
                         
                

	}
        
        
              static public function mdlMostrarConsultasConsulActiEtapa($fecha,$contador,$user){
                     
 
         
                             switch ($contador) {
                            case 1 : //A
                                   $cadena="
                                          select CR_AGEND.USU_EJEC,GN_USUAR.USU_NOMB,CR_AGEND.ter_codi,CR_AGEND.age_cont,CR_AGEND.ACT_CODI,CR_ACTIV.ACT_NOMB,CR_AGEND.ETA_CODI,CR_ETAPA.ETA_NOMB from CR_AGEND
                                            inner join GN_USUAR on CR_AGEND.USU_EJEC=GN_USUAR.USU_CODI
                   
                                             inner join CR_ACTIV ON CR_AGEND.ACT_CODI=CR_ACTIV.ACT_CODI
                                             INNER JOIN CR_ETAPA ON CR_AGEND.ETA_CODI=CR_ETAPA.ETA_CODI
                                            where
                                            CR_AGEND.AGE_NINI='$fecha'
                                            ";

                                      $stmt = ConexionSeven::conectarSeven()->prepare($cadena); 
                                      $stmt -> execute();

                                break;
                            case 2 : //AB
                               
                                     $cadena="
                                
                                
                                  select CR_AGEND.USU_EJEC,GN_USUAR.USU_NOMB,CR_AGEND.ter_codi,CR_AGEND.age_cont,CR_AGEND.ACT_CODI,CR_ACTIV.ACT_NOMB,CR_AGEND.ETA_CODI,CR_ETAPA.ETA_NOMB from CR_AGEND
                                  inner join GN_USUAR on CR_AGEND.USU_EJEC=GN_USUAR.USU_CODI
                   
				  inner join CR_ACTIV ON CR_AGEND.ACT_CODI=CR_ACTIV.ACT_CODI
				  INNER JOIN CR_ETAPA ON CR_AGEND.ETA_CODI=CR_ETAPA.ETA_CODI
                                  where
                                    CR_AGEND.AGE_NINI='$fecha'
				  and
				 CR_AGEND.USU_EJEC like'%$user%'
                                
                                 
                                        ";

                                  $stmt = ConexionSeven::conectarSeven()->prepare($cadena); 
                                  $stmt -> execute();

                                break;
                        
                        
                        }
                  
                        
                        
                        
                        
                        

			return $stmt -> fetchAll();
		 

		$stmt -> close();

		$stmt = null;

	}
       
        
        
                  static public function mdlMostrarConsultasConsulConsolidado(){
                     
 
                  $fecha  ='20201127';                        
                       
                   $cadena="
                      
                        
                  
                            select errores_consulta_agenda.usuario as usuario,count(*) as cantidad,errores_consulta_agenda.nombre_usuario as nombre_usuariofrom errores_consulta_agenda
                            where id_errores_consulta_agenda <> 1
                            group by  errores_consulta_agenda.usuario,errores_consulta_agenda.nombre_usuario 

                        ";
             
			$stmt = Conexion::conectar()->prepare($cadena); 
                        
                    
                        	  

			$stmt -> execute();

			return $stmt -> fetchAll();
		 

		$stmt -> close();

		$stmt = null;

	}
       
        
        
        
        
        
        
      static public function mdlMostrarValidaActividad($id_actividad){
                     
 
                  $fecha  ='20201127';                        
                  //  $id_actividad=1006;   
                   $cadena="
                      
                        
                   select top 1 act_codi from CR_RACET
                    where
                    ACT_CODI=$id_actividad

                        ";
             
			$stmt = ConexionSeven::conectarSeven()->prepare($cadena); 
                        
                    
                        	  

			$stmt -> execute();

                         $stmtaudpre= $stmt -> fetch();
                 
                            $act_codi=$stmtaudpre['act_codi'];
                            
                            if($id_actividad==$act_codi){
                                return 1; 
                            }
                            else {
                                return 0;
                            }
                            
			//return $stmt -> fetchAll();
		 

		$stmt -> close();

		$stmt = null;

	}
      static public function mdlMostrarValidaActividadEtapa($eta_codi,$ACT_CODI){
                     
 
                  $fecha  ='20201127';                        
                  //  $id_actividad=1006; 
                 // $eta_codi=10;
                  //$ACT_CODI=1000;
                  /* $cadena="
                      
                   select  * from CR_RACET
                        where
                        eta_codi=$eta_codi
                        and
                        ACT_CODI=$ACT_CODI

                     ";*/
                   $cadena="
                      
               select  * from CR_RACET
                    where
                    eta_codi=$eta_codi
                    and
                    ACT_CODI=$ACT_CODI

                     ";
                   
             
			$stmt = ConexionSeven::conectarSeven()->prepare($cadena); 
                        
                    
                        	  

			$stmt -> execute();

                         $stmtaudpre= $stmt -> fetch();
                 
                            $eta_codiconsul=$stmtaudpre['ETA_CODI'];
                            
                            if($eta_codi==$eta_codiconsul){
                                return 1; 
                            }
                            else {
                                return 0;
                            }
                            
			//return $stmt -> fetchAll();
		 

		$stmt -> close();

		$stmt = null;

	}
        
        
        
 

}