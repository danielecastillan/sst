<?php
require_once '../modelos/ciiu.modelo.php';
class ControladorCiiu{

	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

    
    	static public function ctrMostrarCiiuCompuestoTabla(){
 
		$tabla = "productos";

		$respuesta = ModeloCiiu::mdlMostrarCiiuCompuestoTConsul();
//($numero_producto, $nombre_producto, $punto_venta, $contador);
		return $respuesta;

	}
       	static public function ctrMostrarSucursal($cod_name_suc){
 
		$tabla = "productos";

		$respuesta = ModeloCiiu::mdlMostrarConsultasSucursal($cod_name_suc);
//($numero_producto, $nombre_producto, $punto_venta, $contador);
		return $respuesta;

	}
        
        
           	static public function ctrMostrarCiiu($cod_ciiu){
 
		$tabla = "productos";

		$respuesta = ModeloCiiu::mdlMostrarConsultasCiiu($cod_ciiu);
//($numero_producto, $nombre_producto, $punto_venta, $contador);
		return $respuesta;

	}
           	static public function ctrMostrarTesoreria($cod_ciiu){
 
		$tabla = "productos";

		$respuesta = ModeloCiiu::mdlMostrarConsultasTesoreria($cod_ciiu);
//($numero_producto, $nombre_producto, $punto_venta, $contador);
		return $respuesta;

	}
        
        
        
           	static public function ctrMostrarConsultasMenuBasico(){
 
		$tabla = "productos";

		$respuesta = ModeloMenu::mdlMostrarConsultasMenuBasico();
//($numero_producto, $nombre_producto, $punto_venta, $contador);
		return $respuesta;

	}
        
           	static public function ctrMostrarConsultasAgentTiempo($fecha){
 
		$tabla = "productos";

		$respuesta = ModeloAgent::mdlMostrarConsultasConsulTiempo($fecha);
//($numero_producto, $nombre_producto, $punto_venta, $contador);
		return $respuesta;

	}
        
        	static public function ctrRegistroErroresAgenda($usuario,$npestania,$nomb_usr){
 
		$tabla = "productos";

		$respuesta = ModeloAgent::mdlRegistroErroresAgenda($usuario,$npestania,$nomb_usr);
//($numero_producto, $nombre_producto, $punto_venta, $contador);
		return $respuesta;

	}
          	static public function ctrTrunqInsert(){
 
		$tabla = "productos";

		$respuesta = ModeloAgent::mdlTrunqInsert();
//($numero_producto, $nombre_producto, $punto_venta, $contador);
		return $respuesta;

	}
        
        
        
          	static public function ctrMostrarConsultasAgentTerceros($fecha){
 
		$tabla = "productos";

		$respuesta = ModeloAgent::mdlMostrarConsultasConsulTerceros($fecha);
//($numero_producto, $nombre_producto, $punto_venta, $contador);
		return $respuesta;

	}
        
           	static public function ctrMostrarConsultasConsulActiEtapa($fecha){
 
		$tabla = "productos";

		$respuesta = ModeloAgent::mdlMostrarConsultasConsulActiEtapa($fecha);
//($numero_producto, $nombre_producto, $punto_venta, $contador);
		return $respuesta;

	}
        
        
                	static public function ctrMostrarConsultasConsulConsolidado(){
 
		$tabla = "productos";

		$respuesta = ModeloAgent::mdlMostrarConsolidado();
//($numero_producto, $nombre_producto, $punto_venta, $contador);
		return $respuesta;

	}  
        
        
        
        
        
        
      
        
        
        
        
         
        
        
        
        
         
        
        
        

	/*=============================================
	CREAR PRODUCTO 
	=============================================*/

	 

	/*=============================================
	EDITAR PRODUCTO
	=============================================*/

	 

        /*=============================================
	EDITAR PRODUCTO BK
	=============================================*/
       
	/*=============================================
	BORRAR PRODUCTO
	=============================================*/
	 

	/*=============================================
	MOSTRAR SUMA VENTAS
	=============================================*/

	 


}