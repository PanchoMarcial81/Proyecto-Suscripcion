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
				$encriptarPassword = crypt($_POST['registroPassword'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$tabla = "usuarios";
				$datos = array(	"perfil"=>"usuario",
							   	"nombre"=>$_POST["registroNombre"],
								"email"=>$_POST["registroEmail"],
								"password"=>$encriptarPassword,
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

				$encriptar = crypt($_POST["ingresoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
				
				$tabla = "usuarios";
				$item = "email";
				$valor = $_POST["ingresoEmail"];

				$respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

				if ($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $encriptar) {
					
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

			$fotoActual = $_POST["fotoActual"];

			if (isset($_FILES["cambiarImagen"]["tmp_name"]) && !empty($_FILES["cambiarImagen"]["tmp_name"])) {

				if ($_FILES["cambiarImagen"]["type"] != "image/jpeg" && $_FILES["cambiarImagen"]["type"] != "image/png") {
					echo '<script>
					 
					    swal({
					        type:"error",
					          title: "¡CORREGIR!",
					          text: "¡No se permiten formatos diferentes a JPG y/o PNG!",
					          showConfirmButton: true,
					        confirmButtonText: "Cerrar"
					        
					    }).then(function(result){
					 
					        if(result.value){   
					            history.back();
					        } 
					    });
					 
					</script>';
					 
					return;
				}

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
				if ($fotoActual != "") {

					unlink($fotoActual);

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
					$fotoActual = $directorio."/".$aleatorio.".jpg";
					$origen = imagecreatefromjpeg($_FILES["cambiarImagen"]["tmp_name"]);
					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
					imagejpeg($destino, $fotoActual);

				}else if ($_FILES["cambiarImagen"]["type"] == "image/png") {

					$aleatorio = mt_rand(100, 999);
					$fotoActual = $directorio."/".$aleatorio.".png";
					$origen = imagecreatefrompng($_FILES["cambiarImagen"]["tmp_name"]);	
					$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
					imagealphablending($destino, FALSE);
					imagesavealpha($destino, TRUE);
					imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
					imagepng($destino, $fotoActual);

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
			$valor = $fotoActual;

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

	/*=============================================
	CAMBIAR CONTRASEÑA
	=============================================*/
	public function ctrCambiarFotoPassword(){
		if (isset($_POST["idUsuarioPassword"])) {

			if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['editarPassword'])) {

				$encriptar = crypt($_POST['editarPassword'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
				$tabla = "usuarios";
				$id = $_POST["idUsuarioPassword"];
				$item = "password";
				$valor = $encriptar;

				$respuesta = ModeloUsuarios::mdlActualizarUsuarios($tabla, $id, $item, $valor);

				if ($respuesta == "ok") {
					echo '<script>
						swal({
							type: "success",
							title: "!CORRECTO!",
							text: "!La contraseña ha sido actualizada!",
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
				        type:"error",
				          title: "¡CORREGIR!",
				          text: "¡No se permiten caracteres especiales en la contraseña!",
				          showConfirmButton: true,
				        confirmButtonText: "Cerrar"
				        
				    }).then(function(result){
				 
				        if(result.value){   
				            history.back();
				          } 
				    });
				 
				</script>';
				 
				return;
			}
		}
	}

	/*=============================================
	RECUPERAR CONTRASEÑA
	=============================================*/
	public function ctrRecuperarPassword(){
		if (isset($_POST["emailRecuperarPassword"])) {
			if (preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["emailRecuperarPassword"])) {
				/*=============================================
				GENERAR CONTRASEÑA ALEATORIA
				=============================================*/
				function generarPassword($longitud){
					$password = "";
					$patron = "1234567890abcdefghijklmnopqrstuvwxyz";
					$max = strlen($patron)-1;

					for ($i=0; $i < $longitud; $i++) { 
						$password .= $patron{mt_rand(0, $max)};
					}

					return $password;
				}

				$nuevaPassword = generarPassword(11);

				$encriptar = crypt($nuevaPassword, '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

				$tabla = "usuarios";
				$item = "email";
				$valor = $_POST["emailRecuperarPassword"];

				$traerUsuario = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

				if ($traerUsuario) {
					$id = $traerUsuario["id_usuario"];
					$item = "password";
					$valor = $encriptar;

					$actualizarPassword = ModeloUsuarios::mdlActualizarUsuarios($tabla, $id, $item, $valor);

					if ($actualizarPassword == "ok") {

						/*=============================================
						VERIFICACION CORREO ELECTRÓNICO
						=============================================*/
						$ruta = ControladorRuta::ctrRuta();

						date_default_timezone_set("America/Santiago");
						$mail = new PHPMailer;

						$mail->CharSet = "UTF-8";
						$mail->isMail();
						$mail->setFrom("info@info.com". "Academy of Life");
						$mail->addReplyTo("info@info.com". "Academy of Life");
						$mail->Subject = "Solicitud nueva contraseña";
						$mail->addAddress($traerUsuario['email']);
						$mail->msgHTML('
							<div style="width:100%; background:#eee; position:relative; font-family:sans-serif; padding-bottom:40px">
	
								<center>
									
									<img style="padding:20px; width:10%" src="https://tutorialesatualcance.com/tienda/logo.png">

								</center>

								<div style="position:relative; margin:auto; width:600px; background:white; padding:20px">
								
									<center>
									
									<img style="padding:20px; width:15%" src="https://tutorialesatualcance.com/tienda/icon-pass.png">

									<h3 style="font-weight:100; color:#999">SOLICITUD DE NUEVA CONTRASEÑA</h3>

									<hr style="border:1px solid #ccc; width:80%">

									<h4 style="font-weight:100; color:#999; padding:0 20px"><strong>Su nueva contraseña: </strong>'.$nuevaPassword.'</h4>

									<a href="'.$ruta.'ingreso" target="_blank" style="text-decoration:none">

									<div style="line-height:30px; background:#0aa; width:60%; padding:20px; color:white">			
										Haz click aquí
									</div>

									</a>

									<h4 style="font-weight:100; color:#999; padding:0 20px">Ingrese nuevamente al sitio con esta contraseña y recuerde cambiarla en el panel de perfil de usuario</h4>

									<br>

									<hr style="border:1px solid #ccc; width:80%">

									<h5 style="font-weight:100; color:#999">Si no se inscribió en esta cuenta, puede ignorar este correo electrónico y la cuenta se eliminará.</h5>

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
									text: "!Ha ocurrido un problema enviando verificación de correo electrónico a '.$traerUsuario["email"].' '.$mail->ErrorInfo.', por favor inténtelo nuevamente!",
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
									title: "!SU CONTRASEÑA NUEVA HA SIDO CREADA CORRECTAMENTE!",
									text: "!Por favor revisar la bandeja de entrada o la carpeta de SPAM de su correo electrónico para tomar la nueva contraseña!",
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
					        type:"error",
					          title: "¡CORREGIR!",
					          text: "¡El correo no existe en el sistema, puede registrarse nuevamente con ese correo!",
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
				        type:"error",
				          title: "¡CORREGIR!",
				          text: "¡Error al escribir el correo!",
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