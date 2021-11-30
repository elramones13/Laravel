<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth'])
    ->name('dashboard');


Route::resource('/recetas', RecetaController::class);

Route::get('/recetas/{receta}', [RecetaController::class, 'destroy'])->name(
    'borrar_cliente'
);

Route::get('/receta/create', [RecetaController::class, 'create'])->name(
    'crear_cliente'
);

Route::post('/receta', [RecetaController::class, 'store'])->name(
    'guardar_cliente'
);
Route::get('/receta/{receta}/edit', [
    RecetaController::class,
    'edit',
])->name('editar_cliente');
