<?php

class UpdateController{

/*=============================================
=            UPDATE           =
=============================================*/

  public function ctrUpdate(){

	if(isset($_POST["nombre2"])){

/*=============================================
=            PHOTO VALIDATOR           =
=============================================*/		

		if(isset($_FILES["fotoPerfil"]["tmp_name"])&& !empty($_FILES["fotoPerfil"]["tmp_name"])){

/*=============================================
=            SIZE PHOTO CAPTURE           =
=============================================*/				

			list($ancho, $alto) = getimagesize(($_FILES["fotoPerfil"]["tmp_name"]));

			$nuevoAncho = 128;
			$nuevoAlto = 128;

/*=============================================
=            PHOTO DIRECTORY           =
=============================================*/	

           $directorio= "views/assets/img/profiles/";

/*=============================================
=            FILTERS         =
=============================================*/	

           if($_FILES["fotoPerfil"]["type"] == "image/jpeg"){

           	 $aleatorio = mt_rand(100, 9999);

           	 $ruta = $directorio.$aleatorio.".jpg";

           	 $origen = imagecreatefromjpeg($_FILES["fotoPerfil"]["tmp_name"]);

           	 $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

           	 imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

           	 imagejpeg($destino, $ruta);

           }else if ($_FILES["fotoPerfil"]["type"] == "image/png"){

           	$aleatorio = mt_rand(100, 9999);

           	$ruta = $directorio.$aleatorio.".png";

           	$origen = imagecreatefromjpng($_FILES["fotoPerfil"]["tmp_name"]);

           	$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

           	imagealphablending($destino, FALSE);

           	imagesavealpha($destino, TRUE);

           	imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

           	imagejpng($destino, $ruta);
           
           }else{

           	return "error-formato";


           }           



		}else{

			$ruta = "views/assets/img/users/brains.png";
		}

		$datos = array("nombre" => $_POST["nombre2"],
		               "email" => $_POST["email2"],
		               "foto" => $ruta,
                       "id"=>$_POST["idUsuario"]);

		$tabla = "usuarios";


        $respuesta = UpdateModel::mdlUpdate($tabla, $datos);

           if($respuesta == "ok"){

				$_SESSION["id"] = $datos["id"];
				$_SESSION["nombre"] = $datos["nombre"];
				$_SESSION["email"] = $datos["email"];
				$_SESSION["foto"] = $datos["foto"];

				echo '<script>


                window.location ="index.php?page=profile";

                 </script>';

                 

 	    
			}

		}

		
   }

 }