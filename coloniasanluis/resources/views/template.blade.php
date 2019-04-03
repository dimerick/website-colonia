<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Colonia del Municipio de San Luis')</title>
    <!-- Font Awesome -->
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('assets/css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <link href="{{asset('assets/css/leaflet.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/iconLayers.css')}}" rel="stylesheet">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


    @yield('css')
	
	<!--Favicon-->
	<link rel="icon" href="{{asset('assets/favicon/favicon.ico')}}" type="image/x-icon">
</head>

<body>

{{--<div class="social-icons">--}}
    {{--<ul>--}}
        {{--<li>--}}
            {{--<a href="#"> <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<a href="#"> <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<a href="#"> <i class="fa fa-youtube-square fa-2x" aria-hidden="true"></i></a>--}}
        {{--</li>--}}
    {{--</ul>--}}
{{--</div>--}}



            <!-- Start your project here-->

            <!--Main Navigation-->
            <header>

                <div class="row">
                    <div class="col-md-2">
                        <div class="logo">
                            <a href="#"> <img src="{{asset('assets/images/logo.png')}}"></a>
                        </div>



                    </div>
                    <div class="col-md-10">
                        <div class="cont-nav">
                            <nav class="navbar navbar-expand-md navbar-dark bg-blue">

                                <!--<a class="navbar-brand" href="#"></a>-->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">

                                        <li class="nav-item">
                                            <a class="nav-link" href="#" id="a-inicio"><span>INICIO</span></a>
                                        </li>
                                        <!--<li class="nav-item submenu">-->
                                        <!--<a class="nav-link" href="#">Torneo <i class="fa fa-angle-down" aria-hidden="true"></i></a>-->
                                        <!--<ul>-->
                                        <!--<li>-->
                                        <!--<a class="nav-link" href="#">Misión<span class="sr-only">(current)</span></a>-->
                                        <!--</li>-->
                                        <!--<li>-->
                                        <!--<a class="nav-link" href="#">Visión<span class="sr-only">(current)</span></a>-->
                                        <!--</li>-->
                                        <!--</ul>-->
                                        <!--</li>-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="/#quienes-somos" id="a-quienes-somos"><span>QUIENES SOMOS</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/#municipio-san-luis" id="a-municipio-san-luis"><span>NUESTRO MUNICIPIO</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/#programas" id="a-programas"><span>PROGRAMAS</span></a>

                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/rendicion-cuentas" id="a-rendicion-cuentas"><span>RENDICION DE CUENTAS</span></a>

                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/#contacto" id="a-contacto"><span>CONTACTO</span></a>
                                        </li>

                                        <!-- <li class="nav-item nav-social">
                                            <a href="#"> <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
                                            <a href="#"> <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
                                            <a href="#"> <i class="fa fa-youtube-square fa-2x" aria-hidden="true"></i></a>

                                        </li> -->

                                    </ul>

                                </div>


                            </nav>
                        </div>


                    </div>
                </div>


            </header>


<div class="second-nav sticky-top" id="second-nav">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#"><img src="{{asset('assets/images/logo-peq.png')}}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#" id="inicio-sec"><span>INICIO</span></a>
                </li>
                <!--<li class="nav-item submenu">-->
                <!--<a class="nav-link" href="#">Torneo <i class="fa fa-angle-down" aria-hidden="true"></i></a>-->
                <!--<ul>-->
                <!--<li>-->
                <!--<a class="nav-link" href="#">Misión<span class="sr-only">(current)</span></a>-->
                <!--</li>-->
                <!--<li>-->
                <!--<a class="nav-link" href="#">Visión<span class="sr-only">(current)</span></a>-->
                <!--</li>-->
                <!--</ul>-->
                <!--</li>-->
                <li class="nav-item">
                    <a class="nav-link" href="/#quienes-somos" id="quienes-somos-sec"><span>QUIENES SOMOS</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#municipio-san-luis" id="municipio-san-luis-sec"><span>NUESTRO MUNICIPIO</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#programas" id="programas-sec"><span>PROGRAMAS</span></a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/rendicion-cuentas" id="rendicion-sec"><span>RENDICION DE CUENTAS</span></a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#contacto" id="contacto-sec"><span>CONTACTO</span></a>
                </li>

                {{--<li class="nav-item nav-social">--}}
                    {{--<a href="#"> <i class="fa fa-facebook-square fa-1x" aria-hidden="true"></i></a>--}}
                    {{--<a href="#"> <i class="fa fa-twitter-square fa-1x" aria-hidden="true"></i></a>--}}
                    {{--<a href="#"> <i class="fa fa-youtube-square fa-1x" aria-hidden="true"></i></a>--}}

                {{--</li>--}}
            </ul>
        </div>
    </nav>
</div>



            <section class="main-section">
                @yield('main-content')

            </section>



            <!--Footer-->
            <footer class="page-footer center-on-small-only unique-color-dark pt-0" id="contacto">

                <!--Footer Links-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-data">
                                <h3 class="title font-bold">Contacto</h3>
                                <ul>
                                    <li><i class="fa fa-home fa-1x"></i> Carrera 50 #48–53 Oficina 604 Medellín, Colombia</li>
                                    <li><i class="fa fa-envelope fa-1x"></i> coloniadesanluis2009@gmail.com</li>
                                    {{--<li><i class="fa fa-mobile-phone fa-1x"></i> (+57)  </li>--}}
                                    <li><i class="fa fa-phone fa-1x"></i> (+57) (4) 512 61 36 </li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <h3 class="title font-bold">MAPA SEDE</h3>
                            <div id="map"> </div>
                        </div>
                    </div>
                    <!--Fourth column-->



                </div>
                <!--/.Footer Links-->

                <!-- Copyright-->
                <div class="footer-copyright">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                Copyright © 2018 Colonia De San Luis NIT. 811021054 -1. Desarrollado por <a href="#">Alers Systems</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!--/.Copyright -->

                <div class="go-top">
                    <a href="#top"><i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></a>
                </div>
            </footer>














<!--/.Footer-->

<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
{{--<!-- Bootstrap tooltips -->--}}
<script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
{{--<!-- Bootstrap core JavaScript -->--}}
<script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('assets/js/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/menu.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/general.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/modal-images.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/leaflet.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/map.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/iconLayers.js')}}"></script>


    <script>
        $(".nav-item").click(function () {
            $(".nav-item").removeClass("active");
            $(this).addClass("active");
        });
    </script>
