<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [App\Http\Controllers\InicioController::class, 'index'])->name('inicio');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('productos', App\Http\Controllers\ProductosController::class);

Route::resource('postres', App\Http\Controllers\PostresController::class);

Route::resource('biblioteca', App\Http\Controllers\BibliotecaController::class);

Route::resource('bebidas', App\Http\Controllers\BeibidasController::class);

Route::post('contacto/guardar', [App\Http\Controllers\ContactosController::class,'store'])->name('contacto.store');
Route::get('contacto/index', [App\Http\Controllers\ContactosController::class,'index'])->name('contacto.index');


// retorno de imagenes de libros 
Route::get('/libros_r', [App\Http\Controllers\BibliotecaController::class, 'LibrosRender'])->name('LibrosRender');
