<?php
require_once '../modelos/ciiu.modelo.php';
/*
 *  controlador de guias- Daniel Castilla
 * 
 */

$opcion = $_POST['opcion'];
$obj_menu = new ModeloCiiu();


if ($opcion == 'ctrRegistrarconfigciiu') {
    $retorno = $obj_menu->mdlRegistrarconfigciiu($_POST);
    echo $retorno;
}
if ($opcion == 'ctrEditarconfigciiu') {
    $retorno = $obj_menu->mdlEditarconfigciiu($_POST);
    echo $retorno;
}
if ($opcion == 'ctrEliminarCiiu') {
    $retorno = $obj_menu->mdlEliminarCiiu($_POST);
    echo $retorno;
}
 

   
 
 
 
    


?>
