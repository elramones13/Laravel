<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\VueloController;
use App\Http\Controllers\PilotoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
=======
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\IngredienteController;

>>>>>>> 603a441b7825767d03e174b2f570a47629bbdb1b

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::resource('/vuelos', VueloController::class);
Route::resource('/pilotos', PilotoController::class);
=======
Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth'])
    ->name('dashboard');




Route::resource('/ingredientes', IngredienteController::class);

Route::resource('/recetas', RecetaController::class);


>>>>>>> 603a441b7825767d03e174b2f570a47629bbdb1b
