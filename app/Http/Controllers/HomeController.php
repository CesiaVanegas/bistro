<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use App\Models\Notificaciones;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $query = Notificaciones::query();

        // $data['notificaciones'] = $query->orderBy('id', 'DESC')->paginate(5);
        // return $data['notificaciones']->pluck('contacto');
        return view('home');
    }

}
