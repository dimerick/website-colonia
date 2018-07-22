@extends('template')
@section('title')
    Medellín Cup - Inscripción
@endsection

@section('css')

@endsection

@section('main-content')


    <div class="header-page">
        <img src="{{asset('assets/images/header-pages/torneo.jpg')}}">
        <h1>Inscripción</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div id="s1" class="pre-item-info"></div>
                <section class="item-info">
                    <h2>Inscribe tu Equipo</h2>
                    <hr>

                    <p>
                        Para diligenciar la inscripción de su equipo deberás llenar el formulario.
                        Para hacer efectiva la inscripción de su equipo debes de abonar para SEPARAR SU CUPO mediante el
                        pago del 50%. Una vez efectuado este pago la inscripción quedará confirmada.
                        El pago de la cantidad restante deberá realizarse antes del 31 DE MARZO DE 2018.
                        <a href="#">Clic aquí para acceder al formulario</a>.
                    </p>
                </section>

                <div id="s2" class="pre-item-info"></div>
                <section class="item-info">
                    <h2>Solicitud De Catalogo </h2>
                    <hr>

                    <p>
                    </p>
                </section>

                <div id="s3" class="pre-item-info"></div>
                <section class="item-info">
                    <h2>Consulta tu Inscripción</h2>
                    <hr>
                    <p>
                        <a href="#">Consultar Inscripción</a>
                    </p>
                </section>

                <div id="s4" class="pre-item-info"></div>
                <section class="item-info">
                    <h2>Lista de Jugadores</h2>
                    <hr>

                    <p>
                        <strong>FECHA LÍMITE PARA LLENAR LOS LISTADOS: 2 DE MAYO DE 2018</strong><br>
                        Las listas de jugadores de cada equipo se deben rellenar desde la página web del torneo
                        accediendo a <strong>CONSULTA TU INSCRIPCIÓN</strong>.
                    </p>
                    <p>
                        En la casilla <strong>EQUIPOS</strong> encontraras las categorías de edad en que estás inscrito.
                        Para cada equipo debes llenar los datos del entrenador, del delegado y de los jugadores. Podrá
                        inscribirse un máximo de 20 jugadores por equipo en Fútbol 8 y Fútbol 11.
                    </p>
                    <p><strong>Entrenador:</strong></p>
                    <ol>
                        <li>Clic en “Entrenador”</li>
                        <li>Clic en editar y escribir nombre, apellidos, teléfono móvil (*) y e-mail</li>
                    </ol>

                    <p><strong>Delegado:</strong></p>
                    <ol>
                        <li>Clic en “Delegado”</li>
                        <li>Clic en editar y escribir nombre, apellidos, teléfono móvil (*) y e-mail</li>
                    </ol>

                    <p><strong>Jugadores:</strong></p>
                    <ol>
                        <li>Clic en “Jugadores”</li>
                        <li>Clic en “Nuevo” y escribir nombre, apellidos, fecha de nacimiento y Numero de
                            Identificación
                        </li>
                    </ol>

                    <p>
                        En caso de equivocación o tener que cambiar algún dato lo puedes hacer clic en “Acciones” en el
                        lápiz. En caso de tener que eliminar un jugador hacer clic en “Acciones” en la cruz.
                    </p>

                    <p>
                        Les recordamos que el día de llegada al torneo tendrá que traer el documento de identificación
                        original de cada jugador para pasar el control de edad.
                        (*) Solicitamos el número de teléfono móvil de los entrenadores (as) y delegados (as) para poder
                        enviarles mensajes (SMS) en tiempo real con el resultado de los partidos del resto de equipos de
                        su grupo.
                    </p>

                </section>

                <div id="s5" class="pre-item-info"></div>
                <section class="item-info">
                    <h2>Pagos (Cuenta y Fechas)</h2>
                    <hr>

                    <p>
                        Los pagos se consignan en la cuenta bancaria:<br>
                        <strong>CORPORACION LA PROVINCIA.<br>
                            Banco de Bogotá Cuenta de Ahorro<br>
                            No.584-25460-1
                        </strong>
                    </p>

                    <p class="alert alert-info">
                        La fecha límite para el pago de inscripción es el 31 de marzo de 2018.<br>
                        No olvides enviar la consignación en formato PDF a info@medellincup.com
                        Todos los gastos que se originen por la emisión de las transferencias, serán asumidos por cuenta
                        del que las realice.

                    </p>
                </section>

            </div>
            <div class="col-md-2">

                <div id="scrollspy" class="sticky-top">
                    <ul class="nav nav-pills smooth-scroll flex-column" data-allow-hashes="true">
                        <li class="nav-item"><a class="nav-link nav-sec active" href="#s1">Inscribe tu Equipo</a></li>
                        <li class="nav-item"><a class="nav-link nav-sec" href="#s2">Solicitud De Catalogo</a></li>
                        <li class="nav-item"><a class="nav-link nav-sec" href="#s3">Consulta tu Inscripción</a></li>
                        <li class="nav-item"><a class="nav-link nav-sec" href="#s4">Lista de Jugadores</a></li>
                        <li class="nav-item"><a class="nav-link nav-sec" href="#s5">Pagos (Cuenta y Fechas)</a></li>
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
        $("#menu-inscripcion").addClass("active");
    </script>
@endsection