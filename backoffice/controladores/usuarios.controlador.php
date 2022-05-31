<?php 
class ControladorUsuarios{

	/*=============================================
	REGISTRO DE USUARIOS
	=============================================*/
	public function ctrRegistroUsuario(){

		if (isset($_POST['registroNombre'])) {

			if (preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['registroNombre']) &&
				preg_match('/^[^0-9][a-zA-Z0-9-]+([.][a-zA-Z0-9-]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["registroEmail"]) &&
				preg_match('/^[a-zA-Z0-9]+$/', $_POST['registroPassword'])) {
				
				$encriptarEmail = md5($_POST["registroEmail"]);

				$tabla = "usuarios";
				$datos = array(	"perfil"=>"usuario",
							   	"nombre"=>$_POST["registroNombre"],
								"email"=>$_POST["registroEmail"],
								"password"=>$_POST["registroPassword"],
								"suscripcion"=>0,
								"verificacion"=>0,
								"email_encriptado"=>$encriptarEmail,
								"patrocinador"=>$_POST["patrocinador"]);

				$respuesta = ModeloUsuarios::mdlRegistroUsuario($tabla, $datos);
				
			}else{
				echo "¡No se permite caracteres epeciales en ninguno de los campos!";
			}
		}
	}
}