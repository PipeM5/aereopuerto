<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ListController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [HomeController::class, 'getHome']);
Route::get('login', [HomeController::class, 'logearse']);
Route::any('admin', [AdminController::class, 'showAdmin']);
Route::any('adminvuelos', [AdminController::class, 'listVuelo']);
Route::any('admintripulantes', [ListController::class, 'obtenerTripulantes']);
 
Route::any('adminrutas', [AdminController::class, 'listRuta']);

Route::get('/tres', [PersonalController::class, 'clases']);


