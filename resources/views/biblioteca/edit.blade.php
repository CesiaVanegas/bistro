@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-3">Editar Libro</h1>

        <form action="{{ route('biblioteca.update', $biblioteca->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="{{ $biblioteca->nombre }}">
                @if ($errors->has('nombre'))
                    <span class="text-danger">{{ $errors->first('nombre') }}</span>
                @endif
            </div>

            {{-- <div class="form-group mb-3">
                <label for="precio">Precio:</label>
                <input type="text" name="precio" class="form-control" value="{{ $biblioteca->precio }}">
                @if ($errors->has('precio'))
                    <span class="text-danger">{{ $errors->first('precio') }}</span>
                @endif
            </div> --}}

            <div class="form-group mb-3">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" class="form-control">{{ $biblioteca->descripcion }}</textarea>
                @if ($errors->has('descripcion'))
                    <span class="text-danger">{{ $errors->first('descripcion') }}</span>
                @endif
            </div>

            <div class="form-group mb-3">
                <label for="imagen">Imagen:</label>
                <input type="file" name="imagen" class="form-control">
                @if ($errors->has('imagen'))
                    <span class="text-danger">{{ $errors->first('imagen') }}</span>
                @endif
            </div>

            <div class="form-group mb-3">
                <label for="estado">Estado:</label>
                <select class="form-select" name="estado" aria-label="Seleccionar">
                    <option value="" disabled>Seleccione una opción</option>
                    <option value="Activo" {{ $biblioteca->estado === 'Activo' ? 'selected' : '' }}>Activo</option>
                    <option value="Inactivo" {{ $biblioteca->estado === 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
                </select>
                @if ($errors->has('estado'))
                    <span class="text-danger">{{ $errors->first('estado') }}</span>
                @endif
            </div>

            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
            <a class="btn btn-dark" href="{{ route('biblioteca.index') }}"><i class="fa-solid fa-circle-left fa-1x"></i> Volver</a>
        </form>
    </div>
@endsection
