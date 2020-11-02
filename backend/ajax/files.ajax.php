<?php
/*=============================================
=            UPDATE           =
=============================================*/

public $archivoMultimedia;
public $rutaMultimedia;

public function ajaxRecibirArchivos(){

	$datos = $this->archivoMultimedia;
	$ruta = $this->rutaMultimedia;

	$respuesta = ConsultaController2::ctrConsulta2($datos, $ruta);

	echo $respuesta;
}