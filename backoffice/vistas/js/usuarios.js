/*=============================================
LISTADO DE PAISES
=============================================*/
$.ajax({
	url:"vistas/js/paises.json",
	type: "GET",
	success: function(respuesta){
		respuesta.forEach(seleccionarPais);
		function seleccionarPais(item, index){
			var pais =  item.name_es;
			var codPais =  item.code;
			var dial = item.dial_code;
			$("#inputPais").append(
				`<option value="`+pais+`,`+codPais+`,`+dial+`">`+pais+`</option>`
			)
		}
	}
})

/*=============================================
PLUGIN SELECT 2
=============================================*/
$(".select2").select2();

/*=============================================
AGREGAR DIAL CODE DEL PAIS
=============================================*/
$("#inputPais").change(function(){
	$(".dialCode").html($(this).val().split(",")[2]);
})

/*=============================================
MASCARA PARA NUMERO DE TELEFONO
=============================================*/
$('[data-mask]').inputmask()