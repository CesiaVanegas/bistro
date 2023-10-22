@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('postres.create') }}" class="btn btn-primary mb-2"><i class="fa-solid fa-plus"></i> Agregar
            Postres</a>
            <form action="{{ route('postres.index') }}" method="GET" class="mb-3">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Buscar postres"
                        value="{{ request('search') }}">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                        <a href="{{ route('postres.index') }}" type="button" class="btn btn-secondary">Limpiar</a>
                    </div>
                </div>
            </form>
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
        <div class="custom-pagination">
            <nav aria-label="Pagination Navigation">
                <ul class="pagination">
                    @if ($data->previousPageUrl())
                        <li class="page-item">
                            <a class="page-link" href="{{ $data->previousPageUrl() }}" rel="prev">&laquo; Anterior</a>
                        </li>
                    @endif

                    @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
                        <li class="page-item{{ $page == $data->currentPage() ? ' active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    @if ($data->nextPageUrl())
                        <li class="page-item">
                            <a class="page-link" href="{{ $data->nextPageUrl() }}" rel="next">Siguiente &raquo;</a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
@endsection
