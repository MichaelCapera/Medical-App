<?php

require_once "../controllers/consultas.controller.php";
require_once "../models/consultas.models.php";

/*=============================================
=            ID USER           =
=============================================*/

public $idUsuario;

public function AjaxResponderConsultas(){

	$item = "idUsuario";
	$valor = $this->idUsuario;

    $respuesta = ConsultasController::ctrMostrarConsultas($item, $valor);

	echo json_encode($respuesta);

}

/*=============================================
=           CREATE CONCEPT         =
=============================================*/
if(isset($_POST["idUsuario"])){

	$editar = new AjaxResponderConsultas();
	$editar -> idUsuario = $_POST["idUsuario"];
	$editar -> ajaxCreateConcept();
}