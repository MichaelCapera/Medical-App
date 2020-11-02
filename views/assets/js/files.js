// Files With Dropzone

//var arrayFiles = [];

/*$("#my-awesome-dropzone").dropzone({

	url: "/",
	addRemoveLinks: true,
	acceptedFiles: "image/jpeg, image/png, .doc, .pdf/",
	maxFilesize: 2,
	maxFiles: 1,
	init: function(){

		this.on("addedfile", function(file){

			arrayFiles.push(file);
		})

		this.on("removedfile", function(file){

			var index = arrayfiles.indexOf(file);

			arrayfiles.splice(index, 1);


		})

		//console.log("arrayFiles", arrayFiles);
	}

})*/

// Files With Dropzone 2

var arrayFiles = [];

$(".multimediaFisica").dropzone({

	url: "/",
	addRemoveLinks: true,
	acceptedFiles: "image/jpeg, image/png, application/pdf,.doc,",
	maxFilesize: 9,
	maxFiles: 2,
	init: function(){

		this.on("addedfile", function(file){

			arrayFiles.push(file);

			//console.log("arrayFiles", arrayFiles);
		});

		this.on("removedfile", function(file){

			var index = arrayFiles.indexOf(file);

			arrayFiles.splice(index, 1);

			//console.log("arrayFiles", arrayFiles);
        });

		
	}

});


// Save Consulta
var multimedia = "";

$("#ejemplo").click(function(){



if($("#idUsuario").val()!== "" &&
   $("#nombre").val()!== "" &&
   $("#edad").val()!== "" &&
   $("#altura").val()!== "" &&
   $("#peso").val()!== "" &&
   $("#email").val()!== "" &&
   $("#telefono").val()!== "" &&
   $("#caso").val()!== "" &&
   $("#pregunta1").val()!== "" &&
   $("#pregunta2").val()!== ""){



   	if(arrayFiles.length > 0 ){

   		
   		var listaMultimedia = [];


   	    for(var i = 0; i < arrayFiles.length; i++){

   	    	var datosMultimedia = new FormData();
            datosMultimedia.append("file", arrayFiles[i]);
   	    	datosMultimedia.append("ruta", $("#idUsuario").val());

   	    	$.ajax({
   	    		url:"ajax/files2.ajax.php",
   	    		method:"POST",
   	    		data: datosMultimedia,
   	    		cache: false,
   	    		contentType: false,
   	    		processData: false,
   	    		success: function(respuesta){

   	    			console.log("respuesta", respuesta);
                    //listaMultimedia.push({"foto": respuesta.substr(3)})
   	    			listaMultimedia.push({"file" : respuesta.substr(3)})
   	    			multimedia = JSON.stringify(listaMultimedia);

   	    			 if(multimedia == ""){

   	    			 swal({
							      title: "El campo de multimedia no debe estar vacío",
							      type: "error",
							      confirmButtonText: "¡Cerrar!"
							    });

   	    			 	return;
   	    			 }

   	    		}
   	    	});
   	    } 

   	}

   }else{

   		swal({

   			title:"Por favor llene los campos obligatorios",
   			type: "error",
   			confirmButtonText:"¡Cerrar!"
   		});

   		return;
   	} 

    setTimeout(function(){

      var idUsuario = $("#idUsuario").val();
      var nombre = $("#nombre").val();
      var edad = $("#edad").val();
      var altura = $("#altura").val();
      var peso = $("#peso").val();
      var email = $("#email").val();
      var telefono = $("#telefono").val();
      var caso = $("#caso").val();
    	var pregunta1 = $("#pregunta1").val();
    	var pregunta2 = $("#pregunta2").val();


    	
    	
    	
    	var datosConsulta = new FormData();
    	datosConsulta.append("idUsuario", idUsuario);
      datosConsulta.append("nombre", nombre);
      datosConsulta.append("edad", edad);
      datosConsulta.append("altura", altura);
      datosConsulta.append("peso", peso);
      datosConsulta.append("email", email);
      datosConsulta.append("telefono", telefono);
      datosConsulta.append("caso", caso);
    	datosConsulta.append("pregunta1", pregunta1);
    	datosConsulta.append("pregunta2", pregunta2);
      datosConsulta.append("multimedia", multimedia);

        console.log("edad", edad );

    	$.ajax({

    		url:"ajax/files2.ajax.php",
    		method: "POST",
    		data: datosConsulta,
    		cache: false,
    		contentType: false,
    		processData: false,
    		success: function(respuesta){

    			//console.log("respuesta", respuesta);

    			if(respuesta == "ok"){

    				swal({

    					type:"success",
    					title:"La consulta se ha realizado correctamente",
    					showConfirmButton: true,
    					confirmButtonText: "Cerrar"
    				}).then(function(result){

    					if (result.value){

    						window.location = "index.php?page=consulta";
    					}
    				});
    			}
    		}
    	})




    },4000);



});   

/*$("#ejemplo").click(function(){

	swal({
		title:"Hola",
		type:"error",
		confirmButtonText:"¡Cerrar!"
	});
});*/







