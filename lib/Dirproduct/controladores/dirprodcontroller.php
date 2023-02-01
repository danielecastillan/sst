<?php
require_once '../modelos/dirprod.modelo.php';
/*
 *  controlador de guias- Daniel Castilla
 * 
 */

$opcion = $_POST['opcion'];
$obj_menu = new ModeloDirProd();


if ($opcion == 'consulta_tab_cod_producto') {

     $retorno = $obj_menu->mdlConsulUniValorProducto($_POST);
    echo $retorno;
}

if ($opcion == 'consulta_tab_cod_proveedor') {

     $retorno = $obj_menu->mdlConsulUniValorProveedor($_POST);
    echo $retorno;
}


if ($opcion == 'registrar_producto_directorio') {

     $retorno = $obj_menu->mdlRegistrarProductoEnDirectorio($_POST);
    echo $retorno;
}

if ($opcion == 'ctrEliminarProductoDir') {
    $retorno = $obj_menu->mdlEliminarProductoDir($_POST);
    echo $retorno;
}





if ($opcion == 'ctrMostrarDatosCliente') {
  //  return 1;
     $retorno = $obj_menu->mdlMostrarDatosCliente($_POST);
    // echo $retorno;
    echo json_encode($retorno);
}

if ($opcion == 'ctrRegistrarNewCliente') {
  //  return 1;
     $retorno = $obj_menu->mdlRegistrarNewCliente($_POST);
     echo $retorno;
   
}



if ($opcion == 'ctrRegistroEncabezadoPedido') {
  //  return 1;
     $retorno = $obj_menu->mdlRegistrarEncabezadoTabla($_POST);
     echo $retorno;
  }
 
  if ($opcion == 'ctrRegistroDetalleEncabezadoTabla') {
  //  return 1;
     $retorno = $obj_menu->mdlRegistrarDetalleEncabezadoTabla($_POST);
     echo $retorno;
  }
 


if ($opcion == 'ctrUpdateFacturaEncabezadoPedido') {
  //  return 1;
     $retorno = $obj_menu->mdlUpdateFacturaEncabezadoPedido($_POST);
     echo $retorno;
  }
 
  
  
  
  
  
  

if ($opcion == 'ctrActualizarCliente') {
  //  return 1;
     $retorno = $obj_menu->mdlActualizarCliente($_POST);
     echo $retorno;
  }
 if ($opcion == 'ctrRegistrarCliente') {
  //  return 1;
     $retorno = $obj_menu->mdlRegistrarCliente($_POST);
     echo $retorno;
  }
  
  


if ($opcion == 'ctrActualizarGuias') {
    $retorno = $obj_menu->mdlActualizarGuias($_POST);
    echo $retorno;
}

if ($opcion == 'ctrActualizarmdlActualizarDetalleIndividuaDeGuiaGuia') {
    $retorno = $obj_menu->mdlActualizarDetalleIndividuaDeGuia($_POST);
    echo $retorno;
}
if ($opcion == 'ctrActualizarmdlActualizarDetalleIndividuaDeGuiaBloque') {
    $retorno = $obj_menu->mdlActualizarDetalleIndividuaDeGuiaBloque($_POST);
    echo $retorno;
}

if ($opcion == 'ctrNuevaEdicionEnBloque') {
    $retorno = $obj_menu->mdlNuevaEdicionEnBloque($_POST);
    echo $retorno;
}


if ($opcion == 'consulta_punto_de_venta') {

     $retorno = $obj_menu->mdlMostraComboPuntosDeVenta();
    echo $retorno;
}

if ($opcion == 'consulta_nombre_punto_de_venta') {

     $retorno = $obj_menu->mdlMostraNombrePuntoDeVenta($_POST);
    echo $retorno;
}




if ($opcion == 'consulta_formas_the_pago') {

     $retorno = $obj_menu->mdlMostraComboFormadePago();
    echo $retorno;
}


?>
