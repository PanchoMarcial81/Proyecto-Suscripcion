<?php 

$categorias = ControladorAcademia::ctrMostrasCategorias(null, null);
$item = null;
$valor = null;

foreach ($categorias as $key => $value) {
  if (isset($_GET["pagina"]) && $_GET["pagina"] == $value["ruta_categoria"]) {
    $item = "ruta_categoria";
    $valor = $value["ruta_categoria"];
  }
}

$academia = ControladorAcademia::ctrMostrarAcademia($item, $valor);
$listaCategorias = array();
$rutaCategorias = array();
$iconosCategorias = array();
$coloresCategorias = array();


foreach ($academia as $key => $value) {
  array_push($listaCategorias, $value["nombre_categoria"]);
  array_push($rutaCategorias, $value["ruta_categoria"]);
  array_push($iconosCategorias, $value["icono_categoria"]);
  array_push($coloresCategorias, $value["color_categoria"]);
}

$listaCategorias = array_unique($listaCategorias);

?>

<?php foreach ($listaCategorias as $key => $value): ?>
<!-- Default box -->
<div class="card card-<?php echo $coloresCategorias[$key]; ?> card-outline">
  <div class="card-header">
    <h3 class="card-title">
      <a href="<?php echo $rutaCategorias[$key]; ?>" class="text-muted">
        <i class="<?php echo $iconosCategorias[$key]; ?> text-<?php echo $coloresCategorias[$key]; ?>"></i> <?php echo $value; ?>
      </a>
    </h3>

    <div class="card-tools">
      <button type="button" class="btn btn-<?php echo $coloresCategorias[$key]; ?> btn-sm" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
    </div>
  </div>
  <div class="card-body">
    <div class="jd-slider slideAcademia">
      <div class="slide-inner">
        <ul class="slide-area">
          <li>
            <a href="<?php echo $value; ?>">
              <figure class="px-4 activado">
                <img src="vistas/img/cuerpo-activo/01-imagen.jpg" alt="">
              </figure>
              <h6 class="text-center text-secondary">Lorem ipsum </h6>
            </a>
          </li>

          <li>
            <a href="<?php echo $rutaCategorias[$key]; ?>">
              <figure class="px-4 activado">
                <img src="vistas/img/cuerpo-activo/02-imagen.jpg" alt="">
              </figure>
              <h6 class="text-center text-secondary">Lorem ipsum </h6>
            </a>
          </li>

          <li>
            <a href="<?php echo $rutaCategorias[$key]; ?>">
              <figure class="px-4 activado">
                <img src="vistas/img/cuerpo-activo/03-imagen.jpg" alt="">
              </figure>
              <h6 class="text-center text-secondary">Lorem ipsum </h6>
            </a>
          </li>

          <li>
            <a href="perfil">
              <figure class="px-4 desactivado">
                <img src="vistas/img/cuerpo-activo/04-imagen.jpg" alt="">
              </figure>
              <h6 class="text-center text-secondary">Lorem ipsum </h6>
            </a>
          </li>

          <li>
            <a href="perfil">
              <figure class="px-4 desactivado">
                <img src="vistas/img/cuerpo-activo/05-imagen.jpg" alt="">
              </figure>
              <h6 class="text-center text-secondary">Lorem ipsum </h6>
            </a>
          </li>

          <li>
            <a href="perfil">
              <figure class="px-4 desactivado">
                <img src="vistas/img/cuerpo-activo/06-imagen.jpg" alt="">
              </figure>
              <h6 class="text-center text-secondary">Lorem ipsum </h6>
            </a>
          </li>
        </ul>
        <a class="prev" href="#" >
          <i class="fas fa-angle-left text-muted"></i>
        </a>
        <a class="next" href="#" >
          <i class="fas fa-angle-right text-muted"></i>
        </a>
      </div>
      <div class="controller">
        <div class="indicate-area"></div>
      </div>
    </div>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
<?php endforeach ?>