<?php

require_once "controllers/template.controller.php";
require_once "controllers/specialists.controller.php";
require_once "controllers/register.controller.php";
require_once "controllers/login.controller.php";
require_once "controllers/myinfo.controller.php";
require_once "controllers/myinfo1.controller.php";
require_once "controllers/myinfo2.controller.php";
require_once "controllers/consulta.controller.php";
require_once "controllers/consulta1.controller.php";
require_once "controllers/consulta2.controller.php";
require_once "controllers/updateProfile.controller.php";
require_once "controllers/notifications.controller.php";
require_once "controllers/consultas.controller.php";
require_once "controllers/conceptos.controller.php";
require_once "controllers/misConsultas.controller.php";


require_once "models/specialists.model.php";
require_once "models/conexion.php";
require_once "models/register.model.php";
require_once "models/login.model.php";
require_once "models/myinfo.model.php";
require_once "models/myinfo1.model.php";
require_once "models/myinfo2.model.php";
require_once "models/consulta.model.php";
require_once "models/consulta1.model.php";
require_once "models/updateProfile.model.php";
require_once "models/notifications.model.php";
require_once "models/consultas.models.php";
require_once "models/conceptos.model.php";
require_once "models/misConsultas.model.php";

require_once "models/rutas.php";	

$template = new TemplateController();
$template -> template();
