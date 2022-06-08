<?php 

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";

class AjaxUsuarios{
	/*=============================================
	VALIDAR EMAIL EXIXTENTE
	=============================================*/
	public $validarEmail;

	public function ajaxValidarEmail(){
		$item = "email";
		$valor = $this->validarEmail;

		$respuesta = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

		echo json_encode($respuesta);
	}
	
	/*=============================================
	SUSCRIPCION CON PAYPAL
	=============================================*/
	public $suscripcion;

	public function ajaxSuscripcion(){

		echo "HOLA";
	}
}

/*=============================================
VALIDAR EMAIL EXIXTENTE
=============================================*/
if (isset($_POST['validarEmail'])) {
	$valEmail = new AjaxUsuarios();
	$valEmail->validarEmail = $_POST['validarEmail'];
	$valEmail->ajaxValidarEmail();
}

/*=============================================
SUSCRIPCION CON PAYPAL
=============================================*/
if (isset($_POST["suscripcion"]) && $_POST["suscripcion"] == "ok") {
	$paypal = new AjaxUsuarios();
	$paypal->ajaxSuscripcion();
}