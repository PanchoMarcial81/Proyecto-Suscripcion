<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BackOffice | Ventas por suscripcón</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet" href="vistas/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="vistas/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="vistas/plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="vistas/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="vistas/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="vistas/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="vistas/plugins/summernote/summernote-bs4.min.css">


	<!-- jQuery -->
	<script src="vistas/plugins/jquery/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="vistas/plugins/jquery-ui/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- ChartJS -->
	<script src="vistas/plugins/chart.js/Chart.min.js"></script>
	<!-- Sparkline -->
	<script src="vistas/plugins/sparklines/sparkline.js"></script>
	<!-- JQVMap -->
	<script src="vistas/plugins/jqvmap/jquery.vmap.min.js"></script>
	<script src="vistas/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="vistas/plugins/jquery-knob/jquery.knob.min.js"></script>
	<!-- daterangepicker -->
	<script src="vistas/plugins/moment/moment.min.js"></script>
	<script src="vistas/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="vistas/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<!-- Summernote -->
	<script src="vistas/plugins/summernote/summernote-bs4.min.js"></script>
	<!-- overlayScrollbars -->
	<script src="vistas/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
	<!-- AdminLTE App -->
	<script src="vistas/js/adminlte.js"></script>
	<!-- AdminLTE for demo purposes -->
	<!-- <script src="vistas/js/demo.js"></script> -->
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="vistas/js/pages/dashboard.js"></script>

</head>
<body class="sidebar-mini sidebar-collapse sidebar-closed" style="height: auto;">
	<div class="wrapper">

		<?php  
		include "paginas/modulos/header.php";
		include "paginas/modulos/menu.php";

		/*=============================================
		=            Páginas del sitio                =
		=============================================*/
		
		if (isset($_GET["pagina"])) {
			if ($_GET["pagina"] == "inicio" || 
				$_GET["pagina"] == "perfil" || 
				$_GET["pagina"] == "usuarios" ||
				$_GET["pagina"] == "uninivel" || 
				$_GET["pagina"] == "binaria" || 
				$_GET["pagina"] == "matriz" || 
				$_GET["pagina"] == "ingresos-uninivel" || 
				$_GET["pagina"] == "ingresos-binaria" || 
				$_GET["pagina"] == "ingresos-matriz" || 
				$_GET["pagina"] == "plan-compensacion" || 
				$_GET["pagina"] == "soporte" || 
				$_GET["pagina"] == "salir") {

				include "paginas/".$_GET["pagina"].".php";

			}else if ($_GET["pagina"] == "cuerpo-activo" || 
				$_GET["pagina"] == "mente-sana" || 
				$_GET["pagina"] == "espiritu-libre") {

				include "paginas/academia.php";

			}else{

				include "paginas/error404.php";
				
			}
		}else{
			include "paginas/inicio.php";
		}
		
		
		/*=====  End of Páginas del sitio      ======*/
		
		include "paginas/modulos/footer.php";
	?>

	<!-- Control Sidebar -->
	<aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	</aside>
	<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</body>
</html>
