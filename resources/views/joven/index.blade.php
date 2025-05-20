@extends('app')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow border-0">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">Portal de Salud para Jóvenes Adultos (18-25 años)</h2>
                </div>
                <div class="card-body p-4">
                    <div class="alert alert-info">
                        <h4 class="alert-heading">¡Bienvenido al portal de salud para jóvenes adultos!</h4>
                        <p>Información y herramientas para navegar esta etapa de independencia, estudios, inicio laboral y decisiones importantes.</p>
                    </div>
                    
                    <h3 class="mt-4">Áreas clave para tu bienestar:</h3>
                    <div class="row mt-3">
                        <div class="col-md-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Vida Independiente</h5>
                                    <p class="card-text">Consejos para la transición a la vida adulta, estudios superiores o inicio de tu carrera profesional.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Bienestar y Estrés</h5>
                                    <p class="card-text">Estrategias para manejar el estrés académico, laboral y personal, y cuidar tu salud mental.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Salud Preventiva</h5>
                                    <p class="card-text">Importancia de los chequeos médicos regulares y hábitos saludables para un futuro sano.</p>
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