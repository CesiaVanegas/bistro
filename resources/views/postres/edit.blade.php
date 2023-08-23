@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Producto</h1>

        <form action="{{ route('postres.update', $postres->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="{{ $postres->nombre }}">
                @if ($errors->has('nombre'))
                    <span class="text-danger">{{ $errors->first('nombre') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="text" name="precio" class="form-control" value="{{ $postres->precio }}">
                @if ($errors->has('precio'))
                    <span class="text-danger">{{ $errors->first('precio') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" class="form-control">{{ $postres->descripcion }}</textarea>
                @if ($errors->has('descripcion'))
                    <span class="text-danger">{{ $errors->first('descripcion') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Actualizar postres</button>
        </form>
    </div>
@endsection

