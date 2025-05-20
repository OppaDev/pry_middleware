<?php

use App\Http\Controllers\AdolescenteController;
use App\Http\Controllers\AdultoController;
use App\Http\Controllers\BebeController;
use App\Http\Controllers\EdadController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\JovenController;
use App\Http\Controllers\LongevoController;
use App\Http\Controllers\MayorController;
use App\Http\Controllers\NinoController;
use App\Http\Middleware\VerificarEdad;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//formulario de edad
Route::get('/formEdad', [EdadController::class, 'index']) -> name('formEdad');
Route::post('/formEdad', function(){}) -> name('formEdad.enviar') -> middleware(VerificarEdad::class);

//rutas destino de edades
Route::get('/bebes', [BebeController::class, 'index']) -> name('bebe.index');
Route::get('/ninos', [NinoController::class, 'index']) -> name('nino.index');
Route::get('/adolescentes', [AdolescenteController::class, 'index']) -> name('adolescente.index');
Route::get('/jovenes', [JovenController::class, 'index']) -> name('joven.index');
Route::get('/adultos', [AdultoController::class, 'index']) -> name('adulto.index');
Route::get('/mayores', [MayorController::class, 'index']) -> name('mayor.index');
Route::get('/longevos', [LongevoController::class, 'index']) -> name('longevo.index');

//ruta error
Route::get('/error', [ErrorController::class, 'index']) -> name('error.index');