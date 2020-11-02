/*=============================================
ENVIAR CONCEPTO
=============================================*/
$(".btnCrearConcepto").click(function(){

  var idUsuario = $(this).attr("idUsuario");

  console.log("idUsuario", idUsuario);

 var datos = new FormData();
  datos.append("idUsuario", idUsuario);

  $.ajax({

    url:"ajax/consultas.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function(respuesta){ 
    console.log("respuesta", respuesta);

  
}

  })


})