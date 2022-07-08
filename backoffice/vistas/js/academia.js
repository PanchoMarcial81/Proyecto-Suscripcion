/*=============================================
MOSTRAR - OCULTAR BOTONES DE VIDEOS
=============================================*/
var toggle = false;

$(".videos .visorVideos .fa-bars").click(function(){
	if (!toggle) {
		toggle = true;
	}else{
		toggle = false;
	}

	ocultarBotones(toggle);
})

function ocultarBotones(toggle){
	if (!toggle) {
		$(".videos .visorVideos h5").toggle("fast");
		$(".videos .botonesVideos").toggle("fast");

		if (window.matchMedia("(max-width:768px)").matches) {
			$(".videos .visorVideos").css({"width":"70%"});
		}else{
			$(".videos .visorVideos").css({"width":"75%"});
		}
	}else{
		$(".videos .visorVideos h5").toggle("fast");
		$(".videos .botonesVideos").toggle("fast");
		$(".videos .visorVideos").css({"width":"100%"});
	}
}

/*=============================================
REPRODUCIR SIGUIENTE VIDEO AUTOMATICAMENTE
=============================================*/
var rutaCategoria = $(".videos video").attr("rutaCategoria");
var nextVideo = $(".videos video").attr("nextVideo");

setInterval(function(){
	if($(".videos video")[0].ended){
		window.location = "index.php?pagina="+rutaCategoria+"&video="+nextVideo;
	}
},1000)


