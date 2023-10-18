<?php

require_once "controladores/login.controller.php";
require_once "modelos/login.model.php";
require_once "controladores/plantilla.controller.php";

$Inicio = new ControladorPlantilla();

$Inicio -> ctrTraerPlantilla();