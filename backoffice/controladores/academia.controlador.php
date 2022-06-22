<?php 

class ControladorAcademia{

	/*=============================================
	MOSTRAR CATEGORIAS
	=============================================*/
	static public function ctrMostrasCategorias($item, $valor){
		$tabla = "categorias";
		$respuesta = ModeloAcademia::mdlMostrarCategorias($tabla, $item, $valor);
		return $respuesta;
	}
}