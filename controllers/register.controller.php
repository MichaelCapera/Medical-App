<?php

class RegisterController{

/*=============================================
=            Register           =
=============================================*/

 static public function ctrRegister(){

	if(isset($_POST["mailRegister"])){

		if(preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["mailRegister"]) &&
      preg_match('/^[a-zA-Z0-9]+$/', $_POST["passwordRegister"])&&($_POST["passwordRegister"]==$_POST["password1Register"])){


		    $tabla = "usuarios";
        $item = "email";
        $valor = $_POST["mailRegister"];
        

        $passwordCrypt = crypt($_POST["passwordRegister"], '$2a$07$medicalapppasswordcryptli$');

			  $datos = array("email" => $_POST["mailRegister"],
		                  "password" => $passwordCrypt);

        
        $respuesta = registerModel::mdlregister($tabla, $datos);
        $respuesta1= registerModel::mdlRegisterSelect($tabla, $item, $valor);
        


        $_SESSION["validarIngreso"]="ok";
        $_SESSION["id"] = $respuesta1["id"];
        $_SESSION["name"] = $respuesta1["nombre"];
        $_SESSION["apellido"] = $respuesta1["apellido"];
        $_SESSION["email"] = $respuesta1["email"];
        $_SESSION["edad"] = $respuesta1["edad"];
        $_SESSION["estatura"] = $respuesta1["estatura"];
        $_SESSION["estatura"] = $respuesta1["foto"];
        $_SESSION["pregunta1"] = $respuesta1["pregunta1"];
        $_SESSION["pegunta2"] = $respuesta1["pregunta2"];
        
        

      return $respuesta;

      $tabla1 = "usuarios";

      
      

      

      

		}else{

    	echo '<div class="alert alert-danger">Las contraseñas deben coincidir !!!<br>El correo y contraseña no deben llevar caracteres especiales !!!</div>';                    
    }	

		
      }

    }

    /*=============================================
=            Select Registers           =
   =============================================*/

   /*static public function ctrRegistersSelect(){

   	$tabla = "usuarios";

   	$respuesta = registerModel::mdlRegistersSelect($tabla);

   	return $respuesta;	

   }*/


}