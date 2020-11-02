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


<!-- Mirrored from maxartkiller.com/website/oneuiux/mobile/medical/payment.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 16:44:57 GMT -->
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
               <!--<button class="menu-btn btn btn-link btn-44">
                    <span class="icon material-icons">menu</span>
                </button>-->
            </div>
            <div>
                <a class="navbar-brand" href="index.html">
                    <div class="logo">1<span>UX</span><span>UI</span></div>
                    <h4 class="logo-text"><span>OneUIUX</span><small>Mobile HTML</small></h4>
                </a>
            </div>
            <div>
               <!-- <a href="profile.html" class=""><span class="avatar avatar-30"><img src="views/assets/img/user1.png" alt=""></span></a>-->
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
                <p class="my-0">Maxartkiller</p>
                <p class="text-mute my-0 small">United States</p>
            </div>
            <div class="col-auto align-self-center">
                <a href="login.html" class="btn btn-link text-white p-2"><i class="material-icons">power_settings_new</i></a>
            </div>
        </div>
        <div class="list-group main-menu my-4">
            <a href="index.html" class="list-group-item list-group-item-action active"><i class="material-icons">home</i>Home</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="material-icons">medical_services</i>Doctors</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="material-icons">shopping_cart</i>Shopping</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="material-icons">shopping_bag</i>Orders</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="material-icons">notifications</i>Notification <span class="badge badge-dark text-white">2</span></a>
            <a href="#" class="list-group-item list-group-item-action"><i class="material-icons">list_alt</i>Pages & Elements</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="material-icons">account_circle</i>Setting</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="material-icons">business</i>About</a>
        </div>
    </div>

    <!-- Begin page content -->
    <main class="flex-shrink-0 main-container">
        <!-- page content goes here -->

        <div class="container my-4">
            <h2 class="mt-4  text-center">Mi información</h2>
        </div>
        <div class="container mb-4">
            <div class="card border-0 shadow-light">
                <div class="card-body">
                    <ul class="nav nav-tabs nav-fill justift-content-center mb-4" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link " id="personal-tab" data-toggle="tab" href="#personal" role="tab" aria-controls="personal" aria-selected="true">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" id="salud-tab" data-toggle="tab" href="#salud" role="tab" aria-controls="salud" aria-selected="false">Salud</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="otras-tab" data-toggle="tab" href="#otras" role="tab" aria-controls="otras" aria-selected="false">Otras</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">

                        <!-- Name And Last Name -->

                     <div class="tab-pane fade   " id="personal" role="tabpanel" aria-labelledby="personal-tab">
                            <h6 class="subtitle">Completado</h6>

                        <form method="post" >

                            <div class="form-group" method="post">

                              <label class="text-mute small">Ya completaste esta información</label>

                              

                                  <br>
                                
                                 <button type="submit" class=" btn btn-lg btn-default default-shadow btn-block">Información Completa <span ></span></button>  

                               </div>

                          </form>

                            
                        </div>

                         <!-- Questions -->


                        <div class="tab-pane fade  " id="salud" role="tabpanel" aria-labelledby="salud-tab">

                          <form method="post" >

                            <div class="form-group">
                                
                                <label class="text-mute small">Completo</label>
                                
                            </div>

                              
                             <button type="submit" class=" btn btn-lg btn-default default-shadow btn-block">Ya validaste esta información <span></span>
                             </button> 

                          </form>
                            
                        </div>


                         <!-- Bank Info -->


                        <div class="tab-pane fade show active  " id="otras" role="tabpanel" 
                        aria-labelledby="personal-tab">
                        <form method="post">
                            <div class="form-group">

                               

                                <label class="text-mute small">Seleccione</label>
                                <select id="bancos" class="form-control">
                                    <option value="null" >Select Bank</option>
                                    <option value="Alexaa" >ALexaa</option>
                                    <option value="American Exp" >American Expe</option>
                                    <option value="Lotuslifes" >Lotuslifes</option>
                                    <option value="Francklins" >Francklins</option>
                                </select>
                                <br>
                                
                                <?php

                                 echo '<input  id="banco" name="banco1" type = "hidden" value= "" >';

                                ?>  
                                
                            </div>
                             <?php

                                    echo '<input type = "hidden" value = "'.$_SESSION["id"].'" name = "idUsuario">';
                                ?>

                            <?php

                                     $profileUpdate = new MyInfoController2();
                                     $profileUpdate->ctrProfileUpdate2(); 

                            ?>

                            <button type="submit" class=" btn btn-lg btn-default default-shadow btn-block">Guardar y Continuar <span ></span>
                             </button> 

                             </form>

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

    <!-- Select   -->

    <script src="views/assets/js/select.js"></script>

    <script>
        "use strict"
        $(document).ready(function() {

        });

    </script>
</body>


<!-- Mirrored from maxartkiller.com/website/oneuiux/mobile/medical/payment.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 16:44:57 GMT -->
</html>
