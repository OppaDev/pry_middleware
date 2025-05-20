@extends('app')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow border-0">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">Portal de Salud para Niños (6-12 años)</h2>
                </div>
                <div class="card-body p-4">
                    <div class="alert alert-info">
                        <h4 class="alert-heading">¡Bienvenido al portal de salud para niños!</h4>
                        <p>En esta sección encontrarás recursos sobre crecimiento, aprendizaje y bienestar para niños en edad escolar.</p>
                    </div>
                    
                    <h3 class="mt-4">Temas de interés para este grupo de edad:</h3>
                    <div class="row mt-3">
                        <div class="col-md-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Desarrollo Escolar</h5>
                                    <p class="card-text">Consejos para el rendimiento académico y social en la escuela.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Actividad Física</h5>
                                    <p class="card-text">Importancia del deporte y el juego para un crecimiento saludable.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Salud Dental</h5>
                                    <p class="card-text">Cuidado de los dientes permanentes y visitas al dentista.</p>
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