<?php

namespace App\Http\Controllers;

use App\Models\Bebidas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeibidasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $data = Bebidas::where('nombre', 'LIKE', "%$search%")
            ->orderBy('id', 'desc')
            ->paginate(5);
        return view('bebidas.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bebidas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            // 'descripcion' => 'required',
            'imagen' => 'required',
            'estado' => 'required'
        ]);

        $bebidas = new Bebidas([
            'nombre' => $request->input('nombre'),
            'precio' => $request->input('precio'),
            'descripcion' => $request->input('descripcion'),
            'estado' => $request->input('estado'),
        ]);

        if ($request->hasFile('imagen')) {
            // Subir el nuevo archivo de imagen
            $file = $request->file('imagen');
            // Guardar el nombre original del archivo
            $fileName = $file->getClientOriginalName();
            // Subir el archivo de imagen con su nombre original
            $path = $file->storeAs('public/bebidas', $fileName);

            $bebidas->imagen = $fileName;

            // $file = $request->file('imagen');
            // $path = $file->store('public/postres');
            // $postres->imagen = $path;
        }
        $bebidas->save();
        return redirect()->route('bebidas.index')
            ->with('success', 'Bebidas agregada exitosamente');
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
        $bebidas = Bebidas::find($id);
        return view('bebidas.edit', compact('bebidas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            // 'descripcion' => 'required',
        ]);

        $bebidas = Bebidas::find($id);
        if ($request->hasFile('imagen')) {
            // Eliminar el archivo de imagen existente si existe
            Storage::delete('public/bebidas/' . $bebidas->imagen);

            $file = $request->file('imagen');

            // Guardar el nombre original del archivo
            $fileName = $file->getClientOriginalName();

            // Subir el archivo de imagen con su nombre original
            $path = $file->storeAs('public/bebidas', $fileName);

            $bebidas->imagen = $fileName;
        }

        if (!$bebidas) {
            return redirect()->route('bebidas.index')
                ->with('error', 'Bebida no encontrada');
        }

        $bebidas->nombre = $request->input('nombre');
        $bebidas->precio = $request->input('precio');
        $bebidas->descripcion = $request->input('descripcion');
        $bebidas->save();

        return redirect()->route('bebidas.index')
            ->with('success', 'Bebida actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bebidas = Bebidas::find($id);

        if (!$bebidas) {
            return redirect()->route('bebidas.index')
                ->with('error', 'bebida no encontrada');
        }

        $bebidas->delete();

        return redirect()->route('bebidas.index')
            ->with('success', 'bebida eliminada exitosamente');
    }
}
