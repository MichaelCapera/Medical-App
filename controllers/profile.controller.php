<?php

class ProfileController{

/*=============================================
=            CONCEPT           =
=============================================*/

  public function ctrShowProfile($item, $valor){

  	$tabla = "usuarios";

    $respuesta = ProfileModel::mdlShowProfile($tabla, $item, $valor);

  	return $respuesta;

  }

}  