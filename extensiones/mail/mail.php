<?php

//$asunto=$_POST['asunto'];
$asunto="envio correo de prueba";
//$mensaje=$_POST['mensaje'];
$mensaje="este es el contenido de prueba de un mensaje enviado desde la funcion php";
if(isset($asunto) && !empty($asunto) && isset($mensaje) && !empty($mensaje))

{
	$destino="danielecastillan@gmail.com";
	$desde="soporte.erp@lineashospitalarias.com";
	$asunto =$asunto;
	$mensaje=$mensaje;
	mail($destino,$asunto,$mensaje,$desde);
	echo "correo enviado";
	}else {
		echo "correo no enviado";
		}
	
	
?>