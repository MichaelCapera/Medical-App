<?php

class ConceptoController{

/*=============================================
=            UPDATE           =
=============================================*/

  public function ctrNuevoConcepto(){

if(isset($_POST["concepto"])){

		$datos = array("idUsuario" => $_POST["idUsuario"],
		               "nombre" => $_POST["nombre"],
		               "edad" => $_POST["edad"],
		               "altura" => $_POST["altura"],
		               "peso" => $_POST["peso"],
		               "email" => $_POST["email"],
		               "telefono" => $_POST["telefono"],
		               "caso" => $_POST["caso"],
		               "pregunta1" => $_POST["pregunta1"],
		               "pregunta2" => $_POST["pregunta2"],
		               "multimedia" => $_POST["multimedia"],
		               "especialista" => $_POST["especialista"],
		               "especialidad" => $_POST["especialidad"],
		               "ciudad" => $_POST["ciudad"],
		               "pais" => $_POST["pais"],
		               "concepto" => $_POST["concepto"]);
                       
		$tabla = "conceptos";


        $respuesta = conceptoModel::mdlNuevoConcepto($tabla, $datos);

        //var_dump($respuesta);

           if($respuesta == "ok"){


                echo '<script>              

                 if(window.history.replaceState){

                    window.history.replaceState(null, null, window.location.href);

                }

                window.location ="index.php?page=profileAdmin";

                 </script>';
			}

		}

      }

}

    