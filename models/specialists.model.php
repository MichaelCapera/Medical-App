<?php

require_once "conexion.php";

class SpecialistsModel{

	static public function mdlShowCategories($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

	}


/*=============================================
=            SHOW ESPECIALIST          =
=============================================*/	

static public function mdlShowSpecialists($tabla1, $tabla2){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla1 INNER JOIN $tabla2 ON $tabla1.id = $tabla2.id_categoria ORDER BY $tabla2.id_categoria ");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;

	}

}