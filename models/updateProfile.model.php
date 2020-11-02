<?php

require_once "conexion.php";

class UpdateModel{

/*=============================================
=            Register           =
=============================================*/

static public function mdlUpdate($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, email = :email, foto = :foto  WHERE id = :id");

    
    $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
    $stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
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