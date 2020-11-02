<?php

require_once "../models/notifications.model.php";

class AjaxNotifications{

	/*=============================================
	=           Notifications Update           =
	=============================================*/

	public $item;

	public function ajaxActualizarNotificaciones(){

		$item = $this->item;
		$valor = 0;

		$respuesta = ModelNotifications::mdlNotificationsUpdate("notificaciones", $item, $valor);

		echo $respuesta;
	}
	
}

if(isset($_POST["item"])){

	$actualizarNotificaciones = new AjaxNotifications();
	$actualizarNotificaciones -> item= $_POST["item"];	
	$actualizarNotificaciones -> ajaxActualizarNotificaciones();

}