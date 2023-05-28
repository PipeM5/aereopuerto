<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    
    public function createVuelo()
    {
        
        return view('admin.vuelos.add_vuelo');
    }

    public function createRuta()
    {
        return view('admin.rutas.add_ruta');
    }

    public function createTripulante()
    {
        return view('admin.tripulantes.add_tripulante');
    }
   
    
}
