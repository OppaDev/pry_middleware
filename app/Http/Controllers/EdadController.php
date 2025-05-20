<?php

namespace App\Http\Controllers;

use App\Models\AgeLog;
use App\Http\Middleware\VerificarEdad;


use Illuminate\Http\Request;

class EdadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('formEdad.formEdad');
    }

    public function enviarEdad(Request $request)
    {
        //validacion de edad entre 0 y 120
        $validatedData = $request->validate([
            'edad' => 'required|integer|min:0|max:120',
        ]);

        // Guardar la edad en la base de datos
        $edad = new AgeLog();
        $edad -> edad = $request -> edad;
        $edad -> save();
    }
}
