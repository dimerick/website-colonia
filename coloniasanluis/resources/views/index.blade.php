@extends('template')
@section('title')
    Colonia del Municipio de San Luis
@endsection

@section('css')

@endsection

@section('main-content')
    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <!-- <li data-target="#carousel-example-2" data-slide-to="2"></li>
            <li data-target="#carousel-example-2" data-slide-to="3"></li> -->
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view view-color-green">
                    <div class="row">
                        <div class="col-md-8">
                            <img class="d-block w-100" src="{{asset('assets/images/slider/slider1.jpg')}}" alt="First slide">
                        </div>
                        <div class="col-md-4">

                            <div class="info-slider">
                                <div class="container-fluid">

                                    <h3 class="h3-responsive">COLONIA DE SAN LUIS EN MEDELLÍN Y EN TODO EL PAÍS</h3>
                                    <p>Trabajando por nuestro municipio y su gente.</p>
                                    <!-- <a class="btn btn-outline-white" href="#">Ver Mas</a> -->


                            </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <div class="carousel-item">
                <div class="view view-color-orange">
                    <div class="row">
                        <div class="col-md-8">
                            <img class="d-block w-100" src="{{asset('assets/images/slider/slider2.jpg')}}" alt="First slide">
                        </div>
                        <div class="col-md-4">

                            <div class="info-slider">
                                <div class="container-fluid">

                                    <h3 class="h3-responsive">COLONIA DE SAN LUIS</h3>
                                    <p>Vuelos de Vida en Todo el País</p>
                                    <!-- <a class="btn btn-outline-white" href="#">Ver Mas</a> -->


                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>



        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->

<section id="quienes-somos">
    
    <div class="parallax">
    <div class="container">
        <h1 class="title-section">QUIENES SOMOS</h1>
        <p>
    LA COLONIA DE SAN LUIS es una corporación sin ánimo de lucro con personería Jurídica No. 10554 de 1975, que trabaja solidariamente con las comunidades campesinas vulnerables víctimas del conflicto armado, en pro de mantener los lazos de unidad del pueblo Sanluisano, y de contribuir al bien estar de otras comunidades vulnerables del país en torno al desarrollo de propuestas que vinculen a la población  para superar condiciones de desarraigo, pobreza extrema y desesperanza. Somos un aliado para los actores públicos y privados que tienen la responsabilidad y los recursos para diseñar, formular y orientar políticas públicas para el desarrollo, en términos de ejecutar los proyectos que las interpreten adecuadamente y faciliten su implementación de forma que promuevan el bienestar y el desarrollo integral.

</p>
<br>

<h2>CONVICIONES QUE NOS ORIENTAN</h2>
<p>
    <ul>
                        <li>La acción solidaria y hermanada para forjar el común</li>
                        <li>La responsabilidad ante los compromisos, y en la acción cotidiana</li>
                        <li>Respeto por las diferencias y hacia la diversidad.</li>
                    </ul>
</p>
<br>
<h2>MISIÓN</h2>
<p>
    Integrar, orientar y generar bienestar humano para la comunidad Sanluisana y de otras regiones del país que se encuentren en situación de vulnerabilidad, mediante la gestión y el fortalecimiento del tejido social con procesos productivos, educativos, participativos y culturales, involucrando en primera medida la red de solidaridad de los sanluisanos en todo el país, y  a los demás estamentos de la sociedad y el Estado en la construcción y promoción de escenarios que generen desarrollo y oportunidades para las comunidades.
</p>
<br>
<h2>
    VISIÓN
</h2>
<p>
    Seremos reconocidos institucionalmente en todo el país e internacionalmente como una corporación líder en promover procesos de desarrollo social, productivos, educativos, culturales y ambientales como una entidad confiable en la formulación y ejecución de proyectos de intervención social; recuperando al interior de las comunidades vulnerables de nuestro país, la esperanza de un futuro mejor, aportando al mejoramiento de su calidad de vida. 
</p>
    </div>
</div>

</section>
    







    <!-- <section class="section-page" id="quienes-somos">
        <div class="container">
            <h1 class="title-section">QUIENES SOMOS</h1>
            <div class="row">
                <div class="col-md-6">
<img src="{{asset('assets/images/about-us.jpg')}}" class="image-w">
                </div>
                <div class="col-md-6">
