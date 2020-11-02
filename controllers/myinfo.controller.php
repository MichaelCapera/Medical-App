<?php

class MyInfoController{

/*=============================================
=            UPDATE           =
=============================================*/

  public function ctrProfileUpdate(){

	if(isset($_POST["nombre1"])){

		$datos = array("nombre" => $_POST["nombre1"],
		               "apellido" => $_POST["apellido1"],
                       "id"=>$_POST["idUsuario"]);

		$tabla = "usuarios";


        $respuesta = MyInfoModel::mdlProfileUpdate($tabla, $datos);

           if($respuesta == "ok"){

				$_SESSION["id"] = $datos["id"];
				$_SESSION["nombre"] = $datos["nombre"];
				$_SESSION["apellido"] = $datos["apellido"];

				echo '<script>


                window.location ="index.php?page=myinfo1";

                 </script>';
 	    
			}

		}

		
   }

 }