@extends('layout.template')

@section('title', 'Editar Autor')
@section('content')
<div class="row">
    <div class="col-md-7">
        <form method="POST" action="{{ route('autores.update', $autor->codigo_autor) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="codigo_autor" class="form-label">Código del Autor:</label>
                <input type="text" class="form-control" id="codigo_autor" value="{{ $autor->codigo_autor }}" disabled>
            </div>

            <div class="mb-3">
                <label for="nombre_autor" class="form-label">Nombre del Autor:</label>
                <input type="text" class="form-control @error('nombre_autor') is-invalid @enderror"
                       name="nombre_autor" id="nombre_autor" value="{{ old('nombre_autor', $autor->nombre_autor) }}">
                @error('nombre_autor')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nacionalidad" class="form-label">Nacionalidad:</label>
                <input type="text" class="form-control @error('nacionalidad') is-invalid @enderror"
                       name="nacionalidad" id="nacionalidad" value="{{ old('nacionalidad', $autor->nacionalidad) }}">
                @error('nacionalidad')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a class="btn btn-danger" href="{{ route('autores.index') }}">Cancelar</a>
        </form>
    </div>
</div>
@endsection
