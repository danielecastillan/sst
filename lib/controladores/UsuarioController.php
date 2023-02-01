<?php
session_start();
include '../modelos/usuarios.modelo.php'; 
$opcion = filter_var(trim($_POST['opcion']),FILTER_SANITIZE_STRING);
//$obj_usuario = new ModeloUsuarios();



if ($opcion == 'Log') {


   if(isset($_POST["ingUsuario"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"])){

			   //	$encriptar = crypt($_POST["ingPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$tabla = "usuario";

				$item = "usuario";
				$valor = $_POST["ingUsuario"];

				$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);
                                 //   echo "Usuario_".$respuesta["usuario"];
                                  //  echo "Passwor_".$respuesta["passwor"];
                                //   die();
				if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["passwor"] == $_POST["ingPassword"]){

					if($respuesta["estado"] == 1){

						$_SESSION["iniciarSesion"] = "ok";
						$_SESSION["id"] = $respuesta["id"];
						$_SESSION["nombre"] = $respuesta["nombre"];
						$_SESSION["usuario"] = $respuesta["usuario"];
					        $_SESSION["foto"] = $respuesta["foto"];
                                                $_SESSION["perfil"] = $respuesta["perfil"];
                                                
                   $_SESSION["id_punto_venta"] = $respuesta["id_punto_venta"];                             
                                                
						/*=============================================
						REGISTRAR FECHA PARA SABER EL ÚLTIMO LOGIN
						=============================================*/

						date_default_timezone_set('America/Bogota');

						$fecha = date('Y-m-d');
						$hora = date('H:i:s');

						$fechaActual = $fecha.' '.$hora;

						$item1 = "ultimo_login";
						$valor1 = $fechaActual;

						$item2 = "id";
						$valor2 = $respuesta["id"];
                                                
                                            //    echo "id_".$valor2;
                                               // header('Location: ../../../Central.php');
						$ultimoLogin = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

						echo "ultimoLogin_".$ultimoLogin;

							
						if($ultimoLogin == "ok"){
                                                //echo "Perfil_".$respuesta["perfil"];
					        header('Location: ../../../Central.php');

						}				
						
					}else{

						echo '<br>
							<div class="alert alert-danger">El usuario aún no está activado</div>';

					}		

				}else{

					echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';

				}

			}	

		}
   
   
   
    




}



