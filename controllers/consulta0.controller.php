<?php

class ConsultaController0{

/*=============================================
  	   Updload Multimedia
=============================================*/		

	static public function ctrConsulta0($datos, $ruta){

		if(isset($datos["tmp_name"]) && !empty($datos["tmp_name"])){

/*=============================================
  	   Files Size
=============================================*/

    list($ancho, $alto) = getimagesize($datos["tmp_name"]);

    $nuevoAncho = 1000;
    $nuevoAlto = 1000;

/*=============================================
  	   Files Directory
=============================================*/

    $directorio ="../views/assets/img/files".$ruta;

/*=============================================
  	   Create Directory if doesn't exist
=============================================*/


    if (!file_exists($directorio)){

    	mkdir($directorio, 0755);
    }

/*=============================================
  	   Functions respect the type of file
=============================================*/

    if($datos["type"] =="image/jpeg"){

/*=============================================
  	   Save File in the directory
=============================================*/

    //$aleatorio = mt_rand(100, 999);

    $rutaMultimedia = $directorio."/".$datos["name"];

    $origen = imagecreatefromjpeg($datos["tmp_name"]);

    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

    imagejpeg($destino, $rutaMultimedia);

    } 

    if($datos["type"]=="image/png"){

/*=============================================
  	   Save File in the directory
=============================================*/
    
    //$aleatorio = mt_rand(100, 999);

    $rutaMultimedia = $directorio."/".$datos["name"];

    $origen = imagecreatefromjpeg($datos["tmp_name"]);

    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

    imagealphablending($destino, FALSE);

    imagesavealpha($destino, TRUE);

    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

    imagejpeg($destino, $rutaMultimedia);
    	
    }

    if($datos["type"] =="application/pdf"){

 /*=============================================
       Save File in the directory
=============================================*/

    //$aleatorio = mt_rand(100, 999);

    $rutaMultimedia = $directorio."/".$datos["name"];

    move_uploaded_file($datos["tmp_name"], $rutaMultimedia);
} 
 

    return $rutaMultimedia;   
    
		}

}


	/*=============================================
  	  Create Consulta
    =============================================*/

    static public function ctrCreateConsulta($datos){

    	if(isset($datos["caso"])){

    		$tabla = "consultas";

    		$datosConsulta = array(
                
                "idUsuario"=>$datos["idUsuario"],
                "nombre"=>$datos["nombre"],
                "edad"=>$datos["edad"],
                "altura"=>$datos["altura"],
                "peso"=>$datos["peso"],
                "email"=>$datos["email"],
                "telefono"=>$datos["telefono"],
                "caso"=>$datos["caso"],
    			"pregunta1"=>$datos["pregunta1"],
    			"pregunta2"=>$datos["pregunta2"],
    			"multimedia"=>$datos["multimedia"]



    		  );
         }

    	//return $datosConsulta;

    	$respuesta = ModeloConsulta0::mdlCreateConsulta("consultas", $datosConsulta);

    	return $respuesta;


    }
}