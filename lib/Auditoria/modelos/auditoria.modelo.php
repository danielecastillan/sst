<?php

require_once "../../Conexion/conexion.php";

class ModeloAuditoria{

	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function MdlRegistroAuditoria($data){

	 

			/*$stmt = Conexion::conectar()->prepare("
		 
			");
                         * 
                         * 
*/
            $stmt = Conexion::conectar()->prepare(
			
			"    INSERT INTO auditoria
                            (id_auditoria,id_usuario,nombre_usuario,operacion_query,operacion_anterior,estado,fecha_registro)
                              VALUES 
                            (5, 23,'paco','Insert','update',1,'2020-10-10T10:10:15'  );");

			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			
                        
            
			 $sql="INSERT INTO auditoria
                            (id_auditoria,id_usuario,nombre_usuario,operacion_query,operacion_anterior,estado,fecha_registro)
                              VALUES 
                            (4, 23,'paco','Insert','update',1,GETDATE()  );

                             ";
			 
       			
                     //       $stmaudins -> execute(); 
                            
                         
			 
			 
			 	if($stmt -> execute()){

                      
                            
                            
			return 1;

		}else{

			return $sql;
		
		}
		 
		

		$stmt -> close();

		$stmt = null;

	}
	
	
	
		static public function MdlMostrarUsuarios($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare(
			
			"SELECT LTRIM(RTRIM(id)) as id, LTRIM(RTRIM(nombre)) as nombre,LTRIM(RTRIM(usuario)) as usuario,LTRIM(RTRIM(passwor)) as passwor,LTRIM(RTRIM(perfil)) as perfil,LTRIM(RTRIM(foto)) as foto,LTRIM(RTRIM(estado)) as estado,LTRIM(RTRIM(ultimo_login)) as ultimo_login,LTRIM(RTRIM(fecha_registro)) as fecha FROM usuarios where usuario='$valor'");

			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT LTRIM(RTRIM(id)) as id, LTRIM(RTRIM(nombre)) as nombre,LTRIM(RTRIM(usuario)) as usuario,LTRIM(RTRIM(passwor)) as passwor,LTRIM(RTRIM(nombre)) as perfil,LTRIM(RTRIM(foto)) as foto,LTRIM(RTRIM(estado)) as estado,LTRIM(RTRIM(ultimo_login)) as ultimo_login,LTRIM(RTRIM(fecha_registro)) as fecha FROM usuarios where usuario='$valor'");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}
		

		$stmt -> close();

		$stmt = null;

	}
	
	
	
	
	
	
	

	/*=============================================
	REGISTRO DE USUARIO
	=============================================*/

	static public function mdlIngresarUsuario($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, usuario, password, perfil, foto) VALUES (:nombre, :usuario, :password, :perfil, :foto)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
		$stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

 

	 
}