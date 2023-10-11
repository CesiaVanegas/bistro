@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="fw-bold fs-2">Notificaciones</h1>
    </div>

    <div class="container">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre completo</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Título</th>
                        <th scope="col">Mensaje</th>
                        <th scope="col">Estado</th>
                    </tr>
                </thead>
                <tbody>

                    @if (!empty($data) && $data->count() > 0)
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item['contacto']['id'] }}</td>
                                <td>{{ $item['contacto']['nombre'] }}</td>
                                <td>{{ $item['contacto']['email'] }}</td>
                                <td>{{ $item['contacto']['titulo'] }}</td>
                                <td>{{ $item['contacto']['mensaje'] }}</td>
                                <td>{{ $item['estado'] == 1 ? 'nueva' : 'revisada' }}</td>
                                
                                {{-- <td>
                                    <i class="fas fa-info-circle fa-2x" data-bs-toggle="modal" data-bs-target="#myModal"
                                        onclick="contacto({{ $item['id'] }})"></i>
                                </td> --}}
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
        @include('contactos.modal')
    </div>

@endsection
