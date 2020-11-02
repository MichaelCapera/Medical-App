
 /*==============================
=         CHANGE PHOTO         =
==============================*/
$("#cambiarFoto").click(function(){

	$("#subirImagen").toggle();
})

 /*==============================
=          PHOTO  TEMP       =
==============================*/

$("#datosImagen").change(function(){

	var imagen = this.files[0];

	//console.log("imagen", imagen);

/*==============================
=          PHOTO FOMAT         =
==============================*/	

	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

		$("#datosImagen").val("");

		$("#datosImagen").after(`
               
               <div class="alert alert-danger">!La imagen debe ser PNG o JPG!</div>
			`);

		return;


	}else if(Number(imagen["size"]) > 2000000){

		$("#datosImagen").val("");

		$("#datosImagen").after(`
               
               <div class="alert alert-danger">!La imagen debe pesar menos de 2MB!</div>
			`);

		return;

}else{

	var datosImagen = new FileReader;
		datosImagen.readAsDataURL(imagen);

		$(datosImagen).on("load", function(event){

			var rutaImagen = event.target.result;
			$(".previsualizar").attr("src", rutaImagen);
		})


}

	
})

	
		
