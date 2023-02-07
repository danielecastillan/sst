<?php

class ConexionSeven{

	static public function conectar(){
/*
	 $link = new PDO(" ","udea","1234");
*/	 
$link = new PDO("mysql:host=127.0.0.1;dbname=proyecto_base",
"root",
"");
 

$link->exec("set names utf8");

return $link;
	}

}