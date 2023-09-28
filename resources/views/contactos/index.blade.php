@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class=" fw-bold fs-2">Notificaciones</h1>
    </div>

    <div class="container">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Url</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    @if (!empty($data) && !isset($data))
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item['id'] }}</td>
                                <td>{{ $item['nombre'] }}</td>
                                <td>
                                    <div class="collapse" id="descripcionCollapse{{ $loop->index }}">
                                        {{ $item['descripcion'] }}
                                    </div>
                                    <p>
                                        <a class="btn btn-link" data-bs-toggle="collapse"
                                            href="#descripcionCollapse{{ $loop->index }}" role="button"
                                            aria-expanded="false" aria-controls="descripcionCollapse{{ $loop->index }}">
                                            Leer más
                                        </a>
                                    </p>
                                </td>
                                <td>
                                    <div class="zoom">
                                        <img src="{{ asset('storage/libros/' . $item['imagen']) }}" alt="Imagen del Postre"
                                            style="max-width: 30px;">
                                    </div>

                                </td>
                                <td>{{ $item['estado'] }}</td>

                                <td>
                                    <a href="{{ route('biblioteca.edit', $item->id) }}" class="btn btn-primary"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="{{ route('biblioteca.destroy', $item->id) }}" method="POST"
                                        style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i
                                                class="fa-solid fa-eraser"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-center fw-bold fs-2">
                                <h3>No hay datos</h3>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
