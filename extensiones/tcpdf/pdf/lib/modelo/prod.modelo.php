<?php
require_once '../../../lib/Conexion/conexionseven.php';
//require_once '../../';

//require_once "../../Conexion/conexionseven.php";
//require_once "../../Conexion/conexion.php";
//require_once "conexion.php";

class ModeloProd{

	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/
 
        
        
              static public function mdlMostrarPedidosIIndividual($tra_cont){



			$stmt = ConexionSeven::conectarSeven()->prepare("  
                            
                                 select LH_PCALLC.[TRA_CONT],LH_PCALLC.[TRA_FECH],LH_PCALLC.[TRA_VTOT],LH_PCALLC.[CLI_CODA],LH_PCALLC.[VEN_CODU],SP_CLIEN.CLI_NOCO as NOMBRE_CLIENTE,CA_VENDE.VEN_NOMB as NOMBRE_VENDEDOR,LH_PCALLC.[PTV_CONT],LH_PCALLC.[TRA_DIAN],LH_PCALLC.[TRA_PREF],LH_PCALLC.[TFO_CONT],SP_TFOPA.TFO_NOMB,LH_PCALLC.[TRA_FENT],LH_PCALLC.[TFO_NOTA],LH_PCALLC.[TRA_FELE] from LH_PCALLC
                                 inner join SP_CLIEN on LH_PCALLC.CLI_CODA=SP_CLIEN.CLI_CODA
                                 left join CA_VENDE on LH_PCALLC.VEN_CODU=CA_VENDE.VEN_CODI
				 left join SP_TFOPA on LH_PCALLC.TFO_CONT=SP_TFOPA.TFO_CONT
                                 where
                                  LH_PCALLC.TRA_CONT=$tra_cont

                                                                            ");
			$stmt -> execute();

			return $stmt -> fetch();

		

		$stmt -> close();

		$stmt = null;

	}
        
        
                static public function mdlMostrarPedidosIIndividualDetalladoPdf($tra_cont){


                        //$tra_cont=15;
			$stmt = ConexionSeven::conectarSeven()->prepare("  
                            
                                 select LH_PCALLC.[TRA_CONT],LH_PCALLC.[TRA_FECH],LH_PCALLC.[TRA_VTOT],LH_PCALLC.[CLI_CODA],LH_PCALLC.[VEN_CODU],SP_CLIEN.CLI_NOCO as NOMBRE_CLIENTE,CA_VENDE.VEN_NOMB as NOMBRE_VENDEDOR,LH_PCALLC.[PTV_CONT],LH_PCALLC.[TRA_DIAN],LH_PCALLC.[TRA_PREF],LH_PCALLC.[TFO_CONT],SP_TFOPA.TFO_NOMB,LH_PCALLC.[TRA_FENT],LH_PCALLC.[TFO_NOTA],LH_PCALLC.[TRA_FELE],SP_PTVTA.PTV_NOMB as PTV_NOMB,SP_TRANS.TUR_CONT,SP_TURNO.CAJ_CONT  ,SP_CAJER.CAJ_CONT,SP_CAJER.CAJ_NOMB  from LH_PCALLC
                                 inner join SP_CLIEN on LH_PCALLC.CLI_CODA=SP_CLIEN.CLI_CODA
                                 left join CA_VENDE on LH_PCALLC.VEN_CODU=CA_VENDE.VEN_CODI
				 left join SP_TFOPA on LH_PCALLC.TFO_CONT=SP_TFOPA.TFO_CONT
				 left join SP_PTVTA on SP_PTVTA.PTV_CONT=LH_PCALLC.PTV_CONT
										
				 left join SP_TRANS on LH_PCALLC.TRA_DIAN = SP_TRANS.TRA_DIAN and LH_PCALLC.PTV_CONT=SP_TRANS.PTV_CONT 	
				 left join SP_TURNO on SP_TRANS.TUR_CONT = SP_TURNO.TUR_CONT 		
				 left join SP_CAJER on SP_TURNO.CAJ_CONT = SP_CAJER.CAJ_CONT
				  where
                                  LH_PCALLC.TRA_CONT=$tra_cont
    
                                                                            ");
			$stmt -> execute();

			return $stmt -> fetch();

		

		$stmt -> close();

		$stmt = null;

	}
         static public function mdlMostrarPedidosIIndividualDetalladoPdfPedido($tra_cont){


                        //$tra_cont=15;
			$stmt = ConexionSeven::conectarSeven()->prepare("  
                            
                             select LH_PCALLC.[TRA_CONT],LH_PCALLC.[TRA_FECH],LH_PCALLC.[TRA_VTOT],LH_PCALLC.[CLI_CODA],LH_PCALLC.[VEN_CODU],SP_CLIEN.CLI_NOCO as NOMBRE_CLIENTE,CA_VENDE.VEN_NOMB as NOMBRE_VENDEDOR,
                                LH_PCALLC.[PTV_CONT],LH_PCALLC.[TRA_DIAN],LH_PCALLC.[TRA_PREF],LH_PCALLC.[TFO_CONT],SP_TFOPA.TFO_NOMB,LH_PCALLC.[TRA_FENT],LH_PCALLC.[TFO_NOTA],LH_PCALLC.[TRA_FELE] --,
                                /*
                                SP_PTVTA.PTV_NOMB as PTV_NOMB,
                                SP_TRANS.TUR_CONT,
                                SP_TURNO.CAJ_CONT  ,
                                SP_CAJER.CAJ_CONT,
                                SP_CAJER.CAJ_NOMB 
                                */
                                 from LH_PCALLC
                                 inner join SP_CLIEN on LH_PCALLC.CLI_CODA=SP_CLIEN.CLI_CODA
                                 left join CA_VENDE on LH_PCALLC.VEN_CODU=CA_VENDE.VEN_CODI
				 left join SP_TFOPA on LH_PCALLC.TFO_CONT=SP_TFOPA.TFO_CONT
			--	 left join SP_PTVTA on SP_PTVTA.PTV_CONT=LH_PCALLC.PTV_CONT
										
				-- left join SP_TRANS on LH_PCALLC.TRA_DIAN = SP_TRANS.TRA_DIAN and LH_PCALLC.PTV_CONT=SP_TRANS.PTV_CONT 	
				-- left join SP_TURNO on SP_TRANS.TUR_CONT = SP_TURNO.TUR_CONT 		
				-- left join SP_CAJER on SP_TURNO.CAJ_CONT = SP_CAJER.CAJ_CONT
				  where
                                
                                  LH_PCALLC.TRA_CONT=$tra_cont
    
                                                                            ");
			$stmt -> execute();

			return $stmt -> fetch();

		

		$stmt -> close();

		$stmt = null;

	}
        
        
        
        
        
                static public function mdlMostrarPedidosIIndividualDetalladoPdfEst($tra_cont){


                        //$tra_cont=15;
			$stmt = ConexionSeven::conectarSeven()->prepare("  
                            
                                 select LH_PCALLC.[TRA_CONT],LH_PCALLC.[TRA_FECH],LH_PCALLC.[CLI_CODA],LH_PCALLC.[VEN_CODU],
                                    SP_CLIEN.CLI_NOCO as NOMBRE_CLIENTE,
                                    SP_CLIEN.CLI_CODA as IDENTIFICACION_CLIENTE,
                                    SP_CLIEN.CLI_DIRE as DIRECCION_CLIENTE,
                                    SP_CLIEN.CLI_TELE as TELEFONO_CLIENTE,
                                    SP_CLIEN.CLI_MAIL as CORREO,
                                    LH_PCALLC.TRA_FELE as FACTURA_ELECTRONICA,
                                    LH_PCALLC.TRA_FECH as FECHA_PEDIDO,
                                    SP_TFOPA.TFO_NOMB as TIPO_FORMA_PAGO,
                                    LH_PCALLC.TRA_FENT as T_FORMA_ENTREGA,

                                    CA_VENDE.VEN_NOMB as NOMBRE_VENDEDOR,
                                    LH_PCALLC.TFO_NOTA as NOTAS_PEDIDO,
                                    LH_PCALLC.[TRA_VTOT] as TRA_VTOT,
                                    SP_PTVTA.PTV_NOMB as PTV_NOMB,
                                    LH_PCALLC.[TRA_PREF],
                                    LH_PCALLC.[TRA_DIAN],
                                    LH_PCALLC.TRA_FFAC as FECHA_FACTURA,
                                    SP_TRANS.TRA_FECH as FECH_FAC_FIN,
                                    LH_PCALLC.[PTV_CONT],LH_PCALLC.[TFO_CONT],SP_TFOPA.TFO_NOMB,LH_PCALLC.[TRA_FENT],LH_PCALLC.[TFO_NOTA],LH_PCALLC.[TRA_FELE],SP_TRANS.TUR_CONT,SP_TURNO.CAJ_CONT  ,SP_CAJER.CAJ_CONT,SP_CAJER.CAJ_NOMB  from LH_PCALLC
                                 inner join SP_CLIEN on LH_PCALLC.CLI_CODA=SP_CLIEN.CLI_CODA
                                 left join CA_VENDE on LH_PCALLC.VEN_CODU=CA_VENDE.VEN_CODI
				 left join SP_TFOPA on LH_PCALLC.TFO_CONT=SP_TFOPA.TFO_CONT
				 left join SP_PTVTA on SP_PTVTA.PTV_CONT=LH_PCALLC.PTV_CONT
										
				 left join SP_TRANS on LH_PCALLC.TRA_DIAN = SP_TRANS.TRA_DIAN and LH_PCALLC.PTV_CONT=SP_TRANS.PTV_CONT 	
				 left join SP_TURNO on SP_TRANS.TUR_CONT = SP_TURNO.TUR_CONT 		
				 left join SP_CAJER on SP_TURNO.CAJ_CONT = SP_CAJER.CAJ_CONT
				  where
                                LH_PCALLC.TRA_CONT=$tra_cont

    
                                                                            ");
			$stmt -> execute();

			return $stmt -> fetch();

		

		$stmt -> close();

		$stmt = null;

	}
                static public function mdlMostrarPedidosIIndividualDetalladoPdfEstPedido($tra_cont){


                        //$tra_cont=15;
			$stmt = ConexionSeven::conectarSeven()->prepare("  
                            
                                select LH_PCALLC.[TRA_CONT],LH_PCALLC.[TRA_FECH],LH_PCALLC.[CLI_CODA],LH_PCALLC.[VEN_CODU],
                                    SP_CLIEN.CLI_NOCO as NOMBRE_CLIENTE,
                                    SP_CLIEN.CLI_CODA as IDENTIFICACION_CLIENTE,
                                    SP_CLIEN.CLI_DIRE as DIRECCION_CLIENTE,
                                    SP_CLIEN.CLI_TELE as TELEFONO_CLIENTE,
                                    SP_CLIEN.CLI_MAIL as CORREO,
                                    LH_PCALLC.TRA_FELE as FACTURA_ELECTRONICA,
                                    LH_PCALLC.TRA_FECH as FECHA_PEDIDO,
                                    SP_TFOPA.TFO_NOMB as TIPO_FORMA_PAGO,
                                    LH_PCALLC.TRA_FENT as T_FORMA_ENTREGA,

                                    CA_VENDE.VEN_NOMB as NOMBRE_VENDEDOR,
                                    LH_PCALLC.TFO_NOTA as NOTAS_PEDIDO,
                                    LH_PCALLC.[TRA_VTOT] as TRA_VTOT, 
				   LH_PCALLC.[PTV_CONP] as PTV_CONP,
				   SP_PTVTA_PED.PTV_NOMB AS PTV_NOMB_PED 
                                  
								  
								  
								  
								 from LH_PCALLC
                                 inner join SP_CLIEN on LH_PCALLC.CLI_CODA=SP_CLIEN.CLI_CODA
                                 left join CA_VENDE on LH_PCALLC.VEN_CODU=CA_VENDE.VEN_CODI
								 left join SP_TFOPA on LH_PCALLC.TFO_CONT=SP_TFOPA.TFO_CONT
				left join SP_PTVTA SP_PTVTA_PED on SP_PTVTA_PED.PTV_CONT=LH_PCALLC.PTV_CONP
                                --left join SP_PTVTA on SP_PTVTA.PTV_CONT=LH_PCALLC.PTV_CONT
										
				 --left join SP_TRANS on LH_PCALLC.TRA_DIAN = SP_TRANS.TRA_DIAN and LH_PCALLC.PTV_CONT=SP_TRANS.PTV_CONT 	
				 --left join SP_TURNO on SP_TRANS.TUR_CONT = SP_TURNO.TUR_CONT 		
				 --left join SP_CAJER on SP_TURNO.CAJ_CONT = SP_CAJER.CAJ_CONT
				  where
                                LH_PCALLC.TRA_CONT=$tra_cont

    
                                                                            ");
			$stmt -> execute();

			return $stmt -> fetch();

		

		$stmt -> close();

		$stmt = null;

	}
        
          static public function mdlMostrarDetallePedidosIndPDF($tra_cont){

                //$tra_cont=15;

			$stmt = ConexionSeven::conectarSeven()->prepare("  
                            
                     select [CONT_DETA],[TRA_CONT],[PRO_CODI],[PRO_NOMB],[VLR_UNIT],[DTR_CANT],[VLR_TOTAL] 
                             from  [LH_DPCALL]
                             where [TRA_CONT]=$tra_cont

                                                                            ");
			$stmt -> execute();

			return $stmt -> fetchAll();

		

		$stmt -> close();

		$stmt = null;

	}
         


}