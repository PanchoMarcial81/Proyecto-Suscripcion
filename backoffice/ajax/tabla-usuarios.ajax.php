<?php 

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";

class TablaUsuarios{
	public function mostrarTabla(){

		$item = null;
		$valor = null;
		$usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

		if (count($usuarios) == 0) {
			echo '{"data":[]}';
			return;
		}

		$datosJson = '{"data":[';

		foreach ($usuarios as $key => $value) {

			if ($value["foto"] == "") {
				$foto = "<img src='vistas/img/usuarios/default/default.png' class='img-fluid' width='30px' alt=''>";
			}else{
				$foto = "<img src='".$value["foto"]."' class='img-fluid' width='30px' alt=''>";
			}

			$datosJson .= '[
				"'.($key+1).'",
	            "'.$foto.'",
	            "'.$value["nombre"].'",
	            "'.$value["email"].'",
	            "'.$value["pais"].'",
	            "'.$value["suscripcion"].'",
	            "'.$value["id_suscripcion"].'",
                "'.$value["ciclo_pago"].'",
                "'.$value["enlace_afiliado"].'",
                "'.$value["patrocinador"].'",
                "'.$value["paypal"].'",
                "'.$value["fecha"].'",
                "'.$value["vencimiento"].'"
			],';
		}

		$datosJson = substr($datosJson, 0, -1);

		$datosJson .= ']}';

		echo $datosJson;
	}
}

$activarTabla = new TablaUsuarios();
$activarTabla->mostrarTabla();