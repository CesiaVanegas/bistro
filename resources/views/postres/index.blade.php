@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('postres.create') }}" class="btn btn-primary mb-2"><i class="fa-solid fa-plus"></i> Agregar
            Postres</a>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
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
                                <div class="zoom">
                                    <img src="{{ asset('storage/postres/' . $item['imagen']) }}" alt="Imagen del Postre"
                                        style="max-width: 50px;">
                                </div>
                            </td>
                            <td>{{ $item['estado'] }}</td>
                            <td>
                                <a href="{{ route('postres.edit', $item->id) }}" class="btn btn-primary"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{ route('postres.destroy', $item->id) }}" method="POST"
                                    style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i
                                            class="fa-solid fa-eraser"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
