<?php

require_once "../controllers/consulta0.controller.php";

require_once "../models/consulta0.model.php";

class AjaxConsulta11{

	/*=============================================
  	   Consulta Files
 	=============================================*/	

 	#envía el archivo desde Dropzone al controlador que lo va a guardar

 	public $imagenMultimedia;
 	public $rutaMultimedia;

 	public function ajaxRecibirMultimedia(){

 		$datos = $this->imagenMultimedia;
 		$ruta = $this->rutaMultimedia;

 		$respuesta = ConsultaController0::ctrConsulta0($datos, $ruta);

 		echo $respuesta;
 	}

 	/*=============================================
  	   Save Files
 	=============================================*/	

 	public $idUsuario;
 	public $nombre;
 	public $edad;
 	public $altura;
 	public $peso;
 	public $email;
 	public $telefono;
 	public $caso;
 	public $pregunta1;
 	public $pregunta2;
 	public $multimedia;

 	public function ajaxCrearConsulta(){

 		$datos = array(
            
            "idUsuario"=>$this->idUsuario,
            "nombre"=>$this->nombre,
            "edad"=>$this->edad,
            "altura"=>$this->altura,
            "peso"=>$this->peso,
            "email"=>$this->email,
            "telefono"=>$this->telefono,
            "caso"=>$this->caso,
 			"pregunta1"=>$this->pregunta1,
 			"pregunta2"=>$this->pregunta2,
 			"multimedia"=>$this->multimedia

 		);

 	$respuesta = ConsultaController0::ctrCreateConsulta($datos);
 	
 	echo $respuesta;	


 	}

}

/*=============================================
  	   Recive Files
 =============================================*/

 #Crea la ruta del archivo multimedia a subir	

 	if(isset($_FILES["file"])){

 		$multimedia = new AjaxConsulta11();
 		$multimedia-> imagenMultimedia = $_FILES["file"];
 		$multimedia-> rutaMultimedia = $_POST["ruta"];
 		$multimedia-> ajaxRecibirMultimedia();
 	}

/*=============================================
  	   Create Files
 =============================================*/

 #Crea el caso en la base de datos	

 	if(isset($_POST["idUsuario"])){

 		$consulta = new AjaxConsulta11();
 		$consulta-> idUsuario = $_POST["idUsuario"];
 		$consulta-> nombre = $_POST["nombre"];
 		$consulta-> edad = $_POST["edad"];
 		$consulta-> peso = $_POST["peso"];
 		$consulta-> altura = $_POST["altura"];
 		$consulta-> email = $_POST["email"];
 		$consulta-> telefono = $_POST["telefono"];
 		$consulta-> caso = $_POST["caso"];
 		$consulta-> pregunta1 = $_POST["pregunta1"];
 		$consulta-> pregunta2 = $_POST["pregunta2"];
 		$consulta-> multimedia = $_POST["multimedia"];
 		$consulta-> ajaxCrearConsulta();
 	} 	