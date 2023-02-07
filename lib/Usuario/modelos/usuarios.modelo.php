<?php

require_once "../../Conexion/conexion.php";

class ModeloUsuarios{

	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function MdlMostrarUsuarios($tabla, $item, $valor){


		//return $valor;
		//die();
		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT LTRIM(RTRIM(id_usuario)) AS id_usuario, LTRIM(RTRIM(nombre_completo)) AS nombre_completo,
			LTRIM(RTRIM(usuario)) AS usuario,LTRIM(RTRIM(passw)) AS passw,LTRIM(RTRIM(perfil)) AS perfil,
			LTRIM(RTRIM(foto)) AS foto,LTRIM(RTRIM(estado)) AS estado,LTRIM(RTRIM(ultimo_login)) AS ultimo_login,LTRIM(RTRIM(fecha_creacion)) AS fecha ,id_perfil 
			 FROM  usuarios  WHERE usuario='$valor'");

			//$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT LTRIM(RTRIM(id_usuario)) AS id_usuario, LTRIM(RTRIM(nombre_completo)) AS nombre_completo,
			LTRIM(RTRIM(usuario)) AS usuario,LTRIM(RTRIM(passw)) AS passw,LTRIM(RTRIM(perfil)) AS perfil,
			LTRIM(RTRIM(foto)) AS foto,LTRIM(RTRIM(estado)) AS estado,LTRIM(RTRIM(ultimo_login)) AS ultimo_login,LTRIM(RTRIM(fecha_creacion)) AS fecha ,id_perfil 
			 FROM  usuarios WHERE usuario='$valor'");

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

	/*=============================================
	EDITAR USUARIO
	=============================================*/

	static public function mdlEditarUsuario($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, password = :password, perfil = :perfil, foto = :foto WHERE usuario = :usuario");

		$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt -> bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
		$stmt -> bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
		$stmt -> bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	ACTUALIZAR USUARIO
	=============================================*/

	static public function mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2){


		 //var_dump(" update usuarios set ultimo_login = GETDATE() where id=$valor2");
 
		$stmt = Conexion::conectar()->prepare(" update usuarios set ultimo_login = NOW() where id_usuario=$valor2");
		//$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET ultimo_login = GETDATE() WHERE id = $item2");
		//$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item1 = :$item1 WHERE $item2 = :$item2");

		//$stmt -> bindParam(":".$item1, $valor1, PDO::PARAM_STR);
		//$stmt -> bindParam(":".$item2, $valor2, PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	BORRAR USUARIO
	=============================================*/

	static public function mdlBorrarUsuario($tabla, $datos){

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

}