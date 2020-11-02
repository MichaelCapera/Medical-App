<?php

require_once "conexion.php";

class MyInfoModel{

/*=============================================
=            Register           =
=============================================*/

static public function mdlProfileUpdate($tabla, $datos){

	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, apellido = :apellido  WHERE id = :id");

    
    $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
   

    if($stmt->execute()){

    	return "ok";

    }else{

        return "error";

    }

    $stmt->close();
    $stmt = null;
  
  }

}