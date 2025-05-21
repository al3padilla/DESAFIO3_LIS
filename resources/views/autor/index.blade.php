@extends('layout.template')

@section('title', 'Lista de autores    BY: ALEXANDRA PADILLA')
@section('content')
<div class="row">
    <div class="col-md-12">
        <a class="btn btn-primary" href="{{ route('autores.create') }}">Nuevo Autor</a>
        <br><br>
        <table class="table table-striped table-bordered" id="tabla">
            <thead class="table-dark">
                <tr>
                    <th>Código del Autor</th>
                    <th>Nombre del Autor</th>
                    <th>Nacionalidad</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($autores as $autor)
                    <tr>
                        <td>{{ $autor->codigo_autor }}</td>
                        <td>{{ $autor->nombre_autor }}</td>
                        <td>{{ $autor->nacionalidad }}</td>
                        <td>
                            <form action="{{ route('autores.destroy', $autor->codigo_autor) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este autor?')">Eliminar</button>
                            </form>
                            <a href="{{ route('autores.edit', $autor->codigo_autor) }}" class="btn btn-warning">Modificar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
