@extends('template')
@section('title')
    Medellín Cup - Precios
@endsection

@section('css')

@endsection

@section('main-content')

    <div class="header-page">
        <img src="{{asset('assets/images/header-pages/torneo.jpg')}}">
        <h1>Precios</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div id="s1" class="pre-item-info"></div>
                <section class="item-info">
                    <h2>Precios</h2>
                    <hr>
                    <p> Valor de la Inscripción para todos los Equipos de futbol 11 es de: <strong>$1’300.000
                            pesos</strong>.
                    </p>
                    <p>Valor de la Inscripción para todos los Equipos de futbol 7 es de: <strong>$950.000 pesos</strong>.
                    </p>
                    <p class="alert alert-info">
                        Deben de ser pagados antes del 20 de abril de 2018.
                    </p>
                    <p class="alert alert-info">
                        El alojamiento no está incluido en la inscripción del torneo.
                    </p>

                    <p>
                        A continuación se exponemos los precios por persona, del paquete de Alojamiento de 8 noches 9
                        días (del 8 al 16 de junio) (consultar para otro tipo de habitación) con las distintas opciones
                        de régimen alimenticio (no incluye bebidas).
                    </p>
                    <p>El valor de la Inscripción Incluye:</p>
                    <ul>
                        <li>Ceremonia de Inauguración</li>
                        <li>Terrenos de juego en grama natural y artificial</li>
                        <li>Suvenir</li>
                        <li>Souvenir para los directores técnicos</li>
                        <li>Cena (dos por equipo)</li>
                        <li>Staff Logístico del evento</li>
                        <li>Escarapelas y Manillas de identificación</li>
                        <li>Árbitros calificados, ternas para todos los partidos en futbol, acepto las categorías de
                            futbol 8
                        </li>
                        <li>Partido de entrenadores</li>
                        <li>Terrenos de juego de césped artificial o natural</li>
                        <li>4 o 5 partidos garantizados</li>
                        <li>Hidratación en todos los partidos</li>
                        <li>1 Balón oficial para cada equipo y para todos los partidos</li>
                        <li>Afiche oficial del equipo</li>
                        <li>Servicio de ambulancia durante los partidos</li>
                        <li>Seguro de accidente para las lesiones producidas durante los partidos</li>
                        <li>Premiación Trofeos y medallas para los Campeones, Sub Campeones, Terceros y Cuartos puestos
                            (medallas), Vallas Menos Vencidas, Goleadores, juego limpio, mejor jugador, mejor barra
                            Medellín Cup, Diploma de participación
                        </li>
                        <li>Replica de trofeo para los equipos campeones</li>
                        <li>El acceso al parque temático, el día de sol</li>
                    </ul>

                    <p>Además del pago de la inscripción del equipo, hay que hacer un abono, de $ 600.000 por equipo
                        para reservar el hotel antes del 20 de abril de 2018.
                        El pago restante, debe ser pagado antes del 20 de abril de 2018.
                    </p>
                    <p>
                        El valor de Inscripción de cada Participante para Equipos Locales (Sólo competición): <strong>$1’300.000</strong>
                        categorías en futbol 11 y <strong>$950.000</strong> categorías en futbol 7.
                    </p>
                    <p class="alert alert-info">Deben ser abonados antes del 31 de marzo de 2018.</p>
                </section>

                <div id="s2" class="pre-item-info"></div>
                <section class="item-info">
                    <h2>Paquete alojamiento familiares</h2>
                    <hr>
                    <p>Los acompañantes que contraten el alojamiento a través de la Medellín Cup, no tienen que hacer
                        ningún depósito, excepto cuando vengan en grupo. En este caso hay que hacer un depósito, a la
                        cuenta del torneo, de $600.000 por cada 15 personas para la reserva del hotel.
                    </p>
                    <p>
                        El pago total del alojamiento de los acompañantes, debe ser pagado antes del 20 de abril del
                        2018.
                    </p>
                    <p>
                        Todas las personas que contraten el alojamiento completo (comidas), deberán tener en cuenta que
                        los partidos a disputar el sábado, domingo y lunes, se jugaran partidos en los horarios de las
                        cenas. Los hoteles estarán al tanto de esta circunstancia y tendrán la máxima flexibilidad
                        dentro del horario establecido. Aun así, recomendamos que los participantes de los partidos
                        previstos para las 9:00 p.m. coordinar la cena en el hotel antes o después de dicho partido. El
                        sábado, día de la Ceremonia de Inauguración, y el lunes, día de la Medellín Party, se recomienda
                        cenar a primeras horas, estos eventos están previstos para las 8:00 p.m.
                    </p>
                </section>

                <div id="s3" class="pre-item-info"></div>
                <section class="item-info">
                    <h2>Transportes</h2>
                    <hr>
                    <p>Si necesitas transporte durante el torneo, puedes contratarlo con nosotros. Dispones de autobuses
                        de 25, 36, 40 puestos.
                    </p>
                    <p>Elige los packs según tus necesidades:</p>
                    <!--Table-->
                    <table class="table">

                        <!--Table head-->
                        <thead class="mdb-color darken-3">
                        <tr class="text-white">
                            <th>Servicios <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                                                                          aria-hidden="true"></i><i
                                        class="fa fa-star" aria-hidden="true"></i></th>
                            <th>18 Puestos</th>
                            <th>25 Puestos</th>
                            <th>32 Puestos</th>
                            <th>40 Puestos</th>
                        </tr>
                        </thead>
                        <!--Table head-->

                        <!--Table body-->
                        <tbody>
                        <tr>
                            <th>Paquete Fútbol</th>
                            <td>$</td>
                            <td>$</td>
                            <td>$</td>
                        </tr>
                        <tr>
                            <th>Paquete Básico</th>
                            <td>$</td>
                            <td>$</td>
                            <td>$</td>
                        </tr>
                        <tr>
                            <th>El Paquete Básico + Ocio</th>
                            <td>$</td>
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

                    <p><strong>El Paquete Fútbol:</strong> Incluye los traslados a todos los partidos que dispute el
                        equipo.</p>
                    <p><strong>El Paquete Básico:</strong> Incluye los traslados para los aeropuertos o terminales de
                        transportes, a la Ceremonia de Inauguración y a la Medellín Party.</p>
                    <p><strong>El Paquete Básico + Ocio: </strong> Incluye los traslados a las actividades de ocio
                        correspondientes a la visitas lugares turísticos de la ciudad y Área metropolitana.</p>
                    <p>Los pagos se consignan en la cuenta bancaria:</p>
                    <p>CORPORACION LA PROVINCIA.<br>
                        Banco de Bogotá Cuenta de Ahorro<br>
                        No.584-25460-1
                    </p>
                    <p>No olvides enviar la fotocopia de la consignación en formato PDF a <strong>info@medellincup.com</strong></p>
                    <p>Todos los gastos que se originen por la emisión de las transferencias, serán asumidos por cuenta del que las realice.</p>
                    <p><small>Los equipos y/o delegaciones deportivas visitantes deberán tomar uno de nuestros planes de hospedaje, para participar en el evento.</small></p>
                </section>

                <div id="s4" class="pre-item-info"></div>
                <section class="item-info">
                    <h2>Cancelaciones</h2>
                    <hr>
                    <p>El 2 de mayo de 2018 es la fecha límite para solicitar la devolución de dineros abonados en caso de que se desee hacer una cancelación por parte de un equipo, un participante o un acompañante.
                    </p>
                    <p>El dinero consignado correspondiente por concepto de inscripción del equipo, el 50 % y el depósito para la reserva del hotel (equipos con alojamiento y acompañantes), en ningún caso serán devueltos</p>
                    <p>El resto de los dineros podrán ser devueltos descontando un 30 % en concepto de gastos de administración.</p>
                    <p>A partir de esta fecha, todos los inscritos perderán el derecho a la devolución de las cantidades abonadas.</p>
                </section>

                <div id="s5" class="pre-item-info"></div>
                <section class="item-info">
                    <h2>Impuestos</h2>
                    <hr>
                    <p>Todos los precios tienen el IVA vigente incluido.</p>
                </section>



            </div>
            <div class="col-md-2">

                <div id="scrollspy" class="sticky-top">
                    <ul class="nav nav-pills smooth-scroll flex-column" data-allow-hashes="true">
                        <li class="nav-item"><a class="nav-link nav-sec active" href="#s1">Precios</a>
                        </li>
                        <li class="nav-item"><a class="nav-link nav-sec" href="#s2">Paquete alojamiento familiares</a></li>
                        <li class="nav-item"><a class="nav-link nav-sec" href="#s3">Transportes</a></li>
                        <li class="nav-item"><a class="nav-link nav-sec" href="#s4">Cancelaciones</a></li>
                        <li class="nav-item"><a class="nav-link nav-sec" href="#s5">Impuestos</a></li>
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
        $("#menu-precios").addClass("active");
    </script>
@endsection