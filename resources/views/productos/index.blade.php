@extends('layouts.app')

@section('content')
    <div class="container ">
        <a href="{{ route('productos.create') }}" class="btn btn-primary mb-2">Agregar Producto</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Acciones</th> <!-- Agregamos una columna para las acciones -->
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['nombre'] }}</td>
                        <td>{{ $item['precio'] }}</td>
                        <td>{{ $item['descripcion'] }}</td>
                        <td>
                            {{-- <a href="{{ route('productos.show', $item->id) }}" class="btn btn-info">Ver</a> --}}
                            <a href="{{ route('productos.edit', $item->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('productos.destroy', $item->id) }}" method="POST"
                                style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
