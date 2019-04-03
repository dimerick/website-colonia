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
<h2>PRODUCTOS TÍPICOS PRODUCTO DEL TRABAJO CAMPESINO </h1>
                
<p>
    Productos típicos de nuestra región sanluisana fruto del trabajo campesino de Asopajuz San Luis Antioquia de la vereda Sopetràn y Asfaconfu San Luis Antioquia que a través del trabajo campesino asociativo y comunitario sacan un excelente producto de calidad 100% natural que apoya la economía de muchas de nuestras familias campesinas en San Luis. Todo esto también hace parte de un servicio y productos para ofrecer y que atraen al turismo con sus olores y sabores. Los productos locales también se enmarcan dentro del Plan Local de Turismo ejecutado apoyado por Colonia De San Luis En Medellín atrayendo  un turismo a esta zona, como ya se hace en otras regiones paneleras  y cafeteras de Antioquia, para que la gente conozca el proceso de transformación, además de comprar y adquirir de primera mano los productos que nuestros campesinos producen  y de paso pueden conocer los atractivos naturales que están cerca.
    <br>
    Asfaconfu trabaja con las familias campesinas de nuestro municipio con diferentes productos de calidad como café, chocolate, mermeladas, aceite de sachainchi, miel, entre otros. Asopajuz en la vereda Sopetrán trabaja con todo lo que tiene que ver a la transformación de la caña de azúcar en panela con sus productos y subproductos. Panela, panela pulverizada, dulces, blanqueado (conejo) entre otros.
    <br>
    Invitamos a la nuestros paisanos y amigos a que apoyen esta iniciativa conociendo y adquiriendo sus productos en el local del parque de San Luis. (También se pueden conseguir en Medellín) Allí también se está montando la caseta de turismo. 
    <br>
</p>
<p><b>APOYEMOS LOS PRODUCTOS DE SAN LUIS Y A LAS FAMILIAS CAMPESINAS QUE LOS PRODUCEN</b></p>
<div class="galery-photos">
            <div id="flickrembed_56"></div><div style="position:absolute; top:-70px; display:block; text-align:center; z-index:-1;"><a rel="nofollow" href="">/</a></div><script src='https://flickrembed.com/embed_v2.js.rand.php?container=flickrembed_56&source=flickr&layout=responsive&input=72157707931190244&sort=0&by=album&theme=default&scale=fit&limit=10&skin=default&autoplay=true'></script><small style="display: block; text-align: center; margin: 0 auto;">Powered by <a href="https://flickrembed.com">flickr embed</a>.</small>
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