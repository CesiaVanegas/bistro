@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Bebida</h1>

        <form action="{{ route('bebidas.update', $bebidas->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="{{ $bebidas->nombre ?? (old('nombre') ?? '') }}">
                @if ($errors->has('nombre'))
                    <span class="text-danger">{{ $errors->first('nombre') }}</span>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="precio">Precio:</label>
                <input type="text" name="precio" class="form-control"
                    value="{{ $bebidas->precio ?? (old('precio') ?? '') }}">
                @if ($errors->has('precio'))
                    <span class="text-danger">{{ $errors->first('precio') }}</span>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" class="form-control">{{ $bebidas->descripcion ?? (old('descripcion') ?? '') }}</textarea>
                @if ($errors->has('descripcion'))
                    <span class="text-danger">{{ $errors->first('descripcion') }}</span>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="estado">Estado:</label>
                <select class="form-select" name="estado" aria-label="Seleccionar">
                    <option value="" disabled>Seleccione una opción</option>
                    <option value="Activo"
                        {{ old('estado') == 'Activo' || (!old('estado') && $bebidas->estado == 'Activo') ? 'selected' : '' }}>
                        Activo</option>
                    <option value="Inactivo"
                        {{ old('estado') == 'Inactivo' || (!old('estado') && $bebidas->estado == 'Inactivo') ? 'selected' : '' }}>
                        Inactivo</option>
                </select>

                @if ($errors->has('estado'))
                    <span class="text-danger">{{ $errors->first('estado') }}</span>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="imagen">Imagen:</label>
                <input type="file" name="imagen" class="form-control">
                @if ($errors->has('imagen'))
                    <span class="text-danger">{{ $errors->first('imagen') }}</span>
                @endif
            </div>

            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Actualizar</button>
            <a class="btn btn-dark" href="{{ route('bebidas.index') }}"><i class=" fa-solid fa-circle-left fa-1x"></i>
            </a>
        </form>
    </div>
@endsection
