@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear nuevo cuestionario') }}</div>

                <div class="card-body">
                   <form action="/cuestionarios/" method="POST">
                    
                        @csrf

                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input name="titulo" type="text" class="form-control" id="titulo" aria-describedby="ayudaTitulo" placeholder="Ingresa un titulo">
                            <small id="ayudaTitulo" class="form-text text-muted">Agrega un titulo al cuestionario</small>

                            @error('titulo')
                            <small class="text-danger">{{ __($message) }}</small>
                                
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input name="descripcion" type="text" class="form-control" id="descripcion" aria-describedby="ayudaDescripcion" placeholder="Ingresa una descripcion">
                            <small id="ayudaDescripcion" class="form-text text-muted">Ingresa la descripcion</small>

                            @error('descripcion')
                            <small class="text-danger">{{ __($message) }}</small>
                                
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Crear Cuestionario</button>
                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
