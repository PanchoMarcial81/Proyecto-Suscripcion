<?php 
/*=============================================
TRAER VIDEOS DE ACUERDO A LA CATEGORIA
=============================================*/
if (isset($_GET['pagina'])) {
	
	$item = "ruta_categoria";
	$valor = $_GET['pagina'];
	$academia = ControladorAcademia::ctrMostrarAcademia($item, $valor);
}

/*=============================================
TRAER VIDEO
=============================================*/
if (isset($_GET["video"])) {
	
	$item = "id_video";
	$valor = $_GET['video'];
	$video = ControladorAcademia::ctrMostrarVideos($item, $valor);

	if ($video["vista_gratuita"] == 0 && $usuario["suscripcion"] == 0) {
		
		echo '<script>
			window.location = "'.$ruta.'backoffice/perfil"
		</script>';

		return;
	}

	$idVideo = $video["id_video"];
	$posterVideo = $video["imagen_video"];
	$rutaVideo = $video["medios_video"];
	$tituloVideo = $video["titulo_video"];
}else{

	$idVideo = $academia[0]["id_video"];
	$posterVideo = $academia[0]["imagen_video"];
	$rutaVideo = $academia[0]["medios_video"];
	$tituloVideo = $academia[0]["titulo_video"];
}

/*=============================================
ENUMERAR LOS TITULOS DE LAS CLASES
=============================================*/
$numeroClase = 0;

foreach ($academia as $key => $value) {
	++$numeroClase;
	if ($value["id_video"] == $idVideo) {
		break;
	}
}

/*=============================================
REPRODUCIR SIGUIENTE VIDEO AUTOMATICAMENTE
=============================================*/
if (empty($academia[$numeroClase]["id_video"])) {
	$nextVideo = $academia[0]["id_video"];
}else{
	$nextVideo = $academia[$numeroClase]["id_video"];
}

?>
<div class="card card-default color-palette-box videos">
	<div class="visorVideos">
		<h5 class="text-white p-2 p-md-3 text-light w-100"><?php echo $numeroClase." - ".$tituloVideo; ?></h5>
		<video controls poster="<?php echo $posterVideo; ?>" rutaCategoria="<?php echo $_GET['pagina']; ?>" nextVideo="<?php echo $nextVideo; ?>">
			<source src="<?php echo $rutaVideo; ?>" type="video/mp4"> 
		</video>
		<i class="fas fa-bars"></i>
	</div>
	<div class="botonesVideos">
		<ul class="list-group list-group-flush">
			<?php foreach ($academia as $key => $value): ?>
				<?php if ($usuario["suscripcion"] == 1): ?>
					<li class="list-group-item list-group-item-action py-3 px-2 d-flex">
						<img src="<?php echo $value["imagen_video"]; ?>" class="img-thumbnail p-0 mr-2">
						<a href="index.php?pagina=<?php echo $value["ruta_categoria"]; ?>&video=<?php echo $value["id_video"]; ?>" class="text-muted">
							<?php echo ($key+1)." - ".$value["titulo_video"]; ?>
						</a>
					</li>
				<?php else: ?>
					<?php if ($value["vista_gratuita"] == 1): ?>
						<li class="list-group-item list-group-item-action py-3 px-2 d-flex">
							<img src="<?php echo $value["imagen_video"]; ?>" class="img-thumbnail p-0 mr-2">
							<a href="index.php?pagina=<?php echo $value["ruta_categoria"]; ?>&video=<?php echo $value["id_video"]; ?>" class="text-muted">
								<?php echo ($key+1)." - ".$value["titulo_video"]; ?>
							</a>
						</li>
					<?php endif ?>
				<?php endif ?>
			<?php endforeach ?>
		</ul>
	</div>
</div>