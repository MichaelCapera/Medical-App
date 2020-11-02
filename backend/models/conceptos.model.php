<?php

require_once "conexion.php";

class conceptoModel{

/*=============================================
=            Register           =
=============================================*/

static public function mdlNuevoconcepto($tabla, $datos){

	$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(idUsuario, nombre, edad, altura, peso, email, telefono, caso, pregunta1, pregunta2, multimedia, especialista, especialidad, ciudad, pais, concepto) VALUES (:idUsuario, :nombre, :edad, :altura, :peso, :email, :telefono, :caso, :pregunta1, :pregunta2, :multimedia, :especialista, :especialidad, :ciudad, :pais, :concepto )");

    
    $stmt->bindParam(":idUsuario", $datos["idUsuario"], PDO::PARAM_INT);
    $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":edad", $datos["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":altura", $datos["altura"], PDO::PARAM_STR);
    $stmt->bindParam(":peso", $datos["peso"], PDO::PARAM_STR);
    $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
    $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
    $stmt->bindParam(":caso", $datos["caso"], PDO::PARAM_STR);
    $stmt->bindParam(":pregunta1", $datos["pregunta1"], PDO::PARAM_STR);
    $stmt->bindParam(":pregunta2", $datos["pregunta2"], PDO::PARAM_STR);
    $stmt->bindParam(":multimedia", $datos["multimedia"], PDO::PARAM_STR);
    $stmt->bindParam(":especialista", $datos["especialista"], PDO::PARAM_STR);
    $stmt->bindParam(":especialidad", $datos["especialidad"], PDO::PARAM_STR);
    $stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
    $stmt->bindParam(":pais", $datos["pais"], PDO::PARAM_STR);
    $stmt->bindParam(":concepto", $datos["concepto"], PDO::PARAM_STR);
    
   

    if($stmt->execute()){

    	return "ok";

    }else{

        print_r(Conexion::conectar()->errorInfo());

    }

    $stmt->close();
    $stmt = null;
  
  }
}