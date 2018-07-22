@extends('template')
@section('title')
    Casa de la Cultura - Blog
@endsection

@section('css')

@endsection

@section('main-content')

           <div class="header-page">
            <img src="{{asset('assets/images/header-pages/blog.jpg')}}">
            <h1>BLOG</h1>
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