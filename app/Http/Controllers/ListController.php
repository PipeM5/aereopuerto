<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function obtenerTripulantes()
    {
       
        return view('admin.admin_tripulantes');

    }
}
