@extends('master')

@section('menu')
    @parent

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('img/logo.png')}}" width="30" height="24" class="d-inline-block align-text-top" alt="" loading="lazy">
            Fast Airlines
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('login') }}">Iniciar Sesión</a>
                </li>
            </ul>
        </div>

        <span class="navbar-item">
            <a class="nav-link text-white bg-dark" href="{{ url('../') }}">Bienvenido</a>
        </span>
    </nav>
@endsection

@section('content')

    <div class="container">
        <div class="card text-dark bg-light mb-3">

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('img/carrusel1.jpg')}}" height="440" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/carrusel2.png')}}" height="440" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('img/carrusel3.jpg')}}" height="440" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>

            <div class="card-body">
                <h2 class="card-title">FAST AIRLINES</h2>
                <p class="card-text">Somos una línea aérea liderada por un equipo de trabajo de primer nivel y muchos años de experiencia en el mercado aéreo nacional.
                                     Estamos aquí para conectar personas brindando el mejor servicio con una amplia oferta de destinos.</p>
                                    <h5>SOMOS FAST AIRLINES ¡LA MEJOR MANERA DE VOLAR!</h5>
            </div>
        </div>
    </div>
@endsection