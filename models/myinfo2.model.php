<?php

require_once "conexion.php";

class MyInfoModel2{

/*=============================================
=            Register           =
=============================================*/

static public function mdlProfileUpdate2($tabla, $datos){

	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET banco = :banco  WHERE id = :id");

    
    $stmt->bindParam(":banco", $datos["banco"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
   

    if($stmt->execute()){

    	return "ok";

    }else{

        return "error";

    }

    $stmt->close();
    $stmt = null;
  
  }

  /*=============================================
=            Register Select           =
=============================================*/

static public function mdlRegisterSelect2($tabla, $item, $valor){

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

    $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

    $stmt->execute();

    return $stmt -> fetch();

    $stmt ->close();

    $stmt = null; 
}

}