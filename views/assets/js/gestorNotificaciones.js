 /* Actualizar Notifiaciones */

 $(".actualizarNotificaciones").click(function(e){

 	e.preventDefault();

 	var item = $(this).attr("item");

 	var datos = new FormData();
 	datos.append("item", item);

 	$.ajax({

 		url:"ajax/notifications.ajax.php",
 		method:"POST",
 		data: datos,
 		cache:false,
 		contentType:false,
 		processData: false,
 		success: function(respuesta){

 			//console.log("respuesta", respuesta);

 			if(respuesta == "ok"){

 				if(item == "nuevoConcepto"){

 					window.location = "index.php?page=notificacionesUsuario";
 				}
 			} 
 		}
 	});
 });
