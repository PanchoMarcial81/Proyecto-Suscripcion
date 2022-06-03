<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ControladorUsuarios{

	/*=============================================
	REGISTRO DE USUARIO
	=============================================*/
	public function ctrRegistroUsuario(){

		if (isset($_POST['registroNombre'])) {

			$ruta = ControladorRuta::ctrRuta();

			if (preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['registroNombre']) &&
				preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["registroEmail"]) &&
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

					/*=============================================
					VERIFICACION CORREO ELECTRÓNICO
					=============================================*/
					date_default_timezone_set("America/Santiago");
					$mail = new PHPMailer;

					$mail->CharSet = "UTF-8";
					$mail->isMail();
					$mail->setFrom("info@info.com". "Academy of Life");
					$mail->addReplyTo("info@info.com". "Academy of Life");
					$mail->Subject = "Por favor verificar su dirección de correo electrónico";
					$mail->addAddress($_POST['registroEmail']);
					$mail->msgHTML('
						<div style="width:100%; background:#eee; position:relative; font-family:sans-serif; padding-bottom:40px">
							<center>	
								<img style="padding:20px; width:10%" src="https://tutorialesatualcance.com/tienda/logo.png">
							</center>
							<div style="position:relative; margin:auto; width:600px; background:white; padding:20px">	
								<center>
									<img style="padding:20px; width:15%" src="https://tutorialesatualcance.com/tienda/icon-email.png">
									<h3 style="font-weight:100; color:#999">VERIFIQUE SU DIRECCIÓN DE CORREO ELECTRÓNICO</h3>
									<hr style="border:1px solid #ccc; width:80%">
									<h4 style="font-weight:100; color:#999; padding:0 20px">Para comenzar a usar su cuenta, debe confirmar su dirección de correo electrónico</h4>
									<a href="'.$ruta.$encriptarEmail.'" target="_blank" style="text-decoration:none">			
										<div style="line-height:60px; background:#0aa; width:60%; color:white">Verifique su dirección de correo electrónico</div>
									</a>
									<br>
									<hr style="border:1px solid #ccc; width:80%">
									<h5 style="font-weight:100; color:#999">Si no se inscribió en esta cuenta, puede ignorar este correo electrónico y eliminarlo.</h5>
								</center>	
							</div>
						</div>
					');

					$envio = $mail->Send();

					if (!$envio) {
						echo '<script>
							swal({
								type: "error",
								title: "!ERROR!",
								text: "!Ha ocurrido un problema enviando verificación de correo electrónico a '.$_POST["registroEmail"].' '.$mail->ErrorInfo.', por favor inténtelo nuevamente!",
								showConfirmButton: true,
								confirmButtonText: "Cerrar"
							}).then(function(result){
								if(result.value){
									history.back();
								}
							});
						</script>';
					}else{
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
	
	/*=============================================
	ACTUALIZAR USUARIO
	=============================================*/
	static public function ctrActualizarUsuario($id, $item, $valor){
		$tabla = "usuarios";
		$respuesta = ModeloUsuarios::mdlActualizarUsuarios($tabla, $id, $item, $valor);
		return $respuesta;
	}

	/*=============================================
	INGRESO USUARIO
	=============================================*/
	public function ctrIngresoUsuario(){
		if (isset($_POST["ingresoEmail"])) {
			if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["ingresoEmail"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST['ingresoPassword'])) {
				
				$tabla = "usuarios";
				$item = "email";
				$valor = $_POST["ingresoEmail"];

				$respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

				if ($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST['ingresoPassword']) {
					
					if ($respuesta["verificacion"] == 0) {
						echo '<script>
							swal({
								type: "error",
								title: "!ERROR!",
								text: "!El correo electrónico aún no ha sido verificado, por favor revise la bandeja de entreda o la carpeta de SPAM de su correo electrónico para verificar la cuenta, o contáctese con nuestro soporte a info@info.com!",
								showConfirmButton: true,
								confirmButtonText: "Cerrar"
							}).then(function(result){
								if(result.value){
									history.back();
								}
							});
						</script>';
					}else{

						$_SESSION['validarSesion'] = "ok";
						$_SESSION['id'] = $respuesta['id_usuario'];

						$ruta = ControladorRuta::ctrRuta();
						echo '
							<script>
								window.location = "'.$ruta.'backoffice";
							</script>
						';
					}
				}else{
					echo '<script>
						swal({
							type: "error",
							title: "!ERROR!",
							text: "!El email o contraseña no coinciden!",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
						}).then(function(result){
							if(result.value){
								history.back();
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
	CAMBIAR FOTO PERFIL
	=============================================*/
	public function ctrCambiarFotoPerfil(){

		if (isset($_POST["idUsuarioFoto"])) {

			$ruta = $_POST["fotoActual"];

			if (isset($_FILES["cambiarImagen"]["tmp_name"]) && !empty($_FILES["cambiarImagen"]["tmp_name"])) {

				list($ancho, $alto) = getimagesize($_FILES["cambiarImagen"]["tmp_name"]);
				$nuevoAncho = 500;
				$nuevoAlto = 500;

				/*=============================================
				CREAR DIRECTORIO PARA GUARDAR LA FOTO
				=============================================*/
				$directorio = "vistas/img/usuarios/".$_POST["idUsuarioFoto"];

				/*=============================================
				VERIFICAR SI EXISTE IMAGEN Y CARPETA
				=============================================*/
				if ($ruta != "") {

					unlink($ruta);

				}else{
					if (!file_exists($directorio)) {

						mkdir($directorio, 0755);

					}
				}

				/*=============================================
				APLICAMOS FUNCION POR TIPO DE IMAGEN DE PHP
				=============================================*/
				if ($_FILES["cambiarImagen"]["type"] == "image/jpeg") {

					$aleatorio = mt_rand(100, 999);
					$ruta = $directorio."/".$aleatorio.".jpg";
					$origen = imagecreatefromjpeg($_FILES["cambiarImagen"]["tmp_name"]);
					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
					imagejpeg($destino, $ruta);

				}else if ($_FILES["cambiarImagen"]["type"] == "image/png") {

					$aleatorio = mt_rand(100, 999);
					$ruta = $directorio."/".$aleatorio.".png";
					$origen = imagecreatefrompng($_FILES["cambiarImagen"]["tmp_name"]);	
					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
					imagealphablending($destino, FALSE);
					imagesavealpha($destino, TRUE);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
					imagepng($destino, $ruta);

				}else{
					echo '<script>
						swal({
							type: "error",
							title: "!CORREGIR!",
							text: "!No se permiten formatos diferentes a JPG y/o PNG!",
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

			// Final condicion

			$tabla = "usuarios";
			$id = $_POST["idUsuarioFoto"];
			$item = "foto";
			$valor = $ruta;

			$respuesta = ModeloUsuarios::mdlActualizarUsuarios($tabla, $id, $item, $valor);

			if ($respuesta == "ok") {
				echo '<script>
					swal({
						type: "success",
						title: "!CORRECTO!",
						text: "!La foto de perfil ha sido actualizada!",
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
}