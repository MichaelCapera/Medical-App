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
    <?php

    echo '<input type = "hidden" value = "'.$_SESSION["id"].'" name = "idUsuario">';

    ?>

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
            <div>
                <a href="index.php?page=profile" class=""><span class="avatar avatar-30"><img src="views/assets/img/user1.png" alt=""></span></a>
            </div>
        </nav>
    </header>
    <!-- Fixed navbar ends -->
   

    <div class="sidebar">
        <div class="row no-gutters">
            <div class="col-auto align-self-center">
                <figure class="avatar avatar-50">
                    <img src="views/assets/img/user1.png" alt="">
                </figure>
                
            </div>
            <div class="col pl-3 align-self-center">
                <p class="my-0"></p>               
            </div>
            <div class="col-auto align-self-center">
                <a href="login.html" class="btn btn-link text-white p-2"><i class="material-icons">power_settings_new</i></a>
            </div>
        </div>

    

       
                         
        <div class="list-group main-menu my-4">
            <a href="index.html" class="list-group-item list-group-item-action active"><i class="material-icons">home</i>Inicio</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="material-icons">medical_services</i>Consultas</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="material-icons">person_search</i>Mis pacientes</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="material-icons">notifications</i>Notificaciones <span class="badge badge-dark text-white">2</span></a>
            <a href="index.php?page=editarCuenta" class="list-group-item list-group-item-action"><i class="material-icons">account_circle</i>Mi cuenta</a>
            <a href="index.php?page=logout" class="list-group-item list-group-item-action"><i class="material-icons">donut_large</i>Salir</a>
        </div>
    </div>
     
  
 <!-- Begin page content -->

     <?php

    echo '<main class="flex-shrink-0 main-container">
        <!-- page content goes here -->
        <div class="container-fluid h-200 position-relative overflow-hidden bg-default">
            <div class="background opac-20">
                <img src="views/assets/img/user1.png" alt="">
            </div>
        </div>
        <div class="container mb-4 top-100 position-relative z-1 text-center">
            <figure class="avatar avatar-180 rounded-circle shadow  mx-auto">
                <img src="views/assets/img/user1.png" alt="">
            </figure>
        </div>
        <div class="container-fluid text-center mb-4">
            <h4>'.$_SESSION["nombre"].'</h4>

            <div class="mb-4">
            <button type="submit" class="mb-2 btn btn-default">Editar</button>
            </div>

        
        </div>
        <div class="container mb-4">
            <ul class="nav nav-pills nav-fill justift-content-center mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link  active" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="false">
                        Personal
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="myorders-tab" data-toggle="tab" href="#myorders" role="tab" aria-controls="myorders" aria-selected="true">
                        Medica
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="upcoming-tab" data-toggle="tab" href="#upcoming" role="tab" aria-controls="upcoming" aria-selected="true">
                        Pagos
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">';


                 echo '<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                    <h6 class="page-subtitle">Personal Details</h6>
                    <div class="row">
                     
                        <div class="col-6">
                            <div class="form-group">
                                <label class="text-mute">Weight</label>
                                <p>'.$_SESSION["peso"].'</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="text-mute">Email Address</label>
                                <p>'.$_SESSION["email"].'</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="text-mute">Estatura</label>
                                <p>'.$_SESSION["estatura"].'</p>
                            </div>
                        </div>
                    </div>
                    <h6 class="page-subtitle"><span>About</span></h6>
                    <p class="text-mute">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut labore et dolore magna aliqua.</p>
                </div>
                   
                    <div class="tab-pane fade show " id="myorders" role="tabpanel" aria-labelledby="myorders-tab">
                    <h6 class="page-subtitle">Preguntas Bla xxx</h6>
                    <h5>Pregunta 1</h5>
                    <br>
                    <p>'.$_SESSION["pregunta1"].'</p> 
                    <h5>Pregunta 2</h5>
                    <p>'.$_SESSION["pregunta2"].'</p   
                   

                </div> 

               

                <div class="tab-pane fade " id="upcoming" role="tabpanel" aria-labelledby="upcoming-tab">
                    <h6 class="page-subtitle">Datos</h6>
                    <div class="form-group">
                        <label class="text-mute small">Seleccione</label>
                        
                    </div>

                </div>
            </div>
        </div>
    </main>';

     ?>

    <!-- End of page content -->



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
    <script src="views/assets/js/color-scheme-demo.js"></script>

    <script>
        "use strict"
        $(document).ready(function() {

        });

    </script>
</body>


<!-- Mirrored from maxartkiller.com/website/oneuiux/mobile/medical/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 16:44:12 GMT -->
</html>
