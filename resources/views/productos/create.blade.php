@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Producto</h1>

        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control">
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="text" name="precio" class="form-control">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Producto</button>
        </form>
    </div>
@endsection
