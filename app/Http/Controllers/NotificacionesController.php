<?php

namespace App\Http\Controllers;

use App\Models\Notificaciones;
use Illuminate\Http\Request;

class NotificacionesController extends Controller
{
    public function index(Request $request)
    {
        $query = Notificaciones::query();
    
        $data['notificaciones'] = $query->orderBy('id', 'DESC')->paginate(5);
    
        return view('layouts.app', $data);
    }

    public function cambiarestado(Request $request, $id)
    {
        $notificacion = Notificaciones::find($id);
        $notificacion->estado = 2;

        $notificacion->save();

        return redirect($notificacion->url . $notificacion->curso_id);
    }
}
