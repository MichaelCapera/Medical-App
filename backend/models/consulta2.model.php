<?php

require_once "conexion.php";

class ConsultaModel2{

/*=============================================
=            Register           =
=============================================*/

static public function mdlConsulta2($tabla, $datos){

	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET file = :file  WHERE id = :id");

    
    $stmt->bindParam(":file", $datos["file"], PDO::PARAM_STR);
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