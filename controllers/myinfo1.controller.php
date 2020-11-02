<?php

class MyInfoController1{

/*=============================================
=            UPDATE           =
=============================================*/

  public function ctrProfileUpdate1(){

	if(isset($_POST["edad"])){

		$datos = array("edad" => $_POST["edad"],
		               "estatura" => $_POST["estatura"],
		               "peso" => $_POST["peso"],
                       "id"=>$_POST["idUsuario"]);

		$tabla = "usuarios";


        $respuesta = MyInfoModel1::mdlProfileUpdate1($tabla, $datos);

           if($respuesta == "ok"){

				$_SESSION["id"] = $datos["id"];
				$_SESSION["nombre"] = $datos["nombre"];
				$_SESSION["estatura"] = $datos["estatura"];
				$_SESSION["peso"] = $datos["peso"];
				$_SESSION["email"] = $datos["email"];
				$_SESSION["email"] = $datos["email"];
				
				echo '<script>


                window.location ="index.php?page=myinfo2";

                 </script>';
 	    
			}

		}

		
   }

 }