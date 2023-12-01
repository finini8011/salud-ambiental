@extends('templateDA')

@section('contenido')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Botones Derechos</h1>
    </div>

    <div class="card">
        <div class="card-body login-card-body">

            <form action="{{ route('saveFile') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="texto">Texto #1</label>
                    <input type="text" class="form-control form-control-user" name="link-62" value="{{ $data[61]['datos'] }}">
                </div>
                <div class="form-group">
                    <label for="texto">Link #1</label>
                    <input type="text" class="form-control form-control-user" name="link-64" value="{{ $data[63]['datos'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #1</label>
                    <input type="file" class="form-control" name="archivo-60">
                </div>
                <div class="form-group">
                    <label for="texto">Texto #2</label>
                    <input type="text" class="form-control form-control-user" name="link-63" value="{{ $data[62]['datos'] }}">
                </div>
                <div class="form-group">
                    <label for="texto">Link #2</label>
                    <input type="text" class="form-control form-control-user" name="link-65" value="{{ $data[64]['datos'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #2</label>
                    <input type="file" class="form-control" name="archivo-61">
                </div>
                <button type="submit" class="btn btn-block" style="color:white;background-color:#1334eeb3;border-color:#1334eeb3 ">Guardar</button>
            </form>

        </div>
    </div>
@endsection