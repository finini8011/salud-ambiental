@extends('templateME')

@section('contenido')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800">Submenús Segundo Nivel</h1>
    </div>

    <div class="card" id="card1">
        <div class="card-header bg-secondary">
        <h1 class="h4 mb-0 text-gray-500"></h1>
        </div>
        <div class="card-body login-card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Link Interno</th>
                        <th scope="col">Link Externo</th>
                        <th scope="col">Submenu Primer Nivel</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_submenus">
                    @foreach($submenu2 as $data)
                        <tr>
                            <td id="n{{ $data['id'] }}">{{ $data['nombre'] }}</td>
                            <td id="li{{ $data['id'] }}">{{ $data['link_interno'] }}</td>
                            <td id="le{{ $data['id'] }}">{{ $data['link_externo'] }}</td>
                            <td>
                                <select id="sm{{ $data['id'] }}" class="form-control" disabled>
                                    @foreach($submenu as $nombreMenu)
                                        @if($data['submenu_id'] == $nombreMenu['id'])
                                            <option value="{{$nombreMenu['id']}}">{{ $nombreMenu['nombre'] }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-id="{{ $data['id'] }}">Editar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal2">Nuevo</button>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ingresar/Editar Submenú Segundo Nivel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Link Interno:</label>
                    <input type="text" class="form-control" id="link_interno">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Link Externo:</label>
                    <input type="text" class="form-control" id="link_externo">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Sub menú Primer Nivel:</label>
                    <select class="form-control" name="submenu_id" id="submenu_id"></select>
                </div>
                <input type="hidden" name="idSubmenu2" id="idSubmenu2">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button id="btn-guardar2" type="button" class="btn btn-primary">Guardar cambios</button>
            </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="infoModalLabel">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Debe rellener el campo Nombre.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>
@endsection