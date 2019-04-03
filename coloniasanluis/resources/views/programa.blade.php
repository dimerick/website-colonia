@extends('template')
@section('title')
    Medellín Cup - Programa
@endsection

@section('css')

@endsection

@section('main-content')

           <div class="header-page">
            <img src="{{asset('assets/images/header-pages/torneo.jpg')}}">
            <h1>Programa</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div id="s1" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Actividades Generales</h2>
                        <hr>
                        <p>El viernes, 8 de junio de 2018, de las 4:00 hasta las 7:00 p.m. tendrá lugar la recepción y entrega de acreditaciones para los delegados o personas autorizadas del cuerpo técnico de cada equipo en una de las sedes asignadas para ello.
                        </p>
                    </section>

                    <div id="s2" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Reunión de Delegados</h2>
                        <hr>
                        <p>A las 8:00 p.m.se celebrará la Reunión de Delegados, en el mismo sitio de la recepción de documentos para las acreditaciones. Podrá asistir cualquier otra persona que esté autorizada por el club. En esta reunión se tratarán exclusivamente aspectos técnicos y normas del Torneo.
                        </p>
                    </section>

                    <div id="s3" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Ceremonia de Inauguración</h2>
                        <hr>
                        <p>La Ceremonia de Inauguración será uno de los actos más representativos y espectaculares de la Medellín Cup. El acto consiste en la izada de banderas y declaración de inaugurado el torneo y una gran variedad de actividades.</p>
                        <p>Sera una fiesta llena de mucho colorido y una gran emoción, donde se reunirán a todos los participantes del torneo en un mismo lugar y que sin duda alguna quedará por mucho tiempo en sus memorias.</p>
                    </section>

                    <div id="s4" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Día de sol Medellín Cup</h2>
                        <hr>
                        <p>Dentro de las actividades de ocio programadas durante la semana del Torneo, está el día de sol  Medellín Cup que será en uno de los parques temáticos de la Ciudad.
                        </p>
                    </section>

                    <div id="s5" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Ceremonia de Clausura</h2>
                        <hr>
                        <p>En la ceremonia de clausura todos los participantes recibirán un recuerdo. La ceremonia de clausura dará inicio después de las finales del  día sábado.</p>
                    </section>

                    <div id="s6" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Finales</h2>
                        <hr>
                        <p>Las finales  tendrán lugar en una de las Canchas importantes del futbol aficionado de la Ciudad. Después de una semana llena de futbol este es el momento más importante. Las finales se transmitirán a través de la televisión regional Antioqueña. Frente a  4.000 asistentes, donde 10 equipos serán los campeones de la Medellín Cup de la Capital Antioqueña.
                        </p>
                        <p>
                            Las finales por el Torneo Medellín Cup 2018   tendrán lugar en una de las Canchas importantes del futbol aficionado de la Ciudad. Las finales por el Torneo de Consolación Medellín Cup 2018se jugarán el día viernes, junto a las finales de fútbol 8 y las categorías femeninas.
                        </p>
                    </section>



                </div>
                <div class="col-md-2">

                    <div id="scrollspy" class="sticky-top">
                        <ul class="nav nav-pills smooth-scroll flex-column" data-allow-hashes="true">
                            <li class="nav-item"><a class="nav-link nav-sec active" href="#s1">Actividades Generales</a></li>
                            <li class="nav-item"><a class="nav-link nav-sec" href="#s2">Reunión de Delegados</a></li>
                            <li class="nav-item"><a class="nav-link nav-sec" href="#s3">Ceremonia de Inauguración</a></li>
                            <li class="nav-item"><a class="nav-link nav-sec" href="#s4">Día de sol Medellín Cup</a></li>
                            <li class="nav-item"><a class="nav-link nav-sec" href="#s5">Ceremonia de Clausura</a></li>
                            <li class="nav-item"><a class="nav-link nav-sec" href="#s6">Finales</a></li>
                        </ul>
                    </div>
                    <div class="sticky-placeholder" style="width: 167.844px; height: 296px;"></div>


                </div>
            </div>
        </div>


@endsection

@section('scripts')
<script>
    $(".nav-sec").click(function () {
        $(".nav-sec").removeClass("active");
        $(this).addClass("active");
    });
</script>

    <script>
        $("#menu-programa").addClass("active");
    </script>
@endsection