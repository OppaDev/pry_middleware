<?php

namespace App\Http\Middleware;

use App\Models\AgeLog;
use App\Services\AgeRouterService;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;

class VerificarEdad
{
    //instancia del servicio AgeRouterService
    protected AgeRouterService $ageRouterService;

    // Constructor para inyectar el servicio AgeRouterService
    public function __construct(AgeRouterService $ageRouterService)
    {
        $this->ageRouterService = $ageRouterService;
    }

    
    public function handle(Request $request, Closure $next): Response
    {
        $validator = Validator::make($request->all(), [
            'edad' => 'required|numeric|integer|min:0|max:120',
        ]);
        
        if ($validator -> fails()) {
            return response()->view('error.index', ['message' => 'La edad debe ser un número entero entre 0 y 120.'], 400);
        }

        // obtener la edad valida
        $edad = (int)$request->input('edad');

        if ($edad < 0 || $edad > 120) {
            return response()->view('error.index', ['message' => 'La edad debe estar entre 0 y 120 años.'], 400);
        }
        //registrar la edad en la base de datos
        try {
            AgeLog::create([
                'edad' => $edad,
            ]);
        } catch (\Exception $e) {
            Log::error('Fallo al registrar la edad'.$e->getMessage());
        }

        // clasificar por edad  y obtener la ruta con AgeRouterService
        $redirigirRuta = $this->ageRouterService->getRutaPorEdad($edad);
        if ($redirigirRuta) {
            return redirect()->route($redirigirRuta);
        } else {
            return response()->view('error.index', ['message' => 'No se pudo determinar la ruta para la edad proporcionada.'], 400);
        }
    }
}
