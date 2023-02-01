<?php
require_once '../modelos/users.modelo.php';
/*
 *  controlador de guias- Daniel Castilla
 * 
 */

$opcion = $_POST['opcion'];
$obj_menu = new ModeloUsers();




if ($opcion == 'ctrRegistrarUsuario') {
    $retorno = $obj_menu->mdlRegistrarUsuario($_POST);
    echo $retorno;
}



if ($opcion == 'ctrEliminarRUsuario') {
    $retorno = $obj_menu->mdlEliminarRUsuario($_POST);
    echo $retorno;
}





if ($opcion == 'ctrMostrarUsers') {
    $retorno = $obj_menu->mdlMostrarUsers($_POST);
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


if ($opcion == 'ctrRegistrarMenuPerfil') {
    $retorno = $obj_menu->mdlRegistrarMenuPerfil($_POST);
    echo $retorno;
}

if ($opcion == 'ctrRegistrarMenuBasico') {
    $retorno = $obj_menu->mdlRegistrarMenuBasico($_POST);
    echo $retorno;
}


if ($opcion == 'ctrRegistrarPerfilAdm') {
    $retorno = $obj_menu->mdlRegistrarPerfilAdm($_POST);
    echo $retorno;
}



if ($opcion == 'ctrEliminarMenuPerfil') {
    $retorno = $obj_menu->mdlEliminarMenuPerfil($_POST);
    echo $retorno;
}

if ($opcion == 'ctrEliminarMenuBasico') {
    $retorno = $obj_menu->mdlEliminarMenuBasico($_POST);
    echo $retorno;
}


if ($opcion == 'ctrEliminarMperfil') {
    $retorno = $obj_menu->mdlEliminarMPerfil($_POST);
    echo $retorno;
}



if ($opcion == 'consulta_de_personal') {

     $retorno = $obj_menu->mdlMostraConsultaPersonal();
    echo $retorno;
}


if ($opcion == 'consulta_de_perfiles') {

     $retorno = $obj_menu->mdlMostraConsultaPerfiles();
    echo $retorno;
}


if ($opcion == 'consulta_de_MenuPadre') {

     $retorno = $obj_menu->mdlMostraConsultaMenuPadre();
    echo $retorno;
}


 if ($opcion == 'consulta_de_hijodetalle') {

     $retorno = $obj_menu->mdlMostraConsultaMenuhijodetalle($_POST);
    echo $retorno;
}



?>
