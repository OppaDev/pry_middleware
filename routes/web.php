<?php

use App\Http\Controllers\EdadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/formEdad', [EdadController::class, 'index']) -> name('formEdad');
Route::post('/formEdad', [EdadController::class, 'enviarEdad']) -> name('formEdad.enviar');