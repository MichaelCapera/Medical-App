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
   <!-- <div class="container-fluid pageloader">
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
    </div>-->
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
                <a href="profile.html" class=""><span class="avatar avatar-30"><img src="views/assets/img/user1.png" alt=""></span></a>
            </div>
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
                <!--<a href="index.php?page=logout" class="btn btn-link text-white p-2"><i class="material-icons">power_settings_new</i></a>-->
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


   

       <div class="container mb-4">
            <h4 class="font-weight-light text-uppercase text-mute text-center">CONCEPTO MÉDICO</h4>




<?php

    if(isset($_SESSION["id"])){

        $item = "idUsuario";
        $valor = $_SESSION["id"];

        $conceptos = ConceptController::ctrShowConcepts($item, $valor);

        //echo '<pre>'; print_r($conceptos); echo '</pre>';
    } 

 ?>    

  
      <div class="card  border-0 shadow-sm mb-3">
                <div class="card-body position-relative">
                    <div class="media">
                        <a href="doctordetails.html" class="avatar avatar-80 mr-3">
                            <img src="views/assets/img/user3.png" alt="Generic placeholder image">
                        </a>
                        <div class="media-body">
                            <a href="doctordetails.html" class="h5 mb-1">Dr.<?php echo $conceptos["especialista"] ?></a>
                            <p class="text-mute mb-2"><?php echo $conceptos["especialidad"] ?></p>
                    
                            <p class="small text-mute mb-2"><?php echo $conceptos["ciudad"] ?>, <?php echo $conceptos["pais"] ?></p>
                            <label><strong>Concepto del especialista</strong></label>
                            <p><?php echo $conceptos["concepto"] ?><p>
                        </div>
                    </div>
                </div>
            </div>


           <!--<div class="card  border-0 shadow-sm mb-3">
                <div class="card-body position-relative">
                    <div class="media">
                        
                        <div class="media-body">
                            <span href="doctordetails.html" class="h5 mb-1">Dr. Alberto Carlo</span>
                            <p class="text-mute mb-2">Respuesta</p>
                            
                            <p class="small text-mute mb-2">
                                LOREM su caso, su depente de, tiene que, su caado es, lotem impus as
                                mordum LOREM su caso, su depente de, tiene que, su caado es, lotem impus as
                                tner ma  LOREM su caso, su depente de, tiene que, su caado es, lotem impus as
                            </p>
                        </div>
                    </div>
                    <hr>
                    <h6 class="font-weight-light text-uppercase text-mute text-center">Qué desea hacer?</h6>

                    <div class="row text-center">
                        <button type="button" class="mb-2 btn btn-outline-default">Responder o seguir consultando al Dr. Alberto Carlo </button>
                        <button type="button" class="mb-2 btn btn-outline-default">Ir a video consulta</button>
                        <button type="button" class="mb-2 btn btn-outline-default">Consultar otro especialista</button>
                        <hr>
                        <a href="consulta.html#misnotificaciones">
                        <button type="button" class="mb-2 btn btn-primary">Cerrar</button>
                        </a>
                    </a>
                    </div>
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

        <!-- Notifications  -->

    <script src="views/assets/js/gestorNotificaciones.js"></script>

    <script>
        "use strict"
        $(document).ready(function() {
            var swiper = new Swiper('.swiper-stories3', {
                slidesPerView: 'auto',
                spaceBetween: 0,
                pagination: false,
            });
        });

    </script>
</body>


<!-- Mirrored from maxartkiller.com/website/oneuiux/mobile/medical/doctors.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 16:44:22 GMT -->
</html>


