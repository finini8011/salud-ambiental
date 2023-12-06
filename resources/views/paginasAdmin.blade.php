@extends('templateME')

@section('contenido')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800">Páginas</h1>
    </div>

    <div class="card" id="card1">
        <div class="card-header bg-secondary">
        <h1 class="h4 mb-0 text-gray-500">Consolidado de páginas del sitio</h1>
        </div>
        <div class="card-body login-card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Título</th>
                        <th scope="col">Link de la página</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_submenus">
                    @foreach($paginas as $data)
                        <tr>
                            <td id="t{{ $data['id'] }}">{{ $data['titulo'] }}</td>
                            <td id="l{{ $data['id'] }}">{{ $data['link_interno'] }}</td>
                            <td>
                                <a href="crear_modificar_pagina/{{ $data['id'] }}" class="btn btn-primary" >Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="crear_modificar_pagina/0" class="btn btn-info" >Nuevo</a>
        </div>
    </div>
@endsection