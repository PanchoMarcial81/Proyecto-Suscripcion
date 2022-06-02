<div class="col-12 col-md-8">
	<div class="card card-primary card-outline">
		<div class="card-header">
			<h5 class="m-0 text-uppercase text-secondary">
				<strong>Suscripción mensual $10</strong>
			</h5>
		</div>
		<div class="card-body">
			<h6 class="card-title">¡Tenga acceso a todo el contenido educativo!</h6>
			<br>
			<p class="card-text">Al activar su menbresía mensual ingresa a nuestro programa de afiliados, el cual podrá generar ingresos extras de forma consecutiva gracias a la red multinivel que puede hacer con nosotros, más información ingrese a la página <a href="plan-compensacion">Plan de compensación.</a></p>

			<div class="form-group">
				<label for="inputName" class="control-label">Nombre completo</label>
				<div>
					<input type="text" class="form-control" id="inputName" value="<?php echo $usuario['nombre']; ?>" readonly>
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail" class="control-label">Correo electrónico</label>
				<div>
					<input type="text" class="form-control" id="inputEmail" value="<?php echo $usuario['email']; ?>" readonly>
				</div>
			</div>

			<div class="form-group">
				<label for="inputPatrocinador" class="control-label">Patrocinador</label>
				<div>
					<input type="text" class="form-control" id="inputPatrocinador" value="<?php echo $usuario['patrocinador']; ?>" readonly>
				</div>
			</div>

			<div class="form-group">
				<label for="inputAfiliado" class="control-label">Enlace de afiliado</label>
				<span>(Compartiendo este enlace podrá ganar comisiones, más información: <a href="plan-compensacion">Plan de compensación</a>)</span>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="p-2 bg-info rounded-left">http://academyoflife.com/</span>
					</div>
					<input type="text" class="form-control" id="inputAfiliado" value="<?php echo strtolower(str_replace(" ", "-", $usuario['nombre']."-".$usuario['id_usuario'])); ?>" readonly>
				</div>
			</div>

			<div class="form-group">
				<label for="inputPais" class="control-label">País</label>
				<div>
					<select id="inputPais" class="form-control select2">
						<option value="">Seleccione su país</option>
					</select>
				</div>
			</div>

			<div class="form-group">
				<label for="inputMovil" class="control-label">Teléfono Móvil</label>
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="p-2 bg-info rounded-left dialCode"></span>
					</div>
					<input type="text" class="form-control" id="inputMovil" data-inputmask="'mask': '9 9999 9999'" data-mask>
				</div>
			</div>

			<div class="form-group">
				<label for="tipoRed" class="control-label">Tipo de Red:</label>
				<select id="tipoRed" class="form-control">
					<option value="">Seleccione su red</option>
					<option value="uninivel">Red UniNivel</option>
					<option value="binaria">Red Binaria</option>
					<option value="matriz">Red Matriz 4x4</option>
				</select>
			</div>

			<div class="form-group pb-4">
				<div class="col-sm-offset-2">
					<div class="checkbox">
						<input type="checkbox" id="aceptarTerminos">
						<label for="aceptarTerminos">
							<span></span>  Yo acepto y firmo los <a href="#terminos" data-toggle="collapse">términos y condiciones</a>
						</label>
						<a href="#terminos" data-toggle="collapse"><span class="float-left float-xl-right text-info"><b>Ver y firmar términos y condiciones</b></span></a>
					</div>
				</div>
			</div>

			<!--=============================================
			CONTRATO
			==============================================-->
			<div class="clearfix"></div>
			<div class="collapse pb-4" id="terminos">
				<div class="card">
					<div class="card-body">
						Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus aliquid quibusdam id, accusantium rem ipsa adipisci expedita tempora aut iste amet fugiat voluptas laboriosam maiores fugit quasi soluta rerum doloribus.
						Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae expedita saepe eaque laborum delectus error eveniet libero harum, perferendis, est atque officia, ea dicta! Expedita in ullam voluptatibus consequatur non.
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam omnis laudantium ipsum voluptatum sit soluta, nulla, quidem debitis, aperiam, doloremque eius modi quaerat itaque nihil corrupti perspiciatis voluptates pariatur atque!
					</div>

					<div class="card-header">
						<a href="#collapse1" data-toggle="collapse" class="card-link">
							DEFINICIONES Y ALCANCES DEL CONTRATO
						</a>
					</div>
					<div id="collapse1"  class="collapse show">
						<div class="card-body">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quam provident quisquam beatae voluptatem, placeat facilis enim. Debitis, ut, a? Inventore dolor mollitia quis! Voluptas tenetur laboriosam amet, id obcaecati.
							Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Eius optio illo velit cum cupiditate! Perspiciatis illum, blanditiis asperiores debitis eveniet suscipit cupiditate laboriosam veritatis ea ex tempora voluptatibus? Corrupti, reprehenderit!
						</div>
					</div>

					<div class="card-header">
						<a href="#collapse2" data-toggle="collapse" class="collapsed card-link">
							ESTIPULACIONES Y ACUERDOS
						</a>
					</div>
					<div id="collapse2"  class="collapse">
						<div class="card-body">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat est, aut illum dolores odio repellendus molestias voluptatibus, mollitia culpa nesciunt fuga omnis. Fugit omnis necessitatibus vitae ab ducimus hic laudantium.
						</div>
					</div>

					<div class="card-header">
						<a href="#collapse3" data-toggle="collapse" class="collapsed card-link">
							FIRMA Y FECHA DEL CONTRATO
						</a>
					</div>
					<div id="collapse3"  class="collapse">
						<div class="card-body">
							Si el DISTRIBUIDOR O VENDEDOR está de acuerdo con todas las partes este contrato se firma el <?php echo date("d/m/Y"); ?>
							<div id="signatureparent" class="mb-4">
								<div class="signature"></div>
							</div>
							<button type="button" class="repetirFirma btn btn-default btn sm">Repetir firma</button>
						</div>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2">
					<button class="btn btn-dark suscribirse">Suscribirse</button>
				</div>
			</div>
		</div>
	</div>
</div>