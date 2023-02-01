<?php

require_once "../../Conexion/conexionseven.php";
require_once "../../Conexion/conexion.php";
//require_once "conexion.php";

class ModeloGuias{

	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

	static public function mdlMostrarGuias($tabla, $item, $valor, $orden){

		if($item != null){

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

			return $stmt -> fetch();

		}else{

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
			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}
static public function mdlMostrarGuiasVari($pvd_coda, $mde_plac, $mde_ngui, $cont_case){
                        /*                     
                        $pvd_coda='860512330';
                        $mde_plac='TTW065'; 
                        $mde_ngui='26';                          
                                           
                       */
                       // $mde_ngui=null;
                                                                    
                    $cadena="";
                   $where="";
                   
                   /*
                   if(($pvd_coda != null || $pvd_coda != " ") && ($mde_plac==null || $mde_plac ==" ") && ($mde_ngui==null || $mde_ngui==" ")){
                        $cadena="  WHERE PE_MDESP.PVD_CODI=(SELECT PVD_CODI FROM PO_PVDOR WHERE PVD_CODA='$pvd_coda') ";

                   }
                   
                   else if(($pvd_coda != null || $pvd_coda != " ")&&($mde_plac != null || $mde_plac != " ") &&($mde_ngui==null || $mde_ngui==" ")){
                         $cadena="  WHERE PE_MDESP.PVD_CODI=(SELECT PVD_CODI FROM PO_PVDOR WHERE PVD_CODA='$pvd_coda')
                                AND PE_MDESP.MDE_PLAC='$mde_plac'
                              ";
                   }
                   
                   else if(($pvd_coda != null || $pvd_coda != " ")&&($mde_plac != null || $mde_plac != " ")&&($mde_ngui != null || $mde_ngui != " ")){
                          $cadena="  WHERE PE_MDESP.PVD_CODI=(SELECT PVD_CODI FROM PO_PVDOR WHERE PVD_CODA='$pvd_coda')
                                                                        AND PE_MDESP.MDE_PLAC='$mde_plac'
                                                                        AND PE_MDESP.MDE_NGUI=$mde_ngui";  
                   }
                   
                   else if(($pvd_coda != null || $pvd_coda != " ")&&($mde_ngui != null || $mde_ngui != " ")&&($mde_plac == null || $mde_plac == " ")){
                       $cadena="  WHERE PE_MDESP.PVD_CODI=(SELECT PVD_CODI FROM PO_PVDOR WHERE PVD_CODA='$pvd_coda')
                                                                        AND PE_MDESP.MDE_NGUI=$mde_ngui";
                   }
                   
                    
                   else if(($mde_plac != null || $mde_plac != " ")){
                        $cadena="  WHERE                                PE_MDESP.MDE_PLAC='$mde_plac'
                                                                         "; 
                   }
                   
                   else if(($mde_plac != null || $mde_plac != " ")&&($mde_ngui != null || $mde_ngui != " ")){
                                                            $cadena="  WHERE                                
                                                                        PE_MDESP.MDE_PLAC='$mde_plac'
                                                                        AND PE_MDESP.MDE_NGUI=$mde_ngui"; 
                   }
                   
                   else if($mde_ngui != null || $mde_ngui != " "){
                                                               $cadena="  WHERE                              
                                                               PE_MDESP.MDE_NGUI=$mde_ngui"; 
                                                           }    
                   
                    */
                                                           
                     // $resultado = 0;
                            switch ($cont_case) {
                            case 1 : //metros
                                $cadena="  WHERE PE_MDESP.PVD_CODI=(SELECT PVD_CODI FROM PO_PVDOR WHERE PVD_CODA='$pvd_coda') ";

                                break;
                            case 2 : //fanegadas
                                $cadena="  WHERE PE_MDESP.PVD_CODI=(SELECT PVD_CODI FROM PO_PVDOR WHERE PVD_CODA='$pvd_coda')
                                AND PE_MDESP.MDE_PLAC='$mde_plac' ";
                                break;
                            case 3 : //hectareas
                                $cadena="  WHERE PE_MDESP.PVD_CODI=(SELECT PVD_CODI FROM PO_PVDOR WHERE PVD_CODA='$pvd_coda')
                                                                        AND PE_MDESP.MDE_PLAC='$mde_plac'
                                                                        AND PE_MDESP.MDE_NGUI=$mde_ngui"; 
                                
                                break;
                            case 4 : //Acres
                                $cadena="  WHERE PE_MDESP.PVD_CODI=(SELECT PVD_CODI FROM PO_PVDOR WHERE PVD_CODA='$pvd_coda')
                                                                        AND PE_MDESP.MDE_NGUI=$mde_ngui";
                                break;
                            case 5 : //Kilometros
                                 $cadena="  WHERE PE_MDESP.MDE_PLAC='$mde_plac' "; 
                                break;
                            case 6 : //Kilometros
                                $cadena="  WHERE  PE_MDESP.MDE_PLAC='$mde_plac'
                                             AND PE_MDESP.MDE_NGUI=$mde_ngui"; 
                                break;
                            case 7 : //Kilometros
                                $cadena="  WHERE PE_MDESP.MDE_NGUI=$mde_ngui"; 
                                break;
                            
                            
                        }
                                                         
                                                           
                                                           
                                                           
                   /*
                   if(($pvd_coda != null || $pvd_coda != " ") ){
                        $cadena="  WHERE PE_MDESP.PVD_CODI=(SELECT PVD_CODI FROM PO_PVDOR WHERE PVD_CODA='$pvd_coda') ";

                   }
                   else if(($pvd_coda != null || $pvd_coda != " ")&&($mde_plac != null || $mde_plac != " ")){
                         $cadena="  WHERE PE_MDESP.PVD_CODI=(SELECT PVD_CODI FROM PO_PVDOR WHERE PVD_CODA='$pvd_coda')
                                AND PE_MDESP.MDE_PLAC='$mde_plac'
                              ";
                   }
                   else if(($pvd_coda != null || $pvd_coda != " ")&&($mde_plac != null || $mde_plac != " ")&&($mde_ngui != null || $mde_ngui != " ")){
                          $cadena="  WHERE PE_MDESP.PVD_CODI=(SELECT PVD_CODI FROM PO_PVDOR WHERE PVD_CODA='$pvd_coda')
                                                                        AND PE_MDESP.MDE_PLAC='$mde_plac'
                                                                        AND PE_MDESP.MDE_NGUI=$mde_ngui";  
                   }
                   else if(($pvd_coda != null || $pvd_coda != " ")&&($mde_ngui != null || $mde_ngui != " ")){
                       $cadena="  WHERE PE_MDESP.PVD_CODI=(SELECT PVD_CODI FROM PO_PVDOR WHERE PVD_CODA='$pvd_coda')
                                                                        AND PE_MDESP.MDE_NGUI=$mde_ngui";
                   }
                   else if(($mde_plac != null || $mde_plac != " ")){
                        $cadena="  WHERE                                PE_MDESP.MDE_PLAC='$mde_plac'
                                                                         "; 
                   }
                   else if(($mde_plac != null || $mde_plac != " ")&&($mde_ngui != null || $mde_ngui != " ")){
                                                            $cadena="  WHERE                                
                                                                        PE_MDESP.MDE_PLAC='$mde_plac'
                                                                        AND PE_MDESP.MDE_NGUI=$mde_ngui"; 
                   }
                   else if($mde_ngui != null || $mde_ngui != " "){
                                                               $cadena="  WHERE                              
                                                               PE_MDESP.MDE_NGUI=$mde_ngui"; 
                                                           }    
                   */    
                
                                                           
                                                          /* 
                                                           if(($pvd_coda != null || $pvd_coda != " ") && ($mde_plac != null || $mde_plac != " ") && ($mde_ngui != null || $mde_ngui != " "))
                   {
                     

                       if($mde_plac != null || $mde_plac != " " ){
                      $cadena="  WHERE PE_MDESP.PVD_CODI=(SELECT PVD_CODI FROM PO_PVDOR WHERE PVD_CODA='$pvd_coda')
                                AND PE_MDESP.MDE_PLAC='$mde_plac'
                              ";
                         if($mde_ngui != null || $mde_ngui != " " ){
                      $cadena="  WHERE PE_MDESP.PVD_CODI=(SELECT PVD_CODI FROM PO_PVDOR WHERE PVD_CODA='$pvd_coda')
                                                                        AND PE_MDESP.MDE_PLAC='$mde_plac'
                                                                        AND PE_MDESP.MDE_NGUI=$mde_ngui";
                         }     
                        }else if ($mde_ngui != null || $mde_ngui != " ")    
                            {

                            
                        
                            $cadena="  WHERE PE_MDESP.PVD_CODI=(SELECT PVD_CODI FROM PO_PVDOR WHERE PVD_CODA='$pvd_coda')
                                                                        AND PE_MDESP.MDE_NGUI=$mde_ngui";
                            
                            }
                   
               $cadena="  WHERE PE_MDESP.PVD_CODI=(SELECT PVD_CODI FROM PO_PVDOR WHERE PVD_CODA='$pvd_coda') ";

                            
                   }*/
                   /*
                   else if($mde_plac != null || $mde_plac != " ")
                   {
                       $cadena="  WHERE PE_MDESP.MDE_PLAC='$mde_plac'
                          ";
                   
                       if($mde_ngui != null || $mde_ngui != " "){
                           $cadena="  WHERE PE_MDESP.MDE_PLAC='$mde_plac'
                           AND PE_MDESP.MDE_NGUI=$mde_ngui
                          ";
                       }
                       
                   }else if($mde_ngui != null || $mde_ngui != " ")
                   {
                       $cadena="  WHERE PE_MDESP.MDE_NGUI=$mde_ngui
                          ";
                   
                       
                       
                   }
                   */
            
			$stmt = ConexionSeven::conectarSeven()->prepare(" SELECT top 1000   
                                                                            PE_MDESP.MDE_NGUI as MDE_NGUI,
                                                                             PE_MDESP.MDE_CONT as MDE_CONT,
									   PE_MDESP.MDE_NGUI as NUMERO_GUIA,
                                                                            PE_MDESP.MDE_CONT as CONTADOR,
                                                                             PE_MDESP.MDE_PLAC as PLACA,
                                                                            PO_PVDOR.PVD_CODI as LLAVE_TRANSPORTISTA,
                                                                              PO_PVDOR.PVD_CODA as CODIGO_TRANS,
                                                                             PO_PVDOR.PVR_NOCO as TRANSPORTISTA_NAME,
                                                                            PO_PVDOR.PVD_NOMB as NOMBRE_TRANSPORTIS,
                                                                             PE_MDESP.MDE_PESO as PESO,
                                                                             PE_MDESP.MDE_VALO as VALOR_DECLARADO,
                                                                             PE_MDESP.MDE_FLET as VALOR_FLETE,
                                                                             PE_MDESP.MDE_TFIJ as TARIFA_FIJA  FROM PE_MDESP 
                                                                           INNER JOIN PO_PVDOR ON PE_MDESP.PVD_CODI=PO_PVDOR.PVD_CODI and PO_PVDOR.EMP_CODI=PE_MDESP.EMP_CODI
                                                                           $cadena
                                                                            ");

			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();
		 

		$stmt -> close();

		$stmt = null;

	}
        
static public function mdlNuevaEdicionEnBloque($data){
                        /*                     
                        $pvd_coda='860512330';
                        $mde_plac='TTW065'; 
                        $mde_ngui='26';                          
                                           
                       */
                       // $mde_ngui=null;
    
 
                  
    $DDE_VALO=$data["valorDeclaradoBloque"];
    $DDE_VFLE=$data["valorFleteBloque"];
    $MDE_CONT=$data["MDE_CONT"];
    $PED_SPRTF=$data["valorSobrePorteBloque"];
    $cont_case=$data["contador"];
                    $cadena="";
                   $where="";
                   
             
                                         $sql_update_bloque="";
                                         $sql_update_bloque_sec="";
                           
                             
                        $concat = ' UPDATE PE_DDESP 
                                    SET 
                                     DDE_VALO="'.$DDE_VALO.'",
                                    DDE_VFLE="'.$DDE_VFLE.'"
                                    WHERE MDE_CONT="'.$MDE_CONT.'" ';
                      
                        
                        
                        
                        
                            session_start();  
                            $id_usuario_sis= $_SESSION["id"]  ;
                            $nombre_usuario_sis= $_SESSION["nombre"]   ;
                            $stmtaudr = Conexion::conectar()->prepare(" 	
                            SELECT max(id_auditoria)+1 as valor_id from auditoria
                            ");
                            $stmtaudr -> execute();
                            $stmtaudpre= $stmtaudr -> fetch();
                            $valor_id=$stmtaudpre['valor_id'];
                            /*
                            $stmaudinsr = Conexion::conectar()->prepare("
                            INSERT INTO auditoria
                            (id_auditoria,id_usuario,nombre_usuario,operacion_query,operacion_anterior,estado,fecha_registro)
                              VALUES 
                            ($valor_id, $id_usuario_sis,'registroprueba','$sql_update_bloque','Query vasio la query se encuentra en la tabla log detalle',1,GETDATE()  );
                            ");
                            $stmaudinsr -> execute();  
                  */
                           $stmaudinsr2pre = Conexion::conectar()->prepare("
                            INSERT INTO auditoria
                            (id_auditoria,id_usuario,nombre_usuario,operacion_query,operacion_anterior,estado,fecha_registro)
                              VALUES 
                            ($valor_id, $id_usuario_sis,'$nombre_usuario_sis','$concat','Query vacio buscar en tabla detalle ',1,GETDATE()  );
                            ");
                            $stmaudinsr2pre -> execute();  
                          
                            
                            
                          //primera consulta recorrido
                   $consultas_tmt = ConexionSeven::conectarSeven()->prepare("     
                                                                          select PE_DDESP.DDE_VALO,PE_DDESP.DDE_VFLE,PE_DDESP.DDE_CONT			from PE_DDESP
                                                                          WHERE MDE_CONT=$MDE_CONT
                                                                         ");
                  $consultas_tmt -> execute();
                  $stmtaudprerr= $consultas_tmt ->fetchAll();
                   
                  
                  
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
                   
                    $query2pos='  UPDATE PE_PEDIM SET PED_SPRT="'.$PED_SPRTF.'" WHERE PED_CONT IN (SELECT PED_CONT FROM PE_DDESP WHERE MDE_CONT="'.$MDE_CONT.'")';
                   
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
                            ($valor_id2, $id_usuario_sis,'$nombre_usuario_sis','$query2pos','Query vacio la query se encuentra en la tabla log detalle',1,GETDATE()  );
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
                
                   switch ($cont_case) {
                            case 1 : //A
                                 $sql_update_bloque="UPDATE PE_DDESP 
                                                       SET 
                                                    DDE_VALO='$DDE_VALO' 
                                                    WHERE MDE_CONT=$MDE_CONT";
                                $sql_update_bloque_sec="";
                                
                         $stmt = ConexionSeven::conectarSeven()->prepare($sql_update_bloque);
                         $stmt -> execute();  
                       //  $stmt2 = ConexionSeven::conectarSeven()->prepare($sql_update_bloque_sec);
            
               // return 1;
                      //   return "DDE_VALO ".$DDE_VALO."__DDE_VFLE".$DDE_VFLE."ºº_DDE_VFLE_".$MDE_CONT."_ººPED_SPRTF"."$PED_SPRTF"."ºº_cont_case".$cont_case;
                      //   die();
                                break;
                            case 2 : //AB
                               
                                
                                $sql_update_bloque="UPDATE PE_DDESP 
                                                       SET 
                                                    DDE_VALO='$DDE_VALO' ,
                                                    DDE_VFLE='$DDE_VFLE'
                                                    WHERE MDE_CONT=$MDE_CONT";
                                $sql_update_bloque_sec="";
                                
                             //    $stmt = ConexionSeven::conectarSeven()->prepare($sql_update_bloque);
                         $stmt2 = ConexionSeven::conectarSeven()->prepare($sql_update_bloque);
                                  $stmt2 -> execute(); 
                                break;
                            case 3 : //ABC
                                $sql_update_bloque="  UPDATE PE_DDESP 
                                                                          SET 
                                                                          DDE_VALO='$DDE_VALO',
                                                                          DDE_VFLE='$DDE_VFLE'
                                                                        WHERE MDE_CONT=$MDE_CONT ";
                                $sql_update_bloque_sec="
                                    UPDATE PE_PEDIM SET PED_SPRT=$PED_SPRTF
                                   WHERE PED_CONT IN (SELECT PED_CONT FROM PE_DDESP WHERE MDE_CONT='$MDE_CONT'  )
                                ";
                                
                                
                                 $stmt = ConexionSeven::conectarSeven()->prepare($sql_update_bloque);
                         $stmt2 = ConexionSeven::conectarSeven()->prepare($sql_update_bloque_sec);
                                
                         $stmt -> execute();
                         $stmt2 -> execute();
                                
                          break;
                            case 4 : //AC
                                   $sql_update_bloque="  UPDATE PE_DDESP 
                                                                          SET 
                                                                          DDE_VALO='$DDE_VALO' 
                                                                        WHERE MDE_CONT=$MDE_CONT ";
                                $sql_update_bloque_sec="
                                    UPDATE PE_PEDIM SET PED_SPRT=$PED_SPRTF
                                   WHERE PED_CONT IN (SELECT PED_CONT FROM PE_DDESP WHERE MDE_CONT='$MDE_CONT'  )
                                ";
                                
                                 $stmt = ConexionSeven::conectarSeven()->prepare($sql_update_bloque);
                         $stmt2 = ConexionSeven::conectarSeven()->prepare($sql_update_bloque_sec);
                           $stmt -> execute();
                         $stmt2 -> execute();
                         
                                break;
                            case 5 : //b
                                  $sql_update_bloque="  UPDATE PE_DDESP 
                                                                          SET 
                                                                          
                                                                          DDE_VFLE='$DDE_VFLE'
                                                                        WHERE MDE_CONT=$MDE_CONT ";
                                $sql_update_bloque_sec="  ";
                                
                                 $stmt = ConexionSeven::conectarSeven()->prepare($sql_update_bloque);
                                   $stmt -> execute();
                       //  $stmt2 -> execute();
                      //   $stmt2 = ConexionSeven::conectarSeven()->prepare($sql_update_bloque_sec);
                                break;
                            case 6 : //bc
                                 $sql_update_bloque="  UPDATE PE_DDESP 
                                                                          SET 
                                                                          
                                                                          DDE_VFLE='$DDE_VFLE'
                                                                        WHERE MDE_CONT=$MDE_CONT ";
                                $sql_update_bloque_sec="
                                    UPDATE PE_PEDIM SET PED_SPRT=$PED_SPRTF
                                   WHERE PED_CONT IN (SELECT PED_CONT FROM PE_DDESP WHERE MDE_CONT='$MDE_CONT'  )
                                ";
                                
                                 $stmt = ConexionSeven::conectarSeven()->prepare($sql_update_bloque);
                                 $stmt2 = ConexionSeven::conectarSeven()->prepare($sql_update_bloque_sec);
                                 $stmt -> execute();
                                 $stmt2 -> execute();
                                
                                break;
                            case 7 : //c
                                $sql_update_bloque="   ";
                                $sql_update_bloque_sec="
                                    UPDATE PE_PEDIM SET PED_SPRT=$PED_SPRTF
                                   WHERE PED_CONT IN (SELECT PED_CONT FROM PE_DDESP WHERE MDE_CONT='$MDE_CONT'  )
                                ";
                                
                                
                             //    $stmt = ConexionSeven::conectarSeven()->prepare($sql_update_bloque);
                         $stmt2 = ConexionSeven::conectarSeven()->prepare($sql_update_bloque_sec);
                               
                           //$stmt -> execute();
                         $stmt2 -> execute();
                         break;
                            
                            
                        }
                  
                        
                        
                        
                          return 1;
		 

		$stmt -> close();

		$stmt = null;

	}        
        static public function mdlMostrarGuiasVariDetalle($mde_cont){
               
                                                                    
                    $cadena="";
                   $where="";
                   
                                                 
                   
			$stmt = ConexionSeven::conectarSeven()->prepare("  SELECT
                                                                            PE_DDESP.MDE_CONT as MDE_CONT,
                                                                           PE_DDESP.DDE_CONT as PK_DDE_CONT,
                                                                          PE_PEDIM.PED_NUME AS PEDIDO,
                                                                          PE_PEDIM.PED_FECH AS FECHA,
                                                                          FA_DCLIE.DCL_NOMB AS CLIENTE,
                                                                          PE_DDESP.DDE_VALO AS VALOR_DECLARADO,
                                                                         PE_DDESP.DDE_VFLE AS VALOR_FLETE,
                                                                           PE_PEDIM.PED_SPRT AS SOBRE_PORTE
                                                                         FROM PE_DDESP
                                                                         INNER JOIN PE_PEDIM on PE_DDESP.PED_CONT=PE_PEDIM.PED_CONT
                                                                          INNER JOIN FA_DCLIE ON FA_DCLIE.EMP_CODI=PE_PEDIM.EMP_CODI AND FA_DCLIE.CLI_CODI=PE_PEDIM.CLI_CODI AND FA_DCLIE.DCL_CODD=PE_PEDIM.DCL_CODD
                                                                          WHERE MDE_CONT=$mde_cont
                                                                            ");

			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

		 

		$stmt -> close();

		$stmt = null;

	}
        
             static public function mdlMostrarTransportadoraGuias($cod_cont_transport){
               
                  // $cod_cont_transport ="890200928";                                                
                    $cadena="";
                   $where="";
                   
                                                 
                   
			$stmt = ConexionSeven::conectarSeven()->prepare("     
                                                                         
                                                                    SELECT PO_PVDOR.PVD_CODA [NIT],
                                                                    PO_PVDOR.PVD_NOMB [NOMBRE_TRANSPORTADORA],
                                                                    PO_DEPRO.DEP_CODD [DETALLE],
                                                                    PO_DEPRO.DEP_NOMB [NOMBRE_DETALLE],
                                                                    PO_PVDOR.PVD_CODI,PO_DEPRO.DEP_CODD FROM PO_PVDOR
                                                                    INNER JOIN PO_DEPRO ON PO_DEPRO.EMP_CODI = PO_PVDOR.EMP_CODI AND PO_DEPRO.PVD_CODI = PO_PVDOR.PVD_CODI
                                                                    where
                                                                    PO_PVDOR.PVD_CODA ='$cod_cont_transport'

                                                                        ");

			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

		 

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