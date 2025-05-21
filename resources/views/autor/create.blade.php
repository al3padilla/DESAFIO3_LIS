@extends('layout.template')

@section('title', 'Registrar Autor')
@section('content')
<div class="row">
    <div class="col-md-7">
        <form method="POST" action="{{ route('autores.store') }}">
            @csrf

            <div class="mb-3">
                <label for="codigo_autor" class="form-label">Código del Autor:</label>
                <input type="text" class="form-control @error('codigo_autor') is-invalid @enderror"
                       name="codigo_autor" id="codigo_autor" value="{{ old('codigo_autor') }}">
                @error('codigo_autor')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nombre_autor" class="form-label">Nombre del Autor:</label>
                <input type="text" class="form-control @error('nombre_autor') is-invalid @enderror"
                       name="nombre_autor" id="nombre_autor" value="{{ old('nombre_autor') }}">
                @error('nombre_autor')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nacionalidad" class="form-label">Nacionalidad:</label>
                <input type="text" class="form-control @error('nacionalidad') is-invalid @enderror"
                       name="nacionalidad" id="nacionalidad" value="{{ old('nacionalidad') }}">
                @error('nacionalidad')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-danger" href="{{ route('autores.index') }}">Cancelar</a>
        </form>
    </div>
</div>
@endsection
