<?php

class SpecialistController{

	public function ctrShowCategories(){

		$tabla = "categorias";

		$respuesta = SpecialistsModel::mdlShowCategories($tabla);

		return $respuesta;

	}

/*=============================================
=            Show specialist           =
=============================================*/

public function ctrShowSpecialists(){

		$tabla1 = "categorias";
		$tabla2 = "especialistas";

		$respuesta = SpecialistsModel::mdlShowSpecialists($tabla1, $tabla2);

		return $respuesta;

	}

	
}

