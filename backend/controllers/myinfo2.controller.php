<?php

class MyInfoController2{

/*=============================================
=            UPDATE           =
=============================================*/

  public function ctrProfileUpdate2(){

	if(isset($_POST["banco1"])){

		$datos = array("banco" => $_POST["banco1"],
		               "id"=>$_POST["idUsuario"]);

		$tabla = "usuarios";


        $respuesta = MyInfoModel2::mdlProfileUpdate2($tabla, $datos);
      
           if($respuesta == "ok"){

				$_SESSION["id"] = $datos["id"];
				$_SESSION["edad"] = $respuesta["edad"];
				$_SESSION["email"] = $respuesta["email"];
				$_SESSION["peso"] = $respuesta["peso"];
				
				

				echo '<script>


                window.location ="index.php?page=consulta";

                 </script>';
 	    
			}

		}

		
   }



 }