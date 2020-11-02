//validar email repetido

$("#inputEmail").change(function(){

	$(".alert").remove();

   var email = $(this).val();
	
	var datos = new FormData();
	datos.append("validarEmail", email);

	$.ajax({

		url: "ajax/mailValidator.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			if(respuesta){

				$("#inputEmail").val("");
				$("#inputEmail").parent().after(`

					<div class="alert alert-warning">

					        <b>
					        	ERROR:
					        </b>

					        Este correo es de un usuario registrado<br>
					        puede iniciar sesión

					</div>


					`);

			}
		}
	})
})