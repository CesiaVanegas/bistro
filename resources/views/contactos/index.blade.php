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
                        <th scope="col ">#</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Url</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    @if (!empty($data))
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item['id'] }}</td>
                                <td>{{ $item['descripcion'] }}</td>
                                <td>{{ $item['url'] }}</td>

                                <td>{{ $item['estado'] == 1 ? 'nueva' : 'revisada' }}</td>
                                <td class="d-flex justify-content-center">
                                    <i class="fas fa-info-circle fa-2x" data-bs-toggle="modal" data-bs-target="#myModal"
                                        onclick="contacto({{ $item['id'] }})"></i>
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
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Información</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p hidden><strong>id</strong> <span id="id"></span></p>
                        <p><strong>Nombre:</strong> <span id="nombre"></span></p>
                        <p><strong>Email:</strong> <span id="email"></span></p>
                        <p><strong>Título:</strong> <span id="titulo"></span></p>
                        <p><strong>Mensaje:</strong> <span id="mensaje"></span></p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- {{ url(request()->path()) }} -->
@endsection
