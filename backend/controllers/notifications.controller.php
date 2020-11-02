<?php

class ControllerNotifications{

	static public function ctrShowNotifications(){

		$tabla = "notificaciones";

		$respuesta = ModelNotifications::mdlShowNotifications($tabla);

		return $respuesta;
	}
}	