// Files With Dropzone

var arrayFiles = [];

$("#my-awesome-dropzone").dropzone({

	url: "/",
	addRemoveLinks: true,
	acceptedFiles: "image/jpeg, image/png, .doc, .pdf/",
	maxFilesize: 2,
	maxFiles: 10,
	init: function(){

		this.on("addedfile", function(file){

			arrayFiles.push(file);
		})

		this.on("removedfile", function(file){

			var index = arrayfiles.indexOf(file);

			arrayfiles.splice(index, 1);


		})

		console.log("arrayFiles", arrayFiles);
	}

})





