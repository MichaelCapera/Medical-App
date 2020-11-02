<?php

require_once "conexion.php";

class ConsultaModel{

/*=============================================
=            Register           =
=============================================*/

static public function mdlConsulta($tabla, $datos){

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

}