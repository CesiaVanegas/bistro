<?php

namespace App\Http\Controllers;

use App\Models\Contactos;
use App\Models\Notificaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Notificaciones::all();
        return view('contactos.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required',
            'titulo' => 'required',
        ]);

        $contacto = new Contactos();
        $contacto->nombre = $request->input('nombre');
        $contacto->email = $request->input('email');
        $contacto->titulo = $request->input('titulo');
        $contacto->mensaje = $request->input('mensaje');

        if ($contacto->save()) {
            $notificacion = new Notificaciones();
            $notificacion->descripcion = '';
            $notificacion->url = 'contacto/';
            $notificacion->estado = 1;
            $notificacion->contacto_id = $contacto->id;
            $notificacion->save();
        }

        return response()->json('ok', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $info = Notificaciones::find($id);
        return response()->json($info);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
