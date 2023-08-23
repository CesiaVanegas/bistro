<?php

namespace App\Http\Controllers;

use App\Models\Postres;
use Illuminate\Http\Request;

class PostresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Postres::all();

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
        ]);

        $postres = new Postres([
            'nombre' => $request->input('nombre'),
            'precio' => $request->input('precio'),
            'descripcion' => $request->input('descripcion'),
        ]);

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
