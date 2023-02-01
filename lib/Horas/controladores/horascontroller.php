<?php
require_once '../modelos/horas.modelo.php';
/*
 *  controlador de guias- Daniel Castilla
 * 
 */

$opcion = $_POST['opcion'];
$obj_menu = new ModeloHoras();


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


if ($opcion == 'ctrActualizarEstadoAud') {
    $retorno = $obj_menu->mdlActualizarHoras($_POST);
    echo $retorno;
}

if ($opcion == 'consulta_de_personal') {

     $retorno = $obj_menu->mdlMostraConsultaPersonal();
    echo $retorno;
}

?>
