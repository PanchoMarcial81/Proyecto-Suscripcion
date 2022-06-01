<?php 
class ControladorUsuarios{

	/*=============================================
	REGISTRO DE USUARIOS
	=============================================*/
	public function ctrRegistroUsuario(){

		if (isset($_POST['registroNombre'])) {

			$ruta = ControladorRuta::ctrRuta();

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

				if ($respuesta == "ok") {
					echo '<script>
						swal({
							type: "success",
							title: "!SU CUENTA HA SIDO CREADA CORRECTAMENTE!",
							text: "!Por favor revisar la bandeja de entrada o la carpeta de SPAM de su correo electrónico para verificar la cuenta!",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
						}).then(function(result){
							if(result.value){
								window.location = "'.$ruta.'ingreso";
							}
						});
					</script>';
				}
				
			}else{
				echo '<script>
					swal({
						type: "error",
						title: "!CORREGIR!",
						text: "!No se permiten caracteres especiales en ninguno de los campos!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"
					}).then(function(result){
						if(result.value){
							history.back();
						}
					});
				</script>';
			}
		}
	}

	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/
	static public function ctrMostrarUsuarios($item, $valor){
		$tabla = "usuarios";
		$respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);
		return $respuesta;
	}
	
}