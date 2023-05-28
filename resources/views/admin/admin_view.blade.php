@extends('master')

@section('menu')
    @parent

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('../') }}">
            <img src="{{asset('img/logo.png')}}" width="30" height="24" class="d-inline-block align-text-top" alt="" loading="lazy">
            Fast Airlines
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('../') }}">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listar">Listar Tripulantes</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Gestionar
                    </a>
                    <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item text-light bg-dark" href="{{ url('adminvuelos') }}">Vuelos</a></li>
                        <li><a class="dropdown-item text-light bg-dark" href="{{ url('adminrutas') }}">Rutas</a></li>
                        <li><a class="dropdown-item text-light bg-dark" href="{{ url('admintripulantes') }}">Tripulantes</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('../login') }}">Cerrar Sesión</a>
                </li>
            </ul>
        </div>

        <span class="navbar-item">
            <a class="nav-link text-white bg-dark" href="{{ url('admin') }}">Bienvenido</a>
        </span>
    </nav>
    
@endsection

@section('content')

    <br>
    <div class="card text-white bg-dark mb-3" style="max-width: 70rem;">
        
        <div class="card-body">
            <h5 class="card-title">HOLA, Felipe Moran.</h5>
            <p class="card-text">Cargo: Administrativo.</p>
            <p class="card-text">Ciudad de residencia: San Juan de Pasto. </p>
            <p class="card-text">Como administrador de la aerolínea usted puede gestionar tripulantes, vuelos y rutas.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end" >
                <a class="btn btn-dark" href="{{ url('../login') }}" role="button"><i class="bi bi-arrow-left-circle"></i>  Cerrar Sesión</a>
            </div>
        </div>
    </div>
   
@endsection