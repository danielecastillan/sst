<?php

require_once "../../Conexion/conexionseven.php";
require_once "../../Conexion/conexion.php";
//require_once "conexion.php";

class ModeloContapyme{

	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

	static public function mdlMostrarConContapyme($vari_consulta){

		 
			$stmt = ConexionSeven::conectarSeven()->prepare("   
                          
                        
                                                      select top 1000 FSOPORT,ITDSOP,SNUMSOP,IUSUARIO,TDETALLE,INIT AS IDENIT, SOBSERV FROM lh_conta
                                                      where 

                                                       TDETALLE like '%$vari_consulta%'
                                                      or 
                                                      SOBSERV like '%$vari_consulta%'
                                                      or  
                                                      INIT like '%$vari_consulta%'
                                                                            ");
			$stmt -> execute();

			return $stmt -> fetchAll();

	 

		$stmt -> close();

		$stmt = null;

	}
        
        
       
         


}