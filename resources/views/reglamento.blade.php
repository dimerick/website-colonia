@extends('template')
@section('title')
    Medellín Cup - Reglamento
@endsection

@section('css')

@endsection

@section('main-content')

           <div class="header-page">
            <img src="{{asset('assets/images/header-pages/reglamento.jpg')}}">
            <h1>Reglamento</h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div id="s1" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Reglas</h2>
                        <hr>
                        <p>El torneo será jugado de acuerdo con las reglas de la FIFA y las adicionales de la FCF, a excepción de los detalles que se explican en este reglamento.
                        </p>
                    </section>

                    <div id="s2" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Formato del torneo</h2>
                        <hr>
                        <p>Medellín Cup se jugará de acuerdo con las secciones aplicables de las normas de la FIFA. En cuestiones de interpretación de las normas de la FIFA.
                        </p>
                        <p>En caso de igualdad de puntos entre dos o más equipos se decidirán las posiciones de la siguiente manera:</p>
                            <ul>
                            <li>Diferencia de goles</li>
                            <li>Mayor número de goles marcados</li>
                            <li>Resultado del encuentro de los equipos que están empatados</li>
                            <li>Lanzamiento de penaltis según las normas de la FIFA.</li>
                        </ul>

                        <p>La participación en la fase de playoffs se determina en función de las siguientes reglas:</p>
                        <ul>
                            <li>los dos (2) mejores equipos en cada grupo avanzarán a Playoff A,  por el <strong>Torneo de la Medellín Cup</strong>. Los equipos en la tercera y cuarta posición avanzarán al Playoff B, por el <strong>Torneo de consolación de la Medellín Cup</strong>. Los últimos  equipos son eliminados si se conforma el grupo de 5 o más equipos.</li>
                        <li>Todos los partidos de playoffs se decidirán por el sistema de copa, es decir, por eliminación directa.</li>
                        <li>Un empate en el playoff se decidirá por penaltis de acuerdo con las reglas de la FIFA.</li>
                        </ul>
                        <p>La participación en la fase de playoffs se determina en función de las siguientes reglas (estas reglas podrían ser adaptadas al número final de equipos participantes en cada categoría):</p>
                        <ul>
                        <li>En el caso un equipo fuera descalificado o abandonara durante la fase de grupos, todos sus resultados serán modificados a 0-3 en favor del oponente.</li>
                        <li>En el caso un equipo fuera descalificado o abandonara durante la fase de playoff, este sería sustituido por el siguiente equipo mejor clasificado en el mismo grupo.</li>
                        <li>Si el resultado durante un partido de playoff tuviera que ser decidido en penaltis, los equipos podrían tener que desplazarse a un área específica de lanzamiento de penaltis.</li>
                        </ul>
                    </section>

                    <div id="s3" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Programa de partidos</h2>
                        <hr>
                        <p>El calendario detallará la hora del partido, el campo donde se jugará, su ubicación y la categoría de edad correspondiente.
                        </p>
                        <p>
                            La Organización se reserva el derecho a cambiar los grupos, el calendario, los campos de juego y las horas de los partidos. A los delegados de los equipos afectados se les dará aviso con la suficiente antelación.
                        </p>
                    </section>

                    <div id="s4" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Duración de partidos</h2>
                        <hr>
                        <h4>Categoría Masculina </h4>
                        <ul>
                        <li><strong>H-U8</strong> F7 2x20’10 minutos de descanso.</li>
                        <li><strong>H-U10</strong> F7 2x20’ 10 minutos de descanso.</li>
                        <li><strong>B-U12</strong> F11 2x25’ 10 minutos de descanso.</li>
                        <li><strong>B-U14</strong> F11 2x30’ 10 minutos de descanso.</li>
                        <li><strong>B-U16 F11</strong> 2x40’ 10 minutos de descanso</li>
                        <li><strong>B-U18</strong> F11 2x40’ 10 minutos de descanso.</li>
                        </ul>

                        <h4>Categoría Femenina </h4>
                        <ul>
                        <li><strong>G-U14</strong> F11 2x30’ 10 minutos de descanso.</li>
                        <li><strong>G-U16</strong> F11 2x40   10 minutos de descanso.</li>
                        <li><strong>G-U18</strong> F11 2x40 10 minutos de descanso.</li>
                        <li><strong>G-Libre</strong> F11 2x40  10 minutos de descanso.</li>
                        </ul>

                    </section>

                    <div id="s5" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Listado de jugadores</h2>
                        <hr>
                        <p>El día de la llegada de los equipos al torneo, deberán entregar a la Organización el listado que indique los nombres, fechas de nacimiento y números de pasaporte o documentos nacionales de identidad de todos los jugadores inscritos en un equipo, con un máximo de 20 jugadores por equipo.</p>
                        <p>El formato de la lista se las enviaremos mediante correo electrónico en blanco varias semanas antes del inicio del torneo.
                        </p>
                    </section>

                    <div id="s6" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Control de edad</h2>
                        <hr>
                        <p>El día de llegada al torneo se llevará a cabo el control de edad de todos los participantes. Para ello, el delegado o responsable del equipo deberá aportar el pasaporte original o documento nacional de identidad original válidos de cada jugador. No quedará inscrito ningún jugador que no presente alguno de estos documentos o alguno que acredite la edad.
                        </p>
                        <p>La Organización entregará al responsable del equipo la lista verificada junto con seis listas en blanco, para las actas de los partidos.</p>
                    </section>

                    <div id="s7" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Número de jugadores</h2>
                        <hr>
                        <h4>Fútbol 7</h4>
                        <ul>
                            <li>Podrá inscribirse un máximo de 20 y un mínimo 16 jugadores por equipo.</li>
                            <li>En la categoría masculina en fútbol 7 se jugara con un portero y 6 jugadores en el campo de juego.</li>
                            <li>La regla de fuera de juego no es aplicable en las categorías masculina U8 y U10.  Se permite el paso del balón al portero y él o ella podrá tomar el balón con las manos.</li>
                            <li>El saque de meta se podrá hacer desde el piso, colocándolo en cualquier punto de la línea que delimita el área.</li>
                            <li>Los opositores deben permanecer fuera del área penal hasta que el balón esté en juego - la pelota debe estar fuera del área.</li>
                            <li>El balón está en juego cuando haya sido lanzado directamente fuera del área penal.</li>
                            <li>Si el pateador no puede patear el balón fuera de la zona, se repetirá el tiro.</li>
                            <li>Los compañeros del equipo pueden permanecer dentro de la zona, pero no pueden tocar el balón hasta que haya salido del área.</li>
                            <li>Si un jugador es penalizado con una tarjeta roja, este puede ser cambiado por otro jugador.</li>
                            <li>Todos los jugadores inscritos podrán estar a disposición del entrenador en cada partido y estar en la zona de suplentes.</li>
                            <li>No hay límite de jugadores a utilizar en un partido. No habrá límite de sustituciones (conforme al reglamento propio de Fútbol 7).</li>
                            <li>Un jugador sustituido podrá volver a entrar en el terreno de juego.</li>
                            <li>Se permite utilizar a cualquier jugador de un mismo club en distintas categorías. Para ello deberá cumplir la edad y estar inscrito en las listas o planillas correspondientes.</li>
                            <li>En ningún caso se permitirá que un jugador esté inscrito en distintos equipos de la misma categoría.</li>
                        </ul>
                            <h4>Fútbol 11</h4>
                        <ul>
                        <li>Ningún equipo puede utilizar más de 16 jugadores en un partido. Se permite hasta un máximo de 5 sustituciones (incluido el portero (ra) en cada partido. Un jugador sustituido no podrá volver a entrar en el terreno de juego.</li>
                            <li>Se permite utilizar a cualquier jugador de un mismo club en distintas categorías. Para ello deberá cumplir la edad y estar inscrito en las listas correspondientes.
                                En ningún caso se permitirá que un jugador esté inscrito en distintos equipos de la misma categoría.
                            </li>
                        </ul>


                    </section>

                    <div id="s8" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Documentación a aportar en cada partido</h2>
                        <hr>
                        <p>Treinta minutos antes de cada partido, el delegado del equipo deberá entregar a la mesa de control las listas que se le hicieron entrega al realizar el control de edad.
                        </p>
                        <p>La lista deberá estar llena, en el espacio destinado al efecto, con los nombres y números de dorsal correspondientes a los 11 jugadores titulares y el resto de jugadores suplentes (todos los jugadores inscritos podrán estar a disposición del entrenador en cada partido y ocupar el de lugar suplentes).</p>
                        <p>Es obligatorio que a cada partido se acuda con alguno de los siguientes documentos originales de cada jugador:</p>
                        <ul>
                            <li>Pasaporte o documento nacional de identidad válidos de su país si es extranjero Ningún partido puede comenzar sin que el árbitro disponga de las listas de jugadores.</li>
                        </ul>
                    </section>

                    <div id="s9" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Reclamaciones</h2>
                        <hr>
                        <p>Los delegados que quieran comprobar la legalidad de la participación de cualquier jugador, podrán hacerlo antes de la finalización del partido, dando parte al oficial de la mesa de control. En el momento de realizar la reclamación, el reclamante deberá realizar un depósito de 200.000 pesos Colombianos por cada jugador reclamado.
                        </p>
                        <p>En caso de que el jugador reclamado certifique su legalidad mediante la presentación de alguno de los documentos originales solicitados, el oficial de campo dará por finalizada la reclamación.</p>
                        <p>En caso de que el jugador reclamado no dispusiese del documento solicitado, o no aparezca en las listas, quedarán citados, reclamantes y reclamados (junto al responsable del equipo), dos horas después en la sede del Comité de Competición del torneo (Central de Información), el cual decidirá al respecto.</p>
                        <p>En cualquier caso, si se demuestra la legalidad del jugador reclamado, el reclamante perderá el depósito realizado.</p>
                        <p>En caso contrario le será devuelto en su integridad.</p>
                        <p>Las reclamaciones sobre los errores arbitrales no pueden modificar el resultado del partido. La decisión del Comité de Competición es terminante e irrevocable. La interpretación de los hechos y las reglas será definitiva.</p>
                    </section>

                    <div id="s10" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Puntualidad</h2>
                        <hr>
                        <p>Todos los equipos deberán estar en el campo 15 minutos antes del comienzo del partido. En caso de no ser así, sin causa justificada, el Comité de Competición podrá tomar una de las siguientes medidas:
                        </p>
                        <ul>
                            <li>Dar el partido por perdido al equipo infractor (3-0)</li>
                            <li>Dar el partido por perdido al equipo infractor y sancionarlo con un punto menos</li>
                            <li>Será decisión de la organización si el partido se debe jugar o no. En este caso, el Comité de Competición se reserva el derecho de una sanción mayor en caso de afectar a un tercero.</li>
                        </ul>
                    </section>

                    <div id="s11" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Árbitros</h2>
                        <hr>
                        <p>Todos los árbitros y jueces de línea pertenecerán a colegios reconocidos. Serán designados para cada partido por la organización. Todos los partidos serán dirigidos por un árbitro principal, los cuales estarán asistidos por líneas, salvo las categorías U8 y U10 contaran con un juez central
                        </p>
                    </section>

                    <div id="s12" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Uniforme</h2>
                        <hr>
                        <p>Si el árbitro decide que un equipo debe cambiar sus camisetas debido a la similitud con las del equipo contrario, el equipo que aparezca en segundo lugar en el calendario deberá cambiar sus colores. Es obligatorio jugar de local con la  camiseta que registro como oficial.
                        </p>
                    </section>

                    <div id="s13" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Campos de fútbol</h2>
                        <hr>
                        <p>Todos los campos de fútbol son hierba artificial de primera calidad y algunos de hierba natural.
                        </p>
                    </section>

                    <div id="s14" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Premiación</h2>
                        <hr>
                        <p>Después de cada final, se hará entrega de toda la premiación correspondiente .
                        </p>
                    </section>

                    <div id="s15" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Balones</h2>
                        <hr>
                        <p>Todos los partidos serán jugados con balones de la organización. En ningún caso se dejarán balones para calentar.</p>
                        <p>Se jugará con un balón tamaño 3, 4 y 5.</p>
                    </section>

                    <div id="s16" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Comportamiento</h2>
                        <hr>
                        <p>El equipo que provoque la suspensión de un partido, bien sea como consecuencia de la insubordinación colectiva de sus jugadores, abandono del terreno de juego por parte de éstos, agresión a contrarios, árbitro, asistentes, dirigentes, técnicos, etc., bien por la invasión del terreno de juego por parte de seguidores del mismo equipo, o por cualquier otra causa que induzca al árbitro a decretar la suspensión, será sancionado con la pérdida del encuentro por cero goles a tres (0-3), salvo que en el momento de la suspensión el resultado fuera desfavorable por un mayor tanteo en su contra.
                        </p>
                        <p>Cada club será responsable del comportamiento de sus jugadores, acompañantes y familiares, tanto dentro como fuera del terreno de juego. El mal comportamiento puede llevar a la expulsión del torneo.</p>
                        <p>Los alojamientos se comparten con personas ajenas al torneo que merecen todo nuestro respeto. Una mala conducta en los alojamientos puede llevar a la dirección de los mismos a rescindir los servicios de alojamiento y comida sin que la Organización del  torneo pueda tomar parte.</p>
                    </section>


                </div>
                <div class="col-md-2">

                    <div id="scrollspy" class="sticky-top">
                        <ul class="nav nav-pills smooth-scroll flex-column" data-allow-hashes="true">
                            <li class="nav-item"><a class="nav-link nav-sec active" href="#s1">Reglas</a></li>
                            <li class="nav-item"><a class="nav-link nav-sec" href="#s2">Formato del torneo</a></li>
                            <li class="nav-item"><a class="nav-link nav-sec" href="#s3">Programa de partidos</a></li>
                            <li class="nav-item"><a class="nav-link nav-sec" href="#s4">Duración de partidos</a></li>
                            <li class="nav-item"><a class="nav-link nav-sec" href="#s5">Listado de jugadores</a></li>
                            <li class="nav-item"><a class="nav-link nav-sec" href="#s6">Control de edad</a></li>
                            <li class="nav-item"><a class="nav-link nav-sec" href="#s7">Número de jugadores</a></li>
                            <li class="nav-item"><a class="nav-link nav-sec" href="#s8">Documentación a aportar en cada partido</a></li>
                            <li class="nav-item"><a class="nav-link nav-sec" href="#s9">Reclamaciones</a></li>
                            <li class="nav-item"><a class="nav-link nav-sec" href="#s10">Puntualidad</a></li>
                            <li class="nav-item"><a class="nav-link nav-sec" href="#s11">Árbitros</a></li>
                            <li class="nav-item"><a class="nav-link nav-sec" href="#s12">Uniforme</a></li>
                            <li class="nav-item"><a class="nav-link nav-sec" href="#s13">Campos de fútbol</a></li>
                            <li class="nav-item"><a class="nav-link nav-sec" href="#s14">Premiación</a></li>
                            <li class="nav-item"><a class="nav-link nav-sec" href="#s15">Balones</a></li>
                            <li class="nav-item"><a class="nav-link nav-sec" href="#s16">Comportamiento</a></li>
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
        $("#menu-reglamento").addClass("active");
    </script>
@endsection