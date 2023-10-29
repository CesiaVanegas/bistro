@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="fw-bold fs-2">Notificaciones</h1>
    </div>

    <div class="container">
        <div class="mb-3">
            <input type="text" id="search" class="form-control" placeholder="Buscar...">
        </div>
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
        @include('contactos.modal')
    </div>
    <script>
        const searchInput = document.getElementById('search');
        const table = document.querySelector('table');
        const rows = table.querySelectorAll('tbody tr');
    
        searchInput.addEventListener('input', function () {
            const searchText = this.value.toLowerCase();
    
            rows.forEach((row) => {
                const cells = row.querySelectorAll('td');
                let rowText = '';
    
                cells.forEach((cell) => {
                    rowText += cell.textContent.toLowerCase();
                });
    
                if (rowText.includes(searchText)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
    
@endsection
