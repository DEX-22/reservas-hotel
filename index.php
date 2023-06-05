<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/ruta.controlador.php";
require_once "controladores/banner.controlador.php";
require_once "controladores/planes.controlador.php";
require_once "controladores/habitaciones.controlador.php";
require_once "controladores/recorrido-pueblo.controlador.php";

require_once "modelos/planes.modelo.php";
require_once "modelos/banner.modelo.php";
require_once "modelos/habitaciones.modelo.php";
require_once "modelos/recorrido-pueblo.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
