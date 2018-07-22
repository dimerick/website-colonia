@extends('template')
@section('title')
    Medellín Cup - Alojamiento y Transporte
@endsection

@section('css')

@endsection

@section('main-content')

           <div class="header-page">
            <img src="{{asset('assets/images/header-pages/torneo.jpg')}}">
            <h1>Alojamiento y Transporte</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div id="s1" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Opciones de Alojamiento</h2>
                        <hr>
                        <p>La organización del torneo ofrece distintas opciones de alojamiento para que cada club escoja la que más le interese:
                        </p>
                        <ul>
                            <li>Hoteles <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
                            <li>Hoteles <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></li>
                        </ul>
                        <p>Una vez inscritos en el torneo les pediremos que nos detallen la distribución por el tipo de habitaciones que desean contratar (habitación múltiple, habitación doble, habitación individual).</p>
                        <p>Las habitaciones múltiples suelen tener 3 ó 4 camas dependiendo del tamaño de la habitación. También disponemos de algunas habitaciones tipo apartamento en las que caben más camas.</p>
                        <p>En principio todas las habitaciones dobles tienen 2 camas. En caso de estar interesados en reservar una habitación con cama de matrimonio se debe solicitar a la organización que concretará con el hotel si hay disponibilidad de este tipo de camas.</p>
                        <p>No es necesario que jugadores y acompañantes contraten la misma opción de alojamiento.</p>
                        <h4>Noches extra</h4>
                        <p>Ya sea por razón de vuelos o simplemente por alargar la estadía les damos la opción de contratar noches extra en los alojamientos. </p>

                        <!--Table-->
                        <table class="table">

                            <!--Table head-->
                            <thead class="mdb-color darken-3">
                            <tr class="text-white">
                                <th>HOTEL <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></th>
                                <th>8 NOCHES</th>
                                <th>NOCHE EXTRA</th>

                            </tr>
                            </thead>
                            <!--Table head-->

                            <!--Table body-->
                            <tbody>
                            <tr>
                                <th>Múltiple</th>
                                <td>$</td>
                                <td>$</td>
                            </tr>
                            <tr>
                                <th>Doble</th>
                                <td>$</td>
                                <td>$</td>
                            </tr>
                            <tr>
                                <th>Individual</th>
                                <td>$</td>
                                <td>$</td>
                            </tr>
                            <tr>
                                <td colspan="3">Precios por persona</td>
                            </tr>
                            </tbody>
                            <!--Table body-->
                        </table>
                        <!--Table-->



                        <!--Table-->
                        <table class="table">

                            <!--Table head-->
                            <thead class="mdb-color darken-3">
                            <tr class="text-white">
                                <th>HOTEL <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></th>
                                <th>8 NOCHES</th>
                                <th>NOCHE EXTRA</th>

                            </tr>
                            </thead>
                            <!--Table head-->

                            <!--Table body-->
                            <tbody>
                            <tr>
                                <th>Múltiple</th>
                                <td>$</td>
                                <td>$</td>
                            </tr>
                            <tr>
                                <th>Doble</th>
                                <td>$</td>
                                <td>$</td>
                            </tr>
                            <tr>
                                <th>Individual</th>
                                <td>$</td>
                                <td>$</td>
                            </tr>
                            <tr>
                                <td colspan="3">Precios por persona</td>
                            </tr>
                            </tbody>
                            <!--Table body-->
                        </table>
                        <!--Table-->


                        <!--Table-->
                        <table class="table">

                            <!--Table head-->
                            <thead class="mdb-color darken-3">
                            <tr class="text-white">
                                <th colspan="2">Alimentación</th>
                                <th>Solo Desayuno</th>

                            </tr>
                            </thead>
                            <!--Table head-->

                            <!--Table body-->
                            <tbody>
                            <tr>
                                <th>Desayuno</th>
                                <td rowspan="3" style="vertical-align: middle">$</td>
                                <td rowspan="3" style="vertical-align: middle">Desde $5.000</td>
                            </tr>
                            <tr>
                                <th>Desayuno</th>
                            </tr>
                            <tr>
                                <th>Almuerzo</th>
                            </tr>
                            <tsr>
                                <td colspan="3">Precios por persona</td>
                            </tsr>
                            </tbody>
                            <!--Table body-->
                        </table>
                        <!--Table-->

                    </section>

                    <div id="s2" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Opciones de Transporte</h2>
                        <hr>
                        <p>Para los equipos que no asistan al Torneo con su propio transporte, les ofrece el servicio de transporte para los traslados de elección.
                        </p>
                        <ul>
                            <li>Recogida y traslado desde el lugar de llegada (aeropuertos, José María Córdoba y Olaya Herrera o terminales de transportes, norte y sur) hasta el alojamiento escogido.</li>
                            <li>Traslado a todos los partidos oficiales</li>
                            <li>Recogida y traslado desde el alojamiento hasta el lugar de regreso (aeropuerto, terminales de transportes)</li>
                        </ul>
                        <p class="alert alert-info">Contacta con nosotros y le haremos una oferta acorde a sus necesidades.</p>
                    </section>




                </div>
                <div class="col-md-2">

                    <div id="scrollspy" class="sticky-top">
                        <ul class="nav nav-pills smooth-scroll flex-column" data-allow-hashes="true">
                            <li class="nav-item"><a class="nav-link nav-sec active" href="#s1">Opciones de Alojamiento</a></li>
                            <li class="nav-item"><a class="nav-link nav-sec" href="#s2">Opciones de Transporte</a></li>
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
        $("#menu-alojamiento-trans").addClass("active");
    </script>
@endsection