<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BibliotecaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Libros::all();

        return view('biblioteca.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biblioteca.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            // 'precio' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required',
            'estado' => 'required'
        ]);

        $biblioteca = new Libros([
            'nombre' => $request->input('nombre'),
            // 'precio' => $request->input('precio'),
            'descripcion' => $request->input('descripcion'),
            'estado' => $request->input('estado'),
        ]);

        if ($request->hasFile('imagen')) {
            // Subir el nuevo archivo de imagen
            $file = $request->file('imagen');
            // Guardar el nombre original del archivo
            $fileName = $file->getClientOriginalName();
            // Subir el archivo de imagen con su nombre original
            $path = $file->storeAs('public/libros', $fileName);

            $biblioteca->imagen = $fileName;
        }
        $biblioteca->save();
        return redirect()->route('biblioteca.index')
            ->with('success', 'Libro agregado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $biblioteca = Libros::find($id);
        return view('biblioteca.edit', compact('biblioteca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required',
            // 'precio' => 'required|numeric',
            'descripcion' => 'required',
            'estado' => 'required',
        ]);

        $biblioteca = Libros::find($id);
        if ($request->hasFile('imagen')) {
            // Eliminar el archivo de imagen existente si existe
            Storage::delete('public/libros/' . $biblioteca->imagen);

            $file = $request->file('imagen');

            // Guardar el nombre original del archivo
            $fileName = $file->getClientOriginalName();

            // Subir el archivo de imagen con su nombre original
            $path = $file->storeAs('public/biblioteca', $fileName);

            $biblioteca->imagen = $fileName;
        }

        if (!$biblioteca) {
            return redirect()->route('biblioteca.index')
                ->with('error', 'biblioteca no encontrado');
        }

        $biblioteca->nombre = $request->input('nombre');
        $biblioteca->precio = $request->input('precio');
        $biblioteca->descripcion = $request->input('descripcion');
        $biblioteca->estado = $request->input('estado');
        $biblioteca->save();

        return redirect()->route('biblioteca.index')
            ->with('success', 'Libro actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $biblioteca = Libros::find($id);

        if (!$biblioteca) {
            return redirect()->route('biblioteca.index')
                ->with('error', 'Libro no encontrado');
        }

        $biblioteca->delete();

        return redirect()->route('biblioteca.index')
            ->with('success', 'Libro eliminado exitosamente');
    }
}
