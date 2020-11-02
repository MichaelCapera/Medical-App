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
    <!-- drop zone -->
    <link rel="stylesheet" href="views/assets/vendor/dropzone/dropzone.css">
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
                <a class="navbar-brand" href="index.php?page=consulta">
                    <img src="views/assets/img/logo-small.png"> 
                </a>
            </div>
            <div>
                <a href="index.php?page=profile" class="">

                    <span class="avatar avatar-30">

<?php

                if(isset($_SESSION["id"])){

                if($_SESSION["foto"] != ""){

                echo'  <img src="'.$_SESSION["foto"].'" alt="">';

                

                }else{

                echo'  <img src="views/assets/img/users/brains.png" alt="">';

                } 

             }          


           ?>
                    
</span>

</a>
            </div>
        </nav>
    </header>
    <!-- Fixed navbar ends -->

    <!-- sidebar -->

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
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="container-fluid h-300 position-relative overflow-hidden bg-default">
                    <div class="background opac">
                        <img src="views/assets/img/team2.jpg" alt="">
                    </div>
                </div>
                <div class="container mb-4 top-150 position-relative z-1">
                    <h4 class="text-white mb-3 text-center">Buscador<br>
                    </h4>
                    <div class="card border-0 shadow-light">
                        <div id="buscador" class="card-body text-center">
                            <input type="text" class="form-control form-control-lg mb-3" placeholder="Digite procedimiento, especialidad...">
                            <button id="search"type="button" class="mb-2 btn btn-default">Buscar</button><br>
                            <button id="Bariátrica"class="btn btn-sm btn-outline-default my-1">Bariátrica</button>
                            <button id="Facial"class="btn btn-sm btn-outline-default my-1">Facial</button>
                            <button id="Abdomen"class="btn btn-sm btn-outline-default my-1">Abdomen</button>
                        </div>
                    </div>
                </div>

                <!--=====================================
               =            SEARCH-RESULTS            =
                 ======================================-->

             <div id="results" class="container mb-3">
            <h6 class="page-subtitle">Resultados</h6>

            <?php

              $categorias = SpecialistController::ctrShowCategories();

              foreach ($categorias as $key => $value){


                echo '<div id="resultados" class="row">
                <div class="col-12 col-md-12 mb-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body position-relative">
                            <div class="media">
                                <figure class="avatar avatar-40 mr-3">
                                    3
                                </figure>
                                <div class="media-body">
                                    <h6 class="mb-1">Especialistas
                                        
                                    </h6>
                                    <p class="small text-mute">En '.$value["categoria"].' </p>
                                    
                                </div>
                                <div class="media-button">
                                    <a href="index.php?page=consulta1"" id="btnVer" class="mb-2 btn btn-sm  btn-default">Ver</a>
                                </div>
                            </div>
                        </div>
                        

                    </div>

                </div>
            </div>


                ';

              }
            ?>
            

        </div>


             <!--=====================================
        =            CONCEPTO MÉDICO            =
           ======================================-->           

                <div id="concepts" class="container mb-3">
                    <h6 class="page-subtitle">Concepto médico</h6>
                    <div class="row ">
                        <div class="col-12 col-md-6 mb-3">
                            <div class="card  border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="media">
                                       
                                        <div class="media-body">
                                            <h3 class="mb-1 mt-2">Concepto medico</h5>
                                        </div>
                                        <div class="text-right">
                                            <p class="small text-mute">
                                                <span class="material-icons vm">chat</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer position-relative">
                                    <div class="row ">
                                        <div class="col-auto pr-0 align-self-center">
                                            
                                        </div>
                                        <div class="col align-self-center">
                                            
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <a href="index.php?page=consulta1" id="formulario1" class="btn btn-default text-white">Seleccionar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


        <!--=====================================
    =           VÍDEO CONSULTA            =
          ======================================-->

                        
                        <div class="col-12 col-md-6 mb-3">
                            <div class="card  border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="media">
                                       
                                        <div class="media-body">
                                            <h3 class="mb-1 mt-2">Video consulta</h5>
                                        </div>
                                        <div class="text-right">
                                            <p class="small text-mute">
                                                <span class="material-icons vm">play_circle_filled</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer position-relative">
                                    <div class="row ">
                                        <div class="col-auto pr-0 align-self-center">
                                           
                                        </div>
                                        <div class="col align-self-center">
                                           
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <a href="index.php?page=consulta1" id="formulario2" class="btn btn-default text-white">Seleccionar</a>
                                        </div>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!--=====================================
                =           Formulario           =
                ======================================-->

                <div id="formulario" class="container mb-3">
                   
                    <div class="row">
                        <div class="col-12 col-md-12 mb-4">
                            <div class="form-group">
                                <h5>Explique su caso aqui</h5>
                                <label for="caso" class="sr-only">Explique su caso aquí</label>
                                <textarea name="caso" class="form-control form-control-lg" rows="5"></textarea>
                            </div>

                            <div class="form-group">
                                <h5>Preguntas de salud</h5>

                                <?php

                                echo '<input type = "hidden" value = "'.$_SESSION["id"].'" name = "idUsuario">';
                                ?>

                              


                               <label>¿Tiene algún tipo de alergia?</label>
                               
                                <input type="text" id="pregunta1" class="form-control form-control-lg" placeholder="" required="">

                                <label>¿Enfermedades hereditarias?</label>

                                <input type="text" id="pregunta2" class="form-control form-control-lg" placeholder="" required="">

                               </div>

                            <div class="form-group">
                                <h5>Adjuntar sus examenes</h5>
                                <form action="/file-upload"      class="dropzone"  id="my-awesome-dropzone">
                                   
                                
                                </form>
                            </div>
                            

                            <div class="form-group">
                              <button type="button" class="mb-2 btn btn-primary">Guardar</button>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                
            </div>
            <div class="tab-pane fade" id="consultas" role="tabpanel" aria-labelledby="consultas-tab">
                
                <div class="container-fluid bg-default pt-3">
                    <h6 class="font-weight-light text-uppercase text-mute text-center">Mis consultas</h2>
                    <div class="row position-relative">
                        <!-- use hn-60 if there is no page specific name required as below and remove below container -->
                        <div class="container align-self-end">
                            <ul class="nav nav-tabs nav-fill justift-content-center border-0" id="myTab1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pendientes-tab" data-toggle="tab" href="#pendientes" role="tab" aria-controls="pendientes" aria-selected="true">Pendientes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="atentidos-tab" data-toggle="tab" href="#atentidos" role="tab" aria-controls="atentidos" aria-selected="false">Atentidas</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="myTab1Content">
                    <div class="tab-pane fade show active" id="pendientes" role="tabpanel" aria-labelledby="pendientes-tab">
                        <div class="container mb-4">
                            <br>
                            <div class="card border-0 shadow-sm mb-3">
                                <div class="card-body position-relative">
                                    <div class="media">
                                        <figure class="avatar avatar-40 mr-3">
                                            <img src="views/assets/img/user2.png" alt="Generic placeholder image">
                                        </figure>
                                        <div class="media-body">
                                            <h6 class="mb-1">Titulo <small class="ml-2"><span class="text-warning icon_star"></span> <span class="text-mute">4.85</span></small></h6>
                                          <span class="text-mute">Texto</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer position-relative">
                                    <div class="row ">
                                        <div class="col-auto pr-0 align-self-center">
                                         
                                        </div>
                                        <div class="col align-self-center">
                                            
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <a class="btn btn-sm btn-outline-default">Accion 1</a>
                                            <a class="btn btn-sm btn-outline-default">Accion 2</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 shadow-sm mb-3">
                                <div class="card-body position-relative">
                                    <div class="media">
                                        <figure class="avatar avatar-40 mr-3">
                                            <img src="views/assets/img/user2.png" alt="Generic placeholder image">
                                        </figure>
                                        <div class="media-body">
                                            <h6 class="mb-1">Obesidad <small class="ml-2"><span class="text-warning icon_star"></span> <span class="text-mute">4.85</span></small></h6>
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer position-relative">
                                    <div class="row ">
                                        <div class="col-auto pr-0 align-self-center">
                                         
                                        </div>
                                        <div class="col align-self-center">
                                            
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <a class="btn btn-sm btn-outline-default">Ver especialistas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                    <div class="tab-pane fade" id="atentidos" role="tabpanel" aria-labelledby="atentidos-tab">
                        <br>
                            <div class="card border-0 shadow-sm mb-3">
                                <div class="card-body position-relative">
                                    <div class="media">
                                        <figure class="avatar avatar-40 mr-3">
                                            <img src="views/assets/img/user2.png" alt="Generic placeholder image">
                                        </figure>
                                        <div class="media-body">
                                            <h6 class="mb-1">Titulo <small class="ml-2"><span class="text-warning icon_star"></span> <span class="text-mute">4.85</span></small></h6>
                                          <span class="text-mute">Texto</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer position-relative">
                                    <div class="row ">
                                        <div class="col-auto pr-0 align-self-center">
                                         
                                        </div>
                                        <div class="col align-self-center">
                                            
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <a class="btn btn-sm btn-outline-default">Accion 1</a>
                                            <a class="btn btn-sm btn-outline-default">Accion 2</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 shadow-sm mb-3">
                                <div class="card-body position-relative">
                                    <div class="media">
                                        <figure class="avatar avatar-40 mr-3">
                                            <img src="views/assets/img/user2.png" alt="Generic placeholder image">
                                        </figure>
                                        <div class="media-body">
                                            <h6 class="mb-1">Obesidad <small class="ml-2"><span class="text-warning icon_star"></span> <span class="text-mute">4.85</span></small></h6>
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer position-relative">
                                    <div class="row ">
                                        <div class="col-auto pr-0 align-self-center">
                                         
                                        </div>
                                        <div class="col align-self-center">
                                            
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <a class="btn btn-sm btn-outline-default">Ver especialistas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                  
                </div>
                
                

               
            </div>
            <div class="tab-pane fade" id="deases" role="tabpanel" aria-labelledby="deases-tab">
                <div class="container-fluid h-200 position-relative overflow-hidden bg-default">
                    <div class="background opac">
                        <img src="views/assets/img/team2.jpg" alt="">
                    </div>
                </div>
                <div class="container-fluid mb-4 top-150 position-relative z-1 text-center">
                    <h4 class="text-white mb-4">Take self assessment<br>
                        <span class="text-mute small mt-2">Book Apointment</span>
                    </h4>
                    <br>
                    <div class="row justify-content-center">
                        <div class="col-auto mb-3">
                            <a href="assessment.html" class="avatar avatar-90 bg-white shadow-light px-3 mb-2">
                                <img src="views/assets/img/brains.png" alt="" class="vm">
                            </a>
                            <p>Brain</p>
                        </div>
                        <div class="col-auto mb-3">
                            <a href="assessment.html" class="avatar avatar-90 bg-white shadow-light px-3 mb-2">
                                <img src="views/assets/img/heart.png" alt="" class="vm">
                            </a>
                            <p>Heart</p>
                        </div>
                        <div class="col-auto mb-3">
                            <a href="assessment.html" class="avatar avatar-90 bg-white shadow-light px-3 mb-2">
                                <img src="views/assets/img/kedney.png" alt="" class="vm">
                            </a>
                            <p>Kidenys</p>
                        </div>
                        <div class="col-auto mb-3">
                            <a href="assessment.html" class="avatar avatar-90 bg-white shadow-light px-3 mb-2">
                                <img src="views/assets/img/stomach.png" alt="" class="vm">
                            </a>
                            <p>Stomach</p>
                        </div>
                        <div class="col-auto mb-3">
                            <a href="assessment.html" class="avatar avatar-90 bg-white shadow-light px-3 mb-2">
                                <img src="views/assets/img/eye.png" alt="" class="vm">
                            </a>
                            <p>Eyes</p>
                        </div>
                        <div class="col-auto mb-3">
                            <a href="assessment.html" class="avatar avatar-90 bg-white shadow-light px-3 mb-2">
                                <img src="views/assets/img/lungs.png" alt="" class="vm">
                            </a>
                            <p>Lungs</p>
                        </div>
                        <div class="col-auto mb-3">
                            <a href="assessment.html" class="avatar avatar-90 bg-white shadow-light px-3 mb-2">
                                <img src="views/assets/img/liver.png" alt="" class="vm">
                            </a>
                            <p>Liver</p>
                        </div>
                        <div class="col-auto mb-3">
                            <a href="assessment.html" class="avatar avatar-90 bg-white shadow-light px-3 mb-2">
                                <img src="views/assets/img/bones.png" alt="" class="vm">
                            </a>
                            <p>Bones</p>
                        </div>
                        <div class="col-auto mb-3">
                            <a href="assessment.html" class="avatar avatar-90 bg-white shadow-light px-3 mb-2">
                                <img src="views/assets/img/intestines.png" alt="" class="vm">
                            </a>
                            <p>Intestines</p>
                        </div>
                    </div>
                    <br>
                    <a href="assessment.html" class="btn btn-outline-default">Other</a>
                </div>
            </div>
            <div class="tab-pane fade" id="misnotificaciones" role="tabpanel" aria-labelledby="misnotificaciones-tab">
            
                    <h6 class="font-weight-light text-uppercase text-mute text-center">Mis notificaciones</h6>
        

                <div class="list-group list-group-flush my-0">
                    <a href="#" class="list-group-item">
                        <div class="row">
                            <div class="col-auto">
                                <figure class="avatar avatar-40">
                                    <img src="views/assets/img/user1.png" alt="">
                                </figure>
                            </div>
                            <div class="col pl-0 align-self-center">
                                <h6 class="mb-1 font-weight-normal">Concepto médico <span class="float-right text-secondary text-mute small"><button type="button" class="mb-2 btn btn-sm btn-default">Aceptado</button></span></h6>
                                <p class="small text-mute">Pago efectivo</p>
                            </div>
                        </div>
                    </a>
                    <a href="respuesta_concepto.html" class="list-group-item">
                        <div class="row">
                            <div class="col-auto">
                                <figure class="avatar avatar-40">
                                    <img src="views/assets/img/user2.png" alt="">
                                </figure>
                            </div>
                            <div class="col pl-0 align-self-center">
                                <h6 class="mb-1 font-weight-normal">Concepto Médico <span class="float-right text-secondary text-mute small"><button type="button" class="mb-2 btn btn-sm btn-default">Ver respuesta</button></span></h6>
                                <p class="small text-mute">Obesidad</p>
                            </div>
                        </div>
                    </a>
                    <a href="concepto.html" class="list-group-item">
                        <div class="row">
                            <div class="col-auto">
                                <figure class="avatar avatar-40">
                                    <img src="views/assets/img/user1.png" alt="">
                                </figure>
                            </div>
                            <div class="col pl-0 align-self-center">
                                <h6 class="mb-1 font-weight-normal">Solicitud concepto médico <span class="float-right text-secondary text-mute small"><button type="button" class="mb-2 btn btn-sm btn-default">Ver</button></span></h6>
                                <p class="small text-mute">Pago efectivo</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item">
                        <div class="row">
                            <div class="col-auto">
                                <figure class="avatar avatar-40">
                                    <img src="views/assets/img/user2.png" alt="">
                                </figure>
                            </div>
                            <div class="col pl-0 align-self-center">
                                <h6 class="mb-1 font-weight-normal">Concepto Médico <span class="float-right text-secondary text-mute small"><button type="button" class="mb-2 btn btn-sm btn-default">Ver respuesta</button></span></h6>
                                <p class="small text-mute">Obesidad</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
           
        </div>

        <!-- good notification template sample  -->
        <div class="toast bottom-right position-fixed mb-5" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000">
            <div class="toast-header">
                <div class="avatar avatar-20 mr-2">
                    <div class="background">
                        <img src="views/assets/img/team3.jpg" class="rounded mr-2" alt="...">
                    </div>
                </div>
                <strong class="mr-auto">Maxartkiller</strong>
                <small>Just now</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                Hello, Welcome to our website.
            </div>
        </div>
        <!-- good notification template sample  -->

    </main>
    <!-- End of page content -->

    <!-- sticky footer tabs -->
    <div class="footer-tabs border-top text-center">
        <ul class="nav nav-tabs nav-fill justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                    <i class="h4 icon_house_alt"></i>
                    <small class="sr-only">Inicio</small>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="consultas-tab" data-toggle="tab" href="#consultas" role="tab" aria-controls="consultas" aria-selected="false">
                    <i class="h4 icon_calendar"></i>
                    <small class="sr-only">Mis Consultas</small>
                </a>
            </li>
            <li class="nav-item centerlarge">
                <a class="nav-link bg-default d-inline-block" data-toggle="tab" href="#deases" role="tab" aria-controls="deases" aria-selected="false">
                    <i class="h4 icon_profile mt-1"></i>
                    <small class="sr-only">Cuenta</small>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="misnotificaciones-tab" data-toggle="tab" href="#misnotificaciones" role="tab" aria-controls="misnotificaciones" aria-selected="false">
                    <i class="h4 icon_mail_alt"></i>
                    <small class="sr-only">Mensajes</small>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="" href="login.html" role="" aria-controls="profile" aria-selected="false">
                    <i class="h4 icon_lock-open_alt mt-1"></i>
                    <small class="sr-only">Salir</small>
                </a>
            </li>
        </ul>
    </div>

    <!-- sticky footer tabs ends -->


    <!-- scroll to top button -->
    <button type="button" class="btn btn-default default-shadow scrollup bottom-right position-fixed btn-44"><span class="arrow_carrot-up"></span></button>
    <!-- scroll to top button ends-->



    <!-- status modal -->
    <div class="modal" tabindex="-1" role="dialog" id="statusmodal">
        <div class="modal-dialog vh-100 my-0 mx-auto" role="document">
            <div class="modal-content h-100 border-0 bg-dark text-white rounded-0">
                <div class="progress m-2 h-3">
                    <div class="progress-bar statusbar" role="progressbar"></div>
                </div>
                <div class="modal-header border-0 py-2" data-dismiss="modal" aria-label="Close">
                    <div class="media w-100">
                        <figure class="avatar avatar-40 mr-2">
                            <img src="views/assets/img/user5.png" alt="Generic placeholder image">
                        </figure>
                        <div class="media-body">
                            <h6 class="mb-1">Mariyam Saxena</h6>
                            <p class="mb-0 text-mute small">7-11-2018 | Public</p>
                        </div>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                </div>
                <div class="modal-body my-0">
                    <div class="row h-100">
                        <div class="col-12 align-self-center text-center">
                            <figure class="h-100 w-100">
                                <img src="views/assets/img/team6.jpg" alt="" class="mw-100 vm">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center text-center border-0">
                    Awesome click posted
                </div>
            </div>
        </div>
    </div>
    <!-- status modal ends -->

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

    <!-- Masonry js -->
    <script src="views/assets/vendor/masonry/masonry.pkgd.min.js"></script>
    <!-- Drop Zone -->
    <script src="views/assets/vendor/dropzone/dropzone.js"></script>


    <!-- Customized jquery file  -->
    <script src="views/assets/js/main.js"></script>
    <script src="views/assets/js/color-scheme-demo.js"></script>

    <!-- search.js  -->

    <script src="views/assets/js/search.js"></script>

    <!-- Notifications  -->

    <script src="views/assets/js/gestorNotificaciones.js"></script>


    <script>
        "use strict"
        $(document).ready(function() {
            /* Swiper slider */

            var swiper = new Swiper('.swiper-offers', {
                slidesPerView: 'auto',
                spaceBetween: 10,
                pagination: false,
            });

            $('#search-tab').on('shown.bs.tab', function(e) {
                var swiper = new Swiper('.swiper-stories', {
                    slidesPerView: 'auto',
                    spaceBetween: 5,
                    pagination: false,
                });

                /* date select  */
                $('.date').on('click', function() {
                    if ($(this).hasClass("bg-default") != true) {
                        $(this).closest('.swiper-wrapper').find('.date').removeClass("bg-default text-white");
                        $(this).addClass("bg-default text-white")
                    }

                });

            })

            /* status */
            function start() {
                var duration = 4000; // it should finish in 3 seconds !
                $(".statusbar").stop().css("width", 0).animate({
                    width: '100%'
                }, {
                    duration: duration,
                });

                setTimeout(function() {
                    $('#statusmodal').modal('hide');
                    $(".statusbar").stop()
                    $(".statusbar").css("width", '0');
                }, duration)
            }
            $('#statusmodal').on('shown.bs.modal', function(e) {
                start()
            });
            $('#statusmodal').on('hide.bs.modal', function(e) {
                $(".statusbar").stop().css("width", '0');
            });

            /* toast message notification 
            setTimeout(function() {
                $('.toast').toast('show')
            }, 2000);
 */



        });

    </script>
</body>

</html>
