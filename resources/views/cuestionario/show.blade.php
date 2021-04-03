@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>Cuestionarios</h1> 
                <div class="card-header">{{ __($cuestionario->titulo) }}</div>
                <div class="card-text">{{ __($cuestionario->descripcion) }}</div>

                <div class="card-body">
                   <a class="btn btn-dark" href="/cuestionarios/{{ $cuestionario->id }}/preguntas/create">Agregar pregunta</a>
                   <a class="btn btn-danger" href="/cuestionarios/{{ $cuestionario->id }}/preguntas/create">Modificar cuestionario</a>
                   <a class="btn btn-danger" href="/cuestionarios/{{ $cuestionario->id }}/preguntas/create">Eliminar cuestionario</a>
                    
                </div>
            </div>


            @foreach ($cuestionario->preguntas as $pregunta)
            <div class="card">
                <div class="card-header">{{ __($pregunta->pregunta) }}</div>

                <div class="card-body">
                   <a class="btn btn-dark" href="/cuestionarios/{{ $cuestionario->id }}/preguntas/create">Agregar respuesta</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
