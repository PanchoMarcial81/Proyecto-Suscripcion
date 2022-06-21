<div class="ladoUsuarios">
	<div class="container-fluid">
		
		<div class="row">
			
			<div class="col-12 col-lg-4 formulario">

				<figure class="p-2 p-sm-5 p-lg-4 p-xl-5 text-center">
				
					<a href="<?php echo $ruta; ?>inicio"><img src="img/logo-positivo.png" class="img-fluid"></a>

					<form class="mt-5" method="POST">

						<div class="d-flex justify-content-between">
						
							<h4>Ingreso al sistema</h4>

							<!-- <div class="dropdown text-right">

								<button type="button" class="btn btn-light btn-sm dropdown-toggle border" data-toggle="dropdown">
								ES
								</button>

								<div class="dropdown-menu">

									<a class="dropdown-item" href="#">EN</a>

								</div>

							</div>
 -->
						</div>

						<p class="text-center py-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi sunt officia unde officiis</p>

						<input type="email" class="form-control my-3 py-3" name="ingresoEmail" placeholder="Correo Electrónico" required>

						<input type="password" class="form-control my-3 py-3" name="ingresoPassword" placeholder="Contraseña" required>

						<?php 

							$ingreso = new ControladorUsuarios();
							$ingreso->ctrIngresoUsuario();

						?>

						<input type="submit" class="form-control my-3 py-3 btn btn-info" value="Ingresar">

						<p class="text-center pt-2">¿Aún no tienes una cuenta? | <a href="<?php echo $ruta; ?>registro">Regístrate</a></p>

						<p class="text-center pt-2">
							<a href="#modalRecuperarPassword" data-toggle="modal" data-dismiss="modal">¿Olvidó su contraseña?</a>
						</p>


					</form>

				</figure>

			</div>

			<div class="col-12 col-lg-8 fotoIngreso text-center">		

				<a href="<?php echo $ruta; ?>inicio"><button class="d-none d-lg-block text-center btn btn-default btn-lg my-3 text-white btnRegresar">Regresar</button></a>

				<a href="<?php echo $ruta; ?>inicio"><button class="d-block d-lg-none text-center btn btn-default btn-lg btn-block my-3 text-white btnRegresarMovil">Regresar</button></a>

				<ul class="p-0 m-0 py-4 d-flex justify-content-center redesSociales">

					<li>
						<a href="#" target="_blank"><i class="fab fa-facebook-f lead text-white mx-4"></i></a>
					</li>

					<li>
						<a href="#" target="_blank"><i class="fab fa-instagram lead text-white mx-4"></i></a>
					</li>	

					
					<li>
						<a href="#" target="_blank"><i class="fab fa-linkedin lead text-white mx-4"></i></a>
					</li>

					<li>
						<a href="#" target="_blank"><i class="fab fa-twitter lead text-white mx-4"></i></a>
					</li>

					<li>
						<a href="#" target="_blank"><i class="fab fa-youtube lead text-white mx-4"></i></a>
					</li>

				</ul>

			</div>

		</div>

	</div>
</div>

<!-- ====================================================
RECUPERAR CONTRASEÑA
======================================================-->
<div id="modalRecuperarPassword" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">

	    <form method="post" enctype="multipart/form-data">
	      <div class="modal-header">
	      	<h4 class="modal-title">Recuperar contraseña</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>

	      <div class="modal-body">
	      	
	      	<form action="post">
	      		<p class="text-muted">Escriba su correo electronico con el que está registrado y allí le enviaremos una nueva contraseña:</p>
	      		<div class="input-group mb-3">
	      			<div class="input-group-prepend">
	      				<span class="input-group-text">
	      					<i class="far fa-envelope"></i>
	      				</span>
	      			</div>
	      			<input type="email" class="form-control" placeholder="Email" name="emailRecuperarPassword" required>
	      		</div>

	      		<input type="submit" class="btn btn-dark btn-block" value="Enviar">

	      		<?php 

	      		$recuperarPassword= new ControladorUsuarios();
	      		$recuperarPassword->ctrRecuperarPassword();

	      		?>
	      	</form>
	      </div>

	      <div class="modal-footer d-flex justify-content-between">
	      	<div>
	      		<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	      	</div>
	        <div>
	      		<button type="submit" class="btn btn-primary">Enviar</button>
	      	</div>
	      </div>

	      <?php 

	      	$cambiarImagen = new ControladorUsuarios();
	      	$cambiarImagen->ctrCambiarFotoPerfil();

	      ?>
	    </form>
    </div>
  </div>
</div>