<div class="col-12 col-md-4">
	<div class="card card-info card-outline">
		<div class="card-body box-profile">
			<div class="text-center">
				<img src="vistas/img/usuarios/default/default.png" alt="" class="profile-user-img img-fluid img-circle">
			</div>
			<h3 class="profile-username text-center">
				<?php echo $usuario['nombre']; ?>
			</h3>
			<p class="text-muted text-center">
				<?php echo $usuario['email']; ?>
			</p>
			<div class="text-center">
				<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#cambiarFoto">Cambiar foto</button>
				<button class="btn btn-purple btn-sm">Cambiar contraseña</button>
			</div>
		</div>
		<div class="card-footer">
			<button class="btn btn-default float-right">Eliminar cuenta</button>
		</div>
	</div>
	
</div>


<!-- Modal -->
<div id="cambiarFoto" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">

    <form method="post" enctype="multipart/form-data">
      <div class="modal-header">
      	<h4 class="modal-title">Cambiar imagen</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
      	<input type="hidden" name="idUsuarioFoto" value="<?php echo $usuario["id_usuario"]; ?>">
        <div class="form-group">
        	<input type="file" class="form-control-file border" name="cambiarImagen" required>
        	<input type="hidden" name="fotoActual" value="<?php echo $usuario["foto"]; ?>">
        </div>
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