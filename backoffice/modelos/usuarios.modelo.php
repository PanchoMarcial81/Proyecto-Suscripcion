<?php 

require_once "conexion.php";

class ModeloUsuarios{
	/*=============================================
	REGISTRO DE USUARIOS
	=============================================*/
	static public function mdlRegistroUsuario($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(perfil, nombre, email, password, suscripcion, verificacion, email_encriptado, patrocinador) VALUES (:perfil, :nombre, :email, :password, :suscripcion, :verificacion, :email_encriptado, :patrocinador)");

		$stmt->bindParam(':perfil', $datos['perfil'], PDO::PARAM_STR);
		$stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
		$stmt->bindParam(':email', $datos['email'], PDO::PARAM_STR);
		$stmt->bindParam(':password', $datos['password'], PDO::PARAM_STR);
		$stmt->bindParam(':suscripcion', $datos['suscripcion'], PDO::PARAM_INT);
		$stmt->bindParam(':verificacion', $datos['verificacion'], PDO::PARAM_INT);
		$stmt->bindParam(':email_encriptado', $datos['email_encriptado'], PDO::PARAM_STR);
		$stmt->bindParam(':patrocinador', $datos['patrocinador'], PDO::PARAM_STR);
	
		if( $stmt->execute() ){

			return "ok";

		}else{

			return print_r(Conexion::conectar()->errorInfo());
		}

		$stmt->close();
		$stmt = null;
	}

	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/
	static public function mdlMostrarUsuarios($tabla, $item, $valor){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
		$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();
		$stmt = null;
	}
	
}