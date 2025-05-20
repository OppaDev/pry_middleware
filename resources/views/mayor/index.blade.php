@extends('app')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow border-0">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">Portal de Salud para Adultos Mayores (60-74 años)</h2>
                </div>
                <div class="card-body p-4">
                    <div class="alert alert-info">
                        <h4 class="alert-heading">¡Bienvenido al portal de salud para adultos mayores!</h4>
                        <p>Aquí encontrarás información para un envejecimiento activo, saludable y pleno.</p>
                    </div>
                    
                    <h3 class="mt-4">Claves para un envejecimiento saludable:</h3>
                    <div class="row mt-3">
                        <div class="col-md-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Envejecimiento Activo</h5>
                                    <p class="card-text">Mantenerse activo física y mentalmente durante la jubilación y más allá.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Manejo de Condiciones Crónicas</h5>
                                    <p class="card-text">Información y apoyo para vivir bien con condiciones de salud comunes en esta etapa.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Salud Cognitiva</h5>
                                    <p class="card-text">Ejercicios y hábitos para mantener la mente ágil y prevenir el deterioro cognitivo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-grid gap-2 mt-4">
                        <a href="{{ route('welcome') }}" class="btn btn-outline-primary">
                            <i class="bi bi-arrow-left me-2"></i> Volver al Inicio
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection