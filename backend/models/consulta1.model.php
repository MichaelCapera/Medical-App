<?php

require_once "conexion.php";

class ConsultaModel1{

/*=============================================
=            Register           =
=============================================*/

static public function mdlConsulta1($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET caso = :caso, pregunta1 = :pregunta1, pregunta2 = :pregunta2  WHERE id = :id");

    
    $stmt->bindParam(":caso", $datos["caso"], PDO::PARAM_STR);
    $stmt->bindParam(":pregunta1", $datos["pregunta1"], PDO::PARAM_STR);
    $stmt->bindParam(":pregunta2", $datos["pregunta2"], PDO::PARAM_STR);
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