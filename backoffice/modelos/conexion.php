<?php 
class Conexion{
	static public function conectar(){
		$link = new PDO("mysql:localhost;dbname=ventas-suscripcion",
						"root",
						"");
		$link->exec("set names utf8");

		return $link;
	}
}