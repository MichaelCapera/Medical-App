<?php

require_once "conexion.php";

class SpecialistsModel{

	static public function mdlShowCategories($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

	}
}