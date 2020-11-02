<?php

require_once "conexion.php";

class ModeloConsulta0{

/*=============================================
=            Register           =
=============================================*/

static public function mdlCreateConsulta($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(idUsuario, nombre, edad, altura, peso, email, telefono, caso, pregunta1, pregunta2, multimedia) VALUES (:idUsuario, :nombre, :edad, :altura, :peso, :email, :telefono, :caso, :pregunta1, :pregunta2, :multimedia)");

    $stmt->bindParam(":idUsuario", $datos["idUsuario"], PDO::PARAM_INT);
    $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":edad", $datos["edad"], PDO::PARAM_STR);
    $stmt->bindParam(":altura", $datos["altura"], PDO::PARAM_STR);
    $stmt->bindParam(":peso", $datos["peso"], PDO::PARAM_STR);
    $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
    $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
    $stmt->bindParam(":caso", $datos["caso"], PDO::PARAM_STR);
    $stmt->bindParam(":pregunta1", $datos["pregunta1"], PDO::PARAM_STR);
    $stmt->bindParam(":pregunta2", $datos["pregunta2"], PDO::PARAM_STR);
    $stmt->bindParam(":multimedia", $datos["multimedia"], PDO::PARAM_STR);
 
   if($stmt->execute()){

        return "ok";

    }else{

        return "error";

    }

    $stmt->close();
    $stmt = null;
  
  }

}