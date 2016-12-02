@extends('template')

@section('titulo')
    Cotidiano de um desenvolvedor - Buguei!
@stop

@section('conteudo')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Buguei!</h1>
                        <hr class="small">
                        <span class="subheading">Blog de humor sobre o cotidiano de desenvolvedor (ou quase).</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @foreach($posts as $post)
                <div class="post-preview">
                    <a href="#">
                        <h2 class="post-title">
                            {{ $post['titulo'] }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ $post['texto'] }}
                        </h3>
                    </a>
                    <p class="post-meta">Postado por <a href="#">{{ $post['autor'] }}</a> em {{ $post['data'] }}</p>
                </div>
                <hr>
                @endforeach
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Outros Bugs &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>
@stop