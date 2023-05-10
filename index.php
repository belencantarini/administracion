<?php 
require_once "./controladores/plantilla.controlador.php";
require_once "./controladores/sweetalert.controlador.php";

$plantilla = new ControladorPlantilla();
$plantilla ->ctrGetPlantilla();

require_once "./controladores/spinner.controlador.php";

?>