{{-- @extends('layouts.app') --}}
@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">           
            <a href="/cuestionarios" class="btn">< back</a>
            <h1>Cuestionario</h1>  
            <div class="card">
                <h4 class="card-header">{{ __($cuestionario->titulo) }}</h4>
                <div class="card-body">
                    <p class="card-text">{{ __($cuestionario->descripcion) }}</p>
                    <form action="/cuestionarios/{{ $cuestionario->id }}" method="POST">
                        @method('delete')    
                        @csrf
                        <a class="btn btn-primary" href="/cuestionarios/{{ $cuestionario->id }}/preguntas/create">Agregar pregunta</a>
                        <a class="btn btn-info" href="/cuestionarios/{{ $cuestionario->id }}/edit"><i class="fas fa-pencil-alt"></i></a>
                        <button class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button>
                   </form>
                </div>
            </div> 

            <h2>Preguntas</h2>
            @forelse($cuestionario->preguntas as $pregunta)
                <div class="card">
                    <h3 class="card-header">{{ __('Pregunta') }} {{ __($loop->index + 1) }}</h3>
                    <div class="card-body">
                        <p class="card-text">{{ __($pregunta->pregunta) }}</p>
                        <form class="row justify-content-end" action="/cuestionarios/preguntas/{{ $pregunta->id }}" method="POST">
                            @method('delete')    
                            @csrf
                            <a class="btn btn-primary m-1" href="/cuestionarios/preguntas/{{ $pregunta->id }}/respuestas/create">Agregar respuesta</a>
                            <a class="btn btn-info m-1" href="/cuestionarios/preguntas/{{ $pregunta->id }}/edit"><i class="fas fa-pencil-alt"></i></a>
                            <button class="btn btn-danger m-1" ><i class="fas fa-trash-alt"></i></button>
                        </form>
                        <h3>Respuestas</h3>
                        
                        <ul class="list-group">   
                        @forelse ($pregunta->respuestas as $respuesta)
                            <li class="list-group-item"><input class="border-0" id="respuesta{{ $loop->index }}" type="text" value="{{ $respuesta->respuesta }} -- {{ $respuesta->puntaje }}" readonly>
                                <form class="float-right" action="/cuestionarios/{{ $cuestionario->id }}/respuestas/{{ $respuesta->id }}" method="POST">
                                    @method('delete')  
                                    @csrf
                                    {{-- <a class="btn btn-info" href="#" onclick="editarRespuesta({{ $loop->index }})"><i class="fas fa-pencil-alt"></i></a> --}}
                                   <button class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </li>
                        @empty
                        
                            <li class="list-group-item">No tiene respuestas</li>
                        
                        @endforelse
                        </ul>
                        {{-- <script>
                            function editarRespuesta(respuesta){ 
                                respuesta = "respuesta" + respuesta;
                                document.getElementById(respuesta).removeAttribute("readonly");
                                document.getElementById(respuesta).focus();
                           
                            };
                        </script> --}}
                    </div>
                
                </div>
                
            @empty
                <div class="card">
                    <p>No hay preguntas</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
