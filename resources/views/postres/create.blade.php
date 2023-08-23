@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-3">Agregar Producto</h1>

        <form action="{{ route('postres.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control">
                @if ($errors->has('nombre'))
                    <span class="text-danger">{{ $errors->first('nombre') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="text" name="precio" class="form-control">
                @if ($errors->has('precio'))
                    <span class="text-danger">{{ $errors->first('precio') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" class="form-control"></textarea>
                @if ($errors->has('descripcion'))
                    <span class="text-danger">{{ $errors->first('descripcion') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Agregar Producto</button>
        </form>
    </div>
@endsection
