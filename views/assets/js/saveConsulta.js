// Save Consulta

$("#ejemplo").click(function(){


if($("#caso").val()!= "" &&
   $("#pregunta1").val()!= "" &&
   $("#pregunta2").val()!= ""){

   	if(arrayFiles2.length > 0)

   		var listaMultimedia = [];

   	    for(var i = 0; i <arrayFiles2.length; i++){

   	    	var datosMultimedia = new FormData();

   	    	datosMultimedia.append("file", arrayFiles[i]);

   	    	$.ajax({
   	    		url:"ajax/consulta.ajax.php",
   	    		method:"POST",
   	    		data: datosMultimedia,
   	    		cache: false,
   	    		contentType: false,
   	    		succes: function(respuesta){

   	    			console.log("respuesta", respuesta);

   	    		}
   	    	})
   	    } 

   	}else{

   		swal({

   			title:"Por favor llene los campos obligatorios",
   			type: "error",
   			confirmButtonText:"¡Cerrar!"
   		});

   		return;
   	}    
})