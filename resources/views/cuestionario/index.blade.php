{{-- @extends('layouts.app') --}}
@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cuestionarios</div>
                <ul class="list-group list-group-flush">
                @foreach ($cuestionarios as $cuestionario)
                    <li class="list-group-item">{{ $cuestionario->titulo }}
                        
                        <a class="btn btn-dark float-end" href="/cuestionarios/{{ $cuestionario->id }}/edit">Modificar Cuestionario</a>
                    
                    </li>   
                    
                @endforeach
                </ul>
            </div>           
        </div>
    </div>
</div>
@endsection
