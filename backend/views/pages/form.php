 <form method="post" enctype="multipart/form-data">

        
        <div class="container mb-4 top-100 position-relative z-1 text-center">

            <input type="file" class="d-none" id="datosImagen" name="fotoPerfil">

            <label for="datosImagen" class="avatar avatar-180 rounded-circle shadow  mx-auto">
                <img src=<?php echo'"'.$_SESSION["foto"].'"  alt="" class="previsualizar"';?>>
                
            </label>
        </div>


        <?php echo'<div class="container-fluid text-center mb-4">
            <h4><h5><'.$_SESSION["nombre"].'</5></h4>

            <div class="mb-4">'; ?>

         

            <button id="cambiarFoto" type="button" class="mb-2 btn btn-default">Editar Información</button>

            </div>

            <div class="mb-4">

           <div id="imgPerfil">

            <div id= "subirImagen">

               <input name="nombre2" placeholder="Nombre" type="text" class="form-control" required="" value="">

                <br>

                <input name="email2" placeholder="Correo" type="text" class="form-control" required="" value="">

                <br>

                

                <br>

                <?php

                   echo '
                     <input type = "hidden" value = "'.$_SESSION["id"].'" name = "idUsuario">
                     <input type = "hidden" value = "'.$_SESSION["foto"].'" name = "fotoUsuario">
                     <input type = "hidden" value = "'.$_SESSION["password"].'" name = "passwordUsuario">';
                  ?>


   

                
            <div class="mb-4">
                <button type="submit" class=" btn btn-lg btn-default default-shadow btn-block">Guardar<span class="ml-2 icon "></span></button>
                </div>  

            </div>
            </div> 

            <form>
