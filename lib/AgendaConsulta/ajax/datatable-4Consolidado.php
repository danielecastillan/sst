<?php

require_once "../controladores/agent.controlador.php";
//require_once "../modelos/productos.modelo.php";

//require_once "../controladores/categorias.controlador.php";
//require_once "../modelos/categorias.modelo.php";

 /*

  */
//    data: {"PVD_CODA": PVD_CODA,"": MDE_PLAC,"MDE_NGUI": MDE_NGUI},
class TablaGuias{

 	/*=============================================
 	 MOSTRAR LA TABLA DE PRODUCTOS
  	=============================================*/ 

	public function mostrarTablaGuias(){
      //  $PVD_CODA = $_POST["PVD_CODA"];
		$item = null;
    	$valor = null;
    	$orden = "id";
 
 /*
                $numero_producto=$_POST['numero_producto'];
                $nombre_producto=$_POST['nombre_producto'];
                $punto_venta=$_POST['punto_venta'];
                $contador=$_POST['contador'];
                */
             /*
                $HOR_NUME=$_POST['HOR_NUME'];
                $contador=$_POST['cont_case'];
                $empleado=$_POST['nombre_empleado'];
               */ 
                /*
                 *  cont_case:  contador,
            HOR_NUME:HOR_NUME,
            nombre_empleado:nombre_empleado
                 * 
                 */
                
         
                
  		//$guias = ControladorProd::ctrMostrarProducVari($numero_producto, $nombre_producto, $punto_venta, $contador);	
  		$guias = ControladorAgent::ctrMostrarConsultasConsulConsolidado();	

  		echo json_encode($guias);
                
                
              
		 
	}



}

/*=============================================
ACTIVAR TABLA DE GUIAS
=============================================*/ 
$activarGuias = new TablaGuias();
$activarGuias -> mostrarTablaGuias();

