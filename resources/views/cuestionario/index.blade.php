{{-- @extends('layouts.app') --}}
@extends('adminlte::page')

@section('title', 'Cuestionarios')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Cuestionarios <a class="float-right" href="/cuestionarios/create">Agregar Cuestionario</a></div>
                
                <ul class="list-group list-group-flush">
                @forelse ($cuestionarios as $cuestionario)
                    <li class="list-group-item">{{ $cuestionario->titulo }}
                        
                        <a class="btn btn-primary float-right" href="/cuestionarios/{{ $cuestionario->id }}/">Modificar Cuestionario</a>
                    
                    </li>   
                @empty
                <li class="list-group-item">No hay cuestionarios</li>        
                @endforelse
                </ul>
            </div>           
        </div>
    </div>
</div>
@endsection
