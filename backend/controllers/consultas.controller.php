<?php

class ConsultasController{

/*=============================================
=            CONSULTAS           =
=============================================*/

  public function ctrMostrarConsultas($item, $valor){

  	$tabla = "consultas";

  	$respuesta = ConsultasModel::mdlMostrarConsultas($tabla, $item,$valor);

  	return $respuesta;

  }



}  