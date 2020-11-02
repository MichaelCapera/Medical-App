<?php
if(!isset($_SESSION["validarIngreso"])){
    
   echo '<script>window.location = "index.php?page=login";</script>';

     return;


}else{

    if($_SESSION["validarIngreso"] !="ok"){

     echo '<script>window.location = "index.php?page=login";</script>';

     return;
   } 

}

$notificaciones = ControllerNotifications::ctrShowNotifications();



?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from maxartkiller.com/website/oneuiux/mobile/medical/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 16:44:11 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="OneUIUX HTML website template by Maxartkiller. Bootstrap UI UX, Bootstrap theme, Bootstrap HTML, Bootstrap template, Bootstrap website, multipurpose website template. get bootstrap template, website">
    <meta name="author" content="Maxartkiller">

    <title>Medical App</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="views/assets/img/favicons/apple-touch-icon.html" sizes="180x180">
    <link rel="icon" href="views/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="views/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="mask-icon" href="views/assets/img/favicons/safari-pinned-tab.html" color="#ffffff">
    <link rel="icon" href="views/assets/img/favicons/favicon.ico">

    <!-- Elegant font icons -->
    <link href="views/assets/vendor/elegant_font/HTMLCSS/style.css" rel="stylesheet">

    <!-- Elegant font icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Swiper Slider -->
    <link href="views/assets/vendor/swiper/css/swiper.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="views/assets/css/style-skyblue.css" rel="stylesheet" id="style">

    <!-- Edit Image -->

    <link rel="stylesheet" href="views/assets/css/edit.profile.css">

     <!-- Edit Image -->

     <link rel="stylesheet" href="views/assets/css/sweetalert.css">
     



</head>

<body class="ui-rounded">
    <!-- Page laoder -->
    <div class="container-fluid pageloader">
        <div class="row h-100">
            <div class="col-12 align-self-start text-center">
            </div>
            <div class="col-12 align-self-center text-center">
                <div class="loader-logo">
                    <div class="logo">1<span></span><span></span>
                        <div class="loader-roller">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <h4 class="logo-text"><span>Medical App</span><small>Cargando...</small></h4>
                </div>
            </div>
            <div class="col-12 align-self-end text-center">
                <p class="my-5">Por favor esperar<br><small class="text-mute">Procedimientos confiables esta en carga...</small></p>
            </div>
        </div>
    </div>
    <!-- Page laoder ends -->

   

    <!-- Fixed navbar -->   
    <header class="header fixed-top header-fill">
        <nav class="navbar">
            <div>
                <button class="menu-btn btn btn-link btn-44">
                    <span class="icon material-icons">menu</span>
                </button>
            </div>
            <div>
                <a class="navbar-brand" href="index.php?page=consulta">
                    <img src="views/assets/img/logo-small.png"> 
                </a>
            </div>

            <?php
            
            echo '<input type = "hidden" value = "'.$_SESSION["foto"].'" name = "fotoUsuario">';

            ?> 

            <?php 

            if(isset($_SESSION["id"])){

                if($_SESSION["foto"] != ""){

                echo'   <a href="index.php?page=profile" class=""><span class="avatar avatar-30"><img src="'.$_SESSION["foto"].'" alt=""></span></a>';    

               


            }else{

                echo'   <a href="index.php?page=profile" class=""><span class="avatar avatar-30"><img src="views/assets/img/users/brains.png" alt=""></span></a>';
             
             }


              }

            ?>
       

          
        </nav>
    </header>
    <!-- Fixed navbar ends -->
    

   <!--=====================================
    =               MAIN MENU          =
    ======================================--> 


<div class="sidebar">
        <div class="row no-gutters">
            <div class="col-auto align-self-center">
                <figure class="avatar avatar-50">

<?php

                if(isset($_SESSION["id"])){

                if($_SESSION["foto"] != ""){

                echo'  <img src="'.$_SESSION["foto"].'" alt="">';

                

                }else{

                echo'  <img src="views/assets/img/users/brains.png" alt="">';

                } 

             }          


