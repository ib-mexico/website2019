@section('title', 'Publicaciones')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Publicaciones</h4>
                    <p class="card-description">Entradas creadas en la página web</p>
                    
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Título</th>
                                    <th>Categoría</th>
                                    <th>Destacado</th>
                                    <th>Estatus</th>
                                    <th># vistas</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $item)
                                    <tr>
                                        <td>{{ $item->pk_post }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->category->category }}</td>
                                        <td>
                                            @if($item->highlight != 1)
                                                <label class="badge badge-danger">Inactivo</label>
                                            @else
                                                <label class="badge badge-warning">Activo</label>
                                            @endif
                                        </td>
                                        <td>
                                            @if($item->status != 'PUBLISHED')
                                                <label class="badge badge-info">{{ $item->status }}</label>
                                            @else
                                                <label class="badge badge-success">{{ $item->status }}</label>
                                            @endif
                                        </td>
                                        <td>{{ $item->views_numb }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <a href="/panel/publicaciones/editar/{{ $item->pk_post }}" class="btn btn-sm btn-warning">Editar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('panel.components.Navbar')
@include('panel.components.Sidebar')
@include('panel.components.Footer')
@include('panel.components.Scripts')
@include('panel.components.Stylesheets')

@extends('panel.components.Main')