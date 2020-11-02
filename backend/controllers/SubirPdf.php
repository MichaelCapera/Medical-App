<?php

$nombre = $_FILES['userfile']['name'];
 
$tipo_archivo = $_FILES['userfile']['type'];
 
$tamano_archivo = $_FILES['userfile']['size'];
 
$ruta = "/var/www/html/intranet/Imagenes/";
 
$ruta_del_archivo = $ruta.$_FILES['userfile']['name']; 
 
$nombre_archivo=$_FILES['userfile']['name'];
 
 
if ($nombre!=''){
 
if (!((strpos($tipo_archivo, "pdf") || strpos($tipo_archivo, "jpeg") || strpos($tipo_archivo, "png") ) 
 
&& ($tamano_archivo < 1000000))){
 
/*se indica que la ext o el tamaño no son correctos*/ 
 
}else{
 
if(move_uploaded_file($_FILES['userfile']['tmp_name'],$ruta_del_archivo)){
 
/*se indica el exito de la operacion*/
 
}else{
 
/*se indica el error*/
 
}
 
}
 
}