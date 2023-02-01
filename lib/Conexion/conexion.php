<?php

class Conexion{

	static public function conectar(){
/*
	 $link = new PDO(" ","udea","1234");
*/	 
	   $link = new PDO( " ","SevenERP","S3v3nERP2018");
	 
	  //$link = new PDO(" ","udea","1234");
          // $dbh = new PDO(" ", "udea", "1234");
	//$link->exec("set names utf8");

		return $link;

	}

}