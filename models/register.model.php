<?php

require_once "conexion.php";

class registerModel{

/*=============================================
=            Register           =
=============================================*/

static public function mdlregister($tabla, $datos){

	$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(email, password) VALUES (:email, :password)");

    
    $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
    $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
    
   

    if($stmt->execute()){

    	return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }

    $stmt->close();
    $stmt = null;
  
  }

/*=============================================
=            Register Select           =
=============================================*/

static public function mdlRegisterSelect($tabla, $item, $valor){

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

    $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

    $stmt->execute();

    return $stmt -> fetch();

    $stmt ->close();

    $stmt = null; 
}


}