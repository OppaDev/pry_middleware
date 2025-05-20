@extends('app')
@section('content')
    <div class="container mt-5">
    <div class="alert alert-danger text-center">
        <h4 class="alert-heading">Error en la Edad Ingresada</h4>
        <p>
            @if(isset($message))
                {{ $message }}
            @else
                Ha ocurrido un error con la edad proporcionada. Por favor, asegúrate de ingresar un valor numérico entre 0 y 120.
            @endif
        </p>
        <hr>
        <p class="mb-0">
            <a href="{{ route('welcome') }}" class="btn btn-primary">Volver</a>
        </p>
    </div>
</div>
@endsection
