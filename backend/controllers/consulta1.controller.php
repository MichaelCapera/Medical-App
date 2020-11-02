<?php

class ConsultaController1{

/*=============================================
=            UPDATE           =
=============================================*/

  public function ctrConsulta1(){

	if(isset($_POST["caso1"])){

		$datos = array("caso" => $_POST["caso1"],
		               "pregunta1" => $_POST["pregunta1"],
		               "pregunta2" => $_POST["pregunta2"],
                       "id"=>$_POST["idUsuario"]);

		$tabla = "usuarios";


        $respuesta = ConsultaModel1::mdlConsulta1($tabla, $datos);

           if($respuesta == "ok"){

				$_SESSION["id"] = $datos["id"];
				
				echo '<script>


                window.location ="index.php?page=consulta2";

                 </script>';
 	    
			}

		}

		
   }

 }
