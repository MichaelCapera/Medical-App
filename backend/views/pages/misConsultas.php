<?php
if(!isset($_SESSION["validarIngreso"])){
    
   echo '<script>window.location = "index.php?page=login";</script>';

     return;


}else{

    if($_SESSION["validarIngreso"] !="ok"){

     echo '<script>window.location = "index.php?page=login";</script>';

     return;
   } 

   $notificaciones = ControllerNotifications::ctrShowNotifications();

    
}


?>



<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from maxartkiller.com/website/oneuiux/mobile/medical/doctors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 16:44:12 GMT -->
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
                <a class="navbar-brand" href="index.html">
                    <img src="views/assets/img/logo-small.png"> 
                </a>
            </div>
            <div>
                <!--<a href="profile.html" class=""><span class="avatar avatar-30"><img src="views/assets/img/user1.png" alt=""></span></a>-->
            </div>
        </nav>
    </header>
    <!-- Fixed navbar ends -->

    <!--=====================================
    =               MAIN MENU          =
    ======================================--> 
   

    <div class="sidebar">
        <div class="row no-gutters">

<?php

            if(isset($_SESSION["id"])){

                if($_SESSION["foto"] != ""){

            echo'<div class="col-auto align-self-center">
                <figure class="avatar avatar-50">
                    <img src="'.$_SESSION["foto"].'" alt="">
                </figure>
                
            </div>';        

         }else{

            echo'<div class="col-auto align-self-center">
                <figure class="avatar avatar-50">
                    <img src="views/assets/img/users/brains.png" alt="">
                </figure>
                
            </div>'; 

              }

             }  

?>

            <div class="col pl-3 align-self-center">
                <p class="my-0"></p>               
            </div>
            <div class="col-auto align-self-center">
                <!--<a href="login.html" class="btn btn-link text-white p-2"><i class="material-icons">power_settings_new</i></a>-->
            </div>
        </div>

    

       
                         
        <div class="list-group main-menu my-4">
            <a href="index.php?page=adminProfile" class="list-group-item list-group-item-action active"><i class="material-icons">home</i>Inicio</a>
            <a href="index.php?page=misConsultas" class="list-group-item list-group-item-action"><i class="material-icons">medical_services</i>Consultas</a>
            <a href="index.php?page=misPacientes" class="list-group-item list-group-item-action"><i class="material-icons">person_search</i>Mis pacientes</a>
            <a href="" class="list-group-item list-group-item-action actualizarNotificaciones" item="nuevasConsultas"><i class="material-icons">notifications</i>Notificaciones <span class="badge badge-dark text-white"><?php echo $notificaciones["nuevasConsultas"] ?></span></a>
            <a href="index.php?page=editarCuenta" class="list-group-item list-group-item-action"><i class="material-icons">account_circle</i>Mi cuenta</a>
            <a href="index.php?page=logout" class="list-group-item list-group-item-action"><i class="material-icons">donut_large</i>Salir</a>
        </div>
    </div>
    <!-- Begin page content -->
    <main class="flex-shrink-0 main-container">
        <!-- page content goes here -->

        <div class="container mb-4">
            <h4 class="font-weight-light text-uppercase text-mute text-center">Mis Consultas</h4>

<?php

    $item = null;
    $valor = null;

    $misConsultas = MisConsultasController::ctrMisConsultas($item, $valor);

    //var_dump($conceptos);

    foreach ($misConsultas as $key => $value) {

        echo '<div class="card  border-0 shadow-sm mb-3 ">
                <div class="card-body position-relative">
                    <div class="media consultas">
                        <a href="#" class="avatar avatar-80 mr-3">
                            <img src="views/assets/img/team4.jpg" alt="Generic placeholder image">
                        </a>
                        <div class="media-body">
                            <a href="#" class="h5 mb-1">'.$value["nombre"].'</a>
                                            
                            <p class="small text-mute mb-2">'.$value["edad"].' años '.$value["altura"].' cm '.$value["peso"].' kg</p>

                            <label><strong>Teléfono</strong></label>
                            <p>'.$value["telefono"].'</p>
                            <label><strong>Email</strong></label>
                            <p>'.$value["email"].'</p>
                            <label><strong>Caso del paciente</strong></label>
                            <p>'.$value["caso"].'</p>
                            <label><strong>Tu concepto</strong></label>
                            <p>'.$value["concepto"].'</p>
                         
                        </div>

                    
                            
                        </a>
                    </div>
                </div>
            </div>';
        
    }


?>


