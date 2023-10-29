<?php

namespace App\Http\Controllers;

use App\Models\Notificaciones;
use Illuminate\Http\Request;

class NotificacionesController extends Controller
{
    public function index()
    {
        try {
            $query = Notificaciones::query();
            $data['notificaciones'] = $query->where('estado',1)->orderBy('id', 'DESC')->paginate(5);
            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function cambiarestado(Request $request, $id)
    {
        $notificacion = Notificaciones::find($id);
        $notificacion->estado = 2;
        $notificacion->save();

        // Puedes devolver una respuesta JSON si lo prefieres
        return response()->json(['message' => 'Estado cambiado con éxito']);
    }
}
