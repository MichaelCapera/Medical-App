<?php

session_id();

session_start();

if(isset($_GET["page"])){

    if ($_GET["page"] == "register" ||
        $_GET["page"] == "consulta" ||
        $_GET["page"] == "consulta1" ||
        $_GET["page"] == "consulta2" ||
        $_GET["page"] == "welcome" ||
        $_GET["page"] == "myinfo"||
        $_GET["page"] == "myinfo1"||
        $_GET["page"] == "myinfo2"||
        $_GET["page"] == "login"||
        $_GET["page"] == "adminProfile"||
        $_GET["page"] == "editarCuenta"||
        $_GET["page"] == "pagos"||
        $_GET["page"] == "notificacionesConsultas"||
        $_GET["page"] == "CrearConcepto"||
        $_GET["page"] == "misConsultas"||
        $_GET["page"] == "misPacientes"||
        $_GET["page"] == "logout"){

        include "pages/".$_GET["page"].".php";
    
    }else{

    	include "pages/error404.php";
    }


}else{

include "pages/login.php";

} 


?>