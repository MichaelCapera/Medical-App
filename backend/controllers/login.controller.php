<?php

class LoginController{

/*=============================================
=            Login           =
=============================================*/

 public function ctrLogin(){

    $ruta = "views/assets/img/users/brains.png";

 	if(isset($_POST["loginEmail"])){

 		$tabla = "administradores";
 		$item = "email";
 		$valor = $_POST["loginEmail"];



 		$respuesta = LoginModel::mdlLoginSelect($tabla, $item, $valor);
        
        $passwordCrypt = crypt($_POST["loginPassword"], '$2a$07$medicalapppasswordcryptli$');

 	    if($respuesta["email"] == $_POST["loginEmail"] && $respuesta["password"] == $passwordCrypt){

 	    	$_SESSION["validarIngreso"]="ok";
            $_SESSION["id"]= $respuesta["id"];
            $_SESSION["nombre"]= $respuesta["nombre"];
            $_SESSION["email"]= $respuesta["email"];
            $_SESSION["foto"]=  $respuesta["foto"];
            $_SESSION["password"]= $respuesta["password"];
            $_SESSION["ruta"]= $ruta;


 	    	echo '<script>

                if(window.history.replaceState){

                    window.history.replaceState(null, null, window.location.href);

                }

                window.location ="index.php?page=adminProfile";

                 </script>';
 	    
 	    }else{

            echo '<script>

                if(window.history.replaceState){

                    window.history.replaceState(null, null, window.location.href);

                }

                 </script>';
             
             echo '<div	class="alert alert-danger">Usuario o contraseña incorrectos</div>';	                   

 	    }

 	}	

 }

 /*=============================================
=            Login           =
=============================================*/

}