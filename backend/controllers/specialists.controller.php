<?php

class SpecialistController{

	public function ctrShowCategories(){

		$tabla = "categorias";

		$respuesta = SpecialistsModel::mdlShowCategories($tabla);

		return $respuesta;
	}
	
}