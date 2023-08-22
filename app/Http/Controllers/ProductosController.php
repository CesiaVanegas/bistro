<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // comando para crear controlador: php artisan make:controller ProductosController --resource
    public function index()
    {
        $data = Productos::all();

        return view('productos.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
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

        $producto = new Productos([
            'nombre' => $request->input('nombre'),
            'precio' => $request->input('precio'),
            'descripcion' => $request->input('descripcion'),
        ]);

        $producto->save();
        return redirect()->route('productos.index')
            ->with('success', 'Producto agregado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = Productos::find($id);
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Productos::find($id);
        return view('productos.edit', compact('producto'));
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

        $producto = Productos::find($id);

        if (!$producto) {
            return redirect()->route('productos.index')
                ->with('error', 'Producto no encontrado');
        }

        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->descripcion = $request->input('descripcion');
        $producto->save();

        return redirect()->route('productos.index')
            ->with('success', 'Producto actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Productos::find($id);

        if (!$producto) {
            return redirect()->route('productos.index')
                ->with('error', 'Producto no encontrado');
        }

        $producto->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Producto eliminado exitosamente');
    }
}