<script>
    $(document).on("scroll", function(){
        var desplazamientoActual = $(document).scrollTop();
        var secondNav = $("#second-nav");
    
        if(desplazamientoActual >= 140 && secondNav.css("display") == "none"){
            secondNav.fadeIn(300);
        }
        if(desplazamientoActual < 140 && secondNav.css("display") == "block"){
            secondNav.fadeOut(300);
        }
    });
</script>
<script>
    $("#quienes-somos-sec").on("click", function(){
        var posicion = $("#quienes-somos").offset().top - 50;
        $("html, body").animate({
            scrollTop: posicion
        }, 1000);
    });
     $("#municipio-san-luis-sec").on("click", function(){
        var posicion = $("#municipio-san-luis").offset().top - 50;
        $("html, body").animate({
            scrollTop: posicion
        }, 1000);
    });
    $("#inicio-sec").on("click", function(e){
        e.preventDefault();
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
    });
    $("#programas-sec").on("click", function(){
        var posicion = $("#programas").offset().top - 50;
        $("html, body").animate({
            scrollTop: posicion
        }, 1000);
    });

    $("#contacto-sec").on("click", function(){
        var posicion = $("#contacto").offset().top - 50;
        $("html, body").animate({
            scrollTop: posicion
        }, 1000);
    });


    $("#a-quienes-somos").on("click", function(){
        var posicion = $("#quienes-somos").offset().top - 50;
        $("html, body").animate({
            scrollTop: posicion
        }, 1000);
    });

    $("#a-municipio-san-luis").on("click", function(){
        var posicion = $("#municipio-san-luis").offset().top - 50;
        $("html, body").animate({
            scrollTop: posicion
        }, 1000);
    });
    $("#a-inicio").on("click", function(e){
        e.preventDefault();
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
    });
    $("#a-programas").on("click", function(){
        var posicion = $("#programas").offset().top - 50;
        $("html, body").animate({
            scrollTop: posicion
        }, 1000);
    });

    $("#a-contacto").on("click", function(){
        var posicion = $("#contacto").offset().top - 50;
        $("html, body").animate({
            scrollTop: posicion
        }, 1000);
    });

</script>
@yield('scripts')
</body>

</html>