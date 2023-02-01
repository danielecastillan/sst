<?php

require_once "../../Conexion/conexionseven.php";
require_once "../../Conexion/conexion.php";
//require_once "conexion.php";

class ModeloCiiu{

	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

    
    
        static public function mdlMostrarConsultasSucursal($cod_name_suc){
                     
 
                                           
                       
                   $cadena="
                       
            	    SELECT ARB_CONT,ARB_CODI,ARB_NOMB FROM GN_ARBOL
        WHERE (EMP_CODI=631 AND ARB_MOVI='S' AND TAR_CODI='2' and ARB_NOMB like'%$cod_name_suc%')
		or (EMP_CODI=631 AND ARB_MOVI='S' AND TAR_CODI='2' and ARB_CODI like'%$cod_name_suc%')
            
        	 

                    ";
             
			$stmt = ConexionSeven::conectarSeven()->prepare($cadena); 
                        
                    
                        	  

			$stmt -> execute();

			return $stmt -> fetchAll();
		 

		$stmt -> close();

		$stmt = null;

	}
        
    
      static public function mdlMostrarConsultasCiiu($cod_ciiu){
                     
 
                                           
                       
                   $cadena="
                       
              
					 select codigo_ciiu,nombre_codigo from LH_CCIIU 
					 where
				 	 codigo_ciiu like '%$cod_ciiu%'
			 	 or
					 nombre_codigo like '%$cod_ciiu%'
                 
                    ";
             
			$stmt = ConexionSeven::conectarSeven()->prepare($cadena); 
                        
                    
                        	  

			$stmt -> execute();

			return $stmt -> fetchAll();
		 

		$stmt -> close();

		$stmt = null;

	}
        
        
        static public function mdlMostrarCiiuCompuestoTConsul(){
                     
 
                                           
                       
                   $cadena="
                       
              
				select LH_RCIIU.COD_RCIIU,
                                        LH_RCIIU.ARB_CONT,
                                        LH_RCIIU.ARB_CODI,
                                         GN_ARBOL.ARB_NOMB,
                                        LH_RCIIU.COD_CIIU,
                                        LH_CCIIU.nombre_codigo,
                                        LH_RCIIU.TARIFA,
                                        LH_RCIIU.CODIGO_ALCALDIA,
                                        LH_RCIIU.DTS_CODI,
                                        TS_DSTES.DST_NOMB
                                         from LH_RCIIU
                                        inner join GN_ARBOL on LH_RCIIU.ARB_CODI=GN_ARBOL.ARB_CODI
                                        inner join LH_CCIIU on LH_RCIIU.COD_CIIU=LH_CCIIU.codigo_ciiu
                                        inner join TS_DSTES on LH_RCIIU.DTS_CODI=TS_DSTES.DST_CODI
                                        WHERE GN_ARBOL.EMP_CODI=631
                                        AND GN_ARBOL.ARB_MOVI='S'
                                        AND GN_ARBOL.TAR_CODI='2'
                 
                    ";
             
			$stmt = ConexionSeven::conectarSeven()->prepare($cadena); 
                        
                    
                        	  

			$stmt -> execute();

			return $stmt -> fetchAll();
		 

		$stmt -> close();

		$stmt = null;

	}
    
       static public function mdlMostrarConsultasTesoreria($var_tesoreria){
                     
 
                                           
                       
                   $cadena="
                       
                SELECT DST_CODI,DST_NOMB FROM TS_DSTES
                WHERE  EMP_CODI=631 AND DST_CLAS='L' AND DST_ACTI='A'
                and DST_NOMB like'%$var_tesoreria%'
                    ";
             
			$stmt = ConexionSeven::conectarSeven()->prepare($cadena); 
                        
                    
                        	  

			$stmt -> execute();

			return $stmt -> fetchAll();
		 

		$stmt -> close();

		$stmt = null;

	}
           
      static public function mdlRegistrarconfigciiu($data){
                
              session_start();
              
      
                  
                    
                  // $hor_esta="A";
                   $fecha = date("Y-m-d");  
                   
                   $ARB_CONT=$data['ARB_CONT'];
                   $ARB_CODI=$data['ARB_CODI'];
                   $COD_CIIU=$data['COD_CIIU'];
                   $TARIFA=$data['TARIFA'];
                   $CODIGO_ALCALDIA=$data['CODIGO_ALCALDIA'];
                   $DTS_CODI=$data['DTS_CODI'];
                   
                   
            
                            $stmtaud = ConexionSeven::conectarSeven()->prepare(" 	
                            SELECT max(COD_RCIIU)+1 as valor_id from LH_RCIIU
                            ");

                            $stmtaud -> execute();

                            $stmtaudpre= $stmtaud -> fetch();
                 
                            $valor_id=$stmtaudpre['valor_id'];
                                    
                            
                            
                            
                            
                                                 
                                                 
                                                 $stmtconsultvalanteriores = ConexionSeven::conectarSeven()->prepare("     
                                                                         
                                                                  	  insert into LH_RCIIU 
                                                                            (COD_RCIIU,ARB_CONT,ARB_CODI,COD_CIIU,TARIFA,CODIGO_ALCALDIA,DTS_CODI) 
                                                                     values ($valor_id,$ARB_CONT,$ARB_CODI,$COD_CIIU,'$TARIFA','$CODIGO_ALCALDIA',$DTS_CODI)

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
     static public function mdlEditarconfigciiu($data){
                
              session_start();
              
      
                  
                    
                  // $hor_esta="A";
                   $fecha = date("Y-m-d");  
                   
                   $COD_RCIIU=$data['COD_RCIIU'];
                   $ARB_CONT=$data['ARB_CONT'];
                   $ARB_CODI=$data['ARB_CODI'];
                   $COD_CIIU=$data['COD_CIIU'];
                   $TARIFA=$data['TARIFA'];
                   $CODIGO_ALCALDIA=$data['CODIGO_ALCALDIA'];
                   $DTS_CODI=$data['DTS_CODI'];
                   
                   
            
                            $stmtaud = ConexionSeven::conectarSeven()->prepare(" 	
                            SELECT max(COD_RCIIU)+1 as valor_id from LH_RCIIU
                            ");

                            $stmtaud -> execute();

                            $stmtaudpre= $stmtaud -> fetch();
                 
               
                                    
                            
                            
                            
                            
                                                 
                                                 
                                                 $stmtconsultvalanteriores = ConexionSeven::conectarSeven()->prepare("     
                                                                         
                                                         
                                                         	update LH_RCIIU set ARB_CONT='$ARB_CONT',ARB_CODI='$ARB_CODI',COD_CIIU='$COD_CIIU',TARIFA='$TARIFA',CODIGO_ALCALDIA='$CODIGO_ALCALDIA',DTS_CODI=$DTS_CODI
                                                                    where
                                                                    COD_RCIIU=$COD_RCIIU
                                                                  	   
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
     
                 static public function mdlEliminarCiiu($data){
                
              session_start();
              
      
                  
                   $COD_RCIIU=$data['COD_RCIIU'];
                
                    
                                  
                                                                        $stmtconsultvalanteriores = ConexionSeven::conectarSeven()->prepare("     
                                                                         
                                                                  	DELETE FROM LH_RCIIU
                                                                        WHERE COD_RCIIU = $COD_RCIIU
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