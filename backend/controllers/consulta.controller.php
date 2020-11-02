<?php

class ConsultaController{

/*=============================================
=            UPDATE           =
=============================================*/

  public function ctrConsulta(){

	if(isset($_POST["banco1"])){

		$datos = array("banco" => $_POST["banco1"],
		               "id"=>$_POST["idUsuario"]);

		$tabla = "usuarios";
		


        $respuesta = ConsultaModel::mdlConsulta($tabla, $datos);

           if($respuesta == "ok"){

				$_SESSION["id"] = $datos["id"];
				

				echo '<script>


                window.location ="index.php?page=consulta";

                 </script>';
 	    
			}

		}

		
   }

 }