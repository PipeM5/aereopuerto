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
            <a class="nav-link text-white bg-dark" href="{{ url('login') }}">Bienvenido</a>
        </span>
    </nav>
@endsection

@section('content')

    <div style="margin-left:37%;margin-right:35%; margin-top: 30px">
        <div class="card" style="width: 18rem; text-align:center">
            <img src="{{asset('img/login.jpg')}}" height="230" class="card-img-top" alt="iniciosesion">
            <div class="card-body">
            <form class="needs-validation" action="login" method="POST" name="login" enctype="multipart/form-data"novalidate>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Cédula</label>
                    <input type="number" class="form-control" name="cedula" id="cedula" aria-describedby="emailHelp" require>
                    <small id="emailHelp" class="form-text text-muted">Por favor ingrese su número de cédula.</small>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password" require>
                </div>
                <button type="submit" class="btn btn-primary">Ingresar</button>   
            </form>
            </div>
        </div>
    </div>

@endsection