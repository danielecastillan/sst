<?php
require_once 'lib/modelo/prod.modelo.php';
class ControladorProd{

	/*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/
  static public function ctrMostrarPedidosIIndividualDetalladoPdf($tra_cont){
 
		$tabla = "productos";

		$respuesta = ModeloProd::mdlMostrarPedidosIIndividualDetalladoPdf($tra_cont);
//($numero_producto, $nombre_producto, $punto_venta, $contador);
		return $respuesta;

	} 
        
   static public function ctrMostrarPedidosIIndividualDetalladoPdfPedido($tra_cont){
 
		$tabla = "productos";

		$respuesta = ModeloProd::mdlMostrarPedidosIIndividualDetalladoPdfPedido($tra_cont);
//($numero_producto, $nombre_producto, $punto_venta, $contador);
		return $respuesta;

	} 
                
  static public function ctrMostrarDetallePedidosIndPDF($tra_cont){
 
		$tabla = "productos";

		$respuesta = ModeloProd::mdlMostrarDetallePedidosIndPDF($tra_cont);
//($numero_producto, $nombre_producto, $punto_venta, $contador);
		return $respuesta;

	} 
        
 //consulta pedidos factura grande
  static public function ctrMostrarPedidosIIndividualDetalladoPdfEst($tra_cont){
 
		$tabla = "productos";

		$respuesta = ModeloProd::mdlMostrarPedidosIIndividualDetalladoPdfEst($tra_cont);
//($numero_producto, $nombre_producto, $punto_venta, $contador);
		return $respuesta;

	} 
                
        
        
          static public function ctrMostrarPedidosIIndividualDetalladoPdfEstPedido($tra_cont){
 
		$tabla = "productos";

		$respuesta = ModeloProd::mdlMostrarPedidosIIndividualDetalladoPdfEstPedido($tra_cont);
//($numero_producto, $nombre_producto, $punto_venta, $contador);
		return $respuesta;

	} 
        
        
}