<p>
    LA COLONIA DE SAN LUIS es una corporación sin ánimo de lucro con personería Jurídica No. 10554 de 1975, que trabaja solidariamente con las comunidades campesinas vulnerables víctimas del conflicto armado, en pro de mantener los lazos de unidad del pueblo Sanluisano, y de contribuir al bien estar de otras comunidades vulnerables del país en torno al desarrollo de propuestas que vinculen a la población  para superar condiciones de desarraigo, pobreza extrema y desesperanza. Somos un aliado para los actores públicos y privados que tienen la responsabilidad y los recursos para diseñar, formular y orientar políticas públicas para el desarrollo, en términos de ejecutar los proyectos que las interpreten adecuadamente y faciliten su implementación de forma que promuevan el bienestar y el desarrollo integral.

</p>
<p>CONVICIONES QUE NOS ORIENTAN<br>
<ul>
                        <li>La acción solidaria y hermanada para forjar el común</li>
                        <li>La responsabilidad ante los compromisos, y en la acción cotidiana</li>
                        <li>Respeto por las diferencias y hacia la diversidad.</li>
                    </ul>
</p>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <h3>MISIÓN</h3>
                    <p>Integrar, orientar y generar bienestar humano para la comunidad Sanluisana y de otras regiones del país que se encuentren en situación de vulnerabilidad, mediante la gestión y el fortalecimiento del tejido social con procesos productivos, educativos, participativos y culturales, involucrando en primera medida la red de solidaridad de los sanluisanos en todo el país, y  a los demás estamentos de la sociedad y el Estado en la construcción y promoción de escenarios que generen desarrollo y oportunidades para las comunidades.</p>


                </div>
                <div class="col-md-6">
                    <h3>VISIÓN</h3>
                    <p>
                        Seremos reconocidos institucionalmente en todo el país e internacionalmente como una corporación líder en promover procesos de desarrollo social, productivos, educativos, culturales y ambientales como una entidad confiable en la formulación y ejecución de proyectos de intervención social; recuperando al interior de las comunidades vulnerables de nuestro país, la esperanza de un futuro mejor, aportando al mejoramiento de su calidad de vida.
                    </p>

                </div>
            </div>


        </div>


    </section> -->


