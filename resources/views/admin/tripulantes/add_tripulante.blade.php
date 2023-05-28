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
                    <a class="nav-link" href="{{ url('listar') }}">Listar Tripulantes</a>
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
            <h5 class="card-title" style="text-align:center">AÑADIR TRIPULANTE</h5><br>
            <form action="{{ url('foo/bar') }}" id="formato" method="POST">
                {{ csrf_field() }}
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <input type="text" name="nombretripulante" id="nombretripulante" value="" class="form-control" placeholder="Nombre" aria-label="Sizing example input" require>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <input type="text" name="apellidotripulante" id="apellidotripulante" value="" class="form-control" placeholder="Apellido" aria-label="Sizing example input" require>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" require>
                                <option selected>Seleccionar ciudad de residencia</option>
                                <option value="1">Pasto</option>
                                <option value="2">Cali</option>
                                <option value="3">Bogotá</option>
                                <option value="4">Medellin</option>
                            </select> 
                        </div>
                        <div class="col-4">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" require>
                                <option selected>Seleccionar cargo</option>
                                <option value="1">Piloto</option>
                                <option value="2">Asistente de Vuelo</option>
                            </select>                        
                        </div>
                        <div class="col-4">
                            <div class="input-group input-group-sm mb-3">
                                <input type="number" name="cedulatripulante" id="cedulatripulante" value="" class="form-control" placeholder="Número de cédula" aria-label="Sizing example input" require>
                        
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <input type="password" name="passwordtripulante" id="passwordtripulante" value="" class="form-control" placeholder="Contraseña" aria-label="Sizing example input" require>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-sm mb-3">
                                <input type="password" name="password2tripulante" id="password2tripulante" value="" class="form-control" placeholder="Digite nuevamente la contraseña" aria-label="Sizing example input" require>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end" >
                    <a class="btn btn-dark" href="{{ url('admintripulantes') }}" role="button"><i class="bi bi-x-circle"></i>  Cancelar</a>
                    <button class="btn btn-dark" type="submit"><i class="bi bi-plus-circle"></i>  Añadir</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection