@extends('app')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow border-0">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">Portal de Salud para Personas Longevas (75-120 años)</h2>
                </div>
                <div class="card-body p-4">
                    <div class="alert alert-info">
                        <h4 class="alert-heading">¡Bienvenido al portal de salud para personas longevas!</h4>
                        <p>Recursos y apoyo para mantener la calidad de vida, la independencia y el bienestar en la longevidad.</p>
                    </div>
                    
                    <h3 class="mt-4">Bienestar en la longevidad:</h3>
                    <div class="row mt-3">
                        <div class="col-md-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Calidad de Vida</h5>
                                    <p class="card-text">Consejos para mantener la independencia funcional, la autonomía y el bienestar emocional.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Movilidad y Seguridad</h5>
                                    <p class="card-text">Adaptaciones en el hogar, ejercicios suaves y consejos para prevenir caídas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Conexión Social y Apoyo</h5>
                                    <p class="card-text">Importancia de mantener lazos sociales, actividades grupales y redes de apoyo.</p>
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