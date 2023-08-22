@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Producto</h1>

    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}">
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="text" name="precio" class="form-control" value="{{ $producto->precio }}">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control">{{ $producto->descripcion }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Producto</button>
    </form>
</div>
@endsection
