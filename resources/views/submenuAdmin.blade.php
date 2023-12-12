@extends('templateME')

@section('contenido')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800">Submenús Primer Nivel</h1>
    </div>

    <div class="card" id="card1">
        <div class="card-header bg-secondary">
        <h1 class="h4 mb-0 text-gray-500">{!! nl2br($menu[0]['nombre']) !!}</h1>
        </div>
        <div class="card-body login-card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Link Interno</th>
                        <th scope="col">Link Externo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_submenus1">
                    @foreach($submenu as $data)
                        @if($data['menu_id'] == 1)
                            <tr>
                                <td id="n{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['nombre'] }}</td>
                                <td id="li{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['link_interno'] }}</td>
                                <td id="le{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['link_externo'] }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id="{{ $data['id'] }}" data-menuid="1">Editar</button>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-menuid="1">Nuevo</button>
        </div>
    </div>
    <br>
    <div class="card" id="card2">
        <div class="card-header bg-secondary">
        <h1 class="h4 mb-0 text-gray-500">{!! nl2br($menu[1]['nombre']) !!}</h1>
        </div>
        <div class="card-body login-card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Link Interno</th>
                        <th scope="col">Link Externo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_submenus2">
                    @foreach($submenu as $data)
                        @if($data['menu_id'] == 2)
                            <tr>
                                <td id="n{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['nombre'] }}</td>
                                <td id="li{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['link_interno'] }}</td>
                                <td id="le{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['link_externo'] }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id="{{ $data['id'] }}" data-menuid="2">Editar</button>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-menuid="2">Nuevo</button>
        </div>
    </div>
    <br>
    <div class="card" id="card3">
        <div class="card-header bg-secondary">
        <h1 class="h4 mb-0 text-gray-500">{!! nl2br($menu[2]['nombre']) !!}</h1>
        </div>
        <div class="card-body login-card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Link Interno</th>
                        <th scope="col">Link Externo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_submenus3">
                    @foreach($submenu as $data)
                        @if($data['menu_id'] == 3)
                            <tr>
                                <td id="n{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['nombre'] }}</td>
                                <td id="li{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['link_interno'] }}</td>
                                <td id="le{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['link_externo'] }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id="{{ $data['id'] }}" data-menuid="3">Editar</button>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-menuid="3">Nuevo</button>
        </div>
    </div>
    <br>
    <div class="card" id="card4">
        <div class="card-header bg-secondary">
        <h1 class="h4 mb-0 text-gray-500">{!! nl2br($menu[3]['nombre']) !!}</h1>
        </div>
        <div class="card-body login-card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Link Interno</th>
                        <th scope="col">Link Externo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_submenus4">
                    @foreach($submenu as $data)
                        @if($data['menu_id'] == 4)
                            <tr>
                                <td id="n{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['nombre'] }}</td>
                                <td id="li{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['link_interno'] }}</td>
                                <td id="le{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['link_externo'] }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id="{{ $data['id'] }}" data-menuid="4">Editar</button>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-menuid="4">Nuevo</button>
        </div>
    </div>
    <br>
    <div class="card" id="card5">
        <div class="card-header bg-secondary">
        <h1 class="h4 mb-0 text-gray-500">{!! nl2br($menu[4]['nombre']) !!}</h1>
        </div>
        <div class="card-body login-card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Link Interno</th>
                        <th scope="col">Link Externo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_submenus5">
                    @foreach($submenu as $data)
                        @if($data['menu_id'] == 5)
                            <tr>
                                <td id="n{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['nombre'] }}</td>
                                <td id="li{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['link_interno'] }}</td>
                                <td id="le{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['link_externo'] }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id="{{ $data['id'] }}" data-menuid="5">Editar</button>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-menuid="5">Nuevo</button>
        </div>
    </div>
    <br>
    <div class="card" id="card6">
        <div class="card-header bg-secondary">
        <h1 class="h4 mb-0 text-gray-500">{!! nl2br($menu[5]['nombre']) !!}</h1>
        </div>
        <div class="card-body login-card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Link Interno</th>
                        <th scope="col">Link Externo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_submenus6">
                    @foreach($submenu as $data)
                        @if($data['menu_id'] == 6)
                            <tr>
                                <td id="n{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['nombre'] }}</td>
                                <td id="li{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['link_interno'] }}</td>
                                <td id="le{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['link_externo'] }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id="{{ $data['id'] }}" data-menuid="6">Editar</button>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-menuid="6">Nuevo</button>
        </div>
    </div>
    <br>
    <div class="card" id="card7">
        <div class="card-header bg-secondary">
        <h1 class="h4 mb-0 text-gray-500">{!! nl2br($menu[6]['nombre']) !!}</h1>
        </div>
        <div class="card-body login-card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Link Interno</th>
                        <th scope="col">Link Externo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_submenus7">
                    @foreach($submenu as $data)
                        @if($data['menu_id'] == 7)
                            <tr>
                                <td id="n{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['nombre'] }}</td>
                                <td id="li{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['link_interno'] }}</td>
                                <td id="le{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['link_externo'] }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id="{{ $data['id'] }}" data-menuid="7">Editar</button>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-menuid="7">Nuevo</button>
        </div>
    </div>
    <br>
    <div class="card" id="card8">
        <div class="card-header bg-secondary">
        <h1 class="h4 mb-0 text-gray-500">{!! nl2br($menu[7]['nombre']) !!}</h1>
        </div>
        <div class="card-body login-card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Link Interno</th>
                        <th scope="col">Link Externo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_submenus8">
                    @foreach($submenu as $data)
                        @if($data['menu_id'] == 8)
                            <tr>
                                <td id="n{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['nombre'] }}</td>
                                <td id="li{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['link_interno'] }}</td>
                                <td id="le{{ $data['menu_id'] .'-'. $data['id'] }}">{{ $data['link_externo'] }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id="{{ $data['id'] }}" data-menuid="8">Editar</button>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" data-menuid="8">Nuevo</button>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ingresar/Editar Submenú</h5>
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
                <input type="hidden" name="idSubmenu" id="idSubmenu">
                <input type="hidden" name="menuId" id="menuId">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button id="btn-guardar" type="button" class="btn btn-primary">Guardar cambios</button>
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