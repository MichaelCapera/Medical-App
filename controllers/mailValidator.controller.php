<?php

class MailValidatorController{

  /*=============================================
=            Select Mails Registers            =
   =============================================*/

   static public function ctrMailValidator($item, $valor){

    $tabla = "usuarios";

    $respuesta = MailValidatorModel::mdlMailValidator($tabla, $item, $valor);

    return $respuesta;  

   }


}