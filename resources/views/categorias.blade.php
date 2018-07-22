@extends('template')
@section('title')
    Medellín Cup - Categorias
@endsection

@section('css')

@endsection

@section('main-content')


           <div class="header-page">
               <img src="{{asset('assets/images/header-pages/categorias.jpg')}}">
               <h1>Categorías</h1>
           </div>

        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div id="s1" class="pre-item-info"></div>
                    <section class="item-info">
                        <h2>Categorías</h2>
                        <hr>

                        <h4>Masculina</h4>
                        <ul>
                        <li><strong>H-U8</strong>   Los nacidos después del 1/1/2010  Fútbol 7</li>
                        <li><strong>H-U10</strong> Los nacidos después del 1/1/2008  Fútbol 7</li>
                        <li><strong>B-U12</strong> Los nacidos después del 1/1/2006  Fútbol 11</li>
                        <li><strong>B-U14</strong> Los nacidos después del 1/1/2004  Fútbol 11</li>
                        <li><strong>B-U16</strong> Los nacidos después del 1/1/2002  Fútbol 11</li>
                        <li><strong>B-U18</strong> Los nacidos después del 1/1/2000  Fútbol 11</li>
                        </ul>

                        <h4>Femenina</h4>
                        <ul>
                        <li><strong>G-U14</strong> Los nacidos después del 1/1/2004  Fútbol 11</li>
                        <li><strong>G-U16</strong> Los nacidos después del 1/1/2002  Fútbol 11</li>
                        <li><strong>G-U18</strong> Los nacidos después del 1/1/2000  Fútbol 11</li>
                        <li><strong>G-Libre</strong></li>
                        </ul>
                    </section>



                </div>
                <div class="col-md-2">

                    <div id="scrollspy" class="sticky-top">
                        <ul class="nav nav-pills smooth-scroll flex-column" data-allow-hashes="true">
                            <li class="nav-item"><a class="nav-link nav-sec active" href="#s1">Categorías</a></li>

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
        $("#menu-categorias").addClass("active");
    </script>
@endsection