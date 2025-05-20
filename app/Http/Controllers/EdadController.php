<?php

namespace App\Http\Controllers;

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

        $edad = $request->input('edad');
    }
}
