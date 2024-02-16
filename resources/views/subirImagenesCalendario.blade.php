@extends('templateAR')

@section('contenido')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800">Imágenes para el Calendario</h1>
    </div>

    <div class="card" id="card1">
        <div class="card-header bg-light">
        <h1 class="h4 mb-0 text-gray-500">Subir un archivo de imagen</h1>
        </div>
        <div class="card-body login-card-body">
        <form action="{{ route('saveImagen') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="texto">Descripción de la imagen</label>
                    <input type="text" class="form-control form-control-user" name="descripcion" value="">
                </div>
                <div class="form-group">
                    <label for="file">Archivo a subir</label>
                    <input type="file" class="form-control" name="file" accept="image/png, image/gif, image/jpeg">
                </div>
                <button type="submit" class="btn" style="color:white;background-color:#1334eeb3;border-color:#1334eeb3 ">Guardar</button>
            </form>
        </div>
    </div>
    <br>
@endsection