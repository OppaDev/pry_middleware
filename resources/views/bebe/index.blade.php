@extends('app')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow border-0">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">Portal de Salud para Bebés (0-5 años)</h2>
                </div>
                <div class="card-body p-4">
                    <div class="alert alert-info">
                        <h4 class="alert-heading">¡Bienvenido al portal de salud para bebés!</h4>
                        <p>En esta sección encontrará información valiosa sobre el cuidado, desarrollo y salud de los bebés de 0 a 5 años.</p>
                    </div>
                    
                    <h3 class="mt-4">Contenido recomendado para este grupo de edad:</h3>
                    <div class="row mt-3">
                        <div class="col-md-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Vacunación</h5>
                                    <p class="card-text">Información sobre el calendario de vacunación recomendado para bebés.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Nutrición</h5>
                                    <p class="card-text">Consejos sobre alimentación, lactancia y primeros alimentos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Desarrollo</h5>
                                    <p class="card-text">Etapas de desarrollo motriz y cognitivo durante los primeros años.</p>
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