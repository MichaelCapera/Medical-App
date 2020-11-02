<?php

require_once "conexion.php";

class MyInfoModel1{

/*=============================================
=            Register           =
=============================================*/

static public function mdlProfileUpdate1($tabla, $datos){

	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET edad = :edad, estatura = :estatura, peso = :peso  WHERE id = :id");

    
    $stmt->bindParam(":edad", $datos["edad"], PDO::PARAM_STR);
    $stmt->bindParam(":estatura", $datos["estatura"], PDO::PARAM_STR);
    $stmt->bindParam(":peso", $datos["peso"], PDO::PARAM_STR);
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