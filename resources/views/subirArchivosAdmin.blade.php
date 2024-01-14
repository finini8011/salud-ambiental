@extends('templateAR')

@section('contenido')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800">Archivos</h1>
    </div>

    <div class="card" id="card1">
        <div class="card-header bg-light">
        <h1 class="h4 mb-0 text-gray-500">Subir un archivo</h1>
        </div>
        <div class="card-body login-card-body">
        <form action="{{ route('saveArchivo') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="texto">Descripción del archivo</label>
                    <input type="text" class="form-control form-control-user" name="descripcion" value="">
                </div>
                <div class="form-group">
                    <label for="file">Archivo a subir</label>
                    <input type="file" class="form-control" name="file">
                </div>
                <button type="submit" class="btn" style="color:white;background-color:#1334eeb3;border-color:#1334eeb3 ">Guardar</button>
            </form>
        </div>
    </div>
    <br>
    <div class="card" id="card1">
        <div class="card-header bg-secondary">
        <h1 class="h4 mb-0 text-gray-500">Listado de archivos subidos al servidor</h1>
        </div>
        <div class="card-body login-card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_submenus">
                    @foreach($archivos as $data)
                        <tr>
                            <td id="n{{ $data['id'] }}">{{ $data['originalName'] }}</td>
                            <td id="d{{ $data['id'] }}">{{ $data['descripcion'] }}</td>
                            <td>
                                <a href="eliminar_archivo/{{ $data['id'] }}" class="btn btn-primary" >Borrar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection