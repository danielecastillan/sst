<?php

require_once "../../Conexion/conexionseven.php";
require_once "../../Conexion/conexion.php";
//require_once "conexion.php";

class ModeloDirProd{

	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/
    static public function mdlMostrarDirectorioProductos(){
        
               
                  // $cod_cont_transport ="890200928";                                                
                    $cadena="";
                   $where="";
                   
                   $where="";
              
                   
                    $stmt = ConexionSeven::conectarSeven()->prepare("     
                                                                  SELECT  LH_DIRPR.COD_DPRO
                                                               ,LH_DIRPR.PRO_CODI
                                                                   ,IN_PRODU.PRO_NOMB
                                                              ,LH_DIRPR.PVD_CODA
                                                                  ,PO_PVDOR.PVR_NOCO
                                                              ,LH_DIRPR.NOM_MARC
                                                              ,LH_DIRPR.FECH_ACTU
                                                              ,LH_DIRPR.NOT_DPRO
                                                              ,LH_DIRPR.EST_DPRO
                                                              ,LH_DIRPR.URL_DIMA
                                                              ,LH_DIRPR.URL_DFIC
                                                          FROM  LH_DIRPR
                                                          left join IN_PRODU on LH_DIRPR.PRO_CODI=IN_PRODU.PRO_CODI
                                                          left join PO_PVDOR on LH_DIRPR.PVD_CODA=PO_PVDOR.PVD_CODA
                                                          ORDER BY LH_DIRPR.COD_DPRO
                                   
                                                                        ");

 

			$stmt -> execute();
                        return $stmt -> fetchAll();
                        $stmt -> close();
                        $stmt = null;
 
    }
    
    
    
    
    
        static public function mdlMostrarProductoIndividual($id_cod_pro){
        
            
            
          
            
            
          //  $id_cod_pro=5;
               
                  // $cod_cont_transport ="890200928";                                                
                    $cadena="";
                   $where="";
                   
                   $where="";
              
                   
                    $stmt = ConexionSeven::conectarSeven()->prepare("     
                                                                  SELECT  
                                                                LH_DIRPR.COD_DPRO
                                                               ,LH_DIRPR.PRO_CODI
                                                                   ,IN_PRODU.PRO_NOMB
                                                              ,LH_DIRPR.PVD_CODA
                                                                  ,PO_PVDOR.PVR_NOCO
                                                              ,LH_DIRPR.NOM_MARC
                                                              ,LH_DIRPR.FECH_ACTU
                                                              ,LH_DIRPR.NOT_DPRO
                                                              ,LH_DIRPR.EST_DPRO
                                                              ,LH_DIRPR.URL_DIMA
                                                              ,LH_DIRPR.URL_DFIC
                                                          FROM  LH_DIRPR
                                                          left join IN_PRODU on LH_DIRPR.PRO_CODI=IN_PRODU.PRO_CODI
                                                          left join PO_PVDOR on LH_DIRPR.PVD_CODA=PO_PVDOR.PVD_CODA
                                                          where 
                                                          LH_DIRPR.COD_DPRO=$id_cod_pro
                                   
                                                                        ");

 

			$stmt -> execute();
                        return $stmt -> fetch();
                        $stmt -> close();
                        $stmt = null;
 
    }
    
    
            
      static public function mdlEliminarProductoDir($data){
                 
                   $id_cod_pro=$data['cod_directorio_product'];
                 
                                                                      $stmtconsultvalanteriores = ConexionSeven::conectarSeven()->prepare("     
                                                                         
                                                                  	  DELETE FROM LH_DIRPR
                                                                        WHERE LH_DIRPR.COD_DPRO=$id_cod_pro
                                   
                                                                                ");
                                                                      $sql=" DELETE FROM LH_CXLIN
                                                                        WHERE LH_DIRPR.COD_DPRO=$id_cod_pro
                                                                                    ";
                                           
			if($stmtconsultvalanteriores->execute()){

                             
                            
			//return $sql;
			return 1;

		}else{

			return $sql;
		
		}

		 

		$stmt -> close();

		$stmt = null;

	}
    
    
    
    
    static public function mdlMostrarListProductos($tipo_busqueda,$valor_busqueda){
        
               
                  // $cod_cont_transport ="890200928";                                                
                    $cadena="";
                   $where="";
                   
                   $where="";
                   if($tipo_busqueda==1){
                  
                   
                   $where="AND IN_PRODU.PRO_CODI LIKE '%$valor_busqueda%'";
                   
                   
                   }else if($tipo_busqueda==2){
                   $where=" AND IN_PRODU.PRO_NOMB  LIKE '%$valor_busqueda%'";
                   
                   
                   }
                   
                    $stmt = ConexionSeven::conectarSeven()->prepare("     
                                                                         
                                                                   SELECT IN_PRODU.PRO_CODI,IN_PRODU.PRO_NOMB FROM IN_PRODU
                                                                    INNER JOIN IN_RINPR WITH(NOLOCK) ON IN_RINPR.EMP_CODI=IN_PRODU.EMP_CODI AND IN_RINPR.PRO_CONT=IN_PRODU.PRO_CONT AND IN_RINPR.INS_CONT=1
                                                                    INNER JOIN IN_IPMER WITH(NOLOCK) ON IN_IPMER.EMP_CODI=IN_RINPR.EMP_CODI AND IN_IPMER.RIN_CONT=IN_RINPR.RIN_CONT
                                                                    WHERE IN_PRODU.EMP_CODI = 631
                                                                    -- AND IN_PRODU.PRO_ACTI='A'
                                                                    AND IN_PRODU.PRO_ORIG = 'M'
                                                                   -- AND IN_PRODU.PRO_SBCR IN ('PT')
                                                                    AND IN_IPMER.UNN_CONT=2
                                                                    $where
                                                                    
                                                                    ORDER BY IN_PRODU.PRO_NOMB  
                                                             
                                   
                                                                        ");

 

			$stmt -> execute();
                        return $stmt -> fetchAll();
                        $stmt -> close();
                        $stmt = null;
 
    }
    
    static public function mdlMostrarListProveedores($tipo_busqueda,$valor_busqueda){
        
               
                  // $cod_cont_transport ="890200928";                                                
                    $cadena="";
                   $where="";
                   
                   $where="";
                   if($tipo_busqueda==1){
                  
                   
                   $where="AND PVD_CODA LIKE '%$valor_busqueda%'";
                   
                   
                   }else if($tipo_busqueda==2){
                   $where="AND PVR_NOCO LIKE  '%$valor_busqueda%'";
                   
                   
                   }
                   
                    $stmt = ConexionSeven::conectarSeven()->prepare("     
                                                                         
                                                                  SELECT PVD_CODA,PVR_NOCO FROM PO_PVDOR
                                                                    WHERE PVR_ESTA='A'
                                                                 --   AND PVR_CLAD<>'N'
                                                                     $where
                                                                    ORDER BY PVR_NOCO
                                                             
                                   
                                                                        ");

 

			$stmt -> execute();
                        return $stmt -> fetchAll();
                        $stmt -> close();
                        $stmt = null;
 
    }
    
    
    
    
    
    
       
    static public function mdlConsulUniValorProducto($data){
                $ProCodiTxbx=$data['ProCodiTxbx'];
                
              
                
			$stmt = ConexionSeven::conectarSeven()->prepare("     
                                                                         
                                                               SELECT IN_PRODU.PRO_CODI,IN_PRODU.PRO_NOMB FROM IN_PRODU
                                                                    INNER JOIN IN_RINPR WITH(NOLOCK) ON IN_RINPR.EMP_CODI=IN_PRODU.EMP_CODI AND IN_RINPR.PRO_CONT=IN_PRODU.PRO_CONT AND IN_RINPR.INS_CONT=1
                                                                    INNER JOIN IN_IPMER WITH(NOLOCK) ON IN_IPMER.EMP_CODI=IN_RINPR.EMP_CODI AND IN_IPMER.RIN_CONT=IN_RINPR.RIN_CONT
                                                                    WHERE IN_PRODU.EMP_CODI = 631
                                                                   -- AND IN_PRODU.PRO_ACTI='A'
                                                                    AND IN_PRODU.PRO_ORIG = 'M'
                                                                   -- AND IN_PRODU.PRO_SBCR IN ('PT')
                                                                    AND IN_IPMER.UNN_CONT=2
                                                                    AND IN_PRODU.PRO_CODI = '$ProCodiTxbx'
                                                                    
                                                                    ORDER BY IN_PRODU.PRO_NOMB  
                                                              
                                                                        ");

			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();
                        $arr = $stmt->fetch();
                        $PRO_NOMB= $arr['PRO_NOMB'];
                        
                        if($PRO_NOMB==""|| $PRO_NOMB==" " || $PRO_NOMB==NULL)
                        {
                           $PRO_NOMB=0; 
                        }
                        
			return $PRO_NOMB; 

		 

		$stmt -> close();

		$stmt = null;

	}   
    
        static public function mdlConsulUniValorProveedor($data){
                $CodProveeTbox=$data['CodProveeTbox'];
                
              
                
			$stmt = ConexionSeven::conectarSeven()->prepare("     
                                                                         
                                                               SELECT PVD_CODA,PVR_NOCO FROM PO_PVDOR
                                                                    WHERE PVR_ESTA='A'
                                                                   -- AND PVR_CLAD<>'N'
                                                                    AND PVD_CODA = '$CodProveeTbox'
                                                                     
                                                              
                                                                        ");

			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();
                        $arr = $stmt->fetch();
                        $PVR_NOCO= $arr['PVR_NOCO'];
                        
                        if($PVR_NOCO==""|| $PVR_NOCO==" " || $PVR_NOCO==NULL)
                        {
                           $PVR_NOCO=0; 
                        }
                        
			return $PVR_NOCO; 

		 

		$stmt -> close();

		$stmt = null;

	}
        
        
        
        
        
          static public function mdlRegistrarProductoEnDirectorio($data,$url_imagen,$url_ficha){
                
                
                   
                    $stmtaudr = ConexionSeven::conectarSeven()->prepare(" 	
                            SELECT max(COD_DPRO)+1 as valor_id from LH_DIRPR 
                            ");
                            $stmtaudr -> execute();
                            $stmtaudpre= $stmtaudr -> fetch();
                            $valor_id=$stmtaudpre['valor_id'];
                   
                       if($valor_id==0 ||$valor_id==''||$valor_id==' '|| $valor_id==null){
                                $valor_id=1;
                            }
                              
                             
                                 $time = time();

                                    $dateymd_f=date("Y-m-d", $time);
                                    $dateymd_d=date("H:i:s", $time);

                                  // $dateymd=date("Y-m-d H:i:s", $time);
                                   $dateymd=$dateymd_f."T".$dateymd_d;

                                  $pro_codi=$data['cod_codi_producto'];
                                  $pvd_coda=$data['cod_cod_proveedor'];
                                  $nom_marc=$data['nombre_marca'];
                                  $notas_producto=$data['nota_producto'];
                                  $estado_producto=1;
                            
                            
                            
                                
                            
                            
                             $stmtconsultvalanteriores = ConexionSeven::conectarSeven()->prepare("     
                                                                     
                                                            insert into LH_DIRPR (COD_DPRO,PRO_CODI,PVD_CODA,NOM_MARC,FECH_ACTU,NOT_DPRO,EST_DPRO,URL_DIMA,URL_DFIC) 
                                                            values ('$valor_id','$pro_codi','$pvd_coda','$nom_marc','$dateymd','$notas_producto','$estado_producto','$url_imagen','$url_ficha')


                                                                                                ");
                             $valorestest="       insert into LH_DIRPR (COD_DPRO,PRO_CODI,PVD_CODA,NOM_MARC,FECH_ACTU,NOT_DPRO,EST_DPRO,URL_DIMA,URL_DFIC) 
                                                            values ('$valor_id','$pro_codi','$pvd_coda','$nom_marc','$dateymd','$notas_producto','$estado_producto','$url_imagen','$url_ficha')   ";
                                                          
			if($stmtconsultvalanteriores->execute()){

                               
			return 9;

		}else{

			//return $valorestest;
			return $valorestest;
		
		}

		 

		$stmt -> close();

		$stmt = null;

	}   
         
        
        
             static public function mdlActualizarProductoEnDirectorio($data,$url_imagen,$url_ficha){
                
                 
                                 $time = time();

                                    $dateymd_f=date("Y-m-d", $time);
                                    $dateymd_d=date("H:i:s", $time);

                                  // $dateymd=date("Y-m-d H:i:s", $time);
                                   $dateymd=$dateymd_f."T".$dateymd_d;

                              
                                  $estado_producto=1;
                            
                            
                                  $cod_dpro=$data['codigo_dir_pro'];
                                
                                  if($url_imagen==''){
                                      $url_imagen=$data['ruta_img_ant'];
                                  }
                                  if($url_ficha==''){
                                      $url_ficha=$data['ruta_ficha_ant'];
                                  }
                            
                                 $stmtconsultvalanteriores = ConexionSeven::conectarSeven()->prepare("
                                                                                                    update LH_DIRPR set URL_DIMA='$url_imagen',URL_DFIC='$url_ficha' 
                                                                                                   where
                                                                                                   COD_DPRO=$cod_dpro  
                                                                                                    ");
                             $valorestest="update LH_DIRPR set URL_DIMA='$url_imagen',URL_DFIC='$url_ficha' 
                                                                                                   where
                                                                                                   COD_DPRO=$cod_dpro  ";
                                                          
			if($stmtconsultvalanteriores->execute()){

                               
			return 9;

		}else{

			//return $valorestest;
			return $valorestest;
		
		}

		 

		$stmt -> close();

		$stmt = null;

	}   
        
        
        
        
        
        
        
      static public function mdlMostrarDatosCliente($cedula_cliente){
              
                    $cadena="";
                   $where="";
                   
                    $stmt = ConexionSeven::conectarSeven()->prepare("   
                                select
                                                                             sp_clien.CLI_CODA,sp_clien.CLI_NOMB,sp_clien.CLI_DIRE,

                                                                             sp_clien.CLI_CODA as cedula,
                                                                             sp_clien.CLI_TIPO as tipo_identificacion,
                                                                             sp_clien.CLI_DIVE as digito_verificacion,
                                                                             sp_clien.CLI_NOMB as nombres,
                                                                              sp_clien.CLI_APEL as apellido,
                                                                              SP_CLIEN.CLI_DIRE as direccion,
                                                                              SP_CLIEN.CLI_TELE as telefono,
                                                                              SP_CLIEN.CLI_MAIL as correo
                                                                            from sp_clien
                                                                            where
                                                                            cli_coda='$cedula_cliente'

                                                                            
                                                                            "); 
                         
                        
                        
			$stmt -> execute();

			return $stmt -> fetch();
		 

		$stmt -> close();

		$stmt = null;

	}
        
        
           static public function mdlMostrarDatosPedidoEncabezado($cedula_cliente){
              
                    $cadena="";
                   $where="";
                   
                
                                 
              
             
			$stmt = ConexionSeven::conectarSeven()->prepare(" 
                                                                            
                                                       
                                                                         select

                                                                             sp_clien.CLI_CODA,sp_clien.CLI_NOMB,sp_clien.CLI_DIRE,

                                                                             sp_clien.CLI_CODA as cedula,
                                                                             sp_clien.CLI_TIPO as tipo_identificacion,
                                                                             sp_clien.CLI_DIVE as digito_verificacion,
                                                                             sp_clien.CLI_NOMB as nombres,
                                                                              sp_clien.CLI_APEL as apellido,
                                                                              SP_CLIEN.CLI_DIRE as direccion,
                                                                              SP_CLIEN.CLI_TELE as telefono,
                                                                              SP_CLIEN.CLI_MAIL as correo



                                                                             from sp_clien
                                                                            where
                                                                            cli_coda='$cedula_cliente'

                                                                            
                                                                            "); 
                        
                         
                        
                        
                        
                        
                        
                        
			$stmt -> execute();

			return $stmt -> fetch();
		 

		$stmt -> close();

		$stmt = null;

	}
        
        
        
        
              static public function mdlMostrarDatosVendedor($cedula_vendedor){
                     
     /*
            
            $producto=7707030423870;
            $punto_venta=6;
          */   
    //($numero_producto, $nombre_producto, $punto_venta, $contador)
    
                    $cadena="";
                   $where="";
                   
                
                                 
              
             
			$stmt = ConexionSeven::conectarSeven()->prepare(" 
                                                                            
                                                       
                                                                 select VEN_CODI,VEN_NOMB from CA_VENDE
                                                                where VEN_CODI=$cedula_vendedor

                                                                            
                                                                            "); 
                        
                         
                        
                        
                        
                        
                        
                        
			$stmt -> execute();

			return $stmt -> fetch();
		 

		$stmt -> close();

		$stmt = null;

	}
        
         static public function mdlRegistrarNewCliente($data){
                
               
                   
                   $cedula=$data['cedula_cliente'];
                   $tipo_ident=$data['tipo_identificacion'];
                   $digito_verificacion=$data['digvercliente'];
                   $nombres=$data['nombrescliente'];
                   $apellidos=$data['apellidocliente'];
                   $direccion=$data['direccioncliente'];
                   $telefono=$data['telefonocliente'];
                   $correo=$data['correocliente'];
                     
            
                            
                             $stmtconsultvalanteriores = ConexionSeven::conectarSeven()->prepare("     
                                                                         
                                                                  	 
                                                                                insert into sp_clien 
                                                                                (EMP_CODI,CLI_CODA,CLI_TIPO,CLI_DIVE,CLI_NOMB,CLI_APEL,CLI_DIRE,CLI_TELE,CLI_MAIL) 
                                                                                values 
                                                                              
                                                                                (631,'$cedula','$tipo_ident','$digito_verificacion','$nombres','$apellidos','$direccion','$telefono','$correo')


                                                        
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
        
        
      
        
static public function mdlMostrarProdVari($numero_producto,$nombre_producto,$punto_venta,$contador){
                     
    
    //($numero_producto, $nombre_producto, $punto_venta, $contador)
    /*
     $producto='7707030423870';
        $punto_venta='6';
      $nombre_producto='MULETA';
      */
      
      $producto=$numero_producto;
      
      
      
      
                    $cadena="";
                   $where="";
                   
                  
                            switch ($contador) {
                            case 1 : //metros
                                    $cadena="   	  DECLARE @PRODUCTO VARCHAR(128)  DECLARE @PUNTOVENTA NUMERIC(18,0)  
									    SET @PRODUCTO=$numero_producto						
									    SET @PUNTOVENTA=$punto_venta
                                                                           
									    SELECT SP_PRDUC.PRD_CONT,SP_PRDUC.PRD_CODI as CODIGO_PRODUCTO,SP_PRDUC.PRD_NOMB as NOMBRE_PRODUCTO,SP_PRDUC.TIP_CODI,PS_LIPRE.LIP_CODI [COD_LIPRE],PS_LIPRE.LIP_FCHI,PS_LIPRE.LIP_FCHF,
                                                                            ROUND(PS_DLIPR.DLI_VALO,2) [PRECIO_LIPRE], ROUND(PS_DLIPR.DLI_VALO,2) [BASE],SP_PRDUC.PRD_IVAV [PORC_IVA],
                                                                            ROUND(PS_DLIPR.DLI_VALO*( SP_PRDUC.PRD_IVAV/100),0) [VALOR_IVA],
                                                                            ROUND(PS_DLIPR.DLI_VALO,2) + ROUND((PS_DLIPR.DLI_VALO*(SP_PRDUC.PRD_IVAV/100)),2) as PRECIO_TOTAL,
                                                                            CONVERT(FLOAT, ROUND((ROUND(PS_DLIPR.DLI_VALO,2) + ROUND((PS_DLIPR.DLI_VALO*(SP_PRDUC.PRD_IVAV/100)),2)), 2, 1)) as PRECIO_TOTAL2,
                                                                             Floor( CONVERT(FLOAT, ROUND((ROUND(PS_DLIPR.DLI_VALO,0) + ROUND((PS_DLIPR.DLI_VALO*(SP_PRDUC.PRD_IVAV/100)),0)), 0, 1))) as PRECIO_TOTAL3,       
                                                                              Floor(Round(PS_DLIPR.DLI_VALO + (PS_DLIPR.DLI_VALO*(SP_PRDUC.PRD_IVAV/100)),0,1)) as PRECIO_TOTAL33,  
                                                                             PV_BODEG.BOD_CONT AS PUNTO_DE_VENTA, SP_PRDUC.PRD_CODI AS CODIGO_PRODUCTO
                                                                            FROM SP_PRDUC
                                                                            INNER JOIN PV_BODEG ON PV_BODEG.EMP_CODI = SP_PRDUC.EMP_CODI
                                                                            INNER JOIN PS_LIPRE ON PS_LIPRE.EMP_CODI = PV_BODEG.EMP_CODI AND PS_LIPRE.LIP_CONT = PV_BODEG.LIP_CONT
                                                                            INNER JOIN PS_DLIPR ON PS_DLIPR.EMP_CODI = PS_LIPRE.EMP_CODI AND PS_LIPRE.LIP_CONT = PS_DLIPR.LIP_CONT AND PS_DLIPR.PRO_CONT = SP_PRDUC.PRD_CONT
                                                                            WHERE SP_PRDUC.PRD_ESTA='A'
                                                                            AND PV_BODEG.BOD_CONT=@PUNTOVENTA  
									    AND SP_PRDUC.PRD_CODI LIKE '%$numero_producto%'  ";

                                break;
                            case 2 :  
                                $cadena="			 
									 DECLARE @PUNTOVENTA NUMERIC(18,0)  
									 SET @PUNTOVENTA=$punto_venta
									    SELECT SP_PRDUC.PRD_CONT,SP_PRDUC.PRD_CODI as CODIGO_PRODUCTO,SP_PRDUC.PRD_NOMB as NOMBRE_PRODUCTO,SP_PRDUC.TIP_CODI,PS_LIPRE.LIP_CODI [COD_LIPRE],PS_LIPRE.LIP_FCHI,PS_LIPRE.LIP_FCHF,
                                                                            ROUND(PS_DLIPR.DLI_VALO,2) [PRECIO_LIPRE], ROUND(PS_DLIPR.DLI_VALO,2) [BASE],SP_PRDUC.PRD_IVAV [PORC_IVA],
                                                                            ROUND(PS_DLIPR.DLI_VALO*( SP_PRDUC.PRD_IVAV/100),0) [VALOR_IVA],
                                                                            ROUND(PS_DLIPR.DLI_VALO,2) + ROUND((PS_DLIPR.DLI_VALO*(SP_PRDUC.PRD_IVAV/100)),2) as PRECIO_TOTAL,
                                CONVERT(FLOAT, ROUND((ROUND(PS_DLIPR.DLI_VALO,2) + ROUND((PS_DLIPR.DLI_VALO*(SP_PRDUC.PRD_IVAV/100)),2)), 2, 1)) as PRECIO_TOTAL2,
                                 Floor( CONVERT(FLOAT, ROUND((ROUND(PS_DLIPR.DLI_VALO,2) + ROUND((PS_DLIPR.DLI_VALO*(SP_PRDUC.PRD_IVAV/100)),2)), 2, 1))) as PRECIO_TOTAL3,   
                                 Floor(Round(PS_DLIPR.DLI_VALO + (PS_DLIPR.DLI_VALO*(SP_PRDUC.PRD_IVAV/100)),0,1)) as PRECIO_TOTAL33,  
                                                                             PV_BODEG.BOD_CONT AS PUNTO_DE_VENTA, SP_PRDUC.PRD_CODI AS CODIGO_PRODUCTO
                                                                            FROM SP_PRDUC
                                                                            INNER JOIN PV_BODEG ON PV_BODEG.EMP_CODI = SP_PRDUC.EMP_CODI
                                                                            INNER JOIN PS_LIPRE ON PS_LIPRE.EMP_CODI = PV_BODEG.EMP_CODI AND PS_LIPRE.LIP_CONT = PV_BODEG.LIP_CONT
                                                                            INNER JOIN PS_DLIPR ON PS_DLIPR.EMP_CODI = PS_LIPRE.EMP_CODI AND PS_LIPRE.LIP_CONT = PS_DLIPR.LIP_CONT AND PS_DLIPR.PRO_CONT = SP_PRDUC.PRD_CONT
                                                                            WHERE SP_PRDUC.PRD_ESTA='A'
                                                                            AND PV_BODEG.BOD_CONT=@PUNTOVENTA   
			      				              AND SP_PRDUC.PRD_NOMB LIKE '%$nombre_producto%' ";
                                break;
                            case 3 : //hectareas
                                $cadena="  
                                
                                                                        DECLARE @PRODUCTO VARCHAR(128)  
									  
                                
                                                                         DECLARE @PUNTOVENTA NUMERIC(18,0)  
									 SET @PUNTOVENTA=$punto_venta
                                                                           SET @PRODUCTO=$numero_producto		
									    SELECT SP_PRDUC.PRD_CONT,SP_PRDUC.PRD_CODI as CODIGO_PRODUCTO,SP_PRDUC.PRD_NOMB as NOMBRE_PRODUCTO,SP_PRDUC.TIP_CODI,PS_LIPRE.LIP_CODI [COD_LIPRE],PS_LIPRE.LIP_FCHI,PS_LIPRE.LIP_FCHF,
                                                                            ROUND(PS_DLIPR.DLI_VALO,2) [PRECIO_LIPRE], ROUND(PS_DLIPR.DLI_VALO,2) [BASE],SP_PRDUC.PRD_IVAV [PORC_IVA],
                                                                            ROUND(PS_DLIPR.DLI_VALO*( SP_PRDUC.PRD_IVAV/100),0) [VALOR_IVA],
                                                                            ROUND(PS_DLIPR.DLI_VALO,2) + ROUND((PS_DLIPR.DLI_VALO*(SP_PRDUC.PRD_IVAV/100)),2) as PRECIO_TOTAL,
                                CONVERT(FLOAT, ROUND((ROUND(PS_DLIPR.DLI_VALO,2) + ROUND((PS_DLIPR.DLI_VALO*(SP_PRDUC.PRD_IVAV/100)),2)), 2, 1)) as PRECIO_TOTAL2,
                                 Floor( CONVERT(FLOAT, ROUND((ROUND(PS_DLIPR.DLI_VALO,2) + ROUND((PS_DLIPR.DLI_VALO*(SP_PRDUC.PRD_IVAV/100)),2)), 2, 1))) as PRECIO_TOTAL3,  
                                 Floor(Round(PS_DLIPR.DLI_VALO + (PS_DLIPR.DLI_VALO*(SP_PRDUC.PRD_IVAV/100)),0,1)) as PRECIO_TOTAL33,  
                                                                             PV_BODEG.BOD_CONT AS PUNTO_DE_VENTA, SP_PRDUC.PRD_CODI AS CODIGO_PRODUCTO
                                                                            FROM SP_PRDUC
                                                                            INNER JOIN PV_BODEG ON PV_BODEG.EMP_CODI = SP_PRDUC.EMP_CODI
                                                                            INNER JOIN PS_LIPRE ON PS_LIPRE.EMP_CODI = PV_BODEG.EMP_CODI AND PS_LIPRE.LIP_CONT = PV_BODEG.LIP_CONT
                                                                            INNER JOIN PS_DLIPR ON PS_DLIPR.EMP_CODI = PS_LIPRE.EMP_CODI AND PS_LIPRE.LIP_CONT = PS_DLIPR.LIP_CONT AND PS_DLIPR.PRO_CONT = SP_PRDUC.PRD_CONT
                                                                            WHERE SP_PRDUC.PRD_ESTA='A'
                                                                            AND PV_BODEG.BOD_CONT=@PUNTOVENTA 
                                                                           AND SP_PRDUC.PRD_CODI LIKE '%$numero_producto%' 
                                                                         AND SP_PRDUC.PRD_NOMB LIKE '%$nombre_producto%'  "; 
                                
                                break;
                         
                            
                        } 
                                                    
                                                           
                                                
            
			$stmt = ConexionSeven::conectarSeven()->prepare($cadena); 
                        
                    
                        	 
                        
                        
                        	/*$stmt = ConexionSeven::conectarSeven()->prepare(" 
                                                                            

                                                         select  PTV_NOMB AS PTV_NOMB from SP_PTVTA
                                                         

                                                                        
                                                                            ");
                        */
                        

			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();
		 

		$stmt -> close();

		$stmt = null;

	}
      

         
        
         
        
         

}