<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use App\Models\Postres;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $libros = Libros::all();
        $postres = Postres::all();
        return view('welcome', compact('libros','postres'));
    }
}
