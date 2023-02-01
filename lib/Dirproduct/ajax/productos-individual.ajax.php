<?php

require_once "../controladores/dirprod.controlador.php";
//require_once "../modelos/usuarios.modelo.php";

class AjaxProductos{

	/*=============================================
	EDITAR USUARIO
	=============================================*/	

	 

	public function ajaxConsultaProductos(){

		 
               $id_prod_cont=$_POST["identificacion_reg_prod"];
		$respuesta = ControladorDirProd::ctrMostrarProductosInd($id_prod_cont);

		 echo json_encode($respuesta);
		//echo 33223232323232.$respuesta;

	}
 
}

/*=============================================
EDITAR USUARIO
=============================================*/
 
	$editar = new AjaxProductos();
	 
	$editar -> ajaxConsultaProductos();

 

/*=============================================
ACTIVAR USUARIO
=============================================*/	
 