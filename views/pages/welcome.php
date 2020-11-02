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
<!-- Mirrored from maxartkiller.com/website/oneuiux/mobile/medical/introduction.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 16:44:58 GMT -->
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

    <!-- Begin page content -->
    <main class="flex-shrink-0 main-container py-0">
        <div class="container-fluid vh-100 bg-default position-relative overflow-hidden">
            <div class="background opac-20">
                <img src="views/assets/img/login.jpg" alt="">
            </div>
            <div class="row h-100">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 align-self-start text-center">
                        </div>
                        <div class="col-12 align-self-center text-center px-0">
                            <!-- Swiper -->
                            <div class="swiper-container introslider text-white">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide px-3 py-4 ">
                                        <div class="card bg-none border-0 mb-4">
                                            <div class="card-body p-5">
                                                <div class="row">
                                                    <div class="mx-auto col-12 col-sm-8 col-md-6">
                                                        <i class="material-icons icons icon-100 bg-default text-white mb-4">done_outline</i><br>
                                                        <h2>Mensaje 1</h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide px-3 py-4 ">
                                        <div class="card bg-none border-0 mb-4">
                                            <div class="card-body p-5">
                                                <div class="row">
                                                    <div class="mx-auto col-12 col-sm-8 col-md-6">
                                                        <i class="material-icons icons icon-100 bg-default text-white mb-4">done_outline</i><br>
                                                        <h2>Mensaje 2</h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide px-3 py-4 ">
                                        <div class="card bg-none border-0 mb-4">
                                            <div class="card-body p-5">
                                                <div class="row">
                                                    <div class="mx-auto col-12 col-sm-8 col-md-6">
                                                        <i class="material-icons icons icon-100 bg-default text-white mb-4">done_outline</i><br>
                                                        <h2>Mensaje 3</h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination bottom-10"></div>
                            </div>
                        </div>
                        <div class="col-12 py-4 align-self-end text-center">
                            <a href="index.php?page=myinfo" class=" btn btn-lg btn-outline-light btn-block mb-3">Continuar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
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

    <!-- Masonry js -->
    <script src="views/assets/vendor/masonry/masonry.pkgd.min.js"></script>

    <!-- Customized jquery file  -->
    <script src="views/assets/js/main.js"></script>
    <script src="views/assets/js/color-scheme-demo.js"></script>

    <script>
        "use strict"
        $(document).ready(function() {
            /* Swiper slider */
            var swiper = new Swiper('.introslider', {
                autoplay: true,
                pagination: {
                    el: '.swiper-pagination',
                },
            });
        });

    </script>
</body>


<!-- Mirrored from maxartkiller.com/website/oneuiux/mobile/medical/introduction.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 16:44:58 GMT -->
</html>
