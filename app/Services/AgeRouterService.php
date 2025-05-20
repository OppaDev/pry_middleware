<?php

namespace App\Services;

class AgeRouterService
{
    
    
    public function __construct()
    {
        //
    }

    //condiciones para determinar la ruta respecto a la tabla de edades
    public function getRutaPorEdad(int $edad): ?string
    {
        if ($edad >=0 && $edad <= 5){
            return 'bebe.index';
        } elseif ($edad >= 6 && $edad <= 12) {
            return 'nino.index';
        } elseif ($edad >= 13 && $edad <= 17) {
            return 'adolescente.index';
        } elseif ($edad >= 18 && $edad <= 25) {
            return 'joven.index';
        } elseif ($edad >= 26 && $edad <= 59) {
            return 'adulto.index';
        } elseif ($edad >= 60 && $edad <= 74) {
            return 'mayor.index';
        } elseif ($edad >= 75) {
            return 'longevo.index';
        } else {
            return null; // Edad no válida
        }

    }
}