<section class="section-page" id="municipio-san-luis">
    <div class="container">
    <h1 class="title-section">MUNICIPIO DE SAN LUIS</h1>

    <div class="card-columns">
  <div class="card">
    <img class="card-img-top" src="{{asset('assets/images/san-luis/historia-generalidades.jpg')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">SAN LUIS ANTIOQUIA HISTORIA Y  GENERALIDADES</h5>
      <p class="card-text">San Luis es un municipio de Colombia, localizado en la subregión Oriente del departamento de Antioquia. Limita por el norte con los municipios de San Carlos y Puerto Nare, por el este con el municipio de Puerto Triunfo, por el sur con el municipio de San Francisco y por el oeste con los municipios de Cocorná y Granada.</p>
      <a href="/historia"> Ver mas</a>
    </div>
  </div>

  <!-- <div class="card">
    <img class="card-img-top" src="{{asset('assets/images/san-luis/festividades-tradicionales.jpg')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">FESTIVIDADES TRADICIONALES DE SAN LUIS ANTIOQUIA -</h5>
      <p class="card-text">En octubre 4 de 1970 por acuerdo N. 31, Fueron creadas las Fiestas de la Madera como evento tradicional de la municipalidad, estas fiestas  se institucionalizaron por iniciativa del señor alcalde de ese entonces Néstor  Gómez, con el objetivo de reunir todo el municipio una vez  al año en torno actividades Deportivas Culturales, Artísticas.</p>
      <a href=""> Ver mas</a>
    </div>
  </div> -->
  <div class="card">
    <img class="card-img-top" src="{{asset('assets/images/san-luis/festividades-tradicionales.jpg')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">FESTIVIDADES TRADICIONALES DE SAN LUIS ANTIOQUIA</h5>
      <p class="card-text">En octubre 4 de 1970 por acuerdo N. 31, Fueron creadas las Fiestas de la Madera como evento tradicional de la municipalidad, estas fiestas  se institucionalizaron por iniciativa del señor alcalde de ese entonces Néstor  Gómez, con el objetivo de reunir todo el municipio una vez  al año en torno actividades Deportivas Culturales, Artísticas.</p>
      <a href="/festividades-tradicionales"> Ver mas</a>
    </div>
  </div>
  <div class="card bg-primary text-white text-center p-3" style="background-color: #00be54!important;">
    <blockquote class="blockquote mb-0">
      <p>San Luis, Perla Verde del Oriente Antioqueño</p>
      
    </blockquote>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{asset('assets/images/san-luis/productos-tipicos.jpg')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">PRODUCTOS TÍPICOS PRODUCTO DEL TRABAJO CAMPESINO</h5>
      <p class="card-text">Productos típicos de nuestra región sanluisana fruto del trabajo campesino de Asopajuz San Luis Antioquia de la vereda Sopetràn y Asfaconfu San Luis Antioquia que a través del trabajo campesino asociativo y comunitario sacan un excelente producto de calidad 100% natural que apoya la economía de muchas de nuestras familias campesinas en San Luis.</p>
      <a href="/productos-tipicos"> Ver mas</a>
    </div>
  </div>
  
  <div class="card">
    <img class="card-img-top" src="{{asset('assets/images/san-luis/plan-turismo.jpg')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">PLAN LOCAL DE TURISMO SAN LUIS 2018-2032</h5>
      <p class="card-text">Un proyecto pensado y estructurado por algunos integrantes de la colonia en Medellín y líderes del turismo desde hace 5 años, siempre con la inquietud de aportar al desarrollo y potencial Sanluisano,  planteando para que  sean las mismas comunidades las que se empoderen del plan, potenciando las posadas campesinas, los  administradores turísticos, guías y todo lo que rodea el turismo como: el transporte, alojamientos, hoteles, restaurantes y comidas rápidas.</p>
      <a href="/plan-turismo"> Ver mas</a>
    </div>
  </div>
  <!-- <div class="card">
    <img class="card-img-top" src="{{asset('assets/images/san-luis/festividades-tradicionales.jpg')}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">FESTIVIDADES TRADICIONALES DE SAN LUIS ANTIOQUIA 3</h5>
      <p class="card-text">En octubre 4 de 1970 por acuerdo N. 31, Fueron creadas las Fiestas de la Madera como evento tradicional de la municipalidad, estas fiestas  se institucionalizaron por iniciativa del señor alcalde de ese entonces Néstor  Gómez, con el objetivo de reunir todo el municipio una vez  al año en torno actividades Deportivas Culturales, Artísticas.</p>
      <a href=""> Ver mas</a>
    </div>
  </div> -->
</div>

    </div>
</section>

    <section class="section-page" id="programas">
<div class="container">
    <h1 class="title-section">LINEAS DE TRABAJO</h1>

    <div class="cont-programs">
        <div class="card" onclick="openModal();currentSlide(1)">
            <img class="card-img-top" src="{{asset('assets/images/programas/atencion-psico.jpg')}}"
                 class="hover-shadow" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">ACOMPAÑAMIENTO Y ATENCIÓN PSICOSOCIAL A POBLACIÓN DESPLAZADA Y VÍCTIMA DE LA VIOLENCIA</h4>
                {{--<p class="card-text">Actividad cultural comunitaria que se realiza los días miércoles a las 4pm...</p>--}}
            </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="{{asset('assets/images/programas/asesoria-juridica.jpg')}}" onclick="openModal();currentSlide(2)"
                 class="hover-shadow" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">ASESORÍA JURÍDICA A POBLACIÓN VÍCTIMA DEL CONFLICTO ARMADO</h4>
                {{--<p class="card-text">Estamos en capacidad de brindar asesoría jurídica en los programas de atención a  población desplazada y víctimas del conflicto armado.</p>--}}
            </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="{{asset('assets/images/programas/procesos-dep-cult.jpg')}}" onclick="openModal();currentSlide(3)"
                 class="hover-shadow" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">PROCESOS DEPORTIVOS Y CULTURALES CON JÓVENES DE SAN LUIS</h4>
                {{--<p class="card-text">Intervenciones recreativas y artísticas en las esquinas del Barrio Santander con los niños y adolescentes....</p>--}}
            </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="{{asset('assets/images/programas/proyectos-productivos.jpg')}}" onclick="openModal();currentSlide(4)"
                 class="hover-shadow" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">PROYECTOS PRODUCTIVOS Y ESTABILIZACIÓN SOCIO-ECONÓMICA</h4>
                {{--<p class="card-text">Intervenciones recreativas y artísticas en las esquinas del Barrio Santander con los niños y adolescentes....</p>--}}
            </div>
        </div>


        <div class="card">
            <img class="card-img-top" src="{{asset('assets/images/programas/retornos.jpg')}}" onclick="openModal();currentSlide(5)"
                 class="hover-shadow" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">RETORNOS INDIVIDUALES Y COLECTIVOS DE POBLACIÓN DESPLAZADA</h4>
                {{--<p class="card-text">Intervenciones recreativas y artísticas en las esquinas del Barrio Santander con los niños y adolescentes....</p>--}}
            </div>
        </div>

    </div>


    <div>
        <h3></h3>
    </div>

</div>


    </section>




    <!--Modal-->

    <div id="myModal" class="modal">
        <span class="close-modal cursor" onclick="closeModal()">&times;</span>


        <div class="modal-content">

            <div class="mySlides">
                <div class="numbertext">1 / 5</div>
                <img src="{{asset('assets/images/programas/atencion-psico.jpg')}}" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 5</div>
                <img src="{{asset('assets/images/programas/asesoria-juridica.jpg')}}"  style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 5</div>
                <img src="{{asset('assets/images/programas/procesos-dep-cult.jpg')}}" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">4 / 5</div>
                <img src="{{asset('assets/images/programas/proyectos-productivos.jpg')}}" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">4 / 5</div>
                <img src="{{asset('assets/images/programas/retornos.jpg')}}" style="width:100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <div class="caption-container">
                <p id="caption"></p>
            </div>
            <div>
                <div class="column">
                    <img class="demo" src="{{asset('assets/images/programas/atencion-psico.jpg')}}" onclick="currentSlide(1)" alt="
      <b>ACOMPAÑAMIENTO Y ATENCIÓN PSICOSOCIAL A POBLACIÓN DESPLAZADA Y VÍCTIMA DE LA VIOLENCIA</b>
      <p><ul>
      <li>Atención Humanitaria a población en condición de desplazamiento</li>
      <li>Procesos de Elaboración de duelo y Actos simbólicos con mujeres víctimas del conflicto Armado.</li>
      </ul>
</p>
">
                </div>

                <div class="column">
                    <img class="demo" src="{{asset('assets/images/programas/asesoria-juridica.jpg')}}" width="50%" onclick="currentSlide(2)" alt="
      <b>Asesoría Jurídica A Población Víctima Del Conflicto Armado</b>
      <p>Estamos en capacidad de brindar asesoría jurídica en los programas de atención a  población desplazada y víctimas del conflicto armado.
</p>
">
                </div>

                <div class="column">
                    <img class="demo" src="{{asset('assets/images/programas/procesos-dep-cult.jpg')}}" onclick="currentSlide(3)" alt="
      <b>Procesos deportivos y culturales con jóvenes de San Luis y de otros lugares que migraron por el desplazamiento a las grandes ciudades del país</b>
      <p><ul>
      <li>Proyecto con jóvenes de San Luis en todo el país, para el restablecimiento y apoyo a nuestra comunidad sanluisana generando condiciones de vida y dignidad</li>
      <li>Redes culturales para la dinamización de acciones juveniles en la búsqueda de la reconstrucción del tejido social en nuestro municipio.</li>
      <li>Acompañamiento cultural con jóvenes  a retornos de población desplazada y a comunidades campesinas.</li>
      </ul>

</p>

">
                </div>

                <div class="column">
                    <img class="demo" src="{{asset('assets/images/programas/proyectos-productivos.jpg')}}" width="50%" onclick="currentSlide(4)" alt="
      <b>Proyectos productivos y estabilización socio-económica</b>
      <p><ul>
      <li>Proyectos productivos agrícolas en el restablecimiento de la población retornada y reubicada.</li>
      <li>Apoyo a iniciativas productivas de negocio en las ciudades y en el campo, con población en situación de desplazamiento.</li>
      </ul>
</p>
">
                </div>

                <div class="column">
                    <img class="demo" src="{{asset('assets/images/programas/retornos.jpg')}}" width="50%" onclick="currentSlide(5)" alt="
      <b>Retornos individuales y colectivos de población desplazada</b>
      <p>Acompañamiento y atención a procesos de Retorno y Reubicación individuales y  colectivos a población Desplazada en todo el país.
</p>
">
                </div>

            </div>



        </div>


    </div>

    <!--Modal-->

    <section class="section-page">
        <div class="container">
           <h1 class="title-section">GALERIA</h1>

        <!-- <div class="galery-photos">
            <div id="flickrembed_56"></div><div style="position:absolute; top:-70px; display:block; text-align:center; z-index:-1;"><a rel="nofollow" href="">/</a></div><script src='https://flickrembed.com/embed_v2.js.rand.php?container=flickrembed_56&source=flickr&layout=responsive&input=72157679690027708&sort=0&by=album&theme=default&scale=fit&limit=10&skin=default&autoplay=true'></script><small style="display: block; text-align: center; margin: 0 auto;">Powered by <a href="https://flickrembed.com">flickr embed</a>.</small>
        </div>  -->

<div class="galery-photos">
<iframe align="center" src="http://flickrslidr.com/slideshow/view.php?g=ywneek" frameBorder="0" width="100%" height="500" scrolling="no"></iframe><br/><small>Created with <a href="http://www.admarket.se" title="Admarket.se">Admarket's</a> <a href="http://flickrslidr.com" title="flickrSLiDR">flickrSLiDR</a>.</small>
</div>

        </div>
        
    </section>

@endsection


@section('scripts')
    <script>
        $("#menu-inicio").addClass("active");
    </script>
@endsection