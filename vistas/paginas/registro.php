<div class="ladoUsuarios">
	<div class="container-fluid">
		
		<div class="row">
			
			<div class="col-12 col-lg-4 formulario">

				<figure class="p-2 p-sm-5 p-lg-2 p-xl-3 text-center">
				
					<a href="<?php echo $ruta; ?>inicio"><img src="img/logo-positivo.png" class="img-fluid px-5"></a>

					<form class="mt-3 px-4" method="POST" onsubmit="return validarPoliticas()">

						<input type="hidden" value="academy-of-life" name="patrocinador">

						<div class="d-flex justify-content-between">
						
							<h4>Regístrate al sistema</h4>

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

						<input type="text" class="form-control my-3 py-3" name="registroNombre" placeholder="Nombre" required>

						<input type="email" class="form-control my-3 py-3" name="registroEmail" placeholder="Correo Electrónico" required>

						<input type="password" class="form-control my-3 py-3" name="registroPassword" placeholder="Contraseña" required>

						<div class="form-check-inline text-right">
							
							<input type="checkbox" id="politicas" class="form-check-input">

							<label class="form-check-label" for="politicas">
								Para registrarse debe aceptar nuestras <a href="#">políticas de privacidad</a> <span></span>
							</label>

						</div>

						<?php
							$registro = new ControladorUsuarios();
							$registro->ctrRegistroUsuario();
						?>

						<input type="submit" class="form-control my-3 py-3 btn btn-info" value="Registrarse">

						<p class="text-center py-3">¿Ya tienes una cuenta? | <a href="<?php echo $ruta; ?>ingreso">Ingresar</a></p>

					</form>

				</figure>

			</div>

			<div class="col-12 col-lg-8 fotoRegistro text-center">		

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