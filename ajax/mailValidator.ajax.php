<?php

require_once "../controllers/mailValidator.controller.php";
require_once "../models/mailValidator.model.php";

/*=============================================
=            AJAX CLASS           =
=============================================*/

class AjaxForm{

/*=============================================
=            EMAIL VALIDATOR          =
=============================================*/

     public $validarEmail;

     public function ajaxEmailValidator(){

     	$item ="email";
     	$valor = $this->validarEmail;

     	$respuesta = MailValidatorController::ctrMailValidator($item, $valor);

     	echo json_encode($respuesta); 
     }


}


/*=============================================
=           AJAX OBJECT           =
=============================================*/

if(isset($_POST["validarEmail"])){

	$valEmail = new AjaxForm();
	$valEmail -> validarEmail = $_POST["validarEmail"];
	$valEmail -> ajaxEmailValidator();


}