?>
                    
          
          </figure>
    </div>
            <div class="col pl-3 align-self-center">
               <?php echo' <p class="my-0">'.$_SESSION["nombre"].'</p>';?>
                <!--<p class="text-mute my-0 small">United States</p>-->
            </div>
            <div class="col-auto align-self-center">
                <!--<a  class="btn btn-link text-white p-2"><i class="material-icons">power_settings_new</i>-->
            </div>
        </div>
        <div class="list-group main-menu my-4">
            <a href="index.php?page=home" class="list-group-item list-group-item-action active"><i class="material-icons">home</i>Inicio</a>
            <a href="index.php?page=consultas" class="list-group-item list-group-item-action"><i class="material-icons">medical_services</i>Consultas</a>
            <!--<a href="#" class="list-group-item list-group-item-action"><i class="material-icons">person_search</i>Mis pacientes</a>-->

            <!--Notificaciones-->

            <a href="" class="list-group-item list-group-item-action  actualizarNotificaciones" item="nuevoConcepto"><i class="material-icons">notifications</i>Notificaciones <span class="badge badge-dark text-white"><?php echo $notificaciones["nuevoConcepto"] ?></span></a>


            <a href="index.php?page=profile" class="list-group-item list-group-item-action"><i class="material-icons">account_circle</i>Mi cuenta</a>
            <a href="index.php?page=logout" class="list-group-item list-group-item-action"><i class="material-icons">donut_large</i>Salir</a>
        </div>
</div>

     
    
    <!-- sidebar ends -->

<?php

    echo '<input type = "hidden" value = "'.$_SESSION["id"].'" name = "idUsuario">';
?>

 <!-- Begin page content -->  
     
 <main class="flex-shrink-0 main-container">
        <!-- page content goes here -->
        <div class="container-fluid h-200 position-relative overflow-hidden bg-default">
            <div class="background opac-20">   
     

     
<?php

                if(isset($_SESSION["id"])){

                if($_SESSION["foto"] != ""){

                echo'  <img src="'.$_SESSION["foto"].'" alt="">';

                

                }else{

                echo'  <img src="views/assets/img/users/brains.png" alt="">';

                } 

             }          


           ?>


            </div>

          </div>  

         
        <form method="post" enctype="multipart/form-data">

        
        <div class="container mb-4 top-100 position-relative z-1 text-center">

            <input type="file" class="d-none" id="datosImagen" name="fotoPerfil">

            <label href="" for="datosImagen" class="avatar avatar-180 rounded-circle shadow  mx-auto">

                <img   src=<?php echo'"'.$_SESSION["foto"].'"  alt="Click para Editar foto" class="previsualizar"';?>>
                
            </label>
        </div>


        <?php echo'<div class="container-fluid text-center mb-4">
            <h4><h5>'.$_SESSION["nombre"].'</h5></h4>

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
                     <input type = "hidden" value = "'.$_SESSION["foto"].'" name = "fotoUsuario">';
                  
                  ?>


   

                
            <div class="mb-4">
                <button type="submit" class=" btn btn-lg btn-default default-shadow btn-block">Guardar<span class="ml-2 icon "></span></button>
                </div>  

            </div>
            </div> 

            <form>

            
        
        </div>
      
    <!-- End of page content -->

    <?php


            $PhotoUpdate = new UpdateController();
            $PhotoUpdate->ctrUpdate(); 

    ?> 





    <!-- scroll to top button -->
    <button type="button" class="btn btn-default default-shadow scrollup bottom-right position-fixed btn-44"><span class="arrow_carrot-up"></span></button>
    <!-- scroll to top button ends-->

    <!-- Required jquery and libraries -->
    <script src="views/assets/js/jquery-3.3.1.min.js"></script>
    <script src="views/assets/js/popper.min.js"></script>
    <script src="views/assets/vendor/bootstrap-4.4.1/js/bootstrap.min.js"></script>

    <!-- cookie css -->
    <script src="views/assets/vendor/cookie/jquery.cookie.js"></script>

    <!-- Swiper slider  -->
    <script src="views/assets/vendor/swiper/js/swiper.min.js"></script>

    <!-- Customized jquery file  -->
    <script src="views/assets/js/main.js"></script>
    <script src="views/assets/js/editProfile.js"></script>

   <!-- Sweet Alert  -->

    <script src="views/assets/js/sweetalert.min.js"></script>

        <!-- Notifications  -->

    <script src="views/assets/js/gestorNotificaciones.js"></script>



    <script>
        "use strict"
        $(document).ready(function() {

        });

    </script>
</body>


<!-- Mirrored from maxartkiller.com/website/oneuiux/mobile/medical/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 16:44:12 GMT -->
</html>
