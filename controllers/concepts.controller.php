<?php

class ConceptController{

/*=============================================
=            CONCEPT           =
=============================================*/

  public function ctrShowConcepts($item, $valor){

    $tabla = "conceptos";

    $respuesta = ConceptsModel::mdlShowConcepts($tabla, $item, $valor);

  	return $respuesta;

  }

}  