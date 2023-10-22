<?php

namespace App\Http\Controllers;

use App\Models\Postres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $data = Postres::where('nombre', 'LIKE', "%$search%")
            ->orderBy('id', 'desc')
            ->paginate(5);
        return view('postres.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('postres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required',
            'estado' => 'required'
        ]);

        $postres = new Postres([
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
            $path = $file->storeAs('public/postres', $fileName);

            $postres->imagen = $fileName;

            // $file = $request->file('imagen');
            // $path = $file->store('public/postres');
            // $postres->imagen = $path;
        }
        $postres->save();
        return redirect()->route('postres.index')
            ->with('success', 'Postres agregado exitosamente');
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
        $postres = Postres::find($id);
        return view('postres.edit', compact('postres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'descripcion' => 'required',
        ]);

        $postres = Postres::find($id);
        if ($request->hasFile('imagen')) {
            // Eliminar el archivo de imagen existente si existe
            Storage::delete('public/postres/' . $postres->imagen);

            $file = $request->file('imagen');

            // Guardar el nombre original del archivo
            $fileName = $file->getClientOriginalName();

            // Subir el archivo de imagen con su nombre original
            $path = $file->storeAs('public/postres', $fileName);

            $postres->imagen = $fileName;
        }

        if (!$postres) {
            return redirect()->route('postres.index')
                ->with('error', 'Postres no encontrado');
        }

        $postres->nombre = $request->input('nombre');
        $postres->precio = $request->input('precio');
        $postres->descripcion = $request->input('descripcion');
        $postres->save();

        return redirect()->route('postres.index')
            ->with('success', 'Postres actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $postres = Postres::find($id);

        if (!$postres) {
            return redirect()->route('postres.index')
                ->with('error', 'Postres no encontrado');
        }

        $postres->delete();

        return redirect()->route('postres.index')
            ->with('success', 'Postres eliminado exitosamente');
    }
}
