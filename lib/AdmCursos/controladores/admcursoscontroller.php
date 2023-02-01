<?php
 require_once '../modelos/cursos.modelo.php';
/*
 *  controlador de guias- Daniel Castilla
 * 
 */

$opcion = $_POST['opcion'];
$obj_menu = new ModeloCursos();


if ($opcion == 'ctrMuestraMenuDinamico') {
    $retorno = $obj_menu->mdlconsultamenu($_POST);
    echo $retorno;
}

if ($opcion == 'ctrMuestraMenuDinamicoCursos') {
    $retorno = $obj_menu->mdlconsultamenucursos($_POST);
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
//registro de cursos basicos
if ($opcion == 'ctrRegistrarCurso') {
    $retorno = $obj_menu->mdlRegistrarCurso($_POST);
    echo $retorno;
}
if ($opcion == 'ctrRegistrarUsuario') {
    $retorno = $obj_menu->mdlRegistrarUsuario($_POST);
    echo $retorno;
}

if ($opcion == 'ctrInscripcionUsuarioCurso') {
    $retorno = $obj_menu->mdlInscripcionUsuarioCurso($_POST);
    echo $retorno;
}

if ($opcion == 'ctrCambioClaveUsuario') {
    $retorno = $obj_menu->mdlCambioClaveUsuario($_POST);
    echo $retorno;
}


if ($opcion == 'ctrRegistrarModulo') {
    $retorno = $obj_menu->mdlRegistrarModulo($_POST);
    echo $retorno;
}
if ($opcion == 'ctrRegistrarLecciones') {
   
    echo 11223344;
}

if ($opcion == 'ctrRegistrarLeccion') {
    
    
     
    
     if($_FILES["video"]["type"] == "video/mp4"){

         
        
         
						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						//$ruta = "../vistas/img/productos/".$_POST["nuevoNombreC"]."/".$aleatorio.".mp4";
						$ruta = "img/productos/aaabbbccc/".$aleatorio.".mp4";

						//$origen = imagecreatefrompng($_FILES["nuevaImagenes"]["tmp_name"]);						

						//$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						//imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
                                                $fileTmpPath = $_FILES['video']['tmp_name'];
                                               
						move_uploaded_file($fileTmpPath, $ruta);
                                                $rutabd = "img/productos/aaabbbccc/".$aleatorio.".mp4";
                                                
                                                echo $rutabd;

					}
    
    
    
    
    
    
    //$retorno = $obj_menu->mdlRegistrarLeccion($_POST);
    //echo $retorno;

    
    
    
    
    
    
    
    
    
    
    
}






if ($opcion == 'ctrRegistrarPerfilAdm') {
    $retorno = $obj_menu->mdlRegistrarPerfilAdm($_POST);
    echo $retorno;
}



if ($opcion == 'ctrEliminarMenuPerfil') {
    $retorno = $obj_menu->mdlEliminarMenuPerfil($_POST);
    echo $retorno;
}



if ($opcion == 'ctrEliminarCursos') {
    $retorno = $obj_menu->mdlEliminarCursos($_POST);
    echo $retorno;
}
if ($opcion == 'ctrEliminarModulos') {
    $retorno = $obj_menu->mdlEliminarModulos($_POST);
    echo $retorno;
}
if ($opcion == 'ctrEliminarUsuarios') {
    $retorno = $obj_menu->mdlEliminarUsuarios($_POST);
    echo $retorno;
}




if ($opcion == 'ctrEliminarLecciones') {
    $retorno = $obj_menu->mdlEliminarLeccion($_POST);
    echo $retorno;
}

if ($opcion == 'ctrEliminarAnexoDocs') {
    $retorno = $obj_menu->mdlEliminarAnexoDocs($_POST);
    echo $retorno;
}
 


if ($opcion == 'ctrEliminarInscripcionCurso') {
    $retorno = $obj_menu->mdlEliminarInscripcionCurso($_POST);
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



if ($opcion == 'consulta_cursos_combo') {

     $retorno = $obj_menu->mdlMostraComboCursos();
    echo $retorno;
}

if ($opcion == 'consulta_modulos_cur_combo') {

     $retorno = $obj_menu->mdlMostraComboModulos($_POST);
    echo $retorno;
}
if ($opcion == 'consulta_usuarios_combo') {

     $retorno = $obj_menu->mdlMostraComboUsuarios($_POST);
    echo $retorno;
}



if ($opcion == 'consulta_cursos_inscritos_combo') {

     $retorno = $obj_menu->mdlMostraComboCursosInscritos($_POST);
    echo $retorno;
}

 if ($opcion == 'consulta_de_hijodetalle') {

     $retorno = $obj_menu->mdlMostraConsultaMenuhijodetalle($_POST);
    echo $retorno;
}



?>
