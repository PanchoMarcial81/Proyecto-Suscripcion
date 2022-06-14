<?php if ($usuario["suscripcion"] == 0): ?>
	
<div class="col-12 col-md-8">
	<div class="card card-primary card-outline">
		<div class="card-header">
			<h5 class="m-0 text-uppercase text-secondary">
				<strong>Suscripción mensual $<?php echo $valorSuscripcion; ?></strong>
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

<?php else: ?>
<div class="col-12 col-md-8">
	<div class="card card-primary card-outline">
		<div class="card-header">
			<h5 class="m-0 text-uppercase text-secondary float-left"><b>Suscripción: Activa</b></h5>
			<span class="m-0 text-secondary float-right">Renovación automática el <?php echo $usuario["vencimiento"]; ?></span>
		</div>
		<div class="card-body">
			<h6 class="pb-2">Comparte tu enlace de afiliado:</h6>
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="p-2 bg-info rounded-left copiarLink" style="cursor: pointer;">Copiar</span>
				</div>
				<input type="text" class="form-control" id="linkAfiliado" value="<?php echo $ruta.$usuario["enlace_afiliado"]; ?>" readonly>
			</div>
			<h6 class="pt-3 pb-2">Cuenta de PayPal donde recibirá los pagos de comisiones:</h6>
			<div class="input-group">
				<div class="input-group-prepend">
					<div class="p-2 bg-primary rounded-left"><i class="fab fa-paypal"></i></div>
				</div>
				<input type="text" class="form-control" id="correoPaypal" value="<?php echo $usuario["paypal"]; ?>">
			</div>
		</div>
		<div class="card-footer">
			<a href="#" class="btn btn-dark float-left" target="_blank">DescargarContrato</a>
			<button class="btn btn-danger float-right cancelarSuscripcion">Cancelar suscripción</button>
		</div>

	</div>
</div>
<?php endif ?>
<?php 
if (isset($_GET["subscription_id"])) {
	
	/*=============================================
	CREAR EL ACCESS TOKEN CON LA API DE PAYPAL
	=============================================*/
	$curl1 = curl_init();

	curl_setopt_array($curl1, array(
		CURLOPT_URL => 'https://api-m.sandbox.paypal.com/v1/oauth2/token',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 300,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => 'grant_type=client_credentials',
		CURLOPT_HTTPHEADER => array(
			'Authorization: Basic QVo3Y3BsMUMyRWk2aFd6TVlKelRKNXBUd05aM2RLdExsSmh5SkhqUjV1ZU01d0Y3SlBSVFY5WDN6UUdBU25wUlJBSGFmRW5ORnhDRG9uOUU6RUgtd09NRWFWbnI1R3drZ1lVUEpaTDhrd0RRR1gtbzQ1UmF4NnQ1YnVPOVZVd18wUWNlcVdGVGt3MkYyMlpyMFN6dlNrcU1NVGN4ZDZESTc=',
			'Content-Type: application/x-www-form-urlencoded'
		),
	));

	$response = curl_exec($curl1);
	$err = curl_error($curl1);

	curl_close($curl1);

	if ($err) {
		echo "cURL Error #:".$err;
	}else{
		$respuesta1 = json_decode($response, true);

		$token = $respuesta1["access_token"];

		/*=============================================
		VALIDAR EL ESTADO DE LA SUSCRIPCIÓN
		=============================================*/
		$curl2 = curl_init();

		curl_setopt_array($curl2, array(
			CURLOPT_URL => 'https://api-m.sandbox.paypal.com/v1/billing/subscriptions/'.$_GET['subscription_id'],
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 300,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/json',
				'Authorization: Bearer '.$token
			),
		));

		$response = curl_exec($curl2);
		$err = curl_error($curl2);

		curl_close($curl2);

		if ($err) {
			echo "cURL Error #:".$err;
		}else{
			$respuesta2 = json_decode($response, true);
			
			/*=============================================
			APPROVAL_PENDING. La suscripción está creada pero aún no ha sido aprobada por el comprador.
			APPROVED. El comprador ha aprobado la suscripción.
			ACTIVE. La suscripción está activa.
			SUSPENDED. La suscripción está suspendida.
			CANCELLED. La suscripción está cancelada.
			EXPIRED. La suscripción ha caducado.
			=============================================*/
			$estado = $respuesta2["status"];

			if ($estado == "ACTIVE") {
				
				$paypal = $respuesta2["subscriber"]["email_address"];
				$suscripcion = 1;
				$id_suscripcion = $_GET['subscription_id'];
				$ciclo_pago = $respuesta2["billing_info"]["cycle_executions"][0]["cycles_completed"];
				$vencimiento = substr($respuesta2["billing_info"]["next_billing_time"], 0, -10);

				$enlace_afiliado = $_COOKIE['enlace_afiliado'];
				$patrocinador = $_COOKIE['patrocinador'];
				$pais = $_COOKIE['pais'];
				$codigo_pais = $_COOKIE['codigo_pais'];
				$telefono_movil = $_COOKIE['telefono_movil'];
				$firma = $_COOKIE['firma'];
				$fecha_contrato = substr($respuesta2["start_time"], 0, -10);

				$datos = array(	"id_usuario" => $usuario["id_usuario"],
				
								"suscripcion" => $suscripcion,
							   	"id_suscripcion" => $id_suscripcion,
							   	"ciclo_pago" => $ciclo_pago,
						       	"vencimiento" => $vencimiento,
						   		"enlace_afiliado" => $enlace_afiliado,
						   		"patrocinador" => $patrocinador,
						   		"paypal" => $paypal,
						   		"pais" => $pais,
						   		"codigo_pais" => $codigo_pais,
						   		"telefono_movil" => $telefono_movil,
						   		"firma" => $firma,
						   		"fecha_contrato" => $fecha_contrato);
				
				$iniciarSuscripcion = ControladorUsuarios::ctrIniciarSuscripcion($datos);

				if ($iniciarSuscripcion == "ok") {
					echo '<script>
						swal({
							type: "success",
							title: "¡La suscripcion se ha hecho correctamente!",
							text: "¡Bienvenido a nuestro programa de afiliados, ahora puede comenzar a ganar dinero con nosotros, visite nuestro plan de compensación",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
						}).then(function(result){
							if(result.value){
								window.location = "'.$ruta.'backoffice/perfil";
							}
						});
					</script>';
				}
			}else{
				echo '<script>
					swal({
						type: "error",
						title: "¡ERROR AL MOMENTO DE ACTIVAR LA SUSCRIPCION!",
						text: "¡Ocurrio un error al momento de activar la suscripcion, enviar un correo a info@info.com si han hecho algun desembolso de su dinero",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"
					}).then(function(result){
						if(result.value){
							window.location = "'.$ruta.'backoffice/perfil";
						}
					});
				</script>';
			}
		}
	}
}
?>