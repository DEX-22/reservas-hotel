<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/ruta.controlador.php";
require_once "controladores/banner.controlador.php";
require_once "controladores/planes.controlador.php";
require_once "controladores/habitaciones.controlador.php";

require_once "modelos/planes.modelo.php";
require_once "modelos/banner.modelo.php";
require_once "modelos/habitaciones.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
