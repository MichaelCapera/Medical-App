<?php

require_once "conexion.php";

class ModelNotifications{

	/*=============================================
	=            Notifications            =
	=============================================*/
	static public function mdlShowNotifications($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null; 
	}

	/*=============================================
	=           Notifications Update           =
	=============================================*/

	static public function mdlNotificationsUpdate($tabla, $item, $valor){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_INT);

		if($stmt -> execute()){

			return  "ok";

		}else{

			return "error";
		}

		$stmt -> close();

		$stmt = null;
	}

}	