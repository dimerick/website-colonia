@extends('template')
@section('title')
    Colonia del Municipio de San Luis - Cuentas Claras
@endsection

@section('css')

@endsection

@section('main-content')

    <div class="header-page">
            <img src="{{asset('assets/images/header-pages/blog.jpg')}}">
            <h1>CUENTAS CLARAS</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-8">
                <section class="section-rendicion-cuentas">
                    <h1>RENDICIÓN PÚBLICA DE CUENTAS</h1>
                    <p>La Corporación Colonia De San Luis tiene como Compromiso social dar claridad de sus iniciativas sociales y realizar la rendición de cuentas de manera abierta y trasparente ante las comunidades.</p>
                    <div class="docs">
                    <h4>DOCUMENTACION PARA EL SEGUIMIENTO Y CONTROL POR PARTE DE LA COMUNIDAD</h4>
                    <div class="row">

                            <div class="col-md-6">

                                <a target="_blank" href="{{asset('documentation/ActadeConstitucionColonia.pdf')}}">Acta de Constitución Colonia</a><br>
                                <a target="_blank" href="{{asset('documentation/ActadeAsambleaColonia.pdf')}}">Acta de Asamblea Colonia</a><br>
                                <a target="_blank" href="{{asset('documentation/CertificadodeExistenciaColonia.pdf')}}">Certificado de Existencia Colonia</a><br>
                                <a target="_blank" href="{{asset('documentation/DeclaraciondeRentas.pdf')}}">Declaración de Rentas</a><br>
                                <a target="_blank" href="{{asset('documentation/EstadosFinancierosColonia.pdf')}}">Estados Financieros Colonia</a><br>
                                <a target="_blank" href="{{asset('documentation/EstatutosColonia.pdf')}}">Estatutos Colonia</a><br>
                                <a target="_blank" href="{{asset('documentation/informeDeGestionColonia.pdf')}}">Informe de Gestión Colonia</a><br>
                                <a target="_blank" href="{{asset('documentation/RUTColonia.pdf')}}">RUT Colonia</a><br>
                                <a target="_blank" href="{{asset('documentation/CERTIFICACIONES.pdf')}}">CERTIFICACIONES</a><br>
                                <a target="_blank" href="{{asset('documentation/alex.pdf')}}">Antecedentes Judiciales Miembro 1</a><br>
                                <a target="_blank" href="{{asset('documentation/Andrea.pdf')}}">Antecedentes Judiciales Miembro 2</a><br>
                                <a target="_blank" href="{{asset('documentation/cesar.pdf')}}">Antecedentes Judiciales Miembro 3</a><br>
                                <a target="_blank" href="{{asset('documentation/Diego.pdf')}}">Antecedentes Judiciales Miembro 4</a><br>
                                <a target="_blank" href="{{asset('documentation/MarthaRincon.pdf')}}">Antecedentes Judiciales Miembro 5</a><br>
                                <a target="_blank" href="{{asset('documentation/Ninsan.pdf')}}">Antecedentes Judiciales Miembro 6</a><br>
                                <a target="_blank" href="{{asset('documentation/Robinson.pdf')}}">Antecedentes Judiciales Miembro 7</a><br>
                            </div>
                            <div class="col-md-6">
                                <a target="_blank" href="{{asset('documentation/procuraduriaAlex.pdf')}}">Antecedentes Procuraduria Miembro 1</a><br>
                                <a target="_blank" href="{{asset('documentation/procuraduriaAndrea.pdf')}}">Antecedentes Procuraduria Miembro 2</a><br>
                                <a target="_blank" href="{{asset('documentation/procuraduriaCesar.pdf')}}">Antecedentes Procuraduria Miembro 3</a><br>
                                <a target="_blank" href="{{asset('documentation/procuraduriaDiego.pdf')}}">Antecedentes Procuraduria Miembro 4</a><br>
                                <a target="_blank" href="{{asset('documentation/procuraduriaMartha.pdf')}}">Antecedentes Procuraduria Miembro 5</a><br>
                                <a target="_blank" href="{{asset('documentation/procuraduriaNinsa.pdf')}}">Antecedentes Procuraduria Miembro 6</a><br>
                                <a target="_blank" href="{{asset('documentation/procuraduriaRobinson.pdf')}}">Antecedentes Procuraduria Miembro 7</a><br>
                                <a target="_blank" href="{{asset('documentation/ContraloriaAlexDuque.pdf')}}">Antecedentes Contraloría Miembro 1</a><br>
                                <a target="_blank" href="{{asset('documentation/ContraloriaAndrea.pdf')}}">Antecedentes Contraloría Miembro 2</a><br>
                                <a target="_blank" href="{{asset('documentation/ContraloriaCesar.pdf')}}">Antecedentes Contraloría Miembro 3</a><br>
                                <a target="_blank" href="{{asset('documentation/ContraloriaDiego.pdf')}}">Antecedentes Contraloría Miembro 4</a><br>
                                <a target="_blank" href="{{asset('documentation/ContraloriaMartha.pdf')}}">Antecedentes Contraloría Miembro 5</a><br>
                                <a target="_blank" href="{{asset('documentation/ContraloriaNinsa.pdf')}}">Antecedentes Contraloría Miembro 6</a><br>
                                <a target="_blank" href="{{asset('documentation/ContraloriaRobinson.pdf')}}">Antecedentes Contraloría Miembro 7</a><br>

                            </div>



                    </div>
                    </div>
                    <p>




                    </p>


                </section>

                <section class="comments">
                    <h4>TU OPINIÓN ES IMPORTANTE PARA NOSOTROS</h4>

                    <div class="fb-comments" data-href="http://coloniadelmunicipiodesanluis.org/rendicion-cuentas" data-width="500" data-numposts="10"></div>

                </section>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>





@endsection

@section('scripts')
<script>
    $("#inicio-sec").on("click", function(e){
        location.href = '/';
    });
    $("#a-inicio").on("click", function(e){
        location.href = '/';
    });
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.0';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

@endsection