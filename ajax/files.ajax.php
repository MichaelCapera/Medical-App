<?php
/*=============================================
=            UPDATE           =
=============================================*/

public $archivoMultimedia;


public function ajaxRecibirArchivos(){

	$datos = $this->archivoMultimedia;
	

	$respuesta = ConsultaController2::ctrConsulta2($datos, $ruta);

	echo $respuesta;
}

/*=============================================
=            MULTIMEDIA FILES           =
=============================================*/

if(isset($_FILES["file"])){

	$multimedia = new AjaxConsultas();
	$multimedia -> imagenMultimedia = $_FILES["file"];
	$multimedia -> ajaxRecibirArchivos();

} 