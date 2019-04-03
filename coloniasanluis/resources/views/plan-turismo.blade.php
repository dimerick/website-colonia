@extends('template')
@section('title')
    Colonia del Municipio de San Luis - Historia
@endsection

@section('css')

@endsection

@section('main-content')

    <div class="header-page">
            <img src="{{asset('assets/images/header-pages/blog.jpg')}}">
            
    </div>

    <div class="container">
        <div class="row">
                        <div class="col-md-8">
<h2>PLAN LOCAL DE TURISMO SAN LUIS 2018-2032</h1>
                
<p>
    Un proyecto pensado y estructurado por algunos integrantes de la colonia en Medellín y líderes del turismo desde hace 5 años, siempre con la inquietud de aportar al desarrollo y potencial Sanluisano,  planteando para que  sean las mismas comunidades las que se empoderen del plan, potenciando las posadas campesinas, los  administradores turísticos, guías y todo lo que rodea el turismo como: el transporte, alojamientos, hoteles, restaurantes y comidas rápidas. Todo ello, siempre pensado en comunión con la naturaleza de una forma integral: la gran biodiversidad, sus bosque y sus fuentes hídricas, con que nos ha premiado Dios y muy pocos valoramos o reconocemos, dadas las concepciones, los intereses de los poderes en que consumamos a costa del bienestar del planeta.
</p>
<p>
    <br>
    El proyecto se realizó a 6 meses con la guía de un experto en la materia. Su capacidad marcó en gran manera el norte de este plan apoyado por un equipo profesional sanluisano con trayectoria en el campo del turismo, del medio ambiente, de lo social y de las comunicaciones. Pero el desarrollo  del Plan Local de Turismo solo cobró sentido con el apoyo y trabajo conjunto de las distintas comunidades donde se realizaron los talleres participativos: Casco Urbano, El Prodigio, Zona Panelera y Cafetera (veredas parte alta del municipio: Sopetrán, Buenos Aires, Manizales, La Estrella, Barro Blanco), Zona de la autopista parte alta (La Tebaida, Vallesol, La Habana, Santa Bárbara) y zona autopista parte baja ( La Josefina, Monteloro, La Garrucha, Altavista, Rio Claro) Los talleres fueron abiertos a todas las personas que quisieran participar; donde ellos mismos  aportaron y expusieron sus dudas, inquietudes e inclusive reparos. Pero ante todo analizando desde las distintas características de estas zonas ¿Cuáles son nuestras fortalezas y cuales nuestras debilidades a la hora de hablar de un turismo en San Luis?
    <br>
    Los componentes fundamentales del plan fueron: la recolección y análisis de información, el diseño metodológico de talleres e instrumentos a aplicar, la definición preliminar de los sitios potenciales a vincular en el inventario turístico, el levantamiento de un inventario turístico de los recursos o atractivos, la elaboración de un  diagnóstico turístico local, la socialización del plan de desarrollo turístico y conformación de la mesa local de turismo de San Luis.
</p>
    <p>
    
    Dentro de los viajes recorriendo la geografía de nuestro territorio sanluisano, se encontraron y registraron más de 50 lugares naturales algunos escondidos o que solo  son conocidos por la gente cercana a la región. También se tomó nota de patrimonios culturales e inmateriales que denotan el sentir, la tradición y arraigo del sanluisano. Todo esto se da  en ese turismo que soñamos y que queremos ayudar a construir; en el cual primero debemos conocer lo que tenemos, preservarlo, así como cuidarlo.  Además de prepararnos de una manera organizada y comunitaria para atender y atraer el turismo.
    <br>
    Solo cuando cobremos  ese sentido de pertenencia para con lo que tenemos,  podremos abrirnos más a al turismo.  Es necesario hacer este proceso para que todo obedezca a una planeación y trabajo con todos los sectores municipales que de una u otra manera están inmersos en el sector turístico (Esto incluye a las administraciones municipales, empresas y comunidad).  Precisamente por eso la visión del Plan Local de Turismo esta puesta hacia el futuro (2018 -2032) porque el turismo así como trae cosas que nos beneficien; también arrastra complicaciones y cosas que no. Entonces queremos que desde la conformación del Comité Local de Turismo o Mesa Local de Turismo, se puedan articular ideas y estrategias para trabajar por un turismo real y que: como popularmente se dice: <em>“No venga solo a traernos y dejarnos la basura”</em>
    
</p>
<p>
Este no es el punto final del Plan Local de Turismo. Es apenas el primer paso que damos para lo que será la construcción de una  Política Pública aprovechando también las dinámicas actuales como la  Provincia del Agua. El Bosque y el Turismo del Oriente Antioqueño; permitiendo que en San Luis el turismo quede dentro de una  hoja de ruta  como algo de vital importancia donde se desarrollan acciones y gestiones enmarcadas en el interés público (que es el turismo),  aportando a la economía local así como a la conservación y aprovechamiento  amigable de nuestros  recursos naturales. 

</p>
<p>
Finalmente la Colonia de San Luis  es una entidad de puertas abiertas que seguirá  encaminada en emprender y apoyar todo tipo de acciones que repercuten en  nuestra comunidad sanluisana. Es algo que desde nuestra  razón de ser siempre hemos  llevado a cabo y seguiremos haciendo por nuestro municipio y su gente. 

</p>

<div class="galery-photos">
            <div id="flickrembed_56"></div><div style="position:absolute; top:-70px; display:block; text-align:center; z-index:-1;"><a rel="nofollow" href="">/</a></div><script src='https://flickrembed.com/embed_v2.js.rand.php?container=flickrembed_56&source=flickr&layout=responsive&input=72157707931336444&sort=0&by=album&theme=default&scale=fit&limit=10&skin=default&autoplay=true'></script><small style="display: block; text-align: center; margin: 0 auto;">Powered by <a href="https://flickrembed.com">flickr embed</a>.</small>
        </div>


    


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