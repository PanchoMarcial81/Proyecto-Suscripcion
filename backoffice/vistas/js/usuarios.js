/*=============================================
LISTADO DE PAISES
=============================================*/
$.ajax({
	url:"vistas/js/paises.json",
	type: "GET",
	success: function(respuesta){
		respuesta.forEach(seleccionarPais);
		function seleccionarPais(item, index){
			var pais =  item.name;
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
$('[data-mask]').inputmask();

/*=============================================
FIRMA VIRTUAL
=============================================*/
$('#signatureparent').jSignature({
	color: "#333", //line color
	lineWidth: 1, //Grosor de linea
	idth: 320, // Ancho
	height: 100 // Alto
});

$(".repetirFirma").click(function(){
	$('#signatureparent').jSignature("reset");
});

/*=============================================
VALIDAR FORMULARIO SUSCRIPCIÓN
=============================================*/
$(".suscribirse").click(function(){

	$(".alert").remove();

	var nombre = $("#inputName").val();
	var email = $("#inputEmail").val();
	var patrocinador = $("#inputPatrocinador").val();
	var enlace_afiliado = $("#inputAfiliado").val();
	var pais = $("#inputPais").val().split(",")[0];
	var codigo_pais = $("#inputPais").val().split(",")[1];
	var telefono_movil = $("#inputPais").val().split(",")[2]+" "+$("#inputMovil").val();
	var red = $("#tipoRed").val();
	var aceptarTerminos = $("#aceptarTerminos:checked").val();

	if ($('#signatureparent').jSignature("isModified")) {
		var firma = $("#signatureparent").jSignature("getData", "image/svg+xml");
	}

	/*=============================================
	VALIDAR 
	=============================================*/
	if (nombre == "" || 
		email == "" || 
		patrocinador == "" || 
		enlace_afiliado == "" || 
		pais == "" || 
		codigo_pais == "" || 
		telefono_movil == "" || 
		red == "" || 
		aceptarTerminos != "on" ||
		!$("#signatureparent").jSignature('isModified')) {

		$(".suscribirse").before(`
			<div class="alert alert-danger">Faltan datos, no ha aceptado o no ha firmado los términos y condiciones</div>
		`);

		return;
	}else{

		var datos = new FormData();
		datos.append("suscripcion", "ok");

		$.ajax({
			url: "ajax/usuarios.ajax.php",
			method: "POST",
			data: datos,
			cache: false,
			contentType: false,
			processData: false,
			success:function(respuesta){
				console.log("respuesta", respuesta);

			}
		});
	}
})

/*=============================================
TABLA USUARIOS
=============================================*/
$(".tablaUsuarios").DataTable({
	"ajax": "ajax/tabla-usuarios.ajax.php",
	"deferRender": true,
	"retrieve": true,
	"processing": true,
	"language": {

	    "sProcessing":     "Procesando...",
	    "sLengthMenu":     "Mostrar _MENU_ registros",
	    "sZeroRecords":    "No se encontraron resultados",
	    "sEmptyTable":     "Ningún dato disponible en esta tabla",
	    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
	    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
	    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
	    "sInfoPostFix":    "",
	    "sSearch":         "Buscar:",
	    "sUrl":            "",
	    "sInfoThousands":  ",",
	    "sLoadingRecords": "Cargando...",
	    "oPaginate": {
	      "sFirst":    "Primero",
	      "sLast":     "Último",
	      "sNext":     "Siguiente",
	      "sPrevious": "Anterior"
	    },
	    "oAria": {
	        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
	        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
	    }
   }
});