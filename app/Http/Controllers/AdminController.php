<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   

    public function showAdmin()
    {
        return view('admin.admin_view');
    }

    public function listVuelo()
    {
       
        return view('admin.admin_vuelos');
    }

    public function listRuta()
    {
      
        return view('admin.admin_rutas');
    }
}