<!-- <div class="swiper-container swiper-offers swiper-container-horizontal">
                <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                    <div class="swiper-slide w-auto py-2 pr-2 swiper-slide-active" style="margin-right: 10px;">
                        <div class="card w-250 shadow-sm border-0 position-relative overflow-hidden">
                            <div class="background background-h-100" style="background-image: url(&quot;views/assets/img/child.png&quot;);">
                                <img src="views/assets/img/pdf.png" alt="" style="display: none;">
                            </div>
                            <div class="card-body pt-5">
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="font-weight-bold">Adjunto 1</h5>
                                        <p class="mb-2 text-mute"></p>
                                        <a href="#" class="btn btn-sm btn-default text-white">Abrir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-auto py-2 pr-2 swiper-slide-next" style="margin-right: 10px;">
                        <div class="card w-250 shadow-sm border-0 position-relative overflow-hidden">
                            <div class="background background-h-100" style="background-image: url(&quot;views/assets/img/brain.png&quot;);">
                                <img src="views/assets/img/fileimage.png" alt="" style="display: none;">
                            </div>
                            <div class="card-body pt-5">
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="font-weight-bold">Adjunto 2</h5>
                                        <p class="mb-2 text-mute"></p>
                                        <a href="#" class="btn btn-sm btn-default text-white">Abrir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide w-auto py-2 pr-2" style="margin-right: 10px;">
                        <div class="card w-250 shadow-sm border-0 position-relative overflow-hidden">
                            <div class="background background-h-100" style="background-image: url(&quot;views/assets/img/lab.png&quot;);">
                                <img src="views/assets/img/pdf.png" alt="" style="display: none;">
                            </div>
                            <div class="card-body pt-5">
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="font-weight-bold">Adjunto 3</h5>
                                        <p class="mb-2 text-mute"></p>
                                        <a href="#" class="btn btn-sm btn-default text-white">Abrir</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <div class="card  border-0 shadow-sm mb-3">
                <div class="card-body position-relative">
                    <div class="media">
                        
                        <div class="media-body">
                            <span href="#" class="h5 mb-1">Preguntar y respuestas de salud</span>

                            <p class="my-4">Pregunta 1<br>
                                <span class="text-mute">
                                    Respuesta de la pregunta 1
                                </span>
                            </p>
                            <p class="my-4">Pregunta 2<br>
                                <span class="text-mute">
                                    Respuesta de la pregunta 2
                                </span>
                            </p>

                            <span href="#" class="h5 mb-1">Caso</span>
                                                   
                            <p class="small text-mute mb-2">
                                LOREM su caso, su depente de, tiene que, su caado es, lotem impus as
                                mordum LOREM su caso, su depente de, tiene que, su caado es, lotem impus as
                                tner ma  LOREM su caso, su depente de, tiene que, su caado es, lotem impus as
                            </p>
                        </div>
                    </div>
                    <hr>
                    <span href="#" class="h5 mb-1">Responder</span>
                    <div class="form-group">
                      
                        <textarea class="form-control form-control-lg" placeholder="" required="">
                            </textarea>
                    
                    </div>
                    <hr>
                    <h6 class="font-weight-light text-uppercase text-mute text-center">Qué desea hacer?</h6>

                        <a href="consulta.html#misnotificaciones">
                            <button type="button" class="mb-2 btn btn-primary">Aceptar</button>
                            </a>
                            <span class="float-right text-secondary text-mute small"></span>
                                <a href="consulta.html#misnotificaciones">
                                <button type="button" class="mb-2 btn btn-secondary">Rechazar</button>
                                </a>
                            </span>
                        </a>
                   
                </div>
            </div>
        </div>
    </main>-->
    <!-- End of page content -->


    <!-- scroll to top button -->
    <button type="button" class="btn btn-default default-shadow scrollup bottom-right position-fixed btn-44"><span class="arrow_carrot-up"></span></button>
    <!-- scroll to top button ends-->



    <!-- call modal -->
    <div class="modal" tabindex="-1" role="dialog" id="callmodal" aria-hidden="true">
        <div class="modal-dialog vh-100 m-0 mw-100" role="document">
            <div class="modal-content h-100 border-0 bg-default text-white blur rounded-0">
                <div class="modal-body my-0">
                    <div class="row h-100">
                        <div class="col-12 align-self-center text-center">
                            <figure class="avatar avatar-150 mb-4">
                                <img src="views/assets/img/team5.jpg" alt="" class="mw-100 vm">
                            </figure>

                            <h4 class="font-weight-normal">Angelina Mosaic</h4>
                            <p class="text-mute">+0019541858931542</p>
                            <p class="lead">00:30</p>

                            <div class="row justify-content-center">
                                <div class="col-auto text-center mb-4">
                                    <button class="btn btn-44 btn-outline-default text-white"><i class="material-icons">volume_up</i></button>
                                </div>
                                <div class="col-auto text-center mb-4">
                                    <button class="btn btn-44 btn-outline-default text-white"><i class="material-icons">videocam</i></button>
                                </div>
                                <div class="col-auto text-center mb-4">
                                    <button class="btn btn-44 btn-outline-default text-white"><i class="material-icons">mic_none</i></button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer justify-content-center text-center border-0">
                    <button class="btn btn-danger text-white btncallmodal" data-dismiss="modal" aria-label="Close"><i class="material-icons">call</i> End Call</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Call modal ends -->
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
    <script src="views/assets/js/color-scheme-demo.js"></script>

    <!-- Notificaciones  -->
    <script src="views/assets/js/gestorNotificacionesBackend.js"></script>

    <script>
        "use strict"
        $(document).ready(function() {
            var swiper = new Swiper('.swiper-offers', {
                slidesPerView: 'auto',
                spaceBetween: 0,
                pagination: false,
            });
        });

    </script>



</body>


<!-- Mirrored from maxartkiller.com/website/oneuiux/mobile/medical/doctors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 16:44:22 GMT -->
</html>
