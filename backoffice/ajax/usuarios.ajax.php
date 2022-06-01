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
	
}

/*=============================================
VALIDAR EMAIL EXIXTENTE
=============================================*/
if (isset($_POST['validarEmail'])) {
	$valEmail = new AjaxUsuarios();
	$valEmail->validarEmail = $_POST['validarEmail'];
	$valEmail->ajaxValidarEmail();
}