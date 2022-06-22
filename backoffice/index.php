<?php 

require_once "controladores/plantilla.controlador.php";
require_once "controladores/general.controlador.php";

require_once "controladores/usuarios.controlador.php";
require_once "modelos/usuarios.modelo.php";
<<<<<<< HEAD

require_once "controladores/academia.controlador.php";
require_once "modelos/academia.modelo.php";
=======
>>>>>>> e3af7611056899cbdbbca2cc887b3c965130a120

require_once "controladores/academia.controlador.php";
require_once "modelos/academia.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();