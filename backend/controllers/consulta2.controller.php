<?php

class ConsultaController2{

/*=============================================
=            UPDATE           =
=============================================*/

  static public function ctrConsulta2(){

if(isset($_FILES["document1"]["tmp_name"])){

/*=============================================
=            DOCUMENT VALIDATION       =
=============================================*/	

if(isset($_FILES["document1"]["tmp_name"]) && !empty($_FILES["document1"]["tmp_name"]));

list($ancho, $alto) = getimagesize($_FILES["document1"]["tmp_name"]);

$nuevoAncho = 128;
$nuevoAlto = 128; 	

/*=============================================
=            ROUTE      =
=============================================*/	
$dir = "views/assets/img/documents/";


/*=============================================
=            DOCUMENT FUNCTIONS        =
=============================================*/		

if($_FILES["document1"]["type"] == "image/jpeg"){

	$aleatorio = mt_rand(100, 9999);

	$ruta = $dir.$aleatorio.".jpg";

	$origen = imagecreatefromjpeg($_FILES["document1"]["tmp_name"]);

	$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

	imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

	imagejpeg($destino, $ruta);

}else if($_FILES["document1"]["type"] == "image/png"){

	$aleatorio = mt_rand(100, 9999);

	$ruta = $dir.$aleatorio.".png";

	$origen = imagecreatefrompng($_FILES["document1"]["tmp_name"]);

	$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

	imagealphablending($destino, FALSE);

	imagesavealpha($destino, TRUE);

	imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

	imagepng($destino, $ruta);


}else{
     

     echo '<script>


                window.location ="index.php?page=consulta1";

                 </script>';
 	    

}

		$datos = array("file" =>$ruta,
		                "id"=>$_POST["idUsuario"]);

		$tabla = "usuarios";

		


        $respuesta = ConsultaModel2::mdlConsulta2($tabla, $datos);

           if($respuesta == "ok"){

				$_SESSION["id"] = $datos["id"];
				
				echo '<script>


                window.location ="index.php?page=profile";

                 </script>';
 	    
			}

		}

		
   }

 }
