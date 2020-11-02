<!DOCTYPE html>
<html lang="en">


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
                    <div class="logo">
                        1<span></span><span></span>
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
    <main class="flex-shrink-0 main-container">
        <!-- page content goes here -->
        <div class="banner-hero vh-100 scroll-y bg-dark">
            <div class="background opac">
                <img src="views/assets/img/login.jpg" alt="">
            </div>
            <div class="container h-100 text-white">
                <div class="row h-100 h-sm-auto">
                    <div class="col-12 col-md-8 col-lg-5 col-xl-4 mx-auto align-self-center text-center">
                        <div class="loader-logo">
                            <img src="views/assets/img/logo.fw.png"> 
                        </div>
                        <br>
                        <br>
                        <h5 class="font-weight-light mb-1 text-mute">Bievenido</h5>
                        <h3 class="font-weight-normal mb-4">Iniciar sesión</h3>

                        <!--=====================================
                     =               LOGIN FORM           =
                       ======================================-->

                       <form method="post" >


                        <div class="form-group">
                            <label for="inputEmail" class="sr-only">Correo electrónico</label>
                            <input type="email" id="inputEmail" class="form-control form-control-lg border-0" placeholder="Email" required="Digite su e-mail" autofocus="" name="loginEmail">
                        </div>
                      <div class="form-group">
                            <label for="inputPassword" class="sr-only">Contraseña</label>
                            <input type="password" id="inputPassword" class="form-control form-control-lg border-0" placeholder="Password" required="Ingrese su contraseña" name="loginPassword">
                        </div>

                        <div class="my-3 row">
                            <div class="col-6 col-md py-1 text-left">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                    <label class="custom-control-label" for="customCheck1">Recordarme</label>
                                </div>
                            </div>
                            <div class="col-6 col-md py-1 text-right text-md-right">
                                <a href="forgotpassword.html" class="text-white">Olvidó su cotraseña ?</a>
                            </div>
                        </div>

                        <?php

                        $login = new LoginController();
                        $login -> ctrLogin();

                        ?>
                        <div class="mb-4">
                            <button type="submit" class=" btn btn-lg btn-default default-shadow btn-block">Iniciar <span class="ml-2 icon arrow_right"></span></button>
                        </div>

                        </form>

                        <!-- End of Login Form -->

                        
                        <div class="mb-4">
                            <p>No tiene cuenta ?<br>Por favor <a href="index.php?page=register" class="text-white">registrarse</a> aquí.</p>
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

    <!-- Customized jquery file  -->
    <script src="views/assets/js/main.js"></script>
    <script src="views/assets/js/color-scheme-demo.js"></script>

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
</html>
