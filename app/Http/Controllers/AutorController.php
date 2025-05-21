<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    
    public function index()
    {
        $autores = Autor::all();
        return view('autor.index', compact('autores'));
    }

    
    public function create()
    {
        return view('autor.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'codigo_autor' => 'required|string|max:6|unique:autores,codigo_autor',
            'nombre_autor' => 'required|string|max:50',
            'nacionalidad' => 'required|string|max:50',
        ]);

        Autor::create($request->all());

        return redirect()->route('autores.index')->with('success', 'Autor creado correctamente.');
    }

    // Mostrar formulario de edición
    public function edit($codigo_autor)
    {
        $autor = Autor::findOrFail($codigo_autor);
        return view('autor.edit', compact('autor'));
    }

    // Actualizar autor existente
    public function update(Request $request, $codigo_autor)
    {
        $request->validate([
            'nombre_autor' => 'required|string|max:50',
            'nacionalidad' => 'required|string|max:50',
        ]);

        $autor = Autor::findOrFail($codigo_autor);
        $autor->update($request->only('nombre_autor', 'nacionalidad'));

        return redirect()->route('autores.index')->with('success', 'Autor actualizado correctamente.');
    }

    // Eliminar autor
    public function destroy($codigo_autor)
    {
        $autor = Autor::findOrFail($codigo_autor);
        $autor->delete();

        return redirect()->route('autores.index')->with('success', 'Autor eliminado correctamente.');
    }
}
