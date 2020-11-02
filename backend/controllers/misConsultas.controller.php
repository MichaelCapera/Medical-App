<?php

class MisConsultasController{

/*=============================================
=            CONSULTAS           =
=============================================*/

  public function ctrMisConsultas($item, $valor){

  	$tabla = "conceptos";

  	$respuesta = MisConsultasModel::mdlMisConsultas($tabla, $item,$valor);

  	return $respuesta;

  }



}  