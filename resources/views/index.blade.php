<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Preparatoria Oficial N°44</title>

    <!-- Favicon -->
    <link rel="icon" href="../public/PaginaWeb/Principal/img/bg-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../public/PaginaWeb/Principal/style.css">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Search Form -->

        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">

                    <div class="col-6">
                        <div class="top-header-content">
                        <a href="#"><i class="icon_phone"></i> <span>01(712)265-2075</span></a>
                            <a href="#"><i class="icon_mail"></i> <span>Preparatoria_oficial@EPO44.org </span></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="top-header-content">
                            <!-- Top Social Area -->
                            <div class="top-social-area ml-auto">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="robertoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="{{route('Home')}}"><img src="../public/PaginaWeb/Principal/img/bg-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav" >
                                <ul id="nav">
                                    <li class="active"><a href="{{route('Home')}}">Inicio</a></li>
                                    <li><a href="{{route('Tramites')}}">Trámites</a></li>
                                    <li><a href="{{route('Acerca')}}">Acerca de Epo N°44</a></li>
                                    <li><a href="{{route('Talleres')}}">Talleres y Avisos</a></li>
                                    <li><a href="{{route('Ubicacion')}}">Ubicación</a></li>
                                    <li><a href="{{route('Login')}}"><i class="fa fa-user-circle"></i>&nbsp;Iniciar Sesión</a></li>
                                </ul>

                                <!-- Search -->
                               

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(../public/PaginaWeb/Principal/img/bg-img/16.jpg);" data-img-url="../public/PaginaWeb/Principal/img/bg-img/16.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h2 data-animation="fadeInLeft" data-delay="200ms">Bienvenido</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(../public/PaginaWeb/Principal/img/bg-img/17.jpg);" data-img-url="../public/PaginaWeb/Principal/img/bg-img/17.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h3 data-animation="fadeInUp" data-delay="200ms">CONOCE MAS SOBRE NOSOTROS</h3>
                                    <h6 data-animation="fadeInUp" data-delay="500ms"> Envianos un correo con tus dudas</h6>
                                    <a href="#" class="btn roberto-btn btn-2" data-animation="fadeInUp" data-delay="800ms">Contacto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(../public/PaginaWeb/Principal/img/bg-img/18.jpg);" data-img-url="../public/PaginaWeb/Principal/img/bg-img/18.jpg">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h3 data-animation="fadeInDown" data-delay="200ms">CONOCE NUESTROS TALLERES</h3>
                                    <a href="#" class="btn roberto-btn btn-2" data-animation="fadeInDown" data-delay="800ms">Explorar Talleres</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="../public/PaginaWeb/Principal/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="../public/PaginaWeb/Principal/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="../public/PaginaWeb/Principal/js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="../public/PaginaWeb/Principal/js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="../public/PaginaWeb/Principal/js/default-assets/active.js"></script>

</body>

</html>