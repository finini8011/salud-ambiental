@extends('templateME')

@section('contenido')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800">Transversales</h1>
    </div>

    <div class="card" id="card1">
        <div class="card-header bg-secondary">
        <h1 class="h4 mb-0 text-gray-500">{!! nl2br($menu[0]['nombre']) !!}</h1>
        </div>
        <div class="card-body login-card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Título</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_submenus">
                    @foreach($transversales as $data)
                        @if($data['menu_id'] == 1)
                            <tr>
                                <td id="t{{ $data['id'] }}">{{ $data['titulo'] }}</td>
                                <td id="l{{ $data['id'] }}">
                                    <input type="checkbox" <?= $data['activo'] ? 'checked' : '' ?> data-width="100" data-toggle="toggle" data-size="sm" data-on="Activo" data-off="Inactivo" disabled>
                                </td>
                                <td>
                                    <a href="modificar_transversal/{{ $data['id'] }}" class="btn btn-primary" >Editar</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
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
                        <th scope="col">Título</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_submenus">
                    @foreach($transversales as $data)
                        @if($data['menu_id'] == 2)
                            <tr>
                                <td id="t{{ $data['id'] }}">{{ $data['titulo'] }}</td>
                                <td id="l{{ $data['id'] }}">
                                    <input type="checkbox" <?= $data['activo'] ? 'checked' : '' ?> data-width="100" data-toggle="toggle" data-size="sm" data-on="Activo" data-off="Inactivo" disabled>
                                </td>
                                <td>
                                    <a href="modificar_transversal/{{ $data['id'] }}" class="btn btn-primary" >Editar</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
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
                        <th scope="col">Título</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_submenus">
                    @foreach($transversales as $data)
                        @if($data['menu_id'] == 3)
                            <tr>
                                <td id="t{{ $data['id'] }}">{{ $data['titulo'] }}</td>
                                <td id="l{{ $data['id'] }}">
                                    <input type="checkbox" <?= $data['activo'] ? 'checked' : '' ?> data-width="100" data-toggle="toggle" data-size="sm" data-on="Activo" data-off="Inactivo" disabled>
                                </td>
                                <td>
                                    <a href="modificar_transversal/{{ $data['id'] }}" class="btn btn-primary" >Editar</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
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
                        <th scope="col">Título</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_submenus">
                    @foreach($transversales as $data)
                        @if($data['menu_id'] == 4)
                            <tr>
                                <td id="t{{ $data['id'] }}">{{ $data['titulo'] }}</td>
                                <td id="l{{ $data['id'] }}">
                                    <input type="checkbox" <?= $data['activo'] ? 'checked' : '' ?> data-width="100" data-toggle="toggle" data-size="sm" data-on="Activo" data-off="Inactivo" disabled>
                                </td>
                                <td>
                                    <a href="modificar_transversal/{{ $data['id'] }}" class="btn btn-primary" >Editar</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
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
                        <th scope="col">Título</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_submenus">
                    @foreach($transversales as $data)
                        @if($data['menu_id'] == 5)
                            <tr>
                                <td id="t{{ $data['id'] }}">{{ $data['titulo'] }}</td>
                                <td id="l{{ $data['id'] }}">
                                    <input type="checkbox" <?= $data['activo'] ? 'checked' : '' ?> data-width="100" data-toggle="toggle" data-size="sm" data-on="Activo" data-off="Inactivo" disabled>
                                </td>
                                <td>
                                    <a href="modificar_transversal/{{ $data['id'] }}" class="btn btn-primary" >Editar</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
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
                        <th scope="col">Título</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_submenus">
                    @foreach($transversales as $data)
                        @if($data['menu_id'] == 6)
                            <tr>
                                <td id="t{{ $data['id'] }}">{{ $data['titulo'] }}</td>
                                <td id="l{{ $data['id'] }}">
                                    <input type="checkbox" <?= $data['activo'] ? 'checked' : '' ?> data-width="100" data-toggle="toggle" data-size="sm" data-on="Activo" data-off="Inactivo" disabled>
                                </td>
                                <td>
                                    <a href="modificar_transversal/{{ $data['id'] }}" class="btn btn-primary" >Editar</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
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
                        <th scope="col">Título</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_submenus">
                    @foreach($transversales as $data)
                        @if($data['menu_id'] == 7)
                            <tr>
                                <td id="t{{ $data['id'] }}">{{ $data['titulo'] }}</td>
                                <td id="l{{ $data['id'] }}">
                                    <input type="checkbox" <?= $data['activo'] ? 'checked' : '' ?> data-width="100" data-toggle="toggle" data-size="sm" data-on="Activo" data-off="Inactivo" disabled>
                                </td>
                                <td>
                                    <a href="modificar_transversal/{{ $data['id'] }}" class="btn btn-primary" >Editar</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
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
                        <th scope="col">Título</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_submenus">
                    @foreach($transversales as $data)
                        @if($data['menu_id'] == 8)
                            <tr>
                                <td id="t{{ $data['id'] }}">{{ $data['titulo'] }}</td>
                                <td id="l{{ $data['id'] }}">
                                    <input type="checkbox" <?= $data['activo'] ? 'checked' : '' ?> data-width="100" data-toggle="toggle" data-size="sm" data-on="Activo" data-off="Inactivo" disabled>
                                </td>
                                <td>
                                    <a href="modificar_transversal/{{ $data['id'] }}" class="btn btn-primary" >Editar</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection