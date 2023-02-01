<?php

require_once "../../Conexion/conexion.php";

//require_once "conexion.php";

class ModeloProductos{

	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

	static public function mdlMostrarProductos($tabla, $item, $valor, $orden){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY nombre ASC");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY nombre ASC");

